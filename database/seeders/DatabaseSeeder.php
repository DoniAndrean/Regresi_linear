<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // CutiSeeder::class,
            BahasaSeeder::class,
            KandidatSeeder::class,
            KaryawanSeeder::class,
            KeluargaSeeder::class,
            KontakDaruratSeeder::class,
            MasterCutiSeeder::class,
            PegawaiSeeder::class,
            PendidikanSeeder::class,
            PengalamanSeeder::class,
            SoalSeeder::class
        ]);

        User::create([
            "nama" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("1"),
            "role" => "admin"
        ]);
        User::create([
            "karyawan_id" => 10000001,
            "nama" => "Ferdi Irawan",
            "email" => "ferdi@gmail.com",
            "password" => bcrypt("1"),
            "role" => "karyawan"
        ]);
    }
}
