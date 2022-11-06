<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'arabic_title' => $this->faker->sentence(),
            'short_description' => $this->faker->paragraph(2),
            'arabic_short_description' => $this->faker->paragraph(2),
            'long_description' => $this->faker->paragraph(50),
            'arabic_long_description' => $this->faker->paragraph(50),
            'long_description_title_color' => $this->faker->colorName() ,
            'long_description_image' => $this->faker->imageUrl() ,
            'long_description_sub_image' => $this->faker->imageUrl() ,
        ];
    }
}
