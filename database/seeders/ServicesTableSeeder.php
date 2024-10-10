<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 9,
                'slug' => 'career-counselling',
                'name' => 'Career Counselling',
                'excerpt' => 'Get expert Career Counselling to chart the best path for your future. We guide you through every step to ensure you\'re ready for the global job market.',
                'description' => '<h2>Career Counselling</h2>

<p>Get expert Career Counselling to chart the best path for your future. We guide you through every step to ensure you&#39;re ready for the global job market.</p>

<div class="service-details">
<h3>Why Career Counselling?</h3>

<p>Choosing the right career path is crucial for long-term satisfaction and success. Our career counselling service helps individuals make informed decisions about their education, career options, and professional growth. Whether you&rsquo;re a student, recent graduate, or a professional looking for a career shift, our team is here to assist.</p>

<h3>Key Benefits of Our Career Counselling Service</h3>

<ul>
<li><strong>Personalized Career Plan:</strong> We analyze your interests, strengths, and career goals to design a personalized career development plan that matches your skills and ambitions.</li>
<li><strong>Exploring Opportunities:</strong> We help you understand various career opportunities available in your field of interest, both locally and globally, ensuring you&#39;re well-informed of your options.</li>
<li><strong>Market Trends:</strong> Our experts stay updated on job market trends, providing you with the latest information on in-demand jobs, industries, and career paths to ensure your future prospects remain strong.</li>
<li><strong>Skill Development:</strong> We identify gaps in your skill set and recommend training or certification programs to enhance your qualifications, making you more competitive in the job market.</li>
</ul>

<h3>Our Counselling Process</h3>

<ol>
<li><strong>Initial Consultation:</strong> We start with an in-depth consultation to understand your career goals, personal preferences, and professional experience.</li>
<li><strong>Career Assessment:</strong> We conduct a thorough assessment, utilizing tools like personality tests, career aptitude tests, and skills evaluations to get a comprehensive understanding of your strengths.</li>
<li><strong>Career Mapping:</strong> Based on the assessment, we create a clear and actionable career map outlining the steps you need to take to reach your goals.</li>
<li><strong>Ongoing Mentorship:</strong> We offer ongoing support and mentorship to ensure you&#39;re on track, helping with networking strategies, job search tips, and interview preparations.</li>
</ol>

<h3>Specialized Counselling for Students and Professionals</h3>

<p>We offer customized career counselling for both students and working professionals:</p>

<ul>
<li><strong>For Students:</strong> Our counsellors guide students through education choices, entrance exams, scholarships, and internship opportunities, ensuring that their academic journey aligns with their long-term career goals.</li>
<li><strong>For Professionals:</strong> We assist working professionals in making career transitions, advancing in their current role, or shifting to a completely new industry. Our services include resume writing, interview coaching, and job search strategies.</li>
</ul>

<h3>Global Career Guidance</h3>

<p>As the job market becomes more globalized, we help you prepare for opportunities abroad. Our career counselling service provides guidance on international job markets, visa regulations, work culture differences, and how to build a successful international career.</p>

<h3>Success Stories</h3>

<p>Over the years, we have helped countless individuals successfully navigate their career paths. From helping students secure scholarships abroad to aiding professionals in transitioning to leadership roles, our counsellors are dedicated to your success.</p>

<h3>Get Started with Us</h3>

