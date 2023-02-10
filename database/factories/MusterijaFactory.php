<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kozmeticar;

class MusterijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'broj_telefona' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'kozmeticar_id' => Kozmeticar::factory()
        ];
    }
}