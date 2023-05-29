<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_pelajaran')->insert([
            ['nama_matpel' => 'PPKN', 'materi' => 'Belum Ada']
        ]);
    }
}
