<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuaTVRequest extends FormRequest
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
            'ma_thanhvien'=>'required|unique:thanhvien,ma_thanhvien,'.$this->id.',id',
            'ten_thanhvien'=>'required',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'ma_thanhvien.required'=>'Mã cá nhân không được để trống',
            'ma_thanhvien.unique'=>'Mã cá nhân đã tồn tại',
            'ten_thanhvien.required'=>'Không được để trống tên thành viên',
            'password.required'=>'Không được để trống mật khẩu',
        ];
    }
}
