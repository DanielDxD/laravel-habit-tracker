<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habit>
 */
class HabitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $habits = [
            'Ler 10 páginas',
            'Meditar por 15 minutos',
            'Beber 2 litros de água',
            'Fazer 30 minutos de exercícios',
            'Dormir 8 horas',
            'Estudar programação',
            'Evitar o celular ao acordar',
        ];

        return [
            'user_id' => $this->faker->unique()->randomElement(User::all()->pluck('id')),
            'name' => $this->faker->unique()->randomElement($habits),
        ];
    }
}
