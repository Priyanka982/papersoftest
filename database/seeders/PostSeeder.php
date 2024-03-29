<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Post::insert([
            [
                'title' => 'News',
                'content' => 'Arvind Kejriwal arrest LIVE updates | Recent remarks by U.S. State Department on Delhi CM arrest unwarranted: MEA',
                'user_id' => 2,
            ],
            [
                'title' => 'Sports',
                'content' => 'RR vs DC Live Updates: Mukesh cleans up Jaiswal to get DC off to flyer',
                'user_id' => 2,
            ],
            [
                'title' => 'Stock',
                'content' => 'Highlights from the newly released report on the social stock exchange—new funding sources,',
                'user_id' => 2,
            ],
            [
                'title' => 'News',
                'content' => 'Arvind Kejriwal arrest LIVE updates | Recent remarks by U.S. State Department on Delhi CM arrest unwarranted: MEA',
                'user_id' => 2,
            ],
            [
                'title' => 'Sports',
                'content' => 'RR vs DC Live Updates: Mukesh cleans up Jaiswal to get DC off to flyer',
                'user_id' => 2,
            ],
            [
                'title' => 'Stock',
                'content' => 'Highlights from the newly released report on the social stock exchange—new funding sources,',
                'user_id' => 2,
            ],                        
        ]);
    }
}
