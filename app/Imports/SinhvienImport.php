<?php

namespace App\Imports;

use App\models\Sv;
use App\models\Lop;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMapping;

class SinhvienImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Sv([
            'lop_id' => $row[0],
            'hovaten' => $row[1],
            'ngaysinh' => $row[2],
            'dienthoai' => $row[3],
            'email' => $row[4],
            'ghichu' => $row[5],
        ]);
    }
    // public function map($sinhvien): array {
    //     return [
    //         $sinhvien->id,
    //         $sinhvien->lop_id,
    //         $sinhvien->hoten,
    //         $sinhvien->ngaysinh,
    //         $sinhvien->dienthoai,
    //         $sinhvien->email,
    //     ];
    // }
}
