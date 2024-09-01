<?php

namespace Database\Seeders;

use App\Models\Admin\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'IELTS',
                'slug' => 'ielts',
                'excerpt' => 'Find top-quality IELTS preparation materials, practice tests, and expert guidance. Boost your scores with our comprehensive resources and personalized support. Achieve your English language goals with confidence!',
                'description' => '
                    <header>
                        <h1>IELTS: Your Path to Global Opportunities</h1>
                        <p>Prepare effectively for the International English Language Testing System (IELTS) with our comprehensive resources and expert guidance.</p>
                    </header>
                    <section id="what-is-ielts">
                        <h2>What is IELTS?</h2>
                        <p>The IELTS is a globally recognized English language proficiency test for non-native speakers, used for academic, immigration, and professional purposes.</p>
                        <ul>
                            <li><strong>Two Types:</strong> IELTS Academic and IELTS General Training</li>
                            <li><strong>Skills Tested:</strong> Listening, Reading, Writing, and Speaking</li>
                            <li><strong>Scoring:</strong> Band scores from 1 to 9</li>
                        </ul>
                    </section>
                    <section id="why-take-ielts">
                        <h2>Why Take IELTS?</h2>
                        <p>IELTS opens doors to study, work, and live in English-speaking countries. Accepted by over 10,000 organizations worldwide, it’s your key to global opportunities.</p>
                        <ul>
                            <li><strong>For Education:</strong> Required by universities and colleges in English-speaking countries</li>
                            <li><strong>For Employment:</strong> Recognized by employers worldwide for job applications</li>
                            <li><strong>For Immigration:</strong> Used by governments as part of their immigration processes</li>
                        </ul>
                    </section>
                    <section id="ielts-preparation">
                        <h2>IELTS Preparation</h2>
                        <p>Boost your IELTS score with our range of preparation resources designed to improve your skills and confidence.</p>
                        <ul>
                            <li><strong>Practice Tests:</strong> Simulate the real exam with our practice tests</li>
                            <li><strong>Study Materials:</strong> Access books, online courses, and video tutorials</li>
                            <li><strong>Expert Tips:</strong> Learn from IELTS trainers and examiners</li>
                        </ul>
                    </section>
                    <section id="test-format">
                        <h2>IELTS Test Format</h2>
                        <p>The IELTS test is divided into four sections, each designed to assess different language skills:</p>
                        <ul>
                            <li><strong>Listening:</strong> 30 minutes of listening tasks</li>
                            <li><strong>Reading:</strong> 60 minutes with 3 reading passages</li>
                            <li><strong>Writing:</strong> 60 minutes with 2 writing tasks</li>
                            <li><strong>Speaking:</strong> 11-14 minutes of a face-to-face interview</li>
                        </ul>
                    </section>
                    <section id="test-day-tips">
                        <h2>Test Day Tips</h2>
                        <p>Maximize your performance on test day with these practical tips:</p>
                        <ul>
                            <li>Arrive early to your test center</li>
                            <li>Bring valid identification</li>
                            <li>Stay calm and manage your time effectively</li>
                        </ul>
                    </section>
                    <section id="enrollment">
                        <h2>How to Enroll</h2>
                        <p>Ready to take the IELTS? Enroll in the test at an authorized test center near you:</p>
                        <ul>
                            <li><strong>Find a Test Center:</strong> Search for nearby locations</li>
                            <li><strong>Register Online:</strong> Complete the registration process online</li>
                            <li><strong>Pay the Fee:</strong> Submit your payment to confirm your spot</li>
                        </ul>
                        <p><a href="/enroll" class="btn">Enroll Now</a></p>
                    </section>
                ',
                'meta_name' => 'IELTS',
                'meta_description' => 'Find top-quality IELTS preparation materials, practice tests, and expert guidance. Boost your scores with our comprehensive resources and personalized support. Achieve your English language goals with confidence!',
                'meta_keywords' => 'ielts, english proficiency',
            ],
            [
                'name' => 'PTE',
                'slug' => 'pte',
                'excerpt' => 'Enhance your PTE preparation with our expert resources. Access practice tests, study materials, and tips to achieve high scores and meet your English language goals.',
                'description' => '
                    <header>
                        <h1>PTE: Pearson Test of English</h1>
                        <p>Prepare for the Pearson Test of English (PTE) with our comprehensive resources designed to help you succeed.</p>
                    </header>
                    <section id="what-is-pte">
                        <h2>What is PTE?</h2>
                        <p>PTE is a computer-based English language test accepted by educational institutions and governments worldwide for study, work, and migration purposes.</p>
                        <ul>
                            <li><strong>Test Format:</strong> Speaking, Writing, Reading, and Listening</li>
                            <li><strong>Scoring:</strong> Automated scoring from 10 to 90</li>
                        </ul>
                    </section>
                    <section id="why-take-pte">
                        <h2>Why Take PTE?</h2>
                        <p>PTE is known for its fast results and convenient test dates, making it a popular choice for students and professionals alike.</p>
                        <ul>
                            <li><strong>For Education:</strong> Accepted by thousands of universities worldwide</li>
                            <li><strong>For Employment:</strong> Recognized by companies globally</li>
                            <li><strong>For Immigration:</strong> Approved for visa applications by various governments</li>
                        </ul>
                    </section>
                    <section id="pte-preparation">
                        <h2>PTE Preparation</h2>
                        <p>Our PTE preparation resources help you build the skills needed to succeed on test day.</p>
                        <ul>
                            <li><strong>Practice Tests:</strong> Experience the PTE test format with our practice tests</li>
                            <li><strong>Study Materials:</strong> Access online courses, books, and more</li>
                            <li><strong>Expert Tips:</strong> Learn strategies from PTE trainers</li>
                        </ul>
                    </section>
                    <section id="test-format">
                        <h2>PTE Test Format</h2>
                        <p>The PTE test evaluates your English skills through various tasks:</p>
                        <ul>
                            <li><strong>Speaking & Writing:</strong> 77-93 minutes of integrated tasks</li>
                            <li><strong>Reading:</strong> 32-41 minutes of reading tasks</li>
                            <li><strong>Listening:</strong> 45-57 minutes of listening tasks</li>
                        </ul>
                    </section>
                    <section id="test-day-tips">
                        <h2>Test Day Tips</h2>
                        <p>Ensure a smooth PTE test day experience with these tips:</p>
                        <ul>
                            <li>Arrive early and relax</li>
                            <li>Bring valid identification</li>
                            <li>Follow the instructions carefully</li>
                        </ul>
                    </section>
                    <section id="enrollment">
                        <h2>How to Enroll</h2>
                        <p>Ready to take the PTE? Enroll in the test at an authorized test center near you:</p>
                        <ul>
                            <li><strong>Find a Test Center:</strong> Search for nearby locations</li>
                            <li><strong>Register Online:</strong> Complete the registration process online</li>
                            <li><strong>Pay the Fee:</strong> Submit your payment to confirm your spot</li>
                        </ul>
                        <p><a href="/enroll" class="btn">Enroll Now</a></p>
                    </section>
                ',
                'meta_name' => 'PTE',
                'meta_description' => 'Enhance your PTE preparation with our expert resources. Access practice tests, study materials, and tips to achieve high scores and meet your English language goals.',
                'meta_keywords' => 'pte, pearson test of english, english proficiency',
            ],
            [
                'name' => 'TOEFL',
                'slug' => 'toefl',
                'excerpt' => 'Prepare for the TOEFL test with our comprehensive resources. Access practice tests, study guides, and expert tips to excel in this English language exam.',
                'description' => '
                    <header>
                        <h1>TOEFL: Test of English as a Foreign Language</h1>
                        <p>Get ready for the TOEFL exam with our detailed preparation resources designed to help you achieve your best score.</p>
                    </header>
                    <section id="what-is-toefl">
                        <h2>What is TOEFL?</h2>
                        <p>TOEFL is an English language test widely accepted by universities and colleges in English-speaking countries, assessing your ability to use and understand English in an academic setting.</p>
                        <ul>
                            <li><strong>Test Format:</strong> Reading, Listening, Speaking, and Writing</li>
                            <li><strong>Scoring:</strong> Scores range from 0 to 120</li>
                        </ul>
                    </section>
                    <section id="why-take-toefl">
                        <h2>Why Take TOEFL?</h2>
                        <p>TOEFL is a preferred test for students seeking admission to higher education institutions in English-speaking countries.</p>
                        <ul>
                            <li><strong>For Education:</strong> Required by thousands of universities worldwide</li>
                            <li><strong>For Employment:</strong> Recognized by many international employers</li>
                        </ul>
                    </section>
                    <section id="toefl-preparation">
                        <h2>TOEFL Preparation</h2>
                        <p>Our TOEFL preparation tools provide everything you need to succeed on test day.</p>
                        <ul>
                            <li><strong>Practice Tests:</strong> Get familiar with the test format</li>
                            <li><strong>Study Guides:</strong> Access comprehensive study materials</li>
                            <li><strong>Expert Advice:</strong> Learn from TOEFL experts</li>
                        </ul>
                    </section>
                    <section id="test-format">
                        <h2>TOEFL Test Format</h2>
                        <p>The TOEFL test is designed to measure your English proficiency through various sections:</p>
                        <ul>
                            <li><strong>Reading:</strong> 60-80 minutes of reading passages</li>
                            <li><strong>Listening:</strong> 60-90 minutes of listening tasks</li>
                            <li><strong>Speaking:</strong> 20 minutes of speaking tasks</li>
                            <li><strong>Writing:</strong> 50 minutes of writing tasks</li>
                        </ul>
                    </section>
                    <section id="test-day-tips">
                        <h2>Test Day Tips</h2>
                        <p>Follow these tips to ensure success on your TOEFL test day:</p>
                        <ul>
                            <li>Arrive early to your test center</li>
                            <li>Bring the required identification</li>
                            <li>Stay calm and focused during the test</li>
                        </ul>
                    </section>
                    <section id="enrollment">
                        <h2>How to Enroll</h2>
                        <p>Ready to take the TOEFL? Enroll in the test at an authorized test center near you:</p>
                        <ul>
                            <li><strong>Find a Test Center:</strong> Search for nearby locations</li>
                            <li><strong>Register Online:</strong> Complete the registration process online</li>
                            <li><strong>Pay the Fee:</strong> Submit your payment to confirm your spot</li>
                        </ul>
                        <p><a href="/enroll" class="btn">Enroll Now</a></p>
                    </section>
                ',
                'meta_name' => 'TOEFL',
                'meta_description' => 'Prepare for the TOEFL test with our comprehensive resources. Access practice tests, study guides, and expert tips to excel in this English language exam.',
                'meta_keywords' => 'toefl, test of english as a foreign language, english proficiency',
            ],
            [
                'name' => 'Duolingo',
                'slug' => 'duolingo',
                'excerpt' => 'Prepare for the Duolingo English Test with our expert resources. Access practice tests, study guides, and tips to score high and achieve your goals.',
                'description' => '
                    <header>
                        <h1>Duolingo English Test: Affordable and Convenient</h1>
                        <p>Prepare for the Duolingo English Test with our tailored resources designed to help you succeed.</p>
                    </header>
                    <section id="what-is-duolingo">
                        <h2>What is the Duolingo English Test?</h2>
                        <p>The Duolingo English Test is an online English proficiency test accepted by institutions and organizations worldwide for admissions and certification purposes.</p>
                        <ul>
                            <li><strong>Test Format:</strong> Adaptive test with Reading, Listening, Speaking, and Writing sections</li>
                            <li><strong>Scoring:</strong> Score range from 10 to 160</li>
                        </ul>
                    </section>
                    <section id="why-take-duolingo">
                        <h2>Why Take Duolingo?</h2>
                        <p>The Duolingo English Test is an affordable and convenient option for demonstrating English proficiency, with the flexibility to take it online from anywhere.</p>
                        <ul>
                            <li><strong>For Education:</strong> Accepted by numerous universities and colleges worldwide</li>
                            <li><strong>For Certification:</strong> Recognized by organizations for professional purposes</li>
                        </ul>
                    </section>
                    <section id="duolingo-preparation">
                        <h2>Duolingo Test Preparation</h2>
                        <p>Our Duolingo test preparation resources help you achieve your desired score with ease.</p>
                        <ul>
                            <li><strong>Practice Tests:</strong> Get familiar with the adaptive test format</li>
                            <li><strong>Study Guides:</strong> Access comprehensive study materials</li>
                            <li><strong>Expert Tips:</strong> Learn strategies to improve your performance</li>
                        </ul>
                    </section>
                    <section id="test-format">
                        <h2>Duolingo Test Format</h2>
                        <p>The Duolingo English Test is designed to assess your English skills through various tasks:</p>
                        <ul>
                            <li><strong>Adaptive Test:</strong> Approximately 45 minutes of testing, varying based on your performance</li>
                            <li><strong>Video Interview:</strong> 10 minutes of open-ended questions to assess speaking abilities</li>
                        </ul>
                    </section>
                    <section id="test-day-tips">
                        <h2>Test Day Tips</h2>
                        <p>Ensure a smooth Duolingo test day experience with these tips:</p>
                        <ul>
                            <li>Test in a quiet environment with a reliable internet connection</li>
                            <li>Ensure your computer meets the technical requirements</li>
                            <li>Follow the instructions carefully and remain calm</li>
                        </ul>
                    </section>
                    <section id="enrollment">
                        <h2>How to Enroll</h2>
                        <p>Ready to take the Duolingo English Test? Register online and take the test at your convenience:</p>
                        <ul>
                            <li><strong>Register Online:</strong> Create an account and select a test date</li>
                            <li><strong>Pay the Fee:</strong> Submit your payment to confirm your spot</li>
                        </ul>
                        <p><a href="/enroll" class="btn">Enroll Now</a></p>
                    </section>
                ',
                'meta_name' => 'Duolingo English Test',
                'meta_description' => 'Prepare for the Duolingo English Test with our expert resources. Access practice tests, study guides, and tips to score high and achieve your goals.',
                'meta_keywords' => 'duolingo english test, english proficiency, duolingo test preparation',
            ],
            [
                'name' => 'SAT',
                'slug' => 'sat',
                'excerpt' => 'Get ready for the SAT with our expert resources. Access practice tests, study guides, and tips to achieve your best score and secure your college admission.',
                'description' => '
                    <header>
                        <h1>SAT: Your Gateway to College Admissions</h1>
                        <p>Prepare for the SAT with our comprehensive resources designed to help you achieve your best score and open doors to your desired college.</p>
                    </header>
                    <section id="what-is-sat">
                        <h2>What is SAT?</h2>
                        <p>The SAT is a standardized test widely used for college admissions in the United States, assessing your readiness for college-level work.</p>
                        <ul>
                            <li><strong>Test Sections:</strong> Reading, Writing and Language, Math, and an optional Essay</li>
                            <li><strong>Scoring:</strong> Total scores range from 400 to 1600</li>
                        </ul>
                    </section>
                    <section id="why-take-sat">
                        <h2>Why Take SAT?</h2>
                        <p>The SAT is a key component of college applications, with many universities requiring SAT scores for admission.</p>
                        <ul>
                            <li><strong>For Education:</strong> Accepted by colleges and universities across the U.S. and worldwide</li>
                            <li><strong>For Scholarships:</strong> High SAT scores can help you qualify for scholarships</li>
                        </ul>
                    </section>
                    <section id="sat-preparation">
                        <h2>SAT Preparation</h2>
                        <p>Our SAT preparation resources help you build the skills needed to excel on test day.</p>
                        <ul>
                            <li><strong>Practice Tests:</strong> Experience the SAT test format with our practice tests</li>
                            <li><strong>Study Guides:</strong> Access study materials for each test section</li>
                            <li><strong>Expert Tips:</strong> Learn strategies from SAT tutors</li>
                        </ul>
                    </section>
                    <section id="test-format">
                        <h2>SAT Test Format</h2>
                        <p>The SAT test assesses your academic abilities through various sections:</p>
                        <ul>
                            <li><strong>Reading:</strong> 65 minutes of reading passages and answering questions</li>
                            <li><strong>Writing and Language:</strong> 35 minutes of language and grammar tasks</li>
                            <li><strong>Math:</strong> 80 minutes of math problems, with and without a calculator</li>
                            <li><strong>Essay (Optional):</strong> 50 minutes to write an essay based on a provided prompt</li>
                        </ul>
                    </section>
                    <section id="test-day-tips">
                        <h2>Test Day Tips</h2>
                        <p>Maximize your performance on SAT test day with these tips:</p>
                        <ul>
                            <li>Get a good night\'s sleep before the test</li>
                            <li>Bring your SAT admission ticket and photo ID</li>
                            <li>Stay focused and pace yourself during the test</li>
                        </ul>
                    </section>
                    <section id="enrollment">
                        <h2>How to Enroll</h2>
                        <p>Ready to take the SAT? Enroll in the test at a nearby test center or online:</p>
                        <ul>
                            <li><strong>Find a Test Center:</strong> Locate a nearby test center</li>
                            <li><strong>Register Online:</strong> Complete the registration process online</li>
                            <li><strong>Pay the Fee:</strong> Submit your payment to confirm your spot</li>
                        </ul>
                        <p><a href="/enroll" class="btn">Enroll Now</a></p>
                    </section>
                ',
                'meta_name' => 'SAT',
                'meta_description' => 'Get ready for the SAT with our expert resources. Access practice tests, study guides, and tips to achieve your best score and secure your college admission.',
                'meta_keywords' => 'sat, college admissions test, sat test preparation',
            ],
            [
                'name' => 'GRE',
                'slug' => 'gre',
                'excerpt' => 'Achieve your best GRE score with our comprehensive preparation resources. Access practice tests, study guides, and expert tips to succeed on this graduate-level test.',
                'description' => '
                    <header>
                        <h1>GRE: The Graduate Record Examination</h1>
                        <p>Prepare for the GRE with our expert resources designed to help you succeed and achieve your graduate school goals.</p>
                    </header>
                    <section id="what-is-gre">
                        <h2>What is GRE?</h2>
                        <p>The GRE is a standardized test required by many graduate schools, assessing your readiness for advanced study in various disciplines.</p>
                        <ul>
                            <li><strong>Test Sections:</strong> Verbal Reasoning, Quantitative Reasoning, and Analytical Writing</li>
                            <li><strong>Scoring:</strong> Scores range from 130 to 170 per section</li>
                        </ul>
                    </section>
                    <section id="why-take-gre">
                        <h2>Why Take GRE?</h2>
                        <p>The GRE is a key component of graduate school applications, accepted by thousands of institutions worldwide.</p>
                        <ul>
                            <li><strong>For Graduate School:</strong> Required by many graduate programs</li>
                            <li><strong>For Fellowships:</strong> High GRE scores can help you qualify for fellowships and assistantships</li>
                        </ul>
                    </section>
                    <section id="gre-preparation">
                        <h2>GRE Preparation</h2>
                        <p>Our GRE preparation tools provide you with the resources needed to achieve your best score.</p>
                        <ul>
                            <li><strong>Practice Tests:</strong> Experience the GRE format with our practice tests</li>
                            <li><strong>Study Guides:</strong> Access study materials for each section</li>
                            <li><strong>Expert Tips:</strong> Learn strategies from GRE tutors</li>
                        </ul>
                    </section>
                    <section id="test-format">
                        <h2>GRE Test Format</h2>
                        <p>The GRE test is structured to assess various academic abilities:</p>
                        <ul>
                            <li><strong>Verbal Reasoning:</strong> 60 minutes of reading comprehension and critical thinking tasks</li>
                            <li><strong>Quantitative Reasoning:</strong> 70 minutes of math problems and data interpretation</li>
                            <li><strong>Analytical Writing:</strong> 60 minutes to write two essays: an issue and an argument task</li>
                        </ul>
                    </section>
                    <section id="test-day-tips">
                        <h2>Test Day Tips</h2>
                        <p>Ensure success on GRE test day with these tips:</p>
                        <ul>
                            <li>Arrive early at your test center</li>
                            <li>Bring valid identification and confirmation documents</li>
                            <li>Stay calm and pace yourself throughout the test</li>
                        </ul>
                    </section>
                    <section id="enrollment">
                        <h2>How to Enroll</h2>
                        <p>Ready to take the GRE? Register for the test at a nearby test center or online:</p>
                        <ul>
                            <li><strong>Find a Test Center:</strong> Locate a test center near you</li>
                            <li><strong>Register Online:</strong> Complete the registration process online</li>
                            <li><strong>Pay the Fee:</strong> Submit your payment to confirm your spot</li>
                        </ul>
                        <p><a href="/enroll" class="btn">Enroll Now</a></p>
                    </section>
                ',
                'meta_name' => 'GRE',
                'meta_description' => 'Achieve your best GRE score with our comprehensive preparation resources. Access practice tests, study guides, and expert tips to succeed on this graduate-level test.',
                'meta_keywords' => 'gre, graduate record examination, gre test preparation',
            ],
        ];

        Course::whereNotNull('id')->delete();

        Course::insert($data);
    }
}
