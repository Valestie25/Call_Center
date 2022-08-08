<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'FECHA_DE_LLAMADAS' => $this->faker->date('Y_m_d'),
            'HORA_DE_LLAMADAS' => $this->faker->time(),
            'CANTIDAD_PROMEDIO_DE_LLAMADAS' => $this->faker->numberBetween(5, 50),
            'DURACION_PROMEDIO_DE_LLAMADAS' => $this->faker->randomFloat(1, 5, 30),
            'TIEMPO_PROMEDIO_DE_ESPERA' => $this->faker->randomFloat(1, 5, 10),
        ];
    }
}
