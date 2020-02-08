<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class Save extends FormRequest
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
            'image' => [ 'require', 'image', 'mimes:jpg,jpeg,png' ]
        ];

        foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
            $rules['title_' . $code ] = [ 'required' , 'string' ];
            $rules['text_'  . $code ] = [ 'required' , 'string' ];
        }

        return $rules;
    }
}
