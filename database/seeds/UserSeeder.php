<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
            DB::table('user')->insert([
                'username'  => $faker->userName,
                'email'     => $faker->unique()->email,
                'password'  => Hash::make('sandiuser'),
                'score'     => $faker->randomDigit,
            ]);
        }
    }
}
