<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompvariantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compvariants',function($table)
                    {
                        $table->increments('id');
                        $table->integer('id_component')->unsigned();
                        $table->foreign('id_component')->references('id')->on('components')
                                ->onUpdate('cascade')
                                ->onDelete('cascade');
                        $table->integer('id_variant')->unsigned();
                        $table->foreign('id_variant')->references('id')->on('variants')
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
		Schema::drop('compvariants');
	}

}
