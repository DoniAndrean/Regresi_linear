<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahasa', function (Blueprint $table) {
            $table->id('id_bahasa');
            $table->integer('id_kandidat')->nullable();
            $table->string('bahasa_lain', 100)->nullable();
            $table->string('membaca', 20)->nullable();
            $table->string('menulis', 20)->nullable();
            $table->string('berbicara', 20)->nullable();
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
        Schema::dropIfExists('bahasa');
    }
}
