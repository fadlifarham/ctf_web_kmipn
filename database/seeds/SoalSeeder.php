<?php

use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 5; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('soal')->insert([
                'pertanyaan'  => $faker->randomLetter,
                'pilihan'   => 1,
                'benar'     => $faker->randomLetter,
            ]);
        }
    }
}
