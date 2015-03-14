<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('components',function($table)
                    {
                        $table->increments('id');
                        $table->string('name',150)->unique();
                        $table->integer('type_id')->unsigned();
                        $table->foreign('type_id')->references('id')->on('types')
                                ->onUpdate('cascade')
                                ->onDelete('cascade');
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
		Schema::drop('components');
	}

}
