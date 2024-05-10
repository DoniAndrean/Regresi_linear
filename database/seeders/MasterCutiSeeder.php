<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterCuti;

class MasterCutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MasterCuti::create([
            'id_cuti' => 1,
            'jenis_cuti' => 'Tahunan',
            'keterangan' => 'Jumlah 12',
        ]);

        MasterCuti::create([
            'id_cuti' => 2,
            'jenis_cuti' => 'Travelling Day',
            'keterangan' => null,
        ]);

        MasterCuti::create([
            'id_cuti' => 3,
            'jenis_cuti' => 'Cuti Melahirkan',
            'keterangan' => 'Khusus Perempuan',
        ]);
    }
}
