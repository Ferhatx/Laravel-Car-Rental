<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('hakkimizda')->nullable();
            $table->text('vizyonumuz')->nullable();
            $table->text('misyonumuz')->nullable();
            $table->text('kira_sozlesmesi')->nullable();
            $table->text('kiralama_kosullari')->nullable();
            $table->text('sikca_sorulan_sorular')->nullable();
            $table->text('iletisim')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
