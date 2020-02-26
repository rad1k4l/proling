<?php

namespace App\Models\Translations;

use App\Models\OptimizeModel;

final class TranslateService extends OptimizeModel
{
    protected $table = 'translate_service_translations';
    public $timestamps = false;
}
