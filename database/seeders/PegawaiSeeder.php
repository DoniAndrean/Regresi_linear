<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawaiData = [
            [1, 'Asman Santoso', 'Ds. Ciwastra No. 763, Cilegon 64726, Kalteng'],
            [2, 'Dimaz Prayoga', 'Dk. Supono No. 942, Pontianak 44878, Kaltim'],
            [3, 'Ulva Pratiwi S.Farm', 'Jr. Sam Ratulangi No. 766, Jambi 23400, Kalbar'],
            [4, 'Oni Wulan Suryatmi', 'Ki. Kalimalang No. 830, Administrasi Jakarta Utara 43320, NTB'],
            [5, 'Wasis Aswani Januar S.Pd', 'Psr. Banda No. 481, Padang 77018, Bali'],
            [6, 'Nabila Jane Zulaika S.Farm', 'Jr. Hang No. 341, Surabaya 64743, Bali'],
            [7, 'Rahman Lazuardi', 'Kpg. Dipenogoro No. 941, Solok 69081, Papua'],
            [8, 'Amelia Aryani', 'Ds. Gatot Subroto No. 294, Batu 13469, Kaltim'],
            [9, 'Yuni Aurora Purnawati S.Kom', 'Jln. Jaksa No. 320, Mojokerto 92685, Kalsel'],
            [10, 'Pranata Respati Wibowo S.Sos', 'Ds. Cokroaminoto No. 560, Padangsidempuan 55507, Gorontalo'],
        ];

        foreach ($pegawaiData as $data) {
            Pegawai::create([
                'id_pegawai' => $data[0],
                'nama_pegawai' => $data[1],
                'alamat' => $data[2],
            ]);
        }
    }
}
