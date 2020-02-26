<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SelectScope implements Scope
{

    private $columns = [];


    private $cacheKey = 'optimized.model.columns.<db>.<table>';

    public function __construct($cols = [])
    {
        $this->columns = $cols;
    }

    /**
     * @inheritDoc
     */
    public function apply(Builder $builder, Model $model) {
        $table = $model->getTable();
        $db = $model->getConnection()->getDatabaseName();
        $builder->select(
            $this->columns($table, $db)
        );
    }

    public function columns(string $table, string $db) : array {
        if (!empty($this->columns)) return $this->columns;
        return $this->columnsFromCache($table, $db);
    }



    public function columnsFromCache(string $table, string $db) : array {

        return Cache::get($this->getCacheKey($table, $db), function () use ($table, $db) {
            $columns = $this->columnsAutoDetect($table, $db);

            $this->columnsSaveToCache($columns, $this->getCacheKey($table, $db));

            return $columns;
        });
    }

    public function columnsAutoDetect(string $table, string $db): array {
        $res = [];
        $columns = $this->query("SELECT `COLUMN_NAME` AS name
                FROM `INFORMATION_SCHEMA`.`COLUMNS`
                WHERE `TABLE_SCHEMA`=:db
                AND `TABLE_NAME`=:table", [ 'db' => $db, 'table' => $table ]);
        foreach ($columns as $column){
            $res[] = $column->name;
        }

        return $res;
    }

    public function columnsSaveToCache(array $columns, $key) {
        return Cache::forever($key, $columns);
    }

    public static function columnsFlushCache() {
        return Cache::flush();
    }

    public  function getCacheKey(string $table, string $db) {
        return str_replace('<table>', $table, str_replace('<db>', $db,$this->cacheKey));
    }

    public function query($sql, $flag_props = []){
        return DB::select(DB::raw($sql), $flag_props);
    }
}
