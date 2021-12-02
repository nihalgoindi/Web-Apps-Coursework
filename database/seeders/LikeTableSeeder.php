<?php

namespace Database\Seeders;
use App\Models\Like;
use Illuminate\Database\Seeder;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $l = new Like;
        $l->is_liked = 1;
        $l->post_id = 1;
        $l->account_id = 1;
        $l->save();

        $likes = Like::factory()->count(10)->create();
    }
}
