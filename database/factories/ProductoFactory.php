<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            "nombre" => $this->faker->name ,
            "precio" => $this->faker->randomNumber(4),
            "cantidad" => $this->faker->randomNumber(2),
            "fecha_entrega" => $this->faker->dateTime()
        ];
    }
}
