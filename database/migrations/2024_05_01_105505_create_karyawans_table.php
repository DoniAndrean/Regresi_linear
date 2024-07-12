<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->integer('id_sap')->primary();
            $table->string('id_nik', 11);
            $table->string('nama', 100);
            $table->integer('id_badge');
            $table->date('join_date')->nullable();
            $table->string('status_karyawan', 100)->nullable();
            $table->string('foto', 100)->nullable();
            $table->char('no_ktp', 16)->nullable();
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama', 100)->nullable();
            $table->string('jenis_kelamin', 100)->nullable();
            $table->string('suku', 100)->nullable();
            $table->string('status_kawin', 100)->nullable();
            $table->string('jmlh_tanggung', 100)->nullable();
            $table->string('kelas_bpjs', 50)->nullable();
            $table->string('pendidikan', 100)->nullable();
            $table->string('jurusan_pendidikan', 100)->nullable();
            $table->string('nama_sekolahasal', 100)->nullable();
            $table->string('tahun_lulus', 4)->nullable();
            $table->string('level_karyawan', 100)->nullable();
            $table->string('departemen', 100)->nullable();
            $table->string('posisi', 100)->nullable();
            $table->string('email_pribdi', 100)->nullable();
            $table->string('email_kantor', 100)->nullable();
            $table->string('no_hp', 13)->nullable();
            $table->string('no_wa', 13)->nullable();
            $table->string('riwayat_pelatihan', 500)->nullable();
            $table->integer("kuota_cuti")->default(12);
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
        Schema::dropIfExists('karyawan');
    }
}
