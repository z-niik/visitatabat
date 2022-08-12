<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Nationalcode;

class RegisterRequest extends FormRequest
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
        return [
            'melli_code' => ['required', new Nationalcode],
            'phone' => 'bail|required|regex:/(09)[0-9]{9}/|digits:11',
            'birthday' => 'bail|required',
            // 'state' => 'bail|required',
            // 'period' => 'bail|required',
            // 'price' => 'bail|required'
        ];
    }
}
