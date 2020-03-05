<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;

class Language extends OptimizeModel
{
    use Translatable;

    public $translationModel = "App\Models\Translations\Language";

    public $timestamps = false;

    public $translatedAttributes = ['name'];

    protected $table = "languages";



    public function childs() {
        $childs = $this->where("parent" , "=", $this->id)->get();

        if($childs->isEmpty())
        {
            return false;
        }
        else return $childs;
    }


    public static function destroy($ids)
    {
        Translations\Language::where('language_id', $ids)->delete();
        return parent::destroy($ids);
    }
}
