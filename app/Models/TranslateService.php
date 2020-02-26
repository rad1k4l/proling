<?php

namespace App\Models;


class TranslateService extends OptimizeModel
{
    protected $table = 'translate_services';
    public $timestamps = false;


    public function priceID(){
        return $this->hasOne(TranslateServicePrice::class,'translate_service_id','id');
    }


}
