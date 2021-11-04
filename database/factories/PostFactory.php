<?php

namespace Database\Factories;


use App\Models\Post;
use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */ 
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'caption' => $this->faker->sentence(10),
            'number_of_likes' => $this->faker->randomDigitNotNull,
            'number_of_comments' => $this->faker->randomDigitNotNull,
            'account_id' => Account::inRandomOrder()->first()->id,
        ];
    }    
}
