<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t = new Topic;
        $t->title = "Pets";
        $t->description = "Posts found here are about pets.";
        $t->is_deleted = 0;
        $t->account_id = 1;
        $t->post_id = 1; //ElonM
        $t->save();
        
        $topics = Topic::factory()->count(10)->create();
    }
}
