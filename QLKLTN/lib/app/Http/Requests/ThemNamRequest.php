<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemNamRequest extends FormRequest
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
            'nam'=>'required|unique:nam,nam',
        ];
    }

    public function messages()
    {
        return [
        'nam.required'=>'Năm không được để trống',
        'nam.unique'=>'Năm đã tồn tại',
        ];   
    }
}
