<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->id('id_kandidat');
            $table->string("posisi", 50);
            $table->string("informasi_lowongan", 50);
            $table->string("nama", 50);
            $table->integer("umur");
            $table->string("tempat_lahir", 50);
            $table->string("tanggal_lahir", 50);
            $table->string("status_perkawinan", 50);
            $table->string("jenis_kelamin", 50);
            $table->integer("berat_badan");
            $table->integer("tinggi_badan");
            $table->text("alamat");
            $table->string("no_hp", 50);
            $table->string("email", 50);
            $table->string("bahasa_pertama", 50);
            $table->boolean("telah_interview")->default(false);
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
        Schema::dropIfExists('kandidat');
    }
}
