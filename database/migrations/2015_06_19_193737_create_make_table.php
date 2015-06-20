<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makes', function(Blueprint $table)
		{
                    $table->increments('id');
                    $table->string('name');
                    
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
         Schema::table('makes', function(Blueprint $table)
		{
			Schema::drop('makes');
		});
    }
}
