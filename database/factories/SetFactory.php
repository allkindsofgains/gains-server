<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\User;
use App\Models\Session;
use App\Models\Log;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Set>
 */
class SetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'exercise_id' => Exercise::all()->random()->id,
            'reps' => fake()->numberBetween(1, 15),
            'rpe' => fake()->numberBetween(5, 10),
            'weight' => fake()->numberBetween(135, 500),
            'user_id' => User::all()->random()->id,
            'session_id' => Session::all()->random()->id,
            'log_id' => Log::all()->random()->id,
            'notes' => fake()->text(20),
        ];
    }
}
