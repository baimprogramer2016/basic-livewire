<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class products_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 500; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('products')->insert([
                'nama' => $faker->name,
                'harga' => $faker->numberBetween(2500, 1000000),
            ]);
        }
    }
}
