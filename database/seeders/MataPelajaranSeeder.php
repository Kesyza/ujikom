<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel1 = MataPelajaran::create(['nama_mapel' => 'Bahasa Indonesia']);
        $mapel2 = MataPelajaran::create(['nama_mapel' => 'Bahasa Inggris']);
        $mapel3 = MataPelajaran::create(['nama_mapel' => 'Matematika']);
        $mapel4 = MataPelajaran::create(['nama_mapel' => 'Ilmu Pengetahuan Alam']);
    }
}
