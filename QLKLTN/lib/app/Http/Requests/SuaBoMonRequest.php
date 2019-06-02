<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaBoMonRequest extends FormRequest
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
            'ten_bomon'=>'required|unique:bomon,ten_bomon,'.$this->id.',id_bomon',
        ];
    }

    public function messages()
    {
        return [
            'ten_bomon.required'=>'Bộ môn không được để trống',
            'ten_bomon.unique'=>'Bộ môn đã tồn tại',
        ];
    }
}
