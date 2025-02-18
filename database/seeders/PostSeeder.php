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
                'title' => 'Study Choice',
                'slug' => 'study-choice',
                'summary' => 'In the past three years,
                I worked in the legal field, handling various legal matters......',
                'body' => '<p>In the past three years, I worked in the legal field,
 handling various legal matters and cases. Although my work in law was valuable,
 I found that my interest and passion for information technology (ICT) were growing stronger.
 Here are the specific reasons why I decided to choose ICT as my major:</p>
<p>Interest in Technology: While working with legal matters, I frequently used technology tools and systems,
 such as electronic document management and legal research software.
  I became curious about how these technologies work and wanted to learn more about them.</p>
<p>Intersection of Law and Technology: With technology becoming more important in the legal field,
 such as in managing electronic evidence, data protection laws, and cybersecurity,
  I realized that understanding ICT would help me better address these tech-related legal issues.</p>
<p>New Career Opportunities: Although I value my work in law, I wanted to explore new career paths.
 The ICT field is growing quickly, and having technical skills will open up more opportunities and
 challenges for my career. I believe studying ICT will provide me with new career options.</p>
<p>Career Transition: I wanted to change my career path and gain new skills.
 Technology is important in many industries, and future careers will rely more on technical skills.
  By studying ICT, I can transition from law to technology and reach my career goals.</p>',
            ],
            [
                'title' => 'Programming Experience',
                'slug' => 'programming-experience',
                'summary' => 'Although I do not have any formal programming experience yet,
                 I am highly motivated......',
                'body' => '<p>Although I do not have any programming experience yet,
 I am very interested and excited to start learning. I have always been curious about
 how technology works and how software is created to solve real-world problems. Even though
  I have not had the chance to write code, I have explored the basics of what programming involves by reading articles
   and watching tutorials online. This has made me even more eager to dive into the subject.</p>
    <p>I understand that learning to program might be challenging, especially in the beginning,
    but I am prepared to face these challenges. I plan to start with simple programming languages like Python,
     which is known to be beginner-friendly, and gradually work my way up to more complex concepts.
      I know that mastering coding takes time, so I am ready to put in consistent effort, practice regularly,
       and stay patient throughout the process.</p>
    <p>One of the things I am most excited about is the opportunity to solve problems creatively through coding.
     I love the idea of breaking down a problem into smaller steps and figuring out how to make a program work.
      I am also looking forward to working on group projects and learning from my classmates and teachers,
       as I believe teamwork and collaboration are key in the ICT field.</p>
<p>In addition, I understand the importance of time management and self-discipline in learning programming.
 I will make sure to set aside time every week for practicing code and reviewing class materials.
  I am confident that with the right mindset and dedication, I will be able to develop solid programming skills.
   Even though I am starting from scratch, I am excited about the journey ahead
   and all the possibilities that programming can offer.</p>',
            ]
        ]);
    }
}
