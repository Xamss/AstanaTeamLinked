<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug'=>$this->faker->slug,
            'user_id'=>\App\Models\User::factory(),
            'category_id'=>\App\Models\Category::factory(),
            'age'=>$this->faker->numberBetween(0, 30),
            'profession'=>$this->faker->word,
            'experience'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph,
            'name' => $this->faker->name(),
        ];
    }
}
