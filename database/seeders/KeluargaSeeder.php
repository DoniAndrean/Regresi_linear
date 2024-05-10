<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Keluarga;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keluarga::create([
            'id_keluarga' => 1,
            'id_kandidat' => 1,
            'nama_keluarga' => 'aaa',
            'relation' => 'vvv',
            'age' => 12,
            'address' => 'aaab',
        ]);

        Keluarga::create([
            'id_keluarga' => 2,
            'id_kandidat' => 1,
            'nama_keluarga' => 'Anto',
            'relation' => 'Ayah',
            'age' => 25,
            'address' => 'Pekanbaru',
        ]);
    }
}
