<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BlockSeeder::class,
            SessionSeeder::class,
            ExerciseCategorySeeder::class,
            ExerciseSeeder::class,
            LogSeeder::class,
            SetSeeder::class,
            CommentSeeder::class,
            VideoSeeder::class,
        ]);
    }
}
