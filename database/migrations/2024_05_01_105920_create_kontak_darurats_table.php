<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontakDaruratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontak_darurat', function (Blueprint $table) {
            $table->id('id_kontak_darurat');
            $table->integer('id_kandidat');
            $table->string('nama_kontak_darurat', 100);
            $table->string('relation', 20);
            $table->integer('age');
            $table->string('address', 100);
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
        Schema::dropIfExists('kontak_darurat');
    }
}
