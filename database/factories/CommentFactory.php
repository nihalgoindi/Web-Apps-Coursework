<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Account;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
             'text' => $this->faker->sentence(10),
             'post_id' => Post::inRandomOrder()->first()->id,
             'account_id' => Account::inRandomOrder()->first()->id,
        ];
    }
}
