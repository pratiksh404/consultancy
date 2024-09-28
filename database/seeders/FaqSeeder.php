<?php

namespace Database\Seeders;

use App\Models\Admin\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::whereNotNull('id')->delete();
        $faqs = [
            [
                'question' => '<h3>What documents are required for a student visa application?</h3>',
                'answer' => "<p>Generally, you'll need to submit a valid passport, proof of admission from the university, financial statements, passport-sized photographs, academic transcripts, language proficiency test scores (like IELTS/TOEFL), and visa application forms.</p>",
            ],
            [
                'question' => '<h3>How long does the visa application process take?</h3>',
                'answer' => "<p>The processing time depends on the country and type of visa you're applying for. It can range from a few weeks to several months. We recommend applying as early as possible.</p>",
            ],
            [
                'question' => '<h3>Can I work while studying on a student visa?</h3>',
                'answer' => '<p>Many countries allow students to work part-time during their studies, usually up to 20 hours per week. It’s important to check the specific regulations of the country you are applying to.</p>',
            ],
            [
                'question' => '<h3>What is the visa interview like?</h3>',
                'answer' => '<p>During the visa interview, the officer may ask about your study plans, financial capability, and intent to return to your home country after your studies. Being honest and prepared is key.</p>',
            ],
            [
                'question' => '<h3>Can my family accompany me on my student visa?</h3>',
                'answer' => '<p>In many cases, immediate family members, such as a spouse or children, can apply for a dependent visa to accompany you. However, the rules vary by country.</p>',
            ],
            [
                'question' => '<h3>What if my visa application is rejected?</h3>',
                'answer' => '<p>If your visa is rejected, we will help you understand the reasons and guide you through reapplying. Often, applications can be improved by addressing the reasons for the initial rejection.</p>',
            ],
        ];

        Faq::insert($faqs);
    }
}
