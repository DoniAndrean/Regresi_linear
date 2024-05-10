<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kandidat;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kandidat::create([
            'id_kandidat' => 1,
            'posisi' => 'Posisi',
            'informasi_lowongan' => 'Instagram',
            'nama' => 'Tesa',
            'umur' => 25,
            'tempat_lahir' => 'Pekanbaru',
            'tanggal_lahir' => '2024-02-29',
            'status_perkawinan' => 'Sudah Kawin',
            'jenis_kelamin' => 'Laki-Laki',
            'berat_badan' => 50,
            'tinggi_badan' => 160,
            'alamat' => 'Jl. Garuda Sakti',
            'no_hp' => '081261',
            'email' => 'tesa@gmail.com',
            'bahasa_pertama' => 'Indonesia',
        ]);
    }
}
