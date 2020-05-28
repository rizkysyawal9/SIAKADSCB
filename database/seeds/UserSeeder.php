<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@scb.ac.id',
            'password' => bcrypt('admin123'),
            'role' => 1,
        ]);
        User::create([
            'name' => 'Merri Riana',
            'email' => 'meri@scb.ac.id',
            'password' => bcrypt('secret123'),
            'mengajar' => 'MTK-II',
            'kelas' => 8,
            'role' => 2,
        ]);
        User::create([
            'name' => 'Gordon Ramsey',
            'email' => 'gordon@scb.ac.id',
            'password' => bcrypt('secret123'),
            'mengajar' => 'PKN-I',
            'kelas' => 7,
            'role' => 2,
        ]);
        User::create([
            'name' => 'Jerome Polin',
            'email' => 'jerome@scb.ac.id',
            'password' => bcrypt('secret123'),
            'mengajar' => 'MTK-III',
            'kelas' => 9,
            'role' => 2,
        ]);
    }
}
