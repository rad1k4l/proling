<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class LanguagePost extends Model
{
    use Translatable;

    public $translationModel = "App\Models\Translations\LanguagePost";

    public $timestamps = false;

    public $translatedAttributes = ['title', 'content'];

    protected $table = "language_posts";

    public function createIfNotExistMain(): LanguagePost {

        $item = static::first();
        if (!$item)
            return $this->createEmpty();
        return $item;
    }


    private function createEmpty(): LanguagePost {

        foreach (config('laravellocalization.supportedLocales') as $code => $locale)
        {
            $this->translateOrNew($code)->title = '';
            $this->translateOrNew($code)->content = '';
        }
        $this->save();
        return $this;
    }

    public static function destroy($ids)
    {
        Translations\LanguagePost::where('language_post_id', $ids)->delete();
        return parent::destroy($ids);
    }

}
