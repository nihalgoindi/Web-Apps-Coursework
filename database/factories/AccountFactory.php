<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
   /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */ 
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'email_address' => $this->faker->safeEmail,
            'number_of_posts' => $this->faker->randomDigitNotNull,
           // 'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