<p>If you&rsquo;re ready to take the next step in your career, contact us today to schedule your first counselling session. Our team is excited to help you unlock your full potential and achieve your career dreams.</p>
</div>',
                'category_id' => NULL,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => 'fa fa-concierge-bell',
                'color' => '#000000',
                'data' => '{"icon_image": "http://consultancy.test/website/assets/img/icon/s_icon01.svg"}',
                'meta_name' => 'Career Counselling',
                'meta_description' => 'Get expert Career Counselling to chart the best path for your future. We guide you through every step to ensure you\'re ready for the global job market.',
                'meta_keywords' => NULL,
                'created_at' => '2024-09-23 10:41:40',
                'updated_at' => '2024-10-10 05:59:18',
            ),
            1 => 
            array (
                'id' => 10,
                'slug' => 'visa-guidance',
                'name' => 'Visa Guidance',
                'excerpt' => 'Navigate the visa process with ease through our comprehensive Visa Guidance services. We simplify the process and help you submit a strong application.',
                'description' => '<h2>Visa Guidance</h2>

<p>Navigate the visa process with ease through our comprehensive Visa Guidance services. We simplify the process and help you submit a strong application.</p>

<div class="service-details">
<h3>Why Visa Guidance is Important</h3>

<p>Applying for a visa can be a complex and overwhelming process, with different countries having their own unique requirements, procedures, and regulations. Our Visa Guidance service is designed to help you through every stage of the application process, ensuring that you avoid common mistakes and submit a complete, accurate, and compelling application.</p>

<h3>How We Help You</h3>

<ul>
<li><strong>Comprehensive Document Checklist:</strong> We provide you with a detailed checklist of all the required documents specific to your visa type, making sure you don&rsquo;t miss any crucial paperwork.</li>
<li><strong>Application Review:</strong> Our team reviews your visa application to ensure accuracy and completeness, reducing the chances of rejection due to errors or missing information.</li>
<li><strong>Tailored Guidance for Each Visa Type:</strong> Whether you&rsquo;re applying for a student, work, tourist, or family visa, we offer tailored guidance specific to the visa category you&#39;re applying for.</li>
<li><strong>Interview Preparation:</strong> If your visa process requires an interview, we conduct mock interviews to help you prepare, boosting your confidence and ensuring you&rsquo;re ready to answer any questions asked by immigration officers.</li>
<li><strong>Visa Updates:</strong> Immigration laws and visa rules can change. We keep you informed of any updates, ensuring your application complies with the latest regulations.</li>
</ul>

<h3>Our Visa Guidance Process</h3>

<ol>
<li><strong>Initial Consultation:</strong> We begin with a consultation to understand your visa needs and identify the best visa type for your situation.</li>
<li><strong>Eligibility Check:</strong> We conduct a thorough eligibility check to ensure that you meet the requirements of the visa you&rsquo;re applying for, helping to increase your chances of approval.</li>
<li><strong>Document Preparation:</strong> Our team helps you gather and organize all the necessary documents, ensuring everything is in order before submission.</li>
<li><strong>Application Submission:</strong> We assist with the online or paper submission of your visa application, making sure it&rsquo;s filed correctly and promptly.</li>
<li><strong>Post-Submission Support:</strong> After submission, we track your application status and offer support in case additional documents or clarifications are requested.</li>
</ol>

<h3>Types of Visas We Assist With</h3>

<ul>
<li><strong>Student Visa:</strong> Whether you&#39;re applying for undergraduate, graduate, or research programs, we help you prepare and submit a strong student visa application, including guidance on required financial and academic documents.</li>
<li><strong>Work Visa:</strong> Our team helps professionals navigate the work visa process, from securing the necessary employment documents to meeting the country-specific work permit requirements.</li>
<li><strong>Tourist Visa:</strong> If you&#39;re planning to travel for leisure, we assist with short-term visa applications, ensuring you meet the travel and financial requirements.</li>
<li><strong>Family Visa:</strong> For those seeking to reunite with family members abroad, we help with dependent or family visa applications, streamlining the process to bring you closer to your loved ones.</li>
</ul>

<h3>Success Rate and Client Satisfaction</h3>

<p>We take pride in our high success rate for visa approvals. Our clients trust us for our thorough and professional approach. Whether you&#39;re applying for a visa for the first time or reapplying, we are dedicated to making the process as smooth and stress-free as possible.</p>

<h3>Get Started Today</h3>

<p>Ready to start your visa application journey? Contact us today for expert visa guidance and ensure that your application stands out. We are here to provide you with the tools, knowledge, and support needed to secure your visa successfully.</p>
</div>',
                'category_id' => NULL,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => 'fa fa-concierge-bell',
                'color' => '#000000',
                'data' => '{"icon_image": "http://consultancy.test/website/assets/img/icon/s_icon02.svg"}',
                'meta_name' => 'Visa Guidance',
                'meta_description' => 'Navigate the visa process with ease through our comprehensive Visa Guidance services. We simplify the process and help you submit a strong application.',
                'meta_keywords' => NULL,
                'created_at' => '2024-09-23 10:41:40',
                'updated_at' => '2024-10-10 06:01:21',
            ),
            2 => 
            array (
                'id' => 11,
                'slug' => 'financial-planning',
                'name' => 'Financial Planning',
                'excerpt' => 'Secure your financial future with our tailored Financial Planning services. We help you plan ahead to fund your international education or migration.',
                'description' => '<h2>Financial Planning</h2>

<p>Ensure financial success for your education and visa application with our expert Financial Planning services. We help you navigate through budgeting, scholarships, and financial documentation requirements.</p>

<div class="service-details">
<h3>Why Financial Planning is Important</h3>

<p>Financial planning is a critical aspect of studying or migrating abroad. Many visa applications require proof of financial stability, and understanding how to manage your finances effectively is key to ensuring a smooth process. Our Financial Planning service is designed to help you prepare for all financial requirements, from tuition fees to living expenses.</p>

<h3>What We Offer</h3>

<ul>
<li><strong>Budgeting:</strong> We help you create a comprehensive budget that accounts for all expenses, including tuition, housing, insurance, and day-to-day living costs in your destination country.</li>
<li><strong>Scholarship Guidance:</strong> Our team assists you in identifying and applying for scholarships, grants, and financial aid opportunities to help reduce the cost of education abroad.</li>
<li><strong>Proof of Funds:</strong> Many visa applications require proof of financial stability. We guide you on how to gather and present the necessary documentation, such as bank statements and sponsorship letters.</li>
<li><strong>Loan Assistance:</strong> If necessary, we provide advice on securing education loans, ensuring that you understand the terms and repayment options.</li>
<li><strong>Foreign Exchange:</strong> We offer insights into currency exchange and the best methods to manage your money while studying or living abroad, ensuring you get the best value for your funds.</li>
</ul>

<h3>Financial Documentation Support</h3>

<p>Many visa and university applications require detailed financial documentation. We assist you in preparing and presenting the necessary financial proof, ensuring it meets all the required criteria for visa approval. This includes:</p>

<ul>
<li><strong>Bank Statements:</strong> Guidance on how to collect and present bank statements that prove financial solvency.</li>
<li><strong>Sponsorship Letters:</strong> Assistance in drafting sponsorship or affidavit of support letters from family or financial guarantors.</li>
<li><strong>Loan Approval Letters:</strong> Support in presenting education loan approval letters that meet visa requirements.</li>
</ul>

<h3>Long-Term Financial Planning</h3>

<p>Beyond just visa and education expenses, we also help you plan for the long-term financial impact of studying abroad. This includes strategies for managing expenses, saving while living overseas, and repaying any loans post-graduation.</p>

<h3>Start Planning Today</h3>

<p>Don&rsquo;t let financial hurdles hold you back from pursuing your dreams. Contact us today for a personalized financial planning session and ensure your financial future is secure.</p>
</div>',
                'category_id' => NULL,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => 'fa fa-concierge-bell',
                'color' => '#000000',
                'data' => '{"icon_image": "http://consultancy.test/website/assets/img/icon/s_icon03.svg"}',
                'meta_name' => 'Financial Planning',
                'meta_description' => 'Secure your financial future with our tailored Financial Planning services. We help you plan ahead to fund your international education or migration.',
                'meta_keywords' => NULL,
                'created_at' => '2024-09-23 10:41:40',
                'updated_at' => '2024-10-10 06:02:25',
            ),
            3 => 
            array (
                'id' => 12,
                'slug' => 'application-assistance',
                'name' => 'Application Assistance',
                'excerpt' => 'Ensure your application stands out with our Application Assistance. From form completion to submission, we handle every detail with care.',
                'description' => '<section class="service">
<h2>Application Assistance</h2>
<p>Maximize your chances of success with our comprehensive Application Assistance service. From filling out forms to reviewing documents, we guide you through every step of the process to ensure a strong and complete application.</p>

<div class="service-details">
<h3>Why Application Assistance is Essential</h3>
<p>Submitting a visa or university application is a critical step toward your future, and even small errors can result in delays or rejections. Our Application Assistance service ensures that your application is complete, accurate, and tailored to meet the specific requirements of your chosen institution or visa type.</p>

<h3>How We Assist You</h3>
<ul>
<li><strong>Form Filling Guidance:</strong> We help you accurately complete application forms for universities, visas, and scholarships, ensuring all necessary details are correctly entered.</li>
<li><strong>Document Checklist:</strong> Our team provides you with a personalized checklist of all required documents, helping you stay organized and avoid missing any critical paperwork.</li>
<li><strong>Document Review:</strong> We carefully review all submitted documents to ensure they meet the guidelines of the respective institution or visa authority.</li>
<li><strong>Personal Statement & Essays:</strong> We assist in drafting or refining your personal statement, statement of purpose, and any required essays to ensure they are clear, compelling, and reflect your strengths.</li>
<li><strong>Application Tracking:</strong> Once your application is submitted, we help track its progress and provide updates on any further steps required.</li>
</ul>

<h3>Our Step-by-Step Application Process</h3>
<ol>
<li><strong>Initial Consultation:</strong> We start with a consultation to understand your goals and help identify the best application strategy for your visa or educational pursuit.</li>
<li><strong>Form Completion:</strong> Our experts guide you through the process of completing all necessary forms accurately and efficiently.</li>
<li><strong>Document Collection:</strong> We assist in gathering the required documents, such as transcripts, recommendation letters, financial documents, and identification papers.</li>
<li><strong>Document Submission:</strong> We ensure that all documents are correctly submitted, either electronically or by post, to the right authorities.</li>
<li><strong>Follow-Up:</strong> After submission, we provide ongoing support, helping you respond to any additional requests from visa or academic institutions.</li>
</ol>

<h3>Types of Applications We Support</h3>
<ul>
<li><strong>University Applications:</strong> We guide you through the university application process, from selecting the right programs to submitting transcripts and recommendation letters.</li>
<li><strong>Visa Applications:</strong> Our team ensures that your visa application is completed accurately, including assistance with all necessary documents and forms.</li>
<li><strong>Scholarship Applications:</strong> We assist in identifying and applying for scholarships, ensuring you meet all the eligibility criteria and deadlines.</li>
</ul>

<h3>Proven Success</h3>
<p>Our team has helped numerous students and professionals successfully complete their applications, securing visas and admissions to top universities worldwide. With our assistance, you can be confident that your application will stand out for its completeness and professionalism.</p>

<h3>Start Your Application Journey</h3>
<p>Ready to begin your application process? Contact us today to get expert assistance and make sure your application is in the best possible shape for success.</p>
</div>
</section>',
                'category_id' => NULL,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => 'fa fa-concierge-bell',
                'color' => '#000000',
                'data' => '{"icon_image": "http://consultancy.test/website/assets/img/icon/s_icon04.svg"}',
                'meta_name' => 'Application Assistance',
                'meta_description' => 'Ensure your application stands out with our Application Assistance. From form completion to submission, we handle every detail with care.',
                'meta_keywords' => NULL,
                'created_at' => '2024-09-23 10:41:40',
                'updated_at' => '2024-10-10 06:03:16',
            ),
            4 => 
            array (
                'id' => 13,
                'slug' => 'document-preparation',
                'name' => 'Document Preparation',
                'excerpt' => 'Get all your paperwork in order with our Document Preparation services. We ensure all your documents meet the necessary requirements for a successful application.',
                'description' => '<h2>Document Preparation</h2>

<p>Ensure that all your documents are in order and meet the necessary standards with our expert Document Preparation service. We assist you in gathering, organizing, and preparing all the paperwork required for visa, university, and scholarship applications.</p>

<div class="service-details">
<h3>Why Document Preparation is Crucial</h3>

<p>Proper documentation is a vital part of any application process. Missing or incorrectly prepared documents can lead to delays or rejection of your application. Our Document Preparation service ensures that you have everything in place, fully compliant with the latest regulations and standards.</p>

<h3>What We Offer</h3>

<ul>
<li><strong>Comprehensive Document Checklists:</strong> We provide you with detailed, personalized checklists of all the documents required based on your specific visa or university application.</li>
<li><strong>Document Review:</strong> We review all documents to ensure they are accurate, complete, and comply with the specific requirements of the visa or educational institution.</li>
<li><strong>Financial Documentation Assistance:</strong> Guidance on preparing financial documents such as bank statements, proof of funds, and sponsorship letters to meet visa or scholarship requirements.</li>
<li><strong>Transcripts &amp; Certificates:</strong> Assistance in obtaining and verifying academic transcripts, certificates, and other educational records to support your application.</li>
<li><strong>Document Formatting:</strong> We ensure that all documents are properly formatted, translated (if necessary), and presented in a professional manner that adheres to institutional or governmental guidelines.</li>
</ul>

<h3>Types of Documents We Assist With</h3>

<ul>
<li><strong>Visa Documents:</strong> Guidance on preparing visa-related documents such as passport copies, visa forms, financial statements, and invitation letters.</li>
<li><strong>Academic Documents:</strong> Help with gathering academic transcripts, degree certificates, recommendation letters, and statements of purpose for university applications.</li>
<li><strong>Financial Documents:</strong> Assistance in organizing bank statements, financial guarantees, and loan approval letters to meet visa or scholarship requirements.</li>
<li><strong>Supporting Documents:</strong> Preparation of additional documents such as work experience letters, internships, or personal declarations required for certain visa categories or scholarships.</li>
</ul>

<h3>Our Document Preparation Process</h3>

<ol>
<li><strong>Initial Assessment:</strong> We start by assessing the documents required for your specific application and create a custom checklist based on your needs.</li>
<li><strong>Document Gathering:</strong> Our team assists you in collecting all necessary documents, ensuring they are up to date and meet the application guidelines.</li>
<li><strong>Document Review:</strong> We thoroughly review all documents, checking for accuracy, completeness, and compliance with requirements.</li>
<li><strong>Final Submission:</strong> Once reviewed and approved, we help you submit the documents as part of your overall visa, university, or scholarship application.</li>
</ol>

<h3>Accuracy and Compliance</h3>

<p>With constantly changing regulations and application requirements, it&rsquo;s essential to stay compliant. Our experts stay up to date with the latest requirements for various visa and university applications, ensuring your documents meet the highest standards.</p>

<h3>Get Started with Document Preparation</h3>

<p>Don&rsquo;t let missing or incomplete documents hold you back. Contact us today to get expert assistance with preparing and organizing all the necessary paperwork for your application.</p>
</div>',
                'category_id' => NULL,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => 'fa fa-concierge-bell',
                'color' => '#000000',
                'data' => '{"icon_image": "http://consultancy.test/website/assets/img/icon/s_icon05.svg"}',
                'meta_name' => 'Document Preparation',
                'meta_description' => 'Get all your paperwork in order with our Document Preparation services. We ensure all your documents meet the necessary requirements for a successful application.',
                'meta_keywords' => NULL,
                'created_at' => '2024-09-23 10:41:40',
                'updated_at' => '2024-10-10 06:04:07',
            ),
            5 => 
            array (
                'id' => 14,
                'slug' => 'health-insurance-guidance',
                'name' => 'Health Insurance Guidance',
                'excerpt' => 'Stay protected abroad with our Health Insurance Guidance. We help you choose the best plan to keep you covered during your journey.',
                'description' => '<h2>Health Insurance Guidance</h2>

<p>Protect your health and meet visa requirements with our expert Health Insurance Guidance. We help you choose the right plan to cover your medical needs while studying or living abroad.</p>

<div class="service-details">
<h3>Why Health Insurance is Important</h3>

<p>Having health insurance is often a requirement for both visa approval and university enrollment. More importantly, it ensures that you have access to medical care in case of illness or injury. Our Health Insurance Guidance service ensures that you find a suitable plan to meet your needs and comply with all visa or institution requirements.</p>

<h3>What We Offer</h3>

<ul>
<li><strong>Insurance Requirement Guidance:</strong> We help you understand the health insurance requirements specific to your destination country, visa type, and educational institution.</li>
<li><strong>Plan Comparison:</strong> Our team provides you with comparisons of different insurance plans, highlighting their coverage, costs, and benefits, so you can make an informed decision.</li>
<li><strong>Application Assistance:</strong> We assist you in applying for health insurance by guiding you through the application forms and ensuring all necessary information is provided.</li>
<li><strong>Policy Review:</strong> We review your chosen insurance policy to ensure it meets the required standards, including coverage for hospital stays, emergency care, and prescription medication.</li>
<li><strong>Claims Process Support:</strong> If you need to file an insurance claim, we provide assistance in understanding the process and submitting the required paperwork.</li>
</ul>

<h3>Types of Health Insurance Plans</h3>

<ul>
<li><strong>Student Health Insurance:</strong> Special plans designed to cover international students, providing essential coverage at affordable rates.</li>
<li><strong>Travel Health Insurance:</strong> Temporary health insurance plans that cover medical expenses during your travel and stay abroad.</li>
<li><strong>Comprehensive Health Insurance:</strong> Full-coverage plans that provide more extensive medical benefits, including outpatient services, prescriptions, and dental care.</li>
</ul>

<h3>Our Health Insurance Guidance Process</h3>

<ol>
<li><strong>Initial Consultation:</strong> We assess your health insurance needs based on your visa type, destination country, and any specific university requirements.</li>
<li><strong>Plan Selection:</strong> We provide you with a list of recommended health insurance plans that meet your needs and comply with regulations.</li>
<li><strong>Application Support:</strong> Our team assists in completing the health insurance application and submitting it to the insurance provider.</li>
<li><strong>Policy Review and Compliance:</strong> Once the policy is issued, we ensure it meets the required coverage for your visa and institution, helping you make any adjustments if needed.</li>
</ol>

<h3>Stay Covered with the Right Health Insurance</h3>

<p>Don&rsquo;t risk your health or your visa approval. Contact us today for expert guidance on choosing and applying for the right health insurance plan.</p>
</div>',
                'category_id' => NULL,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => 'fa fa-concierge-bell',
                'color' => '#000000',
                'data' => '{"icon_image": "http://consultancy.test/website/assets/img/icon/s_icon06.svg"}',
                'meta_name' => 'Health Insurance Guidance',
                'meta_description' => 'Stay protected abroad with our Health Insurance Guidance. We help you choose the best plan to keep you covered during your journey.',
                'meta_keywords' => NULL,
                'created_at' => '2024-09-23 10:41:40',
                'updated_at' => '2024-10-10 06:04:48',
            ),
            6 => 
            array (
                'id' => 15,
                'slug' => 'language-proficiency-test',
                'name' => 'Language Proficiency Test',
                'excerpt' => 'Ace your language proficiency tests with our expert guidance. We provide support and resources for IELTS, TOEFL, and more to help you succeed.',
                'description' => '<h2>Language Proficiency Test Guidance</h2>

<p>Prepare for your language proficiency test with our expert guidance. We help you navigate popular tests like IELTS, TOEFL, and PTE, ensuring that you meet the language requirements for visa and university applications.</p>

<div class="service-details">
<h3>Why Language Proficiency Matters</h3>

<p>Language proficiency is a key requirement for both visa applications and university admissions. Demonstrating a strong command of the language can improve your chances of success. Our Language Proficiency Test Guidance service ensures you are fully prepared for the test and meet the required scores.</p>

<h3>What We Offer</h3>

<ul>
<li><strong>Test Selection:</strong> We help you choose the appropriate language proficiency test based on your destination country, visa, or university requirements.</li>
<li><strong>Test Preparation Materials:</strong> Access to resources and study materials for popular tests like IELTS, TOEFL, and PTE, ensuring you are well-prepared for all sections of the exam.</li>
<li><strong>Mock Tests and Practice Sessions:</strong> We provide practice tests and mock exams to help you get familiar with the format and timing of the real test.</li>
<li><strong>Score Requirements Guidance:</strong> We guide you on the required score benchmarks for visa applications and university admissions, helping you set realistic goals.</li>
<li><strong>Application Assistance:</strong> Assistance in registering for the language test and submitting your results to the relevant authorities or institutions.</li>
</ul>

<h3>Popular Language Proficiency Tests</h3>

<ul>
<li><strong>IELTS (International English Language Testing System):</strong> A widely accepted test for English proficiency used for studying, working, or migrating to countries like the UK, Australia, and Canada.</li>
<li><strong>TOEFL (Test of English as a Foreign Language):</strong> Accepted primarily in the USA and Canada, TOEFL is used for university admissions and visas requiring proof of English language proficiency.</li>
<li><strong>PTE (Pearson Test of English):</strong> A fast and flexible test widely accepted in the UK, Australia, and New Zealand, known for its quick results.</li>
<li><strong>Other Tests:</strong> We also guide you through other language tests such as the Cambridge English exams, depending on your needs and the country of application.</li>
</ul>

<h3>Our Language Proficiency Guidance Process</h3>

<ol>
<li><strong>Initial Assessment:</strong> We assess your language proficiency level and recommend the best test for your needs, based on the institution or country you are applying to.</li>
<li><strong>Test Registration Support:</strong> Our team assists in registering for the test, providing guidance on available test dates, venues, and deadlines.</li>
<li><strong>Preparation and Mock Tests:</strong> We provide you with the necessary materials and mock tests to help you practice and improve your test-taking skills.</li>
<li><strong>Score Reporting:</strong> Once the test is completed, we help you submit your scores to the relevant authorities or institutions, ensuring your results meet the requirements.</li>
</ol>

<h3>Achieve Your Desired Scores</h3>

<p>With our comprehensive guidance, you can confidently approach your language proficiency test and achieve the scores you need for your visa or university application. Contact us today to begin your preparation journey.</p>
</div>',
                'category_id' => NULL,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => 'fa fa-concierge-bell',
                'color' => '#000000',
                'data' => '{"icon_image": "http://consultancy.test/website/assets/img/icon/s_icon07.svg"}',
                'meta_name' => 'Language Proficiency Test',
                'meta_description' => 'Ace your language proficiency tests with our expert guidance. We provide support and resources for IELTS, TOEFL, and more to help you succeed.',
                'meta_keywords' => NULL,
                'created_at' => '2024-09-23 10:41:40',
                'updated_at' => '2024-10-10 06:05:33',
            ),
            7 => 
            array (
                'id' => 16,
                'slug' => 'visa-submission-and-tracking',
                'name' => 'Visa Submission and Tracking',
                'excerpt' => 'Submit and track your visa with ease using our Visa Submission and Tracking services. We keep you updated on your application\'s status every step of the way.',
                'description' => '<h2>Visa Submission and Tracking</h2>

<p>Simplify the final steps of your visa application with our Visa Submission and Tracking service. We help you submit your application correctly and monitor its progress to ensure a smooth process.</p>

<div class="service-details">
<h3>Why Visa Submission and Tracking is Important</h3>

<p>Submitting your visa application correctly and on time is crucial for avoiding delays or rejections. Tracking your application allows you to stay informed about its progress, providing peace of mind. Our Visa Submission and Tracking service ensures that your application is properly submitted and monitored throughout the process.</p>

<h3>What We Offer</h3>

<ul>
<li><strong>Visa Submission Assistance:</strong> We assist in compiling all the required documents, completing application forms, and ensuring everything is in order for a successful submission.</li>
<li><strong>Guidance on Submission Channels:</strong> We help you understand the available submission methods (online or in-person) based on the visa type and destination country.</li>
<li><strong>Appointment Scheduling:</strong> If an in-person submission or biometrics appointment is required, we assist in scheduling and preparing you for it.</li>
<li><strong>Document Submission Review:</strong> Our team reviews your documents before submission to avoid any errors that could result in delays.</li>
<li><strong>Application Tracking:</strong> We provide you with regular updates on your visa application status and track it through the official channels.</li>
</ul>

<h3>Our Visa Submission and Tracking Process</h3>

<ol>
<li><strong>Document Check and Finalization:</strong> We verify all your documents to ensure they are complete and accurate before submission.</li>
<li><strong>Application Submission:</strong> We help you submit the visa application either online or at the appropriate visa application center, ensuring all steps are followed correctly.</li>
<li><strong>Tracking Updates:</strong> We continuously monitor your application status and provide regular updates, keeping you informed about its progress.</li>
<li><strong>Final Notification:</strong> Once the visa is processed, we notify you and guide you through the next steps, whether it&rsquo;s collecting your visa or preparing for your travel.</li>
</ol>

<h3>Peace of Mind with Our Tracking Service</h3>

<p>Stay informed and stress-free by using our Visa Submission and Tracking service. With our expert assistance, you can avoid delays, track your application progress, and ensure a smooth journey through the visa process. Contact us today to get started.</p>
</div>',
                'category_id' => NULL,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => 'fa fa-concierge-bell',
                'color' => '#000000',
                'data' => '{"icon_image": "http://consultancy.test/website/assets/img/icon/s_icon08.svg"}',
                'meta_name' => 'Visa Submission and Tracking',
                'meta_description' => 'Submit and track your visa with ease using our Visa Submission and Tracking services. We keep you updated on your application\'s status every step of the way.',
                'meta_keywords' => NULL,
                'created_at' => '2024-09-23 10:41:40',
                'updated_at' => '2024-10-10 06:06:14',
            ),
        ));
        
        
    }
}