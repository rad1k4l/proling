<?php

namespace App\Models;

class TranslateServicePrice extends OptimizeModel
{
    protected $table = 'translate_service_prices';
    public $timestamps = false;


    public function translate_service(){
        return $this->hasOne(TranslateService::class, 'id', 'translate_service_id');
    }


    public function service_language(){
        return $this->hasOne(ServiceLanguage::class, 'id', 'service_language_id');
    }
}
