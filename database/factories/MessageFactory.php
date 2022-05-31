<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'commented'=>$this->faker->boolean,
            'content'=>$this->faker->paragraph,
            'user_id'=>\App\Models\User::all()->random(),
            'project_id'=>\App\Models\Project::all()->random(),
        ];
    }
}
