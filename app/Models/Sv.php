<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sv extends Model
{
    use HasFactory;

    protected $table = 'sinhvien';
    protected $keytype = 'string';
    protected $fillable = [
        'lop_id',
        'hovaten',
        'ngaysinh',
        'dienthoai',
        'email',
        'ghichu',
    ];
    public function lop()
	{

		return $this->belongsTo(lop::class);
	}
}