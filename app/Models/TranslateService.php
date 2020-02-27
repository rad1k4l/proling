<?php

namespace App\Models;


use Astrotomic\Translatable\Translatable;

class TranslateService extends OptimizeModel
{
    use Translatable;
    protected $table = 'translate_services';
    public $timestamps = false;
    public $translatedAttributes = [ 'name' ];
    public $translationModel = '\App\Models\Translations\TranslateService';

    public function priceID() {
        return $this->hasOne(TranslateServicePrice::class,'translate_service_id','id');
    }

    public function delete()
    {
        Translations\TranslateService::where('translate_service_id', $this->id)->delete();
        return parent::delete();
    }


}
