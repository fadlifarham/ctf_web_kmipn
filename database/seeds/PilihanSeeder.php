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
//        $faker = Faker\Factory::create();
//        $limit = 5;
//        for ($i = 0; $i < $limit; $i++) {
//            DB::table('pilihan')->insert([
//                'pilihan1'      => $faker->randomElement,
//                'pilihan2'      => $faker->randomElement,
//                'pilihan3'      => $faker->randomElement,
//                'pilihan4'      => $faker->randomElement,
//                'pilihan5'      => $faker->randomElement,
//            ]);
//        }
        $data = [
            [
                'pilihan1'  => 'Workstation',
                'pilihan2'  => 'Hub',
                'pilihan3'  => 'Switch',
                'pilihan4'  => 'Modem',
                'pilihan5'  => 'USB',
            ],
            [
                'pilihan1'  => 'Antena',
                'pilihan2'  => 'Modem',
                'pilihan3'  => 'Switch',
                'pilihan4'  => 'Hub',
                'pilihan5'  => 'Workstation',
            ],
            [
                'pilihan1'  => 'Workstation',
                'pilihan2'  => 'Hub',
                'pilihan3'  => 'Switch',
                'pilihan4'  => 'Modem',
                'pilihan5'  => 'USB',
            ],
            [
                'pilihan1'  => 'Pakcet sniffer',
                'pilihan2'  => 'Probe',
                'pilihan3'  => 'Hacking',
                'pilihan4'  => 'Port scaning',
                'pilihan5'  => 'Denial of Service',
            ],
            [
                'pilihan1'  => 'Packet sniffer',
                'pilihan2'  => 'Account Compromize',
                'pilihan3'  => 'Phising',
                'pilihan4'  => 'Port scaning',
                'pilihan5'  => 'Exploitation of Trust',
            ],
            [
                'pilihan1'  => '0',
                'pilihan2'  => '3',
                'pilihan3'  => '2',
                'pilihan4'  => '1',
                'pilihan5'  => '4',
            ],
            [
                'pilihan1'  => 'Security Management System',
                'pilihan2'  => 'Network Topology',
                'pilihan3'  => 'IDS',
                'pilihan4'  => 'IPS',
                'pilihan5'  => 'Packet Fingerprinting',
            ],
            [
                'pilihan1'  => 'Network Topology',
                'pilihan2'  => 'IDS',
                'pilihan3'  => 'Packet Fingerprinting',
                'pilihan4'  => 'Security Management System',
                'pilihan5'  => 'Firewall',
            ],
            [
                'pilihan1'  => 'Bluejacking',
                'pilihan2'  => 'Adware',
                'pilihan3'  => 'Cookies',
                'pilihan4'  => 'Internet Worms',
                'pilihan5'  => 'Mobile Phone Viruse',
            ],
            [
                'pilihan1'  => 'Virus',
                'pilihan2'  => 'Spaming',
                'pilihan3'  => 'Trojan',
                'pilihan4'  => 'Spam',
                'pilihan5'  => 'Spyware',
            ],
            [
                'pilihan1'  => 'Application',
                'pilihan2'  => 'Proxy Firewall',
                'pilihan3'  => 'Stateful Inspection Firewall',
                'pilihan4'  => 'Packet Filter Firewall',
                'pilihan5'  => 'Application Filter Firewall',
            ],
        ];

        DB::table('pilihan')->insert($data);
    }
}
