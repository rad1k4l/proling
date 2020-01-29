<?php

namespace App\Models\Translations;

use App\Models\OptimizeModel;
use Illuminate\Database\Eloquent\Model;

class Category extends OptimizeModel
{
    public $timestamps = false;

    protected $table = "category_translations";
}
