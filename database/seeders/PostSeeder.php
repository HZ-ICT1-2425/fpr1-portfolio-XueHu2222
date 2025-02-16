<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::insert([
            [
                'title' => 'This is title 1',
                'slug' => Str::slug('This is title 1'),
                'summary' => substr(('This is title 1'), 0, 50),
                'body' => 'This is body text',
            ],
            [
                'title' => 'This is title 2 change',
                'slug' => Str::slug('This is title 2'),
                'summary' => substr(('This is title 2'), 0, 50),
                'body' => 'This is body text',
            ]
        ]);
    }
}
