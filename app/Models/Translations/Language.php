<?php

namespace App\Models\Translations;

use App\Models\OptimizeModel;
use Illuminate\Database\Eloquent\Model;

class Language extends OptimizeModel
{
    public $timestamps = false;
    protected $table = "language_translations";

}
