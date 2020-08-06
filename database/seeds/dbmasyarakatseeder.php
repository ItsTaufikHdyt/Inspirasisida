<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
Use App\dbmasyarakat;

class dbmasyarakatseeder extends Seeder
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
    		DB::table('dbmasyarakat')->insert([
    			'judul' => $faker->jobTitle,
    			'nama' => $faker->name,
    			'lokasi' => $faker->address,
                'kriteria' => $faker->name,
                'kategori' => $faker->numberBetween(0,1)
    		]);
 
    	}
    }
}
