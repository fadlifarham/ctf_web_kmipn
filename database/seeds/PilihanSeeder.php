<?php

use Illuminate\Database\Seeder;

class PilihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 5;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('pilihan')->insert([
                'pilihan1'      => $faker->randomElement,
                'pilihan2'      => $faker->randomElement,
                'pilihan3'      => $faker->randomElement,
                'pilihan4'      => $faker->randomElement,
                'pilihan5'      => $faker->randomElement,
            ]);
        }
    }
}
