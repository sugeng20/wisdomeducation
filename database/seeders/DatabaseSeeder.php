<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JabatanSeeder::class);
        $this->call(SekolahSeeder::class);
        $this->call(MataPelajaran::class);
    }
}
