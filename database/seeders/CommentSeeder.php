<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facker = \Faker\Factory::create();
        $users = \App\Models\User::all();
        $posts = \App\Models\Post::all();

        foreach($posts as $post){
            for($i=0;$i<50;$i++){
                \App\Models\Comment::create([
                    'content' => $facker->paragraph(1),
                    'user_id' => $users->random()->id,
                    'post_id' => $post->id,
                ]);
            }
        }
    }
}
