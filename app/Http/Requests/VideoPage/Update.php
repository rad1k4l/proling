<?php

namespace App\Http\Requests\VideoPage;

use Illuminate\Foundation\Http\FormRequest;

class Update extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'youtube_embed' => [ 'required', 'string' ]
        ];
        foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
            $rules['title.' . $code] = [ 'required', 'string' ];
            $rules['short_title.' . $code] = ['required', 'string' ];
            $rules['content.' . $code] = ['required', 'string' ];
        }

        return $rules;
    }
}
