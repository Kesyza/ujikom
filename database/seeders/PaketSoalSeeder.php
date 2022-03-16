<?php

namespace Database\Seeders;

use App\Models\PaketSoal;
use Illuminate\Database\Seeder;

class PaketSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paket1 = PaketSoal::create(['pilih_paket' => 'Dasar']);
        $paket2 = PaketSoal::create(['pilih_paket' => 'Lanjutan']);
        $paket3 = PaketSoal::create(['pilih_paket' => 'Mahir']);
    }
}
