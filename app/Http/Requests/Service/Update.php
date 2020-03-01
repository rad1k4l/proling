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
        foreach (config("app.locales") as $code => $name) {
            $rules["submitted.title_" . $name . ".data" ] = [ "required", "string" ];
            $rules["submitted.text_" . $name . ".data" ] = [ "required", "string" ];
        }
        $rules['id'] = ['required', 'int'];
        return $rules;
    }
}
