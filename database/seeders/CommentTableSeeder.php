<?php

namespace Database\Seeders;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = new Comment;
        $c->text = "First Comment!";
        $c->post_id = 1;
        $c->account_id = 1;
        $c->save();

        $comments = Comment::factory()->count(10)->create();
    }
}
