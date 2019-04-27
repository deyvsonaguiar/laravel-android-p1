<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateBillPaysTable.
 */
class CreateBillPaysTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bill_pays', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('date_due');
            $table->float('value');
            $table->boolean('done');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bill_pays');
	}
}
