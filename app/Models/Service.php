<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Service extends OptimizeModel
{
    use Translatable;

    public $translationModel = '\App\Models\translations\Service';
    public $translatedAttributes = [ 'header', 'title', 'text' ];
    public $timestamps = false;
    protected $table = "services";
}
