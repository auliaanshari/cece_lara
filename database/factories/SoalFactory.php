<?php

namespace Database\Factories;

use App\Models\Soal;
use App\Models\KategoriSoal;
use App\Models\JenisSoal;
use App\Models\StatusSoal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class SoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        $kat = KategoriSoal::all()->random(1);
        $jenis = JenisSoal::all()->random(1);
        $status = StatusSoal::all()->random(1);
        foreach($kat as $cat):
            foreach($jenis as $jen):
                foreach($status as $sta):
                    return [
                        'soal' => $faker->name(),
                        'jawaban' => $faker->name(),
                        'bobot' => 100,
                        'kategori_id' => $cat->id,
                        'jenis_id' => $jen->id,
                        'status_id' => $sta->id,
                    ];
                endforeach;
            endforeach;
        endforeach;
    }
}
