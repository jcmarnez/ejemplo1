<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class personasFactory extends Factory
{
    public function definition()
    {
        return [
            'nombres' => $this->faker->firstname(),
            'apellidos' => $this->faker->lastname(),
            'edad' => $this->faker->numberBetween($int1 = 18, $int2 = 60),
        ];
    }
}
