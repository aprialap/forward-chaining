<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gejala') -> insert([
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G01',
                'gejala'     => 'Mual dan muntah terus menerus',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G02',
                'gejala'     => 'Nyeri perut bagian atas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G03',
                'gejala'     => 'Berat badan turun',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G04',
                'gejala'     => 'Lidah mengering dan kotor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G05',
                'gejala'     => 'Kenaikan suhu badan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G06',
                'gejala'     => 'Gangguan penglihatan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G07',
                'gejala'     => 'Dehidrasi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G08',
                'gejala'     => 'Kesadaran menurun atau lemas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G09',
                'gejala'     => 'Tekanan darah lebih dari 140/90',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G10',
                'gejala'     => 'Sesak nafas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G11',
                'gejala'     => 'Oedema (kaku, pembengkakan dan sendi krepitus) pada jari, tangan dan mata',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G12',
                'gejala'     => 'Mual dan muntah',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G13',
                'gejala'     => 'Nyeri ulu hati',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G14',
                'gejala'     => 'Sakit kepala',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G15',
                'gejala'     => 'Nyeri perut',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G16',
                'gejala'     => 'Pendarahan ringan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G17',
                'gejala'     => 'Nyeri pada tulang punggung',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G18',
                'gejala'     => 'Nyeri pada bahu dan leher',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G19',
                'gejala'     => 'Syok atau cepat kaget',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G20',
                'gejala'     => 'Gangguan buang air kecil',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G21',
                'gejala'     => 'Flek atau pendarahan berwarna coklat dan bergelembung seperti busa',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G22',
                'gejala'     => 'Keluar cairan berbentuk gelombang mirip buah anggur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G23',
                'gejala'     => 'Tidak ada tanda-tanda adanya janin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G24',
                'gejala'     => 'Gelisah',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G25',
                'gejala'     => 'Rahim yang tampak lebih besar dari usia kandungan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G26',
                'gejala'     => 'Pendarahan tanpa nyeri',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G27',
                'gejala'     => 'Pendarahan berulang-ulang',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G28',
                'gejala'     => 'Pendarahan keluar banyak',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G29',
                'gejala'     => 'Pendarahan di trimester akhir',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G30',
                'gejala'     => 'Pendarahan yang disertai nyeri',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G31',
                'gejala'     => 'Kontraksi berlangsung cepat',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G32',
                'gejala'     => 'Darah berwarna merah kehitaman',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G33',
                'gejala'     => 'Kurang bergeraknya bayi yang berada dalam kandungan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G34',
                'gejala'     => 'Rahim terasa sakit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G35',
                'gejala'     => 'Nyeri punggung',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G36',
                'gejala'     => 'Sakit dan rasa terbakar saat berkemih',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G37',
                'gejala'     => 'Sering berkemih, tapi air seni yang keluar hanya sedikit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G38',
                'gejala'     => 'Cairan urin keruh',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G39',
                'gejala'     => 'Sakit perut bagian bawah',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G40',
                'gejala'     => 'Demam',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G41',
                'gejala'     => 'Nyeri pada bagian kandung kemih',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G42',
                'gejala'     => 'Kulit, bibir dan wajah terlihat pucat',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G43',
                'gejala'     => 'Mudah lelah dan lesu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G44',
                'gejala'     => 'Detak jantung tidak teratur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
                'id'         => Uuid::uuid4() -> getHex(),
                'kd_gejala'  => 'G45',
                'gejala'     => 'Rambut rontok',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
         
            
        ]);
    }
}
