<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('user_id',150)->nullable();
            $table->string('car_id',150)->nullable();
            $table->string('alis_ofis',150)->nullable();
            $table->string('rezdate',150)->nullable();
            $table->string('reztime');
            $table->string('donus_ofis',100)->nullable();
            $table->string('returndate',100)->nullable();
            $table->string('returntime',100)->nullable();
            $table->string('days',100)->nullable();
            $table->string('price',100)->nullable();
            $table->string('total',100)->nullable();
            $table->string('ip',100)->nullable();
            $table->string('note',100)->nullable();
            $table->string('status' , 5)->nullable()->default('False');
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
        Schema::dropIfExists('reservations');
    }
}
