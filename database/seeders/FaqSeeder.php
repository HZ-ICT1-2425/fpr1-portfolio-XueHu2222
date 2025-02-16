<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::insert([
            [
                'question' => 'This is question 1?',
                'answer' => 'This is answer 1',
                'link' => 'https://google.com'
            ],
            [
                'question' => 'This is question 2?',
                'answer' => 'This is answer 2',
                'link' => null
            ]
        ]);
    }
}
