<?php

use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->integer('nis')->unique();
        // $table->string('nama');
        // $table->integer('kelas')->default(7);
        // $table->string('jenis_kelamin')->default('laki-laki');
        // $table->string('tanggal_lahir')->nullable();
        // $table->string('tempat_lahir')->nullable();
        // $table->string('golongan_darah')->default('A');
        // $table->string('alamat')->nullable();
        // $table->integer('tinggi_badan')->nullable();
        // $table->integer('berat_badan')->nullable();
        // $table->string('nama_ayah')->nullable();
        // $table->string('nama_ibu')->nullable();

        Siswa::create([
            'nama' => 'Friska',
            'nis' => '123456',
            'jenis_kelamin' => 'perempuan',
            'kelas' => '7',
            'tempat_lahir' => 'Tangerang',
            'tanggal_lahir' => '21 Agustus 1999',
            'alamat' => 'Jalan Taman Baru',
            'tinggi_badan' => '157',
            'berat_badan' => '53',
            'nama_ayah' => 'Kipli',
            'nama_ibu' => 'Meilani',
        ]);
        Siswa::create([
            'nama' => 'Jodi',
            'nis' => '123457',
            'jenis_kelamin' => 'perempuan',
            'kelas' => '7',
            'tempat_lahir' => 'Tangerang',
            'tanggal_lahir' => '21 Agustus 1999',
            'alamat' => 'Jalan Taman Baru',
            'tinggi_badan' => '157',
            'berat_badan' => '53',
            'nama_ayah' => 'Kipli',
            'nama_ibu' => 'Meilani',
        ]);
        Siswa::create([
            'nama' => 'Brisa',
            'nis' => '123458',
            'jenis_kelamin' => 'perempuan',
            'kelas' => '7',
            'tempat_lahir' => 'Tangerang',
            'tanggal_lahir' => '21 Agustus 1999',
            'alamat' => 'Jalan Taman Baru',
            'tinggi_badan' => '157',
            'berat_badan' => '53',
            'nama_ayah' => 'Kipli',
            'nama_ibu' => 'Meilani',
        ]);
        Siswa::create([
            'nama' => 'Prada',
            'nis' => '123459',
            'jenis_kelamin' => 'perempuan',
            'kelas' => '7',
            'tempat_lahir' => 'Tangerang',
            'tanggal_lahir' => '21 Agustus 1999',
            'alamat' => 'Jalan Taman Baru',
            'tinggi_badan' => '157',
            'berat_badan' => '53',
            'nama_ayah' => 'Kipli',
            'nama_ibu' => 'Meilani',
        ]);
    }
}
