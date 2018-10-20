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

            [
                'pilihan1'  => 'Security Management System',
                'pilihan2'  => 'Network Topology',
                'pilihan3'  => 'IDS',
                'pilihan4'  => 'IPS',
                'pilihan5'  => 'Packet Fingerprinting',
            ],
            [
                'pilihan1'  => 'Confidentally',
                'pilihan2'  => 'Integrity',
                'pilihan3'  => 'Available',
                'pilihan4'  => 'Non-repudiation',
                'pilihan5'  => 'Autentication',
            ],[
                'pilihan1'  => 'Access Control',
                'pilihan2'  => 'Circuit Level Gateway',
                'pilihan3'  => 'Application Layer Gateway',
                'pilihan4'  => 'Statefull Multilayer Inspection Firewall',
                'pilihan5'  => 'Multilayer Inspection Firewall',
            ],[
                'pilihan1'  => 'Destruction',
                'pilihan2'  => 'Denial',
                'pilihan3'  => 'Theft',
                'pilihan4'  => 'Modification',
                'pilihan5'  => 'Fraud',
            ],[
                'pilihan1'  => 'Network Interface Cards',
                'pilihan2'  => 'Network Internet Cards',
                'pilihan3'  => 'Network Interface Computer',
                'pilihan4'  => 'Network Internet Cards',
                'pilihan5'  => 'Network Identified Cards',
            ],[
                'pilihan1'  => '1',
                'pilihan2'  => '2',
                'pilihan3'  => '3',
                'pilihan4'  => '5',
                'pilihan5'  => '4',
            ],[
                'pilihan1'  => 'Firewall',
                'pilihan2'  => 'Backup',
                'pilihan3'  => 'IDS',
                'pilihan4'  => 'Cryptografi',
                'pilihan5'  => 'CryptoCurrency',
            ],[
                'pilihan1'  => 'Pengecekan koneksi aktif',
                'pilihan2'  => 'Pengecekan log user',
                'pilihan3'  => 'Pengecekan log system',
                'pilihan4'  => 'Pengecekan log pengaksesan service',
                'pilihan5'  => 'Pengecekan port aktif',
            ],[
                'pilihan1'  => 'Honeypot',
                'pilihan2'  => 'Configuration',
                'pilihan3'  => 'Second Server',
                'pilihan4'  => 'Dedicated Server',
                'pilihan5'  => 'Game Server',
            ],
            [
                'pilihan1'  => 'Availability',
                'pilihan2'  => 'Reliability',
                'pilihan3'  => 'Confidentially',
                'pilihan4'  => 'OverView',
                'pilihan5'  => 'Kehandalan ',
            ],
            [
                'pilihan1'  => 'Application',
                'pilihan2'  => 'Session',
                'pilihan3'  => 'Internet',
                'pilihan4'  => 'Network',
                'pilihan5'  => 'Physical',
            ],
            [
                'pilihan1'  => 'Physical Layer',
                'pilihan2'  => 'Datalink Layer',
                'pilihan3'  => 'Aplication Layer',
                'pilihan4'  => 'Internet Layer',
                'pilihan5'  => 'Session Layer',
            ],
            [
                'pilihan1'  => 'Physical Layer',
                'pilihan2'  => 'Transport Layer',
                'pilihan3'  => 'Aplication Layer',
                'pilihan4'  => 'Internet Layer',
                'pilihan5'  => 'Session Layer',
            ],
            [
                'pilihan1'  => 'Network Layer',
                'pilihan2'  => 'Datalink Layer',
                'pilihan3'  => 'Transport Layer',
                'pilihan4'  => 'Internet Layer',
                'pilihan5'  => 'Session Layer',
            ],
            [
                'pilihan1'  => 'RIP',
                'pilihan2'  => 'IGRP',
                'pilihan3'  => 'OSPF',
                'pilihan4'  => 'IS-IS',
                'pilihan5'  => 'BGP',
            ],
            [
                'pilihan1'  => 'Administrator harus handal',
                'pilihan2'  => 'Tidak bias menangani error jaringan eksternal',
                'pilihan3'  => 'Routing setiap device bila penambahan device router',
                'pilihan4'  => 'Tidak cocok jaringan skala besar',
                'pilihan5'  => 'Memakan bandwith besar',
            ],
            [
                'pilihan1'  => 'ps -ef',
                'pilihan2'  => 'ps -f -u user',
                'pilihan3'  => 'ps -f –pid id',
                'pilihan4'  => 'top 1',
                'pilihan5'  => 'px aux –sort',
            ],
            [
                'pilihan1'  => 'man',
                'pilihan2'  => 'ls',
                'pilihan3'  => 'dir',
                'pilihan4'  => 'pwd',
                'pilihan5'  => 'route -n',
            ],
            [
                'pilihan1'  => 'Work-around',
                'pilihan2'  => 'Patches',
                'pilihan3'  => 'Updates',
                'pilihan4'  => 'Install',
                'pilihan5'  => 'Upgrades',
            ],
            [
                'pilihan1'  => '32',
                'pilihan2'  => '64',
                'pilihan3'  => '128',
                'pilihan4'  => '16',
                'pilihan5'  => '8',
            ],
            [
                'pilihan1'  => 'MAC Filter',
                'pilihan2'  => 'Change default router password',
                'pilihan3'  => 'Review log',
                'pilihan4'  => 'Upgrade Manufacture',
                'pilihan5'  => 'Turn on WPA dan WPA2 encryption',
            ],
            [
                'pilihan1'  => 'Passive Data Sniffing',
                'pilihan2'  => 'Unathorized Access',
                'pilihan3'  => 'Jamming DoS attack',
                'pilihan4'  => 'User Hijack',
                'pilihan5'  => 'Probe',
            ],
            [
                'pilihan1'  => 'IPsec',
                'pilihan2'  => 'VTP',
                'pilihan3'  => 'PPTP',
                'pilihan4'  => 'ATMP',
                'pilihan5'  => 'L2TP',
            ],
            [
                'pilihan1'  => 'Confidentally',
                'pilihan2'  => 'Authentication',
                'pilihan3'  => 'Non Repudiation',
                'pilihan4'  => 'Access Control',
                'pilihan5'  => 'Integrity',
            ],
            [
                'pilihan1'  => 'AMaVis',
                'pilihan2'  => 'ClamAntiVirus',
                'pilihan3'  => 'Kaspersky',
                'pilihan4'  => 'AntiVir',
                'pilihan5'  => 'SpamAssasin',
            ],
            [
                'pilihan1'  => 'Lack of data origin authentication',
                'pilihan2'  => 'Lack of non-repudiation',
                'pilihan3'  => 'Lack of notification of receipt',
                'pilihan4'  => 'Loss of confidentiality',
                'pilihan5'  => 'Loss of integrity',
            ],
            [
                'pilihan1'  => 'OS',
                'pilihan2'  => 'Account user',
                'pilihan3'  => 'Internet IP Addrresses',
                'pilihan4'  => 'File',
                'pilihan5'  => 'System',
            ],
            [
                'pilihan1'  => 'Payment Card Information',
                'pilihan2'  => 'Non-Payment Card Information',
                'pilihan3'  => 'Intellectual Property',
                'pilihan4'  => 'Sensitive Company Data',
                'pilihan5'  => 'Research Value',
            ],
            [
                'pilihan1'  => 'Active Reconnaissance',
                'pilihan2'  => 'Passive Reconnaissance',
                'pilihan3'  => 'Scanning',
                'pilihan4'  => 'Extract Information',
                'pilihan5'  => 'Gaining Access',
            ],

            [
                'pilihan1'  => 'Mendapatkan access system',
                'pilihan2'  => 'Mengolah system keamanan jaringan',
                'pilihan3'  => 'Mengenali celah dan menuntaskan permasalahan pada system jaringan',
                'pilihan4'  => 'Membuat service pada jaringan',
                'pilihan5'  => 'Membangun system jaringan',
            ],
            [
                'pilihan1'  => 'Platform Knowledge',
                'pilihan2'  => 'Network Knowledge',
                'pilihan3'  => 'Security Knowledge',
                'pilihan4'  => 'Vulnerability Research',
                'pilihan5'  => 'Computer Expert',
            ],
            [
                'pilihan1'  => 'Port Scanning',
                'pilihan2'  => 'Vulnerability Scanning',
                'pilihan3'  => 'Network Scanning',
                'pilihan4'  => 'Hacking',
                'pilihan5'  => 'Phising',
            ],
            [
                'pilihan1'  => 'ZenMAP',
                'pilihan2'  => 'SolarWinds Standar Edition',
                'pilihan3'  => 'Utility Ping',
                'pilihan4'  => 'Visual Ping Tester',
                'pilihan5'  => 'Ping Scanner Pro',
            ],
            [
                'pilihan1'  => 'Scanning',
                'pilihan2'  => 'Enumeration',
                'pilihan3'  => 'Phising',
                'pilihan4'  => 'Probe',
                'pilihan5'  => 'Hacking',
            ],
            [
                'pilihan1'  => 'Electronic Attacks',
                'pilihan2'  => 'Non-Electronic Attacks',
                'pilihan3'  => 'Passive Online Attacks',
                'pilihan4'  => 'Active Online Attacks',
                'pilihan5'  => 'Offline Attacks',
            ],
            [
                'pilihan1'  => 'Menggunakan Firewall',
                'pilihan2'  => 'Hardening Host',
                'pilihan3'  => 'Menggunakan SSH',
                'pilihan4'  => 'Menggunakan Ipsec',
                'pilihan5'  => 'Antivirus',
            ],
            [
                'pilihan1'  => 'Misuse Detection',
                'pilihan2'  => 'Anomaly Detection',
                'pilihan3'  => 'Analisa Header',
                'pilihan4'  => 'Analisa Payload',
                'pilihan5'  => 'Log Scanner',
            ],
            [
                'pilihan1'  => 'IPTABLES -X',
                'pilihan2'  => 'IPTABLES -t nat -x',
                'pilihan3'  => 'IPTABLES -T mangle -x',
                'pilihan4'  => 'IPTABLES -A',
                'pilihan5'  => 'IPTABLES -t nat -f',
            ],
            [
                'pilihan1'  => 'SDL Regex Fuzzer',
                'pilihan2'  => 'WANGuard',
                'pilihan3'  => 'Arbor Peakflow',
                'pilihan4'  => 'FortGuard',
                'pilihan5'  => 'IntrustGuard',
            ],
        ];

        DB::table('pilihan')->insert($data);
    }
}
