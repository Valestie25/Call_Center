<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NOMBRE' => $this->faker->firstName(),
            'APELLIDOS' => $this->faker->lastName(),
            'DEPARTAMENTO' => $this->faker->regexify('[A-D]')
        ];
    }
}
