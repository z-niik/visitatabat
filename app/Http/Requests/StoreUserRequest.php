<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Nationalcode;
class StoreUserRequest extends FormRequest
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
            // 'mellicode' => ['required', new Nationalcode],
            // 'phone' => 'bail|required|regex:/(09)[0-9]{9}/|digits:11',
            // 'idnumber' => 'required|numeric',
            // 'gozarname_photo' => 'required',
            // 'vaksan_photo' => 'required',
            // 'age' => 'required',
            // 'team_name[]' => 'required',
            // 'team_mellicode[]' => ['required', new Nationalcode] ,
            // 'team_idnumber[]' => 'required|numeric',
            // 'team_gozarname[]' => 'required',
            // 'team_vaksan[]' => 'required'
        ];
    }
}
