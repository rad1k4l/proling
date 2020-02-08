<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Slide extends OptimizeModel
{
    use Translatable;
    public $translationModel = "App\Models\Translations\Slide";


    public $timestamps = false;

    protected $table = 'slides';
    public $translatedAttributes = [
        'title',
        'text',
        'button',
    ];


}
