<?php

namespace Database\Factories;

use App\Models\ExerciseCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
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
            'user_id' => User::factory(),
            'exercise_category_id' => ExerciseCategory::factory()
        ];
    }
}
