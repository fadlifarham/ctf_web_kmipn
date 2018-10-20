<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(SoalSeeder::class);
        $this->call(PilihanSeeder::class);
        $this->call(UserSeeder::class);
    }
}
