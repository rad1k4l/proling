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

    private static function _menu(){
        return self::all()->toArray();
    }

}
