<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'username' => 'zombyard',
            'email' => 'zombyard@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'first_name' => "jaw",
            'last_name' => "dog",
            "date_of_birth" => fake()->dateTimeThisDecade() ->format('d/m/Y'),
            "weight" =>fake()->numberBetween(135, 225),
            'profile_picture_url' => fake()->imageUrl(50, 50, null, true),
            'remember_token' => Str::random(10),
        ]);

        User::factory(10)->create();
    }
}
