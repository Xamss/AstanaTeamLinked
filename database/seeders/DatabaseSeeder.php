<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    const g = 5;


    public function run()
    {
        \App\Models\User::factory(50)->create();
        \App\Models\Project::factory(20)->create();
        \App\Models\Category::factory(10)->create();

        $projects = \App\Models\Project::all();

        \App\Models\User::all()->each(function ($user) use ($projects) {
            $user->projects()->attach(
                $projects->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
        \App\Models\Post::factory(30)->create();
        \App\Models\Message::factory(60)->create();

    }
}
