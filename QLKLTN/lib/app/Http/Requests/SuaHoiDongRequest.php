<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaHoiDongRequest extends FormRequest
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
            'ten_hoidong'=>'unique:thietlap,ten_hoidong,'.$this->id.'id_thietlap',
        ];
    }

    public function messages()
    {
        return [
            'ten_hoidong.unique'=>'Hội đồng đã tồn tại',
        ];
    }
}
