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
            'kode_matpel' => 'MTK01',
            'matpel' => 'Matematika ',
            'kelas' => '8',
        ]);

    }
}
