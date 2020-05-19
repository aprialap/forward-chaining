<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class PenyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('penyakit') -> insert([
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P01',
                'nama_penyakit' => 'Hiperemesis Gravidarum',
                'deskripsi'     => null,
                'solusi'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ],
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P02',
                'nama_penyakit' => 'Preeklampsia',
                'deskripsi'     => null,
                'solusi'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ], 
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P03',
                'nama_penyakit' => 'Kehamilan Ektopik',
                'deskripsi'     => null,
                'solusi'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ], 
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P04',
                'nama_penyakit' => 'Molahidatidosa (Hamil Anggur)',
                'deskripsi'     => null,
                'solusi'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ], 
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P05',
                'nama_penyakit' => 'Plasenta Previa',
                'deskripsi'     => null,
                'solusi'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ], 
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P06',
                'nama_penyakit' => 'Solusio Plasenta',
                'deskripsi'     => null,
                'solusi'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ], 
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P07',
                'nama_penyakit' => 'Infeksi Saluran Kemih',
                'deskripsi'     => null,
                'solusi'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ], 
            [
                'id'            => Uuid::uuid4() -> getHex(),
                'kd_penyakit'   => 'P08',
                'nama_penyakit' => 'Anemia',
                'deskripsi'     => null,
                'solusi'        => null,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')

            ], 
           
            
        ]);
    }
}
