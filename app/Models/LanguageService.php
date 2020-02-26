<?php

namespace App\Models;


class LanguageService extends OptimizeModel
{
    protected $table = 'language_services';
    public $timestamps = false;

    public function priceID() {
        return $this->hasOne(TranslateServicePrice::class,'service_language_id','id');
    }


}
