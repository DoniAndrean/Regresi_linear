<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pendidikan;
use App\Models\PendidikanInformal;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pendidikan::create([
            'id_pendidikan' => 1,
            'id_kandidat' => 1,
            'nama_sekolah' => 'SD 1',
            'jenjang' => 'SD',
            'tahun_from' => 2008,
            'tahun_to' => 2024,
            'gpa' => 100,
        ]);

        Pendidikan::create([
            'id_pendidikan' => 2,
            'id_kandidat' => 1,
            'nama_sekolah' => 'SMP N 1',
            'jenjang' => 'SMP',
            'tahun_from' => 2010,
            'tahun_to' => 2013,
            'gpa' => 90,
        ]);

        PendidikanInformal::create([
            'id_pendidikan_informal' => 1,
            'id_kandidat' => 1,
            'institusi' => 'Flashsoft',
            'major' => 'PHP',
            'tahun_from' => 2010,
            'tahun_to' => 2024,
            'gpa' => 100,
        ]);

        PendidikanInformal::create([
            'id_pendidikan_informal' => 2,
            'id_kandidat' => 1,
            'institusi' => 'Fs',
            'major' => 'Laravel',
            'tahun_from' => 2023,
            'tahun_to' => 2024,
            'gpa' => 90,
        ]);
    }
}
