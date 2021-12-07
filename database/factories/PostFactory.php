<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
Use App\Models\Account;

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
            //
            'title' => $this->faker->sentence(3),
            'body' => $this->faker->sentence(10),
            'account_id' => Account::inRandomOrder()->first()->id,
        ];
    }
}
