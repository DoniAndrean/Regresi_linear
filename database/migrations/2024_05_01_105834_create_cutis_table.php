<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->id('id_cuti');
            $table->integer('jenis_cuti');
            $table->integer('id_sap');
            $table->integer('jumlah_cuti');
            $table->date('start_cuti');
            $table->date('end_cuti');
            $table->text('alasan_cuti')->nullable();
            $table->string('status_cuti', 20)->nullable();
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
        Schema::dropIfExists('cuti');
    }
}
