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
            $table->id('id_kandidat')->nullable();
            $table->string("posisi", 50)->nullable();
            $table->string("informasi_lowongan", 50)->nullable();
            $table->string("nama", 50)->nullable();
            $table->integer("umur")->nullable();
            $table->string("tempat_lahir", 50)->nullable();
            $table->string("tanggal_lahir", 50)->nullable();
            $table->string("status_perkawinan", 50)->nullable();
            $table->string("jenis_kelamin", 50)->nullable();
            $table->integer("berat_badan")->nullable();
            $table->integer("tinggi_badan")->nullable();
            $table->text("alamat")->nullable();
            $table->string("no_hp", 50)->nullable();
            $table->string("email", 50)->nullable();
            $table->string("bahasa_pertama", 50)->nullable();
            $table->boolean("telah_interview")->default(false);
            $table->string("expected_basic")->nullable();
            $table->string("expected_allowence")->nullable();
            $table->string("total_salary")->nullable();
            $table->string("your_wishes")->nullable();
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
