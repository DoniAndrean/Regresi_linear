<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cuti;

class CutiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cuti::create([
            'id_cuti' => 1,
            'jenis_cuti' => 1,
            'id_sap' => 10000001,
            'jumlah_cuti' => 12,
            'start_cuti' => '2024-01-01',
            'end_cuti' => '2024-01-12',
            'alasan_cuti' => 'Liburan Lagi',
            'status_cuti' => 'selesai',
        ]);

        Cuti::create([
            'id_cuti' => 2,
            'jenis_cuti' => 3,
            'id_sap' => 100000012,
            'jumlah_cuti' => 5,
            'start_cuti' => '2024-02-06',
            'end_cuti' => '2024-02-15',
            'alasan_cuti' => 'Dinas',
            'status_cuti' => 'selesai',
        ]);

        Cuti::create([
            'id_cuti' => 3,
            'jenis_cuti' => 1,
            'id_sap' => 100000012,
            'jumlah_cuti' => 3,
            'start_cuti' => '2024-02-06',
            'end_cuti' => '2024-02-07',
            'alasan_cuti' => 'Liburan',
            'status_cuti' => 'Pengajuan',
        ]);
    }
}
