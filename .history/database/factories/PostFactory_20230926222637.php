<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Traits\UnsplashResponse;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    use UnsplashResponse;

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paragraphs = $this->faker->paragraphs(4);
        $title = $this->faker->realText(50);
        $subtitle = $this->faker->realText(10);
        $post = "";

        foreach ($paragraphs as $para) {
            $post .= "<p>".$para."</p>";
        }



        return [
            'slug'=> $this->faker->slug(),
            'title'=> $this->faker->realText(14),
            'subtitle'=> $this->faker->realText(100),
            'body'=> $post,
            'image'=> $this->baseImage(),
            'thumbnail'=> $this->baseImage(),
            'category_id' => Category::all()->random()->id,
            'user_id' => 1,
            'featured' => 0,
            'highlight' => 0
        ];
    }
}
