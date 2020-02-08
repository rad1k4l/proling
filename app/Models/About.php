<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class About extends OptimizeModel
{
    use Translatable;
    const CARD = 1;
    const MAIN = 0;

    protected $table = 'about';

    public $translationModel = "App\Models\Translations\About";

    public $timestamps = false;

    public $translatedAttributes = [
        'title',
        'body'
    ];

    public function createIfNotExistMain(): About {
        $about = static::where('type', static::MAIN)->first();
        if (!$about)
            return $this->createEmpty();
        return $about;
    }


    private function createEmpty(): About {
        $this->type = static::MAIN;
        $this->sort = 0;
        foreach (config('laravellocalization.supportedLocales') as $code => $locale)
        {
            $this->translateOrNew($code)->title = '';
            $this->translateOrNew($code)->body = '';
        }
        $this->save();
        return $this;
    }


}
