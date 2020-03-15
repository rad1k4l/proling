<?php

namespace App\Models\Translations;

use App\Models\OptimizeModel;
use Illuminate\Database\Eloquent\Model;

class VideoPage extends OptimizeModel
{
    public $timestamps = false;
    protected $table = 'video_post_translations';
}
