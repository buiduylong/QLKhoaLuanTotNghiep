<?php

namespace App\Imports;

use App\Models\ThanhVien;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithValidation
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ThanhVien([
            'ma_thanhvien'     => $row[0],
            'ten_thanhvien'    => $row[1], 
            'lop' => $row[2],
            'password' => Hash::make($row[3]),
            // 'ngaysinh' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[4]),
            'quyen' => $row[5],
            'khoa_thanhvien' => $row[6],
            'nganh_thanhvien' => $row[7],
        ]);
    }

    public function rules(): array
    {
        return [
            // '*.0' => Rule::required(),
            // '*.0' => Rule::unique(),
        ];
    }

    public function customValidationMessages()
    {
        return [
            // '0.required' => 'Không được để trống mã sinh viên',
            // '0.unique' => 'Mã sinh viên đã tồn tại',
        ];
    }
}
