<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaDeTaiRequest extends FormRequest
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
            'ten_detai'=>'required|unique:detai,ten_detai,'.$this->id.',id_detai',
        ];
    }

    public function messages()
    {
        return [
            'ten_detai.required'=>'Tên đề tài không được để trống',
            'ten_detai.unique'=>'Đề tài đã tồn tại',
        ];
    }
}
