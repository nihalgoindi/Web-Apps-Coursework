<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{   /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */ 
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->sentence(10),
            'account_id' => Post::inRandomOrder()->first()->id,
            'post_id' => Post::inRandomOrder()->first()->id,

        ];
    }
}
