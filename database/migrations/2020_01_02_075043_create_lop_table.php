<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLopTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lop', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('khoa_id');
			$table->string('tenlop', 50);
			$table->timestamps();
			$table->foreign('khoa_id')->references('id')->on('khoa');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('lop');
	}
}