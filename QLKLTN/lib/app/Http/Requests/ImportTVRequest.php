<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImportTVRequest extends FormRequest
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
            'ma_thanhvien'=>'required|unique:thanhvien,ma_thanhvien',
        ];
    }

    public function messages()
    {
        return [
            'ma_thanhvien.required'=>'Mã cá nhân không được để trống',
            'ma_thanhvien.unique'=>'Mã cá nhân đã tồn tại',
        ];
    }
}
