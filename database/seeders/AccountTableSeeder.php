<?php

namespace Database\Seeders;
use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Account;
        $a->username = "ElonM";
        $a->email_address = "ElonM@billionaire.com";
        $a->number_of_posts = 5;
        $a->save();
    }
}
