<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondprobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('condprobs',function($table)
                    {
                        $table->increments('id');
                        $table->integer('comp_one_id')->unsigned();
                        $table->foreign('comp_one_id')->references('id')->on('components')
                                ->onUpdate('cascade')
                                ->onDelete('cascade');
                          $table->integer('comp_two_id')->unsigned();
                        $table->foreign('comp_two_id')->references('id')->on('components')
                                ->onUpdate('cascade')
                                ->onDelete('cascade');
                        $table->float('P');
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
		Schema::drop('condprobs');
	}

}
