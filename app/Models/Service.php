<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;

class Service extends OptimizeModel
{
    use Translatable;

    public $translationModel = '\App\Models\Translations\Service';
    public $translatedAttributes = [ 'header', 'title', 'text' ];
    public $timestamps = false;
    protected $table = "services";


    public static function destroy($ids)
    {
        Translations\Service::where('service_id', $ids)->delete();
        return parent::destroy($ids);
    }
}
