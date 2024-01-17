<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('pegawai')->insert([
        // 	'nama_pegawai' => 'Joni',
        // 	'alamat' => 'Jl. Panglateh'
        // ]);

        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('pegawai')->insert([
    			'nama_pegawai' => $faker->name,
    			'alamat' => $faker->address
    		]);
        }
 
    }
}
