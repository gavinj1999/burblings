<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Blog;
use App\Traits\UnsplashResponse;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    use UnsplashResponse;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug'=> $this->faker->slug(5),
            'title'=> $this->faker->realText(14),
            'image'=>$this->baseImage(),
            'featured' =>rand(0,1),
            'highlight' => rand(0,1)
        ];
    }
}
