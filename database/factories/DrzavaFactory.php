<?php

namespace Database\Factories;

use App\Models\Drzava;
use Illuminate\Database\Eloquent\Factories\Factory;

class DrzavaFactory extends Factory
{
    protected $model=Drzava::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Naziv'=>$this->faker->userName()
        ];
    }
}
