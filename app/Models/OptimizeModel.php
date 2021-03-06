<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class OptimizeModel extends Model
{
    protected static $columns = [];

    protected static function boot()
    {
        parent::boot();
        self::addGlobalScope(
            new SelectScope(static::columns())
        );
    }

    /**
     * @return array
     */
    private static function columns(): array
    {
        return static::$columns;
    }
}
