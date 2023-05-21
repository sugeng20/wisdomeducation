<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sekolah')->insert([
            ['nama_sekolah' => 'SDN 10 Pisangan Timur', 'alamat_sekolah' => 'Jakarta Timur']
        ]);
    }
}
