<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Scope;

class Category extends OptimizeModel implements TranslatableContract
{
    use Translatable;

    public $translationModel = "App\Models\Translations\Category";

    public $timestamps = false;

    public $translatedAttributes = ['name'];

    protected static $columns = [ ];

    protected $table = "categories";

    public static function root(){
        return self::where("parent" , "=" , 0)->orderBy("sort" , "asc")->get();
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
