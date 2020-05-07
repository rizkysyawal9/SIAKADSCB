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
        Siswa::create([
            // 'name' => Str::random(10),
            // 'email' => Str::random(10).'@gmail.com',
            // 'password' => Hash::make('password'),
            'nama' => 'Friska',
            'nis' => '123456',
            'orangTua' => 'Kipli',
            'kelas' => '8',
            'alamat' => 'Jalan Taman Baru',
        ]);
    }
}
