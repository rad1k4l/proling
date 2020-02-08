<?php

namespace App\Models\Translations;

use App\Models\OptimizeModel;
use Illuminate\Database\Eloquent\Model;

class Slide extends OptimizeModel
{
    protected $table = 'slide_translations';

    public $timestamps = false;
}
