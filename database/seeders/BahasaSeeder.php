<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bahasa;

class BahasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bahasa::create([
            'id_bahasa' => 1,
            'id_kandidat' => 1,
            'bahasa_lain' => 'Inggris',
            'membaca' => 'baik',
            'menulis' => 'fasih',
            'berbicara' => 'cukup',
        ]);

        Bahasa::create([
            'id_bahasa' => 2,
            'id_kandidat' => 1,
            'bahasa_lain' => 'Arab',
            'membaca' => 'baik',
            'menulis' => 'baik',
            'berbicara' => 'baik',
        ]);

        Bahasa::create([
            'id_bahasa' => 3,
            'id_kandidat' => 1,
            'bahasa_lain' => 'Inggris',
            'membaca' => 'cukup',
            'menulis' => 'cukup',
            'berbicara' => 'cukup',
        ]);
    }
}
