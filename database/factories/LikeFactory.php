<?php

namespace Database\Factories;
use App\Models\Post;
use App\Models\Account;

use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'is_liked' => 1,
            'post_id' => Post::inRandomOrder()->first()->id,
            'account_id' => Account::inRandomOrder()->first()->id,
        ];
    }
}
