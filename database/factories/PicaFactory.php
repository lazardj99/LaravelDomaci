<?php

namespace Database\Factories;

use App\Models\Pica;
use Illuminate\Database\Eloquent\Factories\Factory;

class PicaFactory extends Factory
{

    protected $model=Pica::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Naziv'=>$this->faker->name(),
            'Ocena'=>$this->faker->numberBetween(1,5),
            'Cena'=>$this->faker->numberBetween(10,1000),
            'poreklo_id'=>$this->faker->numberBetween(1,9)

        ];
    }
}
