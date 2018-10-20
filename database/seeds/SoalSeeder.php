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

//        for ($i = 0; $i < $limit; $i++) {
//            DB::table('soal')->insert([
//                'pertanyaan'  => $faker->randomLetter,
//                'pilihan'   => 1,
//                'benar'     => $faker->randomLetter,
//            ]);
//        }

        $data = [
            [
              'pertanyaan'    => "Alat-alat yang digunakan dalam membangun sebuh jaringan dibawah ini, kecuali …",
              'pilihan'       => 1,
              'benar'         => "USB",
            ],
            [
                'pertanyaan'    => "Perangkat yang berfungsi untuk mengubah sinyal analog menjadi sinyal digital atau sebaliknya adalah",
                'pilihan'       => 2,
                'benar'         => "Modem",
            ],
            [
                'pertanyaan'    => "Metode serangan yang bertujuan untuk mengetahui port yang terbuka disebut",
                'pilihan'       => 3,
                'benar'         => "Port scaning",
            ],
            [
                'pertanyaan'    => "Membuat tampilan login yang mirip atau fake login page merupan Teknik serangan…",
                'pilihan'       => 4,
                'benar'         => "Exploitation of Trust",
            ],
            [
                'pertanyaan'    => "Informasi Security merupakan keamanan level ke…",
                'pilihan'       => 5,
                'benar'         => "3",
            ],
            [
                'pertanyaan'    => "Metode pengaman jaringan yang membagi jaringan computer menjadi beberapa kelompokjaringan disebut",
                'pilihan'       => 6,
                'benar'         => "Network Topology",
            ],
            [
                'pertanyaan'    => "Sistem yang membantu pengamanan jaringan dengan menganalisa data dan membuatkan report",
                'pilihan'       => 7,
                'benar'         => "Security Management System",
            ],
            [
                'pertanyaan'    => "Ancaman yang biasa didapati user ketika menjelajahi internet untuk mencuri data user untuk kepentingan marketing disebut",
                'pilihan'       => 8,
                'benar'         => "Adware",
            ],
            [
                'pertanyaan'    => "Tindakan penggunaan perangkat elektonik dengan mengirim pesan bertubi-tubi disebut",
                'pilihan'       => 9,
                'benar'         => "Spaming",
            ],
            [
                'pertanyaan'    => "Tipe firewall sebagai penjebatan antara koneksi LAN, WAN, dan Internet disebut…",
                'pilihan'       => 10,
                'benar'         => "Proxy Firewall",
            ],

        ];

        DB::table('soal')->insert($data);
    }
}
