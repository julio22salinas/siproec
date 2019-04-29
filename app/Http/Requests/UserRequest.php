<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            //
            'doc'=>'min:7|max:10|required|unique:users',
            'name'=>'min:3|max:30|required',
            'email'=>'min:4|max:200|required|unique:users',
            'celular'=>'min:10|max:10|required|unique:users',
            'password'=>'min:6|max:16|required'

        ];
    }
}
