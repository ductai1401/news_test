<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            	
            'title' => $this->faker->paragraph(1),
            'intro' => $this->faker->paragraph(10),	
            'content' => $this->faker->paragraph(20),
            'image' => $this->faker->imageUrl(640,480),	
            'status' =>  1,
	        'id_category' => \App\Models\Category::get()->random()->id,
            'key_word' => $this->faker->name(),
        ];
    }
}
