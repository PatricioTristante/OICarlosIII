<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $max_ciclo_id = (int)DB::table('ciclos')->max('id');
        return [
            'ciclo_id' => rand(1, $max_ciclo_id), // Generar un ciclo_id aleatorio entre 1 y el máximo ID de ciclos
            'nombre' => fake()->firstName(),
            'apellidos' => fake()->lastName() . ' ' . fake()->lastName(),
        ];
    }
}
