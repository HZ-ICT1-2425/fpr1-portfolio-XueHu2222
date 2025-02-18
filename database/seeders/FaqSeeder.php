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
                'question' => 'How can you print a document from your laptop at HZ?',
                'answer' => 'Click link and sign in student account.',
                'link' => 'https://hz.mynetpay.nl/Login'
            ],
            [
                'question' => 'How can you scan a document and send it to your laptop at HZ?',
                'answer' => 'Check this link',
                'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/'
            ],
            [
                'question' => 'How can I buy something (like when I sign up for the IT introduction event)
                 on the HZ web shop?',
                'answer' => 'Go to HZ Shop and sign in.',
                'link' => 'https://webshop.hz.nl/webshopapp/defaulten
                .aspx?menu=082076044027019251066025111065201099237062130097'
            ]
        ]);
    }
}
