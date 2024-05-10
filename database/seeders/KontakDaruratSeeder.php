<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KontakDarurat;

class KontakDaruratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KontakDarurat::create([
            'id_kontak_darurat' => 1,
            'id_kandidat' => 1,
            'nama_kontak_darurat' => 'Ade',
            'relation' => 'Ayah',
            'age' => 23,
            'address' => 'Pekanbaru',
        ]);
    }
}
