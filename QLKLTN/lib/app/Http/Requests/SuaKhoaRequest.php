<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaKhoaRequest extends FormRequest
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
            'ten_khoa'=>'required|unique:khoa,ten_khoa,'.$this->id.',id_khoa',
        ];
    }

    public function messages()
    {
        return [
            'ten_khoa.required'=>'Khoa không được để trống',
            'ten_khoa.unique'=>'Khoa đã tồn tại',
        ];
    }
}
