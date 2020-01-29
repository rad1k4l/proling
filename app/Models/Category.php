<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends OptimizeModel implements TranslatableContract
{
    use Translatable;

    public $translationModel = "App\Models\Translations\Category";

    public $timestamps = false;

    public $translatedAttributes = ['name'];

    protected $table = "categories";

    public static function root(){
        return self::where("parent" , "=" , 0)
            ->orderBy("sort" , "asc")
            ->get();
    }

    public function childs(){

        $childs = $this->where("parent" , "=", $this->id)->get();

        if($childs->isEmpty())
        {
            return false;
        }
        else return $childs;
    }

}
