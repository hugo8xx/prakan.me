<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('car_id');
            $table->string('policy_no')->nullable();
            $table->dateTime('date_start')->nullable();
            $table->dateTime('date_stop')->nullable();
            $table->integer('covered')->nullable();
            $table->integer('deduct')->nullable();
            $table->integer('price')->nullable();
            
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
        Schema::dropIfExists('packages');
    }
}
