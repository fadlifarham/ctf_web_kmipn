<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = 5;
        $limit = 50;
        for ($j = 0; $j < $user; $j++) {
            for ($i = 0; $i < $limit; $i++) {
                DB::table('status')->insert([
                    'id_user'   => $j+1,
                    'id_soal'   => $i+1,
                    'status'    => false,
                ]);
            }
        }
    }
}
