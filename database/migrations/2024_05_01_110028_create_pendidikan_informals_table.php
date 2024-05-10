<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanInformalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_informal', function (Blueprint $table) {
            $table->id('id_pendidikan_informal');
            $table->integer('id_kandidat');
            $table->string('institusi', 100);
            $table->string('major', 100);
            $table->integer('tahun_from');
            $table->integer('tahun_to');
            $table->double('gpa');
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
        Schema::dropIfExists('pendidikan_informal');
    }
}
