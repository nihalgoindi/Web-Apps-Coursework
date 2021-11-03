<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post;
        $p->caption = "First Post!";
        $p->save();
    }
}
