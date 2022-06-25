<?php

namespace Database\Factories;

use App\Models\PicaUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class PicaUserFactory extends Factory
{
    protected $model=PicaUser::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,10),
            'pica_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
