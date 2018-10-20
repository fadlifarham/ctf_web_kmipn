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
            [
                'pertanyaan'    => "Dapat mengetahui peralatan apa saja yang ada dalam sebuah jaringan komputer merupakan fungsi dari …",
                'pilihan'       => 11,
                'benar'         => "Packet Fingerprinting",
            ],
            [
                'pertanyaan'    => "Mensyaratkan bahwa informasi (data) hanya bisa diakses oleh pihak yang memiliki wewenang adalah definisi dari …",
                'pilihan'       => 12,
                'benar'         => "Integrity",
            ],
            [
                'pertanyaan'    => "Memastikan seseorang memiliki otoritas yg sesuai dengan pihak-pihak yang dapat mengakses informasi definisi dari…",
                'pilihan'       => 13,
                'benar'         => "Access Control",
            ],
            [
                'pertanyaan'    => "Jenis firewall paling murah, mudah dan efektif adalah…",
                'pilihan'       => 14,
                'benar'         => "Packet Filtering Gateway",
            ],
            [
                'pertanyaan'    => "Usaha untuk merusak system pada jaringan, seperti Trojanhorse, Logicbom, Trapdoor, Virus, Worm dan Zombie disebut ",
                'pilihan'       => 15,
                'benar'         => "Destruction",
            ],
            [
                'pertanyaan'    => ". Kepanjangan dari NIC adalah…",
                'pilihan'       => 16,
                'benar'         => "Network Interface Cards",
            ],
            [
                'pertanyaan'    => "Ada berapakah element pada host hardening…",
                'pilihan'       => 17,
                'benar'         => "5",
            ],
            [
                'pertanyaan'    => "Berikut ini yang elemen hardening host yang secara umum melakukan otomatisasi terhadap penyusupan menggunakan IDS disebut…",
                'pilihan'       => 18,
                'benar'         => "IDS",
            ],
            [
                'pertanyaan'    => "Berikut ini merupakan aktivitas dalam digital forensik, kecuali…",
                'pilihan'       => 19,
                'benar'         => "Pengecekan port aktif",
            ],
            [
                'pertanyaan'    => "Server umpan yang digunakan untuk mengelabuhi penyusup disebut…",
                'pilihan'       => 20,
                'benar'         => "Honeypot",
            ],
            [
                'pertanyaan'    => "Berikut tujuan keamanan jaringan komputer kecuali…",
                'pilihan'       => 21,
                'benar'         => "OverView",
            ],
            [
                'pertanyaan'    => "Berikut ini merupakan layer di OSI layer, kecuali…",
                'pilihan'       => 22,
                'benar'         => "Internet",
            ],
            [
                'pertanyaan'    => "Layer yang terdapat penambahan header dengan tail untuk physical addressing adalah…",
                'pilihan'       => 23,
                'benar'         => "Datalink Layer",
            ],
            [
                'pertanyaan'    => "Layer yang bertugas untuk menentukan bagaimana mengirim data dengan memecah data menjadi beberapa segment adalah…",
                'pilihan'       => 24,
                'benar'         => "Transport Layer",
            ],
            [
                'pertanyaan'    => "Type pengiriman data dari host ke host menggunakan prinsip layer…",
                'pilihan'       => 25,
                'benar'         => "Network Layer",
            ],
            [
                'pertanyaan'    => "Berikut ini merupakan yang termasuk IGP, kecuali…",
                'pilihan'       => 26,
                'benar'         => "BGP",
            ],
            [
                'pertanyaan'    => "Merupakan kekurangan dari routing statis adalah sebagai berikut, kecuali…",
                'pilihan'       => 27,
                'benar'         => "Memakan bandwith besar",
            ],
            [
                'pertanyaan'    => "Perintah terminal yang digunakan untuk melihat proses yang sedang berjalan…",
                'pilihan'       => 28,
                'benar'         => "ps -ef",
            ],
            [
                'pertanyaan'    => "Melihat direktori kerja yang pada saat itu aktif dengan menggunakan perintah…",
                'pilihan'       => 29,
                'benar'         => "pwd",
            ],
            [
                'pertanyaan'    => "Langkah penyelesaikan suatu vulnerability dengan menambah software baru ke suatu system operasi merupakan tindakan…",
                'pilihan'       => 30,
                'benar'         => "Patches",
            ],
            [
                'pertanyaan'    => "Jumlah maximum hope yang bisa dilewati oleh sebuah paket data untuk sampai ke tujuan adalah…",
                'pilihan'       => 31,
                'benar'         => "32",
            ],
            [
                'pertanyaan'    => "Berikut ini merupakan langkah-langkah untuk mengamankan wireless network, kecuali…",
                'pilihan'       => 32,
                'benar'         => "Review log",
            ],
            [
                'pertanyaan'    => "Bagian dari ancaman pada wireless network adalah, kecuali…",
                'pilihan'       => 33,
                'benar'         => "Probe",
            ],
            [
                'pertanyaan'    => "Salah satu komponen VPN yang mengamankan pengiriman data melalui TCP/IP adalah…",
                'pilihan'       => 34,
                'benar'         => "PPTP",
            ],
            [
                'pertanyaan'    => "Tujuan dari kriptografi adalah membuat data tidak bias berubah, bertambah, atau dirusak adalah…",
                'pilihan'       => 35,
                'benar'         => "Confidentally",
            ],
            [
                'pertanyaan'    => "Berikut ini software yang sering dipakai dalam Anti Spam…",
                'pilihan'       => 36,
                'benar'         => "SpamAssasin",
            ],
            [
                'pertanyaan'    => "Berikut ini merupakan kerentanan dari email dimana email tidak diketahui kebenaran status terkirim adalah jenis kerentanan…",
                'pilihan'       => 37,
                'benar'         => "Loss of confidentiality",
            ],
            [
                'pertanyaan'    => ". Attacker dalam melakukan serangan web based sering menggunakan celah error event untuk mendapat informasi…",
                'pilihan'       => 38,
                'benar'         => "Internet IP Addrresses",
            ],
            [
                'pertanyaan'    => "Berikut ini target data yang sering dicari oleh attacker adalah, kecuali…",
                'pilihan'       => 39,
                'benar'         => "Research Value",
            ],
            [
                'pertanyaan'    => "Fase Hacker untuk menentukan target yang dituju dengan melakukan research target melalui track record melalui internet merupakan…",
                'pilihan'       => 40,
                'benar'         => "Passive Reconnaissance",
            ],
            [
                'pertanyaan'    => "Berikut ini merupakan salah satu tugas utama seorang ethical hacker adalah…",
                'pilihan'       => 41,
                'benar'         => "Mengenali celah dan menuntaskan permasalahan pada system jaringan",
            ],
            [
                'pertanyaan'    => "Berikut yang bukan skill wajib dari seorang ethical hacker…",
                'pilihan'       => 42,
                'benar'         => "Vulnerability Research",
            ],
            [
                'pertanyaan'    => "Usaha attacker untuk untuk mengidentifikasi host yang aktif dalam suatu jaringan kemudian diserang disebut usaha…",
                'pilihan'       => 43,
                'benar'         => "Network Scanning",
            ],
            [
                'pertanyaan'    => "Berikut ini yang bukan ping sweep tools…",
                'pilihan'       => 44,
                'benar'         => "ZenMAP",
            ],
            [
                'pertanyaan'    => "Proses untuk mendapatkan username, machine name, network resource, dan informasi dari service yang berjalan pada system merupakan…",
                'pilihan'       => 45,
                'benar'         => "Enumeration",
            ],
            [
                'pertanyaan'    => "Berikut ini yang bukan termasuk Teknik password attack…",
                'pilihan'       => 46,
                'benar'         => "Electronic Attacks",
            ],
            [
                'pertanyaan'    => ". Langkah efektif untuk mencegah serangan password cracking adalah…",
                'pilihan'       => 47,
                'benar'         => "Hardening Host",
            ],
            [
                'pertanyaan'    => "Metode untuk mendeteksi attack dengan mencocokkan pola attack yang sudah di modelkan adalah…",
                'pilihan'       => 48,
                'benar'         => "Misuse Detection",
            ],
            [
                'pertanyaan'    => "Berikut ini sintaks yang benar untuk menghapus aturan iptables adalah…",
                'pilihan'       => 49,
                'benar'         => "IPTABLES -t nat -f",
            ],
            [
                'pertanyaan'    => "Berikut ini merupakan tools yang dapat digunakan protect dari serangan DoS / DDoS…",
                'pilihan'       => 50,
                'benar'         => "IntrustGuard",
            ],

        ];

        DB::table('soal')->insert($data);
    }
}
