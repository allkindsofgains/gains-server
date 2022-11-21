<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Block;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Session>
 */
class SessionFactory extends Factory
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
            'block_id' => Block::factory(),
            'start_date' => fake()->date('m/d/Y'),
            'end_date' => fake()->date('m/d/Y'),
            'session_rpe' => fake()->numberBetween(5.0, 10.0),
            'notes' => fake()->text(),
            'user_id' => User::factory(),
        ];
    }
}
