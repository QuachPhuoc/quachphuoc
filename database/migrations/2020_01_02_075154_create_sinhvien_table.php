<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhVienTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sinhvien', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('lop_id');
			$table->string('hovaten', 50);
			$table->date('ngaysinh')->nullable();
			$table->string('dienthoai', 20)->nullable();
			$table->string('email', 100)->nullable();
			$table->text('ghichu')->nullable();
			$table->timestamps();
			$table->foreign('lop_id')->references('id')->on('lop');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('sinhvien');
	}
}