<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Respon;
use \App\Models\About;
use \App\Models\User;
use App\Models\ITData;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // ITData::on('mysql')->insert([
        //     [
        //         'category' => '2023',
        //         'aspirasi' => 'Segera ditindaklanjuti terkait meningkatkan keamanan web sekolah guna mencegah terjadinya tindak pencurian kunci jawaban, seperti yang baru-baru ini terjadi.',
        //         'tanggapan' => 'Terima kasih atas masukannya terkait keamanan web sekolah. Kami telah mengetahui kasus tindak pencurian kunci jawaban, bahkan hingga pelaku itu sendiri. Namun, kami juga menyadari bahwa tidak sedikit siswa yang memiliki kemampuan IT yang cukup tinggi. Kami telah meningkatkan keamanan aplikasi ujian dan membuat perubahan pada metode e-learning. Guna mencegah terjadinya tindakan hacking oleh siswa. Kami selaku tim IT selalu berupaya untuk terus memperbaiki dan memperkuat sistem keamanan demi menjaga integritas ujian. Terima kasih atas masukannya.',
        //         'narasumber' => 'Tim IT'
        //     ],
        // ]);

        // About::on('mysql')->insert([
        //     [
        //         'title' => 'Form Aspirasi',
        //         'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis quo natus explicabo consectetur molestias debitis doloremque voluptatum. Odio rerum consectetur veritatis animi, voluptas reiciendis voluptatum vero neque architecto, repudiandae modi delectus magni quos consequuntur id.',
        //         'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis quo natus explicabo consectetur molestias debitis doloremque voluptatum. Odio rerum consectetur veritatis animi, voluptas reiciendis voluptatum vero neque architecto, repudiandae modi delectus magni quos consequuntur id. Impedit, minima natus. Odit reprehenderit qui aliquid nobis laboriosam, praesentium fugiat, debitis nihil labore dolore eius, nisi placeat ipsa modi? Praesentium quidem consequuntur beatae ducimus blanditiis nisi fugit velit mollitia sequi maxime quaerat, quis error unde non neque reiciendis temporibus facere consequatur quod sed iure alias aliquid autem quas! Obcaecati aspernatur amet placeat quod doloribus fuga, reiciendis explicabo impedit sed magnam animi ea iste quas!'
        //     ],
        // ]);

        // About::on('mysql2')->create([
        //     'title' => 'Respon Aspirasi',
        //     'excerpt' => 'Halaman ini akan menampilkan seluruh respon aspirasi dari pihak terkait atas aspirasi yang telah dikirimkan oleh para siswa/siswi.',
        //     'body' => 'Selamat Datang! Halaman ini akan menampilkan seluruh respon aspirasi dari pihak terkait atas aspirasi yang telah dikirimkan oleh para siswa/siswi. Aspirasi yang ditampilkan mulai dari aspirasi lama sampai dengan yang paling terbaru. Kami sangat mengapresiasi aspirasi dan harapan yang telah siswa/siswi sampaikan kepada kami untuk kemudian diteruskan kepada pihak yang bersangkutan.',
        // ]);

        // User::on('mysql')->insert([
        //     [
        //         'name' => 'Miyu Mizuno',
        //         'nis' => '24.1',
        //         'kelas' => 'X PPLG A',
        //         'is_admin' => '0'
        //     ],
        //     [
        //         'name' => 'Reina Mizuno',
        //         'nis' => '24.2',
        //         'kelas' => 'X PPLG B',
        //         'is_admin' => '0'
        //     ],
        //     [
        //         'name' => 'Grace Oktaviani',
        //         'nis' => '24.3',
        //         'kelas' => 'X DPIB A',
        //         'is_admin' => '0'
        //     ],
        // ]);

    //    User::on('mysql')->create([
    //         'name' => 'Admin',
    //         'nis' => '22.23',
    //         'kelas' => 'X PPLG A',
    //         'is_admin' => '0'
    //    ]);
//     }
// }

//         $names = [
//             'ABDUL ROZAQ',
// 'ABIMANYU PRASETYA',
// 'AKBAR LISTIANSYAH PUTRA',
// 'ALIFA QOSTHALANI',
// 'ALIV MARSYAMMUHIITHA MAHARDIKO',
// 'AMMAR MAHAMID PUTRO UTOMO',
// 'ANANDA BAGAS PRATAMA',
// 'ANGKASA IZZA MUHAMMAD SOFIAN',
// 'AULIA AZIZAH NUR ZAHRA',
// 'AULIA KHAIRU NISSA',
// 'BILQIS ZAIZAFUN QURROTU`AINI',
// 'BIMA SAKTI KURNIAWAN',
// 'DAFFA FATHAN MUBINA',
// 'DIJA LOVELY KAYLANA',
// 'FASHA ARGO FEBRIAN',
// 'FELISYA SUKENDRO PUTRI',
// 'GIOVANI ISNUR LAILLI',
// 'ILHAM HANAFI',
// 'KHALIDA ARIN RAFIQA',
// 'MEGA DHUMILAH',
// 'MUHAMMAD ALIFIAN RAMADHAN WIBOWO',
// 'NABILA NAFIZ AZ ZAHRA',
// 'NOVELLIZA AZZAHRA ARDINI PUTRI',
// 'PRAYATA EROL PRADANA',
// 'QUEENSHA ADEVIA AZZAHRA',
// 'RADITYA HAFIZ FAHREZA',
// 'RAHMAD WIDI ASMORO',
// 'RENVILLA FAYOLETTA WYNSTELLE',
// 'REVANDRA SATRIA MAHARDIKA PAMUNGKAS',
// 'RIZKY ANANTA PRATAMA',
// 'SABRINA SAFFA BELLA',
// 'SALMA FITRIA JUAN NABILA',
// 'SHOFIA UMMU SHOLIKHAH',
// 'TEGAR NUGRAHA SAPUTRA',
// 'YASYKUR TSANY SAPUTRA',
// 'ZHAFIF ADHI KAHFI',
//         ];

//         $nis = [
//             '24.011836',
// '24.011837',
// '24.011838',
// '24.011839',
// '24.011840',
// '24.011841',
// '24.011842',
// '24.011843',
// '24.011844',
// '24.011845',
// '24.011846',
// '24.011847',
// '24.011848',
// '24.011849',
// '24.011850',
// '24.011851',
// '24.011852',
// '24.011853',
// '24.011854',
// '24.011855',
// '24.011856',
// '24.011857',
// '24.011858',
// '24.011859',
// '24.011860',
// '24.011861',
// '24.011862',
// '24.011863',
// '24.011864',
// '24.011865',
// '24.011866',
// '24.011867',
// '24.011868',
// '24.011869',
// '24.011870',
// '24.011871',
// ];

//         if (count($names) !== count($nis)) {
//             echo "Error: Jumlah nama tidak sama dengan jumlah NIS\n";
//             exit();
//         }


//         for ($i = 0; $i < count($names); $i++) {
//             User::on('mysql')->create([
//                 'name' => $names[$i],
//                 'nis' => $nis[$i],
//                 'kelas' => 'DPIB A',
//                 'is_admin' => '0',
//             ]);
//         }
    }
}