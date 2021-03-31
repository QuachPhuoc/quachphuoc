<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Khoa extends Model
{
    protected $table = 'khoa';
	protected $keyType = 'string';
	
	public function Lop()
	{
		return $this->hasMany('App\Lop');
	}
}
?>