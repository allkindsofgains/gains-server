<?php

namespace Database\Factories;

use App\Models\Log;
use App\Models\Session;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'video_url' => fake()->imageUrl(50, 50, null, true),
            'video_path' => fake()->imageUrl(50, 50, null, true),
            'screenshot_url' => fake()->imageUrl(50, 50, null, true),
            'screenshot_path' => fake()->imageUrl(50, 50, null, true),
            'user_id' => User::all()->random()->id,
            'log_id' => Log::all()->random()->id,
            'session_id' => Session::all()->random()->id,
        ];
    }
}
