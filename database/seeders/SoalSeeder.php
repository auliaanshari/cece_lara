<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Soal;


class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Soal::factory()->count(100)->create();
    }
}
