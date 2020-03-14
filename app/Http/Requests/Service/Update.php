<?php

namespace App\Http\Requests\Service;

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

        $rules = [];

        foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
            $rules['title.' . $code] = [ 'required', 'string' ];
            $rules['body.' . $code] = ['required', 'string' ];
        }

        return  $rules;
    }
}
