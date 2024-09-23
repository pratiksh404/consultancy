<?php

namespace Database\Seeders;

use App\Models\Admin\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::whereNotNull('id')->delete();
        $data = [
            [
                'name' => 'Career Counselling',
                'slug' => 'career-counselling',
                'excerpt' => "Get expert Career Counselling to chart the best path for your future. We guide you through every step to ensure you're ready for the global job market.",
                'data' => [
                    'icon_image' => asset('website/assets/img/icon/s_icon01.svg'),
                ],
            ],
            [
                'name' => 'Visa Guidance',
                'slug' => 'visa-guidance',
                'excerpt' => 'Navigate the visa process with ease through our comprehensive Visa Guidance services. We simplify the process and help you submit a strong application.',
                'data' => [
                    'icon_image' => asset('website/assets/img/icon/s_icon02.svg'),
                ],
            ],
            [
                'name' => 'Financial Planning',
                'slug' => 'financial-planning',
                'excerpt' => 'Secure your financial future with our tailored Financial Planning services. We help you plan ahead to fund your international education or migration.',
                'data' => [
                    'icon_image' => asset('website/assets/img/icon/s_icon03.svg'),
                ],
            ],
            [
                'name' => 'Application Assistance',
                'slug' => 'application-assistance',
                'excerpt' => 'Ensure your application stands out with our Application Assistance. From form completion to submission, we handle every detail with care.',
                'data' => [
                    'icon_image' => asset('website/assets/img/icon/s_icon04.svg'),
                ],
            ],
            [
                'name' => 'Document Preparation',
                'slug' => 'document-preparation',
                'excerpt' => 'Get all your paperwork in order with our Document Preparation services. We ensure all your documents meet the necessary requirements for a successful application.',
                'data' => [
                    'icon_image' => asset('website/assets/img/icon/s_icon05.svg'),
                ],
            ],
            [
                'name' => 'Health Insurance Guidance',
                'slug' => 'health-insurance-guidance',
                'excerpt' => 'Stay protected abroad with our Health Insurance Guidance. We help you choose the best plan to keep you covered during your journey.',
                'data' => [
                    'icon_image' => asset('website/assets/img/icon/s_icon06.svg'),
                ],
            ],
            [
                'name' => 'Language Proficiency Test',
                'slug' => 'language-proficiency-test',
                'excerpt' => 'Ace your language proficiency tests with our expert guidance. We provide support and resources for IELTS, TOEFL, and more to help you succeed.',
                'data' => [
                    'icon_image' => asset('website/assets/img/icon/s_icon07.svg'),
                ],
            ],
            [
                'name' => 'Visa Submission and Tracking',
                'slug' => 'visa-submission-and-tracking',
                'excerpt' => "Submit and track your visa with ease using our Visa Submission and Tracking services. We keep you updated on your application's status every step of the way.",
                'data' => [
                    'icon_image' => asset('website/assets/img/icon/s_icon08.svg'),
                ],
            ],
        ];
        foreach ($data as $service) {
            Service::create($service);
        }
    }
}
