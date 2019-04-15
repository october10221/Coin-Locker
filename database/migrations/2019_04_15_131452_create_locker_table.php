<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLockerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locker', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->boolean('name_locker');
			$table->boolean('size')->comment('0=S , 1=M, 2=L');
			$table->boolean('status_locker')->default(0)->comment('0=ว่าง 1=ใช้งานอยู่');
			$table->dateTime('date_start')->nullable();
			$table->dateTime('date_end')->nullable();
			$table->string('renter');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locker');
	}

}
