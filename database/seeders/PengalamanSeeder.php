<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengalaman;

class PengalamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengalaman::create([
            'id_pengalaman' => 1,
            'id_kandidat' => 1,
            'company_name' => 'Hotel',
            'position' => 'CEO',
            'periode' => '2021-2024',
            'salary' => '10000000',
            'main_duties' => 'Ngopi',
            'reason_for_leaving' => 'Gabut',
        ]);
    }
}
