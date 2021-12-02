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
        $p->account_id = 1; //ElonM
        $p->title = "First Post!";
        $p->caption = "First Post!";
        $p->is_deleted = 0;
        $p->save();

        $posts = Post::factory()->count(10)->create();
    }
}
