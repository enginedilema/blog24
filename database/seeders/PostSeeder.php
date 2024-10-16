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
        $facker = \Faker\Factory::create();
        $users = \App\Models\User::all();

        for($i=0;$i<250;$i++){
            \App\Models\Post::create([
                'title' => $facker->sentence(),
                'content' => $facker->text(rand(500, 900)),
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
