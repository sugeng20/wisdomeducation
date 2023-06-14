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
            ['nama_matpel' => 'PPKN', 'materi' => 'Belum Ada'],
            ['nama_matpel' => 'IPA', 'materi' => 'Belum Ada'],
            ['nama_matpel' => 'IPS', 'materi' => 'Belum Ada'],
            ['nama_matpel' => 'Bahasa Indonesia', 'materi' => 'Belum Ada']
        ]);
    }
}
