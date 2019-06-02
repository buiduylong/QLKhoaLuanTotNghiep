<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaNganhRequest extends FormRequest
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
            'ten_nganh'=>'required|unique:nganh,ten_nganh,'.$this->id.',id_nganh',
        ];
    }

    public function messages()
    {
        return [
            'ten_nganh.required'=>'Ngành không được để trống',
            'ten_nganh.unique'=>'Ngành đã tồn tại',
        ];
    }
}
