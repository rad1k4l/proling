<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class VideoPage extends OptimizeModel
{

    use Translatable;

    public $translationModel = '\App\Models\Translations\VideoPage';
    public $translatedAttributes = [ 'short_title', 'title', 'content' ];
    public $timestamps = false;
    protected $table = "video_post";
    public $translationForeignKey = 'video_post_id';


    public static function destroy($ids)
    {
        Translations\VideoPage::where('video_post_id', $ids)->delete();
        return parent::destroy($ids);
    }

}
