<?php


namespace App\Models;


class Routes extends OptimizeModel
{

    private static $data;
    protected $table = 'panel_routes';

    public static function menu() {
        if (empty(self::$data)) {
            return self::_menu();
        }
        else
            return self::$data;
    }


    public function childs() {
        $childs = $this->where("parent" , "=", $this->id)->get();

        if($childs->isEmpty())
        {
            return false;
        }
        else return $childs;
    }


    private static function _menu(){
        return self::orderBy('sort', 'asc')->get();
    }

}
