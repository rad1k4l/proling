<?php

namespace App\Http\Requests\VideoPage;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
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
        }
        return $rules;
    }
}
