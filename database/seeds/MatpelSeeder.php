<?php

use App\Matpel;
use Illuminate\Database\Seeder;

class MatpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matpel::create([
            'kode_matpel' => 'PAI',
            'matpel' => 'Pendidikan Agama Islam',
        ]);

        Matpel::create([
            'kode_matpel' => 'PKN',
            'matpel' => 'Pendidikan Kewarganegaraan',
        ]);
        Matpel::create([
            'kode_matpel' => 'BIND',
            'matpel' => 'Bahasa Indonesia',
        ]);
        Matpel::create([
            'kode_matpel' => 'BING',
            'matpel' => 'Bahasa Inggris',
        ]);
        Matpel::create([
            'kode_matpel' => 'MTK',
            'matpel' => 'Matematika',
        ]);
        Matpel::create([
            'kode_matpel' => 'IPA',
            'matpel' => 'Ilmu Pengetahuan Alam',
        ]);
        Matpel::create([
            'kode_matpel' => 'IPS',
            'matpel' => 'Ilmu Pengetahuan Sosial',
        ]);
        Matpel::create([
            'kode_matpel' => 'SB',
            'matpel' => 'Seni dan Budaya',
        ]);
        Matpel::create([
            'kode_matpel' => 'PJOK',
            'matpel' => 'Pendidikan Jasmani, Olahraga dan Kesehatan',
        ]);
        Matpel::create([
            'kode_matpel' => 'TAHSIN',
            'matpel' => 'Tahfizh Tahsin Quran',
        ]);
        Matpel::create([
            'kode_matpel' => 'TIK',
            'matpel' => 'Teknologi Informasi dan Komunikasi',
        ]);
        Matpel::create([
            'kode_matpel' => 'BSUN',
            'matpel' => 'Bahasa dan Sastra Sunda',
        ]);
        Matpel::create([
            'kode_matpel' => 'PLH',
            'matpel' => 'Prakarya',
        ]);
        Matpel::create([
            'kode_matpel' => 'B.ARAB',
            'matpel' => 'Bahasa Arab',
        ]);
    }
}
