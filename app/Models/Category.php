<?php

namespace App\Models\Panel;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Category extends Model implements TranslatableContract
{
    use Translatable;

    public $translationModel = "App\Models\Translations\Panel\Category";

    public $timestamps = false;

    public $translatedAttributes = ['name'];

    protected $table = "categories";
//    public $localeKey = '';


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
