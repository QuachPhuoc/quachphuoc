<?php

namespace App\Exports;

use App\Models\Sv;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class SvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {


        return Sv::all();
    }
    public function map($sinhvien): array {
        return [
            $sinhvien->id,
            $sinhvien->hovaten,
            $sinhvien->ngaysinh,
            $sinhvien->dienthoai,
            $sinhvien->email,
          
        ];
    }


}
