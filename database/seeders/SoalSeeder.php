<?php

namespace Database\Seeders;

use App\Models\MasterSoal;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterSoal::create([
            "soal" => "Perkenalan Diri"
        ]);
        MasterSoal::create([
            "soal" => "Minat Bakat"
        ]);
        MasterSoal::create([
            "soal" => "Aktivitas Diluar Pekerjaan"
        ]);
    }
}
