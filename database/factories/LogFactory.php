<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Exercise;
use App\Models\Session;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->text(20),
            'notes' => fake()->text(50),
            'collapsed'=> fake()->boolean(),
            'private'=> fake()->boolean(),
            'notes_visibility'=> fake()->boolean(),
            'user_id' => User::all()->random()->id,
            'session_id' => Session::all()->random()->id,
            'exercise_id' => Exercise::all()->random()->id,
        ];
    }
}
