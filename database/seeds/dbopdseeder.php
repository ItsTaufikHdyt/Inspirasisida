<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\dbopd;

class dbopdseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('dbopd')->insert([
                'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'tahun' => $faker->numberBetween(2015,2020),
    			'opd' => $faker->company,
    			'lokasi' => $faker->city,
                'abstraksi' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'kategori' => $faker->numberBetween(0,1)
    		]);
 
    	}
    }
}
