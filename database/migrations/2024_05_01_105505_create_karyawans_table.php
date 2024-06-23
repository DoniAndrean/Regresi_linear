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
            $table->date('join_date');
            $table->string('status_karyawan', 100);
            $table->string('foto', 100);
            $table->char('no_ktp', 16);
            $table->string('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->string('agama', 100);
            $table->string('jenis_kelamin', 100);
            $table->string('suku', 100);
            $table->string('status_kawin', 100);
            $table->string('jmlh_tanggung', 100);
            $table->string('kelas_bpjs', 50);
            $table->string('pendidikan', 100);
            $table->string('jurusan_pendidikan', 100);
            $table->string('nama_sekolahasal', 100);
            $table->string('tahun_lulus', 4);
            $table->string('level_karyawan', 100);
            $table->string('departemen', 100);
            $table->string('posisi', 100);
            $table->string('email_pribdi', 100);
            $table->string('email_kantor', 100);
            $table->string('no_hp', 13);
            $table->string('no_wa', 13);
            $table->string('riwayat_pelatihan', 500);
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
