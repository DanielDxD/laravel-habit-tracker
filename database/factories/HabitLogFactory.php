<?php

namespace Database\Factories;

use App\Models\Habit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HabitLog>
 */
class HabitLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory(),
            'habit_id' => Habit::inRandomOrder()->value('id') ?? Habit::factory(),
            'completed_at' => $this->faker->unique()->dateTimeBetween('-30 days', 'now')->format('Y-m-d'),
        ];
    }
}
