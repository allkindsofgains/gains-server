<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Block>
 */
class BlockFactory extends Factory
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
            'description' => fake()->text(),
            'start_date' => fake()->date('m/d/Y'),
            'end_date' => fake()->date('/m/d/Y'),
            'user_id' => User::factory(),
        ];
    }
}
