<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = new User;
        $u->name = "Elon Musk";
        $u->email = "ElonM@Billionaire.com";
        $u->password = bcrypt('password');
        $u->save();

        $users = User::factory()->count(10)->create();
    }
}