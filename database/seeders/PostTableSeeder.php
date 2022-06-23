<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::firstOrCreate(
                                [
                                    'title' => 'Test Title 1',
                                    'body' => 'Test Body 1',
                                    'user_id'=> 1

                                ]
                        );
    }
}
