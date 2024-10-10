<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 8,
                'slug' => 'score-comparison',
                'name' => 'Score Comparison',
                'excerpt' => 'Score comparison among various English proficiency test examinations',
                'description' => '<table>
<tbody>
<tr>
<td style="width:169.5px"><span style="color:#000000">Level of Proficiency Described</span></td>
<td style="width:50.9667px"><span style="color:#000000">IELTS 1-9</span></td>
<td style="width:44.7333px"><span style="color:#000000">PTE 0-90</span></td>
<td style="width:69.3833px"><span style="color:#000000">TOFEL-IBT 1-120</span></td>
<td style="width:81.9px"><span style="color:#000000">SAT 400-1600</span></td>
<td style="width:102.667px"><span style="color:#000000">GRE 130-170 Scaled Score Verbal-Quantitative</span></td>
<td style="width:82.7333px"><span style="color:#000000">GMAT 200-800</span></td>
<td style="width:91.7167px"><span style="color:#000000">Remarks</span></td>
</tr>
<tr>
<td style="width:169.5px"><span style="color:#000000">Expert</span></td>
<td style="width:50.9667px">9</td>
<td style="width:44.7333px">86-90</td>
<td style="width:63.3833px">118-120</td>
<td style="width:81.9px">1480-1600</td>
<td style="width:102.667px">&nbsp;</td>
<td style="width:82.7333px">&nbsp;</td>
<td style="width:91.7167px">Ensures Scholarships</td>
</tr>
<tr>
<td style="width:169.5px"><span style="color:#000000">Very Good</span></td>
<td style="width:50.9667px">8.5</td>
<td style="width:44.7333px">83-85</td>
<td style="width:63.3833px">115-117</td>
<td style="width:81.9px">1320-1479</td>
<td style="width:102.667px">&nbsp;</td>
<td style="width:82.7333px">&nbsp;</td>
<td style="width:91.7167px">Ensures Scholarships</td>
</tr>
<tr>
<td style="width:169.5px"><span style="color:#000000">Very Good</span></td>
<td style="width:50.9667px">8</td>
<td style="width:44.7333px">79-82</td>
<td style="width:63.3833px">110-114</td>
<td style="width:81.9px">1280-1319</td>
<td style="width:102.667px">&nbsp;</td>
<td style="width:82.7333px">&nbsp;</td>
<td style="width:91.7167px">Eligible for Scholarships</td>
</tr>
<tr>
<td style="width:169.5px"><span style="color:#000000">Good</span></td>
<td style="width:50.9667px">7.5</td>
<td style="width:44.7333px">73-78</td>
<td style="width:63.3833px">102-109</td>
<td style="width:81.9px">1120-1279</td>
<td style="width:102.667px">&nbsp;</td>
<td style="width:82.7333px">&nbsp;</td>
<td style="width:91.7167px">Eligible for Scholarships</td>
</tr>
<tr>
<td style="width:169.5px"><span style="color:#000000">Good</span></td>
<td style="width:50.9667px">7</td>
<td style="width:44.7333px">65-72</td>
<td style="width:63.3833px">94-101</td>
<td rowspan="4" style="width:81.9px">Below 1120 has no value for scholarship</td>
<td rowspan="4" style="width:102.667px">Below 147-152 scaled has no value for scholarship</td>
<td rowspan="4" style="width:82.7333px">Below 550 scaled has no value for scholarship</td>
<td style="width:91.7167px">Ensures Admission</td>
</tr>
<tr>
<td style="width:169.5px"><span style="color:#000000">Competent</span></td>
<td style="width:50.9667px">6.5</td>
<td style="width:44.7333px">58-64</td>
<td style="width:63.3833px">79-93</td>
<td style="width:91.7167px">Ensures Admission</td>
</tr>
<tr>
<td style="width:169.5px"><span style="color:#000000">Competent</span></td>
<td style="width:50.9667px">6</td>
<td style="width:44.7333px">50-57</td>
<td style="width:63.3833px">60-78</td>
<td style="width:91.7167px">Tough for Admission</td>
</tr>
<tr>
<td style="width:169.5px"><span style="color:#000000">Modest</span></td>
<td style="width:50.9667px">5.5</td>
<td style="width:44.7333px">43-49</td>
<td style="width:63.3833px">46-59</td>
<td style="width:91.7167px">Few Institutions Accept</td>
</tr>
<tr>
<td style="width:169.5px"><span style="color:#000000">Modest</span></td>
<td style="width:50.9667px">5</td>
<td style="width:44.7333px">36-42</td>
<td style="width:63.3833px">40-46</td>
<td style="width:81.9px">&nbsp;</td>
<td style="width:102.667px">&nbsp;</td>
<td style="width:82.7333px">&nbsp;</td>
<td style="width:91.7167px">Better Sit for Another Test</td>
</tr>
</tbody>
</table>',
                'category_id' => NULL,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": null}',
                'meta_name' => 'Score Comparison',
                'meta_description' => 'Score comparison among various English proficiency test examinations',
                'meta_keywords' => NULL,
                'created_at' => '2024-09-29 04:01:46',
                'updated_at' => '2024-10-09 07:52:51',
            ),
            1 => 
            array (
                'id' => 9,
                'slug' => 'sop-tips',
                'name' => 'SOP Tips',
                'excerpt' => 'How can we write effective statement of purpose ?',
                'description' => '
<div class="container">
<h2>Statement of Purpose (SOP)</h2>

<div class="row">
<div class="col-md-12">
<p>The Statement of Purpose (SOP) is a personal statement that showcases your <strong>motivations</strong>, <strong>academic background</strong>, career aspirations, and how studying in the country aligns with your goals. It is an opportunity for you to express your uniqueness and convince the admissions committee or visa officers of your suitability and potential as a candidate.&nbsp;A great SOP for a study visa displays your <strong>intent to study in the country</strong> and convinces visa officers of your eligibility and genuine intent for student visa applications.</p>
</div>
</div>

<h2>Tips for Writing the Perfect SOP for Student Visa</h2>

<div class="row">
<div class="col-md-6">
<h3>1. Research and Preparation</h3>

<ul>
<li>Familiarize yourself with the specific requirements and guidelines provided by the universities or colleges you are applying to.</li>
<li>Research the program, faculty, and curriculum to understand how they align with your academic and career goals.</li>
</ul>
</div>

<div class="col-md-6">
<h3>2. Understand the Prompt</h3>

<ul>
<li>Read the prompt carefully and understand what the institution is looking for in an SOP.</li>
<li>Identify the key themes or qualities they are seeking in prospective students.</li>
</ul>
</div>
</div>

<div class="row">
<div class="col-md-6">
<h3>3. Structure and Organization</h3>

<ul>
<li>Start with a compelling introduction that grabs the reader&rsquo;s attention and clearly states your purpose and motivation for studying in the country.</li>
<li>Develop a logical and well-organized narrative by dividing your SOP into paragraphs or sections that flow logically.</li>
</ul>
</div>

<div class="col-md-6">
<h3>4. Showcase your Strengths and Experiences</h3>

<ul>
<li>Highlight your academic achievements, research projects, internships, and any relevant experiences that demonstrate your skills and qualifications.</li>
<li>Emphasize how these experiences have shaped your academic and career aspirations.</li>
</ul>
</div>
</div>

<div class="row">
<div class="col-md-6">
<h3>5. Connect Your Goals with the Program</h3>

<ul>
<li>Clearly explain why you have chosen the specific program and how it aligns with your interests and future goals.</li>
<li>Discuss how the program will contribute to your personal and professional growth.</li>
</ul>
</div>

<div class="col-md-6">
<h3>6. Reflect on Challenges and Growth</h3>

<ul>
<li>Share any challenges or obstacles you have overcome in your academic journey and how they have shaped your character and determination.</li>
<li>Reflect on the lessons learned from these experiences and how they have influenced your decision to study in the country.</li>
</ul>
</div>
</div>

<div class="row">
<div class="col-md-6">
<h3>7. Be Authentic and Personal</h3>

<ul>
<li>Write in your own voice, expressing your thoughts and emotions sincerely.</li>
<li>Avoid using generic statements and focus on sharing personal anecdotes and insights.</li>
</ul>
</div>

<div class="col-md-6">
<h3>8. Proofread and Edit</h3>

<ul>
<li>Carefully review your SOP for grammar, spelling, and punctuation errors.</li>
<li>Ensure that your writing is clear, concise, and free from any unnecessary repetition or errors.</li>
</ul>
</div>
</div>

<div class="row">
<div class="col-md-6">
<h3>9. Seek Feedback</h3>

<ul>
<li>Share your SOP with professors, mentors, or trusted individuals who can provide constructive feedback.</li>
<li>Consider seeking assistance from professional SOP writing services for expert guidance.</li>
</ul>
</div>

<div class="col-md-6">
<h3>10. Customize Each SOP</h3>

<ul>
<li>Customize your SOP for each university or college you are applying to.</li>
<li>Highlight the specific reasons why you are interested in that institution and how it fits your academic goals.</li>
</ul>
</div>
</div>

<h2>To Conclude</h2>

<p>Writing an engaging SOP is critical for international students who want to <strong>study abroad</strong>. It enables you to stand out from the crowd, gain admission to your selected college, and receive a student visa. Remember to personalize your SOP to individual requirements, highlight your unique abilities, and demonstrate your eagerness to learn.</p>

<p>&nbsp;</p>
</div>

',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => NULL,
                'meta_name' => NULL,
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-09-29 04:01:46',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            2 => 
            array (
                'id' => 10,
                'slug' => 'salary-certificate',
                'name' => 'Salary Certificate',
                'excerpt' => 'A standard salary certificate required for visa processing.',
                'description' => '
<p>A salary certificate is a document made by an authorized person of an organization proving that a person is employed. This includes his/her salary, employment period, job responsibilities, etc.</p>

<p>&nbsp;</p>

<p><strong>What it is:</strong></p>

<ul>
<li>An official document issued by your employer verifying your employment status, salary, and other relevant details.</li>
<li>Typically includes:
<ul>
<li>Employee&rsquo;s name and contact information.</li>
<li>Employer&rsquo;s name and contact information.</li>
<li>Employee&rsquo;s designation and job title.</li>
<li>Employment start date and current status (employed, on leave, etc.).</li>
<li>Monthly or annual salary amount.</li>
<li>Details of any benefits or allowances received.</li>
<li>Signature and stamp of an authorized representative of the organization.</li>
</ul>
</li>
</ul>

<p><strong>Purpose for Student Visa:</strong></p>

<ul>
<li>Demonstrates your financial stability and ability to cover your living expenses in Australia without relying on part-time work.</li>
<li>Strengthens your visa application by showing a consistent income source.</li>
</ul>

<p><strong>Additional Points:</strong></p>

<ul>
<li>The format might slightly differ between organizations, but the core information remains the same.</li>
<li>Some visa applications may require salary slips or bank statements alongside the certificate for a more comprehensive financial picture.</li>
<li>Ensure the certificate is issued on the organization&rsquo;s official letterhead and signed by a relevant authority like the HR manager or accounts department.</li>
</ul>

<p>&nbsp;</p>

',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => NULL,
                'meta_name' => NULL,
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-09-29 04:01:46',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            3 => 
            array (
                'id' => 12,
                'slug' => 'course-selection',
                'name' => 'Course Selection',
                'excerpt' => NULL,
                'description' => NULL,
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": null}',
                'meta_name' => 'Course Selection',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 11:02:02',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            4 => 
            array (
                'id' => 13,
                'slug' => 'science-courses',
                'name' => 'Science Courses',
                'excerpt' => NULL,
                'description' => '<h1>Science</h1>

<p>Science is one of the ancient and most important academic disciplines, which covers a broad range of subjects. It is also one of the fundamental parts of the term STEM i.e. science, technology, engineering, and mathematics.&nbsp;</p>

<p>Science as a subject is all about observation, experimentation, accumulation of factual information, and the formulation of theories to explain how physical, chemical, atomic, and subatomic systems behave. The science ranges from anthropology, archaeology, paleontology, geology, physics, chemistry, biology, and virology to astronomy and astrophysics. It is a broad discipline that incorporates so many other subjects in it.&nbsp;</p>

<p>Human curiosity and necessity gave birth to science. Science is everywhere.&nbsp;Science is one of the most important subjects students study because it gives them the critical thinking skills they need in every subject.&nbsp;</p>

<p>If you want to contribute to the benefits of mankind by working in the advancement of science and obtain a successful career, a research-oriented science degree at a college or university will be useful to fulfill your dream.</p>

<p>&nbsp;</p>

<h4>Specializations</h4>

<p>The science field is very large; it incorporates Physical, Biological and Chemical Sciences. Examples of areas of specializations include:</p>

<table border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<ul>
<li>Astronomy;</li>
<li>Astrophysics;</li>
<li>Biochemistry;</li>
<li>Bioinformatics;</li>
<li>Biomedical Science;</li>
<li>Biotechnology;</li>
<li>Botany;</li>
<li>Chemistry;</li>
<li>Earth Science;</li>
<li>Ecology;</li>
<li>Entomology;</li>
</ul>
</td>
<td>
<ul>
<li>Environmental Science;</li>
<li>Food Science;</li>
<li>Forensic Science;</li>
<li>Genetics;</li>
<li>Geography;</li>
<li>Geology;</li>
<li>Mathematical Science;</li>
<li>Parasitological Science;</li>
<li>Physics;</li>
<li>Toxicology; and</li>
<li>Zoology.</li>
</ul>
</td>
</tr>
</tbody>
</table>

<h4>&nbsp;</h4>

<h4>Qualifications</h4>

<p>Science programs are offered in the following qualification levels:&nbsp;</p>

<ul>
<li>Certificate</li>
<li>Diploma</li>
<li>Advanced Diploma</li>
<li>Bachelor Degree</li>
<li>Graduate Certificate</li>
<li>Postgraduate Diploma</li>
<li>Masters by research/coursework</li>
<li>PhD</li>
</ul>

<h4>Career Opportunities</h4>

<table border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td>
<ul>
<li>Geologist;</li>
<li>Geophysicist;</li>
<li>Scientist;</li>
<li>Mathematician;</li>
<li>Laboratory Assistant/Technician;</li>
<li>Biochemist;</li>
</ul>
</td>
<td>
<ul>
<li>Chemist;</li>
<li>Ecologist;</li>
<li>Environmental Scientist;</li>
<li>Wildlife Biologist; and</li>
<li>Biotechnician.</li>
</ul>
</td>
</tr>
</tbody>
</table>',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": "12"}',
                'meta_name' => 'Science Courses',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 11:03:52',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            5 => 
            array (
                'id' => 14,
                'slug' => 'statement-of-propose',
                'name' => 'Statement of Propose',
                'excerpt' => NULL,
                'description' => NULL,
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": null}',
                'meta_name' => 'Statement of Propose',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 16:27:33',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            6 => 
            array (
                'id' => 15,
                'slug' => 'science-course-sop',
                'name' => 'Science Course - SOP',
                'excerpt' => NULL,
            'description' => '<p><strong>Statement of Purpose (RAV21DAH)&nbsp;</strong></p>

<p>I feel the 90s kids were a fortunate bunch, born at a critical juncture in history. We could see two distinct worlds growing up; one before the 2000s and the other after it. The former was one where technology was still in its formative years and the latter booming with it,&nbsp;so much so that the technological developments of the last 20 years have surpassed the technological developments of the past 200 years. And with hardware developments taking a back seat, the focus is all on the software as we can see with the recent developments in AI and IoT. In this digital age, everyone is constantly engaged with technical gadgets in one way or the other. This generates DATA and when this unstructured data is processed and analyzed, we can make valuable informed strategic decisions. In the future, I see myself leading the business analysis sector in Nepal which is why I want to grow my career in Data Science by enrolling in the graduate program at La Trobe University. With my diverse professional experiences and my academic background in engineering with a minor in Mathematics, I see myself well qualified to pursue the graduate course in data science.</p>

<p><strong>INTRODUCTION &amp; EDUCATION BACKGROUND:</strong></p>

<p>I was born on<em>&nbsp;Birth Date to ( Parent&rsquo;s Name )</em>. My Passport No. is&nbsp;<em>Number</em>.&nbsp;My residential address is&nbsp;&nbsp;<em>Address</em>,&nbsp;<br />
Regarding my educational history, I completed my schooling from&nbsp;&nbsp;School Name&nbsp;&nbsp;in&nbsp;<em>Year</em>&nbsp;with&nbsp;<em>XX&nbsp;</em>percentage. As I was very much interested in science, during my high school I took Science as my major at&nbsp;<em>College Name</em>. I completed high school in 2005 with a cumulative percentage of&nbsp;<em>XX</em>. With the intention of getting an international degree in engineering, I decided to apply to United States (US) for my undergraduate. I went to&nbsp;<em>University Name</em>. I was still having a culture shock during my first semester at&nbsp;<em>University</em>&nbsp;when the semester ended. And when my friends decided to transfer to&nbsp;<em>College Name</em>&nbsp;I also accompanied them as I did not want to get out of my comfort zone. So, after studying for a semester, I transferred to college. After studying for 2 and a half years taking general elective classes I finally transferred to&nbsp;<em>University, Location</em>&nbsp;from where I completed my Bachelor of Science in Electrical Engineering (BSEE) (with Minor in Mathematics) in&nbsp;<em>Year</em>&nbsp;with a cumulative GPA of&nbsp;<em>X.X</em>.</p>

<p>It took me 7 years to complete my undergraduate. The journey that started in&nbsp;<em>Year</em>&nbsp;ended in&nbsp;<em>Year</em>.&nbsp;I felt the pain of prolonged undergraduate but I didn&rsquo;t lose hope. Most of my credits from&nbsp;<em>College</em>&nbsp;didn&rsquo;t get transferred to&nbsp;<em>University</em>, which is why I had to start afresh for undergraduate at&nbsp;<em>University</em>&nbsp;at&nbsp;<em>Location</em>. I believe in education. I feel getting a degree gives you a lot of options in your life to explore. Not only that but it gives you confidence and builds up self-esteem. It was because of my belief in education that I wanted to join the Teach for Nepal Fellowship to inspire rural village kids to pursue education (higher) in spite of all the challenges that they may have to incur.&nbsp;&nbsp;</p>

<p>&nbsp;After my undergraduate, I applied for various engineering positions at different companies. I knew that getting a job would take some time. It had also been a long time I had not come back to Nepal after I left Nepal to the US for my undergraduate. I was also looking for opportunities in Nepal so that I would come back and get engaged immediately. Which in hindsight was a wonderful opportunity for me to come back to Nepal and give back to the community by joining in a movement called&nbsp;&ldquo;<em>Name</em>&ldquo;. Hence, I returned back to Nepal in&nbsp;<em>Year</em>&nbsp;. I applied for the&nbsp;Fellowship and after 2 months of in-house training, I started the Fellowship in&nbsp;<em>Year</em>, teaching mathematics from grade 6 to grade 10 in a public school,&nbsp;<em>School Name</em>. The Fellowship was for a duration of two years. I completed my Fellowship in&nbsp;<em>Year</em>.&nbsp;</p>

<p>After the Fellowship, I wanted to be close to my family. Hence, I moved back to&nbsp;<em>Location</em>, my hometown. I got an opportunity to work for&nbsp;<em>Company Name</em>. The enterprise was a start-up established in&nbsp;Year&nbsp;just after the massive earthquake in Nepal providing housing solutions. They needed an Operations Manager to oversee the entire operations and also subsequently build a framework to ease in its day to day activities. I worked at<em>&nbsp;Company Name</em>&nbsp;as an&nbsp;<em>Operations Manager</em>&nbsp;from&nbsp;<em>Date</em>&nbsp;till&nbsp;<em>Date</em>.</p>

<p>Currently, I am working at&nbsp;<em>Company</em>&nbsp;as a Site Engineer through Sanchaya Staffing. I joined&nbsp;<em>Company</em>&nbsp;in&nbsp;<em>Date</em><strong>.&nbsp;</strong></p>

<p>With my own diverse professional experience, I could see how important data could be for assumptions and evaluations. During my Teach For Nepal Fellowship, I conducted weekly quizzes for every class, the grades of which were recorded in excel. I reviewed the sheet every month to figure out which students to focus more on, how to arrange students for a group study and how could I make seat arrangements so that the learning of students would enhance. The attendance data of each student also showed the correlation between the presence of the student in the class and his/her grade. Apart from that, it also helped m to reflect on the teaching pedagogues&nbsp;to effectively communicate with the whole class.&nbsp;</p>

<p>Working for&nbsp;<em>Company Name</em>&nbsp;as an Operations Manager the relevancy of data could be reflected from the information on the materials in the warehouse; the delivery of materials to the project sites; the amount of labor required for the project gave a clear picture&nbsp;to which sites to work on and for how long and cost-saving measures for the transportation of materials from the warehouse to different sites.&nbsp;</p>

<p>Similarly, working for&nbsp;<em>Company</em>, we had to carefully plan our work on different sites based on how far each site were from the base office location; check on the progress of sub contractor&rsquo;s work on different sites and update the progress to our managers so that the work could be completed within the desired deadline. We built a tracker system in excel, to update the progress of each site so that we could plan our work collaborating with the sub-contractor and finish the work within the given timeline.&nbsp;</p>

<p>Working on different domains, I have realized how data can be used effectively to plan, track, predict, and assume. This has instilled a desire&nbsp;in me to learn more about the tools and methodologies for data analysis which is also the reason why I want to enroll in Data Science.&nbsp;&nbsp;</p>

<p>I got married on&nbsp;<em>Year</em>. My spouse&rsquo;s name is&nbsp;<em>Name</em>. She completed her schooling from&nbsp;School Name&nbsp;with a total percentage of&nbsp;XX&nbsp;% on&nbsp;<em>Date</em>&nbsp;and her high school as a Science major with the total percentage of&nbsp;<em>XX&nbsp;</em><em>Date</em>. After high school, she took a web-designing course and has been working as a web designer for&nbsp;<em>Company Name</em>&nbsp;for the past 3 years. After marriage, when we shared our dreams and aspirations, we concluded that it is the right time for me to pursue my Masters (in Data Science). She is also applying with me as a dependent. Her passport number is<em>&nbsp;Number</em>. It was with her support and encouragement, I am applying for the graduate program in Australia. In a foreign land, when one feels lonely and sad, which can be the case sometimes, it can be pretty disheartening so I need my wife by my side to share my days with. She has not been abroad before so it will be a good opportunity for her to explore different cultures, communities, people, food, and way of life.&nbsp;&nbsp;</p>

<p>During my study and stay in Australia with my spouse,&nbsp;my Parents will be taking care of all my funds: my University fees, travel cost and our living expenses.&nbsp;My family is financially sound as well as very supportive when it comes to education. So, my parents have agreed to cover all our expenses during our stay in Australia.</p>

<p>&nbsp;</p>

<p>&nbsp;<strong>WHY NOT NEPAL FOR MY FURTHER STUDIES:</strong></p>

<p>Before I decided to apply abroad for my graduate studies, I did some research to find out if there are universities or colleges here in Nepal that offers graduate program in Data Science.&nbsp;No university or colleges here in Nepal offer specific Data Science as a graduate program&nbsp;but most colleges have some data science courses under either Engineering or IT graduate program. For example, Islington College has&nbsp;<strong>MSc. IT and Applied Security</strong>&nbsp;for graduate studies containing &lsquo;Programming for Data Analytics&rsquo;, &lsquo;Data Warehousing and Big Data&rsquo;, &lsquo;Data Analysis and Visualization&rsquo; modules in its course content. Similarly, Kathmandu University offers masters in&nbsp;<strong>&lsquo;Computer Science and Engineering&rsquo;</strong>&nbsp;that has &lsquo;Database Management System&rsquo;, &lsquo;Data Mining&rsquo;, &lsquo;Machine Learning&rsquo;, &lsquo;Computer simulation and modeling&rsquo; in its course catalog some of which are elective and not mandatory. These graduate program would be broad in nature concerning IT and Engineering.&nbsp;&nbsp;</p>

<p>Hence, after thorough research and consultations with family members I have decided to apply for abroad masters program as there are no colleges or universities in Nepal with Data Science graduate program.<br />
&nbsp;</p>

<p><strong>WHY NOT OTHER COUNTRIES:</strong></p>

<p>Anyone who wants to get an international degree would look at the top destinations for international students.&nbsp;&nbsp;According to study portals,&nbsp;the top 3 destinations for international students are US, UK, Australia.</p>

<p>I have my undergraduate degree in Engineering from US. The cost of graduate program in US is higher than that of Australia for universities of similar ranking. For eg, The tuition fees of La Trobe University (the one I am applying to) is A$ 35,400/year whereas, the tuition fees for the graduate program at University of Colorado Denver in US is $ 31,640/year (non-resident tuition) which is higher than La Trobe if we consider the exchange rate of Australian dollar vs American dollar. Both the universities are ranked in 397th&nbsp;spot in Global world ranking. The entry requirements for graduate program in US requires GRE or GMAT but there is no such requirement for graduate program in Australia. Compared to America, the crime rate in Australia is very low which can create a safe environment that fosters learning.</p>

<p>The primary reason why I don&rsquo;t want to apply for a graduate program in UK is because of its 1 year course structure. Even though it saves 1 year time period and the cost associated with it but my long term plan is to return back to Nepal and Nepal Education Board only accepts 2 years of Masters Program. Also, the tuition and living expenses in UK is comparatively higher than Australia considering the current exchange rate of Nepal with UK and Australia.&nbsp;</p>

<p>Apart from the cost of living expenses and tuition, many universities in Australia offer scholarships to international students which will ease financial commitment of the sponsors.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>WHY I CHOOSE TO STUDY IN AUSTRALIA&nbsp;</strong></p>

<p>Many international students choose to study in Australia because of its outstanding education system which is carefully regulated by the Australian government in order to maintain the high standards, friendly and laid-back nature and high standard of living. As more and more people look to give themselves the skills required in a competitive global environment, an Australian education has become one of the most sought after in the world. Here, I will get teaching of internationally renowned quality, matched with one of the world&rsquo;s finest student support systems, and a superb living environment. I will meet people from all around the globe who have settled in Australia &ndash; from Europe and Asia, to Africa, the Middle East and the Americas. Australia is a country of innovation. Australian scientists have invented many world-changing technologies including: the black box flight recorder, the heart pacemaker, ultrasound, the influenza vaccine, the bionic ear, wireless internet, Google Maps and spray-on skin for burn victims. More about Australia in terms or education system are mentioned below:&nbsp;</p>

<ul>
<li>Australian Education system focus more on self-dependent studies as compare to other countries&nbsp; by which I will be able to develop my critical thinking skills,&nbsp;communication skills, personality&nbsp;and decision making skills</li>
<li>Australian teachers try to understand the student weather they are learning or not if not then they try the other method of teaching and make it simpler</li>
<li>Education provider in Australia are more focused on the students experience of learning they provide peer support, balancing study, sport and extracurricular activity.</li>
<li>The most important factor is that, Australian education providers offer a variety of courses and degrees, so international students can easily find their desired fields.</li>
<li>The curriculum is updated in accordance with present context</li>
<li>There are rules and regulation which facilitate international students in Australia. Some of them are Education Service for Overseas Students (ESOS) Act, national code of practice for providers of education and training to overseas students, Commonwealth Register of Institutions and Courses for Overseas&nbsp;</li>
<li>Student (CRICOS) and Tuition Protection Service (TPS). These rules and system make Australia stand out from rest of the world&nbsp;while&nbsp;considering the country and environment where in we study. The learning and study process happens in multi-cultural and global level, which will enable me to work in any part of the world including my home country on the completion of my studies</li>
</ul>

<p>&nbsp;</p>

<p><strong>WHY&nbsp;UNIVERSITY NAME:</strong></p>

<p>When I decided to study in Australia for my Masters in Data Science there were a few universities I was looking into. Some of them were Western Sydney University, La Trobe University, University of Technology &ndash; Sydney, and Monash University. My research into these universities was based on tuition fees, ranking, and employability.&nbsp;&nbsp;</p>

<table>
<tbody>
<tr>
<td><strong>Name of the institution</strong></td>
<td><strong>Tuition fees (2019)</strong></td>
<td><strong>Ranking* (2019)</strong></td>
<td>
<p><strong>Employability*</strong></p>

<p><strong>(2019)</strong></p>
</td>
</tr>
<tr>
<td>La &ndash; Trobe University</td>
<td>A$ 35,400</td>
<td>397</td>
<td>251-300</td>
</tr>
<tr>
<td>Monash University</td>
<td>A$ 41,400</td>
<td>59</td>
<td>59</td>
</tr>
<tr>
<td>Western Sydney University</td>
<td>A$ 31,680</td>
<td>498</td>
<td>301-500</td>
</tr>
<tr>
<td>University&nbsp; of Technology &ndash; Sydney</td>
<td>A$ 37,650</td>
<td>160</td>
<td>64</td>
</tr>
</tbody>
</table>

<p>* The ranking and employability ratings were obtained from&nbsp;<em>www.topuniversities.com</em>&nbsp;</p>

<p>After careful consideration, I have chosen&nbsp;<em>University</em>&nbsp;to apply for my graduate studies. Even if Western Sydney University are comparatively little bit cheaper than La Trobe University but the ranking and employ ability factor of La Trobe is higher than that of Western Sydney University. Monash University is a bit expensive for me personally.&nbsp;</p>

<p>Apart from the cost of tuition, I am also excited by the course structure of Data Science in&nbsp;University. Apart from the core 90 credits, students can select specialization of their choice along with the option of thesis or industry placement/ industry-based learning from the curriculum. This industry experience would prove invaluable when we graduate from the course.</p>

<p>La Trobe&rsquo;s reputation among the employers is demonstrated by having its graduates rated eighth nationally for overall satisfaction in the 2017 QILT Employer Satisfaction Survey with a rating of 86.6 percent higher than that of Monash University (84.4), University of Technology Sydney (81.8) and Western Sydney University (85.8).&nbsp; La Trobe University also offers outstanding integration with industry, providing us with a superior learning environment, enhanced internship opportunities and greater exposure to the job market prior to graduation&rdquo;.</p>

<p><strong>La Trobe University College Excellence Scholarship</strong></p>

<p>Moreover I have been nominated to receive a&nbsp;<em>University</em>&nbsp;Excellence Scholarship for the College of Science, Health and Engineering which will cover 25% of my tuition fees for the duration of my studies for Master of Data Science commencing on&nbsp;<em>Date</em>.</p>

<p>There are limited scholarships available and therefore scholarships are awarded on a first come, first serve basis. To accept and secure the scholarship I am required to:</p>

<ol>
<li>Meet all conditions (if applicable) outlined on my course Letter of Offer</li>
<li>Accept my offer by paying the full acceptance deposit listed on my Letter of Offer, and return my Completed Offer Acceptance Form for International Students to La Trobe International, ensuring me as complete the Scholarship Details Section</li>
<li>Commence course at&nbsp;<em>University</em>&nbsp;in Semester 2, 2019.&nbsp;</li>
</ol>

<p>To study Data Science as a graduate program in&nbsp;<em>University</em>, one needs to have Australian Bachelor&rsquo;s degree or international equivalent, and academic IELTS score of&nbsp;<em>X.X</em>&nbsp;overall with minimum of&nbsp;<em>X.X</em>&nbsp;in each band.</p>

<p>I meet this requirement as I have an engineering degree (electrical with minor in mathematics) with a CGPA of 3.07 (US grading system) and overall IELTS score of&nbsp;<em>X</em>, minimum of&nbsp;<em>X</em>&nbsp;in each band.</p>

<p>To graduate as a Data Scientist from&nbsp;<em>University Name</em>, we have to complete 240 credits out of which 90 credits are from Core Subjects and the remaining 150 credit is earned from one of the three specializations. One can specialize into Big Data and Cloud Computing, Bioinformatics, and Analytical Science.&nbsp; Each specialization constitute of 105 credits (15 credits per course) of classes specifically&nbsp;<em>designed</em>&nbsp;and 45 credits can be chosen among Statistics Thesis, Computer Science Thesis, and Industry based Learning Pathway-1,2 or 3.&nbsp;<br />
&nbsp;</p>

<p><strong>WHY I HAVE CHOSEN MASTER OF DATA SCIENCE:</strong></p>

<p>Data Science is a multi-faceted program. There is no niche market for Data Scientist. All most all the domain needs data scientist be it Energy, Real Estate, Automotive, Banking, Finance. Why? Because data drives decisions and thus they can be directly involved in the informed strategic decision making for cost saving or could be implemented in developing advance data driven analytics solutions in AI (Artificial Intelligence). Through my own diverse professional experience, as state above, I came to realize the importance of data in analysis and forecasting.&nbsp;</p>

<p>Personally, my interest in Data Science developed when I observed how Google Chrome uses the search query (data) of the user to personalize the information content displayed in the search engine &ndash; a fine demonstration of data analysis. Same is the case with Youtube. I have an intense desire to learn about different tools and methodologies used by Data Scientist and coming from an engineering background (with minor in mathematics) I have the aptitude for the program. Plus when I study Data Science, I don&rsquo;t have to limit myself in certain domain of industry. I can be at any organization providing logically viable solutions backed by data.&nbsp;</p>

<p>Also,&nbsp;<strong>according to the Deloitte Access Economics (2017)</strong>: &ldquo;The data science workforce is expected to see stronger growth than the Australian labor&nbsp;force as a whole, where employment is forecast to grow at an average of 1.5% per annum over the next five years.&rdquo;&nbsp;</p>

<p><strong>MY FUTURE PLAN:</strong></p>

<p>In the long run, I would like to start my own consulting firm in Nepal rendering consulting services (market research and analysis, market trends and opportunity, and growth possibilities/strategies) to both private and public sectors. In order to do that, I need to build my expertise and credibility. I would like to work in the industry for at least 5-7 years before I start my own consulting firm.&nbsp;</p>

<p>There are various titles under which a Data Science graduate can work viz. as a Analytics Manager/Engineer, Business Analyst, Data Analyst/Engineer, Business Intelligence Engineer/Architect, Big Data Engineer are to name a few. After graduation, I would like to work in Australian companies under&nbsp;<strong>485 Skilled Graduate Temporary Visa</strong>&nbsp;to gain international work experience. After that, I would like to get back to Nepal and would like to work for companies like&nbsp;<strong>Frost and Sullivan Nepal, NCell, Verscend Technologies, Huawei Nepal, Unilever Nepal, Dabur Nepal, Chaudhary Group.&nbsp;</strong>Big companies of Nepal are starting to employ Data Scientist in their team or take the services of third party (consulting firms) to access the market trends and analysis to better understand the market and make decisions on the basis of it. Ncell has started its own Market Research and Analytics team.</p>

<p><strong>COST BENEFIT ANALYSIS:</strong></p>

<p>On the accomplishment of Master of Data Science degree from Australian University, I can get appointed in reputed organizations with starting monthly salary package of around NPR 80,000 to NPR 100,000 in my home country. As I work hard and gain experience in related field, I can raise my salary to more than NPR 150,000 per month. So with a time frame of 5 to 6 years, my job would help me to get the returns of my Master of Data Science degree cost. Further, I will have accumulated all the required experiences to hold the government job in the post of senior Data Analyst to secure my future.&nbsp;<br />
&nbsp;</p>

<p><strong>MY FAMILY TIES AND ECONOMIC CIRCUMSTANCES:</strong></p>

<p>I come from a small closely knit family. My mother (single), Mother-in-Law and Father-in-Law has always encouraged and supported me in my decisions regarding higher education. It is very important for me to return back to her so that I can be with my family as it will be my turn to pay back for their efforts and support. My economic circumstances are very strong. Apart from funds my family also has property, right in the heart of Biratnagar, whose value grows every year. Being the only son I have to look after our property too. This shows the strong incentive to return to my home country.&nbsp;&nbsp;</p>

<p>As an international student in Australia, I will have to abide by my visa condition as below:&nbsp;</p>

<ul>
<li>I have to study full time course with 80% attendance requirement.</li>
<li>I must have Overseas Student Health Cover (OSHC) for the duration of my course.</li>
<li>I cannot change course and course provider for 6 months.</li>
<li>I must meet Genuine Temporary Entrant (GTE) criterion.</li>
<li>I cannot start paid work before my course commencement.</li>
<li>I cannot work more than 40 hours per fortnight when course is in session.</li>
<li>I wish to abide by all these conditions.</li>
</ul>

<p><strong>DECLARATION:</strong></p>

<p>I hereby certify that the information above, which has been supplied in support of my student visa application to assist me to demonstrate that I satisfy DIBP&rsquo;s GS and GTE compliance requirements, has been completed in my own words and handwriting and is a true and correct account.</p>

<p>I understand that if any incorrect, misleading or non-genuine information is found in this SOP, my student visa application will be refused.<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p>

<p><strong>Name: &ndash;</strong>&nbsp;<em>Applicant Name</em></p>

<p><strong>Passport Number: &ndash;&nbsp;</strong></p>

<p><strong>Date of Birth: &ndash;</strong><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p>',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": "14"}',
                'meta_name' => 'Science Course - SOP',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 16:33:25',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            7 => 
            array (
                'id' => 16,
                'slug' => 'health-course-sop',
                'name' => 'Health Course - SOP',
                'excerpt' => NULL,
                'description' => '<p>I,&nbsp;<em>your name</em>, permanent resident of one of the most beautiful and friendly places in Nepal, recognized as&nbsp;<em>Your address</em>&nbsp;situated in the Hilly region of Nepal. I would like to study Master of Health Promotion from the University of The Sunshine Coast, Australia. I am married and it had been 2 years since we are in good relationship with each other as husband and wife. My partner is accompanying me to support emotionally throughout my stay in Australia so that I can fully concentrate on my studies.</p>

<p><strong>Briefly description of my education history from Year 10 &nbsp;to my highest qualification including the names of the qualifications; educational institutions, teaching locations, academic percentage and inclusive course dates to indicate the duration of each course &amp; my IELTS/TOEFL/PTE/CAE score &amp; date of exam</strong></p>

<p><em>&nbsp;</em>I have completed B.SC Nursing from Institution name and address in 2017 with&nbsp;<em>academic %</em>&nbsp;in aggregate, Higher Secondary from<em>&nbsp;institution name</em>&nbsp;in 2013 with&nbsp;<em>academic %</em>&nbsp;in aggregate and School from Ambrosia Ideal Secondary School with&nbsp;<em>academic %</em>&nbsp;in 2011.</p>

<p><strong>Details of the financial sponsors who will fund me &amp; my spouse Australian studies and living expenses by listing their full name, country of residence, current job designation, employer&rsquo;s name and amount:</strong></p>

<p>About my family, I have a small family, my father,<em>&nbsp;father&rsquo;s name</em>, a resident of&nbsp;<em>your address</em>, is operating member&nbsp;<em>father occupation</em>. The monthly income is Rs******&nbsp;He is also the owner&nbsp;<em>company name and address.</em>&nbsp;My mother,&nbsp;<em>mother&rsquo;s name</em>, a resident of&nbsp;<em>address</em>&nbsp;has been working in&nbsp;<em>company name</em>&nbsp;since 2055/5/16 BS( September 01, 1998 AD) to till date and earns monthly Rs.&nbsp;*****.</p>

<p><em>&nbsp;</em>In terms of financial background, I can able to afford my tuition fee and other expenses while being in Australia. There are altogether three sponsors who are going to support my education while studying in Australia.</p>

<p>Above all my family members are going to sponsor my education and expense. In sum up, my total source of income is NPR.&nbsp;*******&nbsp;yearly, which is equivalent to AUD&nbsp;*****&nbsp;as the current exchange rate is AUD=83.50 NPR. Altogether, my education is much easier in Australia in terms of financial support. Now, my only concern is to study help me to create a successful hard and secure good remarks as well as experience.</p>

<p><em>&nbsp;</em><strong>A brief record of my employment history by listing the names of all employers, job designations and commencement and end dates to indicate the duration of each employment position held:</strong></p>

<p><em>&nbsp;</em>After completing my B.SC Nursing Course, I had done voluntary work at the company&nbsp;<em>name and address</em>, Nepal as a Staff Nurse for six months from 1st&nbsp;November 2017 to 31st&nbsp;May 2018. I attended for IELTS exam on 19th&nbsp;January 2018 and secured marks with overall 6.5 and each band (W-6, R-6.5, L-6.5, and S-6 score sheet is attached).</p>

<p>Most people think of Australia, they see wide open spaces of out bank bush, kangaroos, koalas, and clean air and water. However, Australia has so much more to offer than just that. I chose to study in Australia because of its friendly, laid back nature, excellent education system, and a high standard of living. Australia is currently the third most popular destination for international students in the English-speaking world, behind the United States and the UK. Many international students choose to study there because of cultural diversity, friendly natives, and high quality of education. Schools and employers all over the world recognize degrees from Australian schools. Graduates from Australian schools are highly sought after due to the impressive international reputation of the Australian education system. This system is carefully regulated by the Australian government in order to maintain a high standard of education associated with the country. One of the most appealing aspects of the country for international students is the quality of scientific research.</p>

<p>Australia is at the forefront of new technology and innovations. Students who study in Australia can take advantage of the country&rsquo;s impressive technology and research resources. Be it in Health, agriculture, IT or aeronautics, accounts, Australia offers a work permit to international students like no other country. ESOS act ensures that the rights of international are protected and TPS ensures the safety of tuition fees. Above all, Australia is generally a safe destination in terms of personal security and safety, well-maintained road, low crime rate and high living standard with the quality of education with a multi-cultural environment and similar weather as Nepal. Almost all the universities in Australia are government recognized which makes the student safe about their future and education. USA is not a safe country for study for international students as we used to hear gun issues all the time and also, they require additional admission test i.e. GRE. I am not satisfied with the government policy of the UK for the international student as there is no any fees safety. Also, the USA and UK do not offer Post Study Work opportunities for international student which is available in Australia. PSW will add value to the profile of students and students will get international exposure while working and will make more professional and confident.</p>

<p>In comparison to countries like the USA, UK, and Canada, an Australian visa procedure is less costly and not as lengthy as other country&rsquo;s visa applications. In addition, unlike European countries where I can have difficulty in languages, Australia is an English-speaking country and I won&rsquo;t encounter any problem related to my language. And also, there is no institution in Nepal providing an Australian degree. So, I choose to study in Australia where I can get an education that can meet the standard of today. The education system of Australia provides a wider range of subjects to choose and also provides a greater opportunity to use skills while studying which is less in developing countries. So, the University of South Bank, Australia would help me to achieve my career aim and objectives.</p>

<p><strong>Research that I conducted about the study in my home country before I made the decision to choose to study abroad</strong><em>:</em></p>

<p>Here in Nepal, there is a lack of reputed university and also lack the modern courses and most importantly Nepalese qualification is not globally recognized. I already spent many years studying in Nepal and India. As a part of my research, I found that in Nepal Masters of Health Promotion is offered only by one university that is Tribhuvan University and there are seat limits and too much of challenge to get admission to it. Likewise, the education system in Nepal focuses on theoretical knowledge rather than practical knowledge. Furthermore, As the world is getting competitive day by day and face worldly challenges yet to come, Nepal&rsquo;s education degree is not globally competitive and this is the major reason for me to chose abroad and that too Australia for my further education. &nbsp;Studying with international exposure and under the guidance of highly experienced tutors encouraged me to make Australia my destination for education rather than my home country.</p>

<p><strong>Research that I conducted about the study in other countries before I made the decision to choose Australia and reason to study in Australia, not other countries:</strong></p>

<p>In the UK, the Masters is of one year which is not globally recognized. In the USA, to get into good universities, I need to sit for competitive exams like GRE for science streams and GMAT for Management a stream that takes a lot of time and is very tough to crack. In the UK and USA, there is no tuition protection scheme and fees are not like Australia. Studying in Australia is my choice because it provides world-class education globally recognized at a reasonable cost; tuition fees are protected by law; and also, it has diverse landscapes and multicultural lifestyles which I dream of exploring. I have searched many universities in Australia like Deakin University, Western Sydney University, Torrens University, University of Wollongong, Flinders University, University of Queensland and many more but I found our many factors like tuition fees, location, admission criteria, etc. and I found that the University of Sunshine Coast will be appropriate for me in order to complete my higher education. It&rsquo;s not that I have not searched for the universities in other countries like UK, USA. I have searched universities in these countries and I found many universities like Liberty University, American University, University of Memphis, Brunel University, etc. The tuition fees in these universities were very expensive so I left all and choose the University of South Bank.</p>

<p><strong>Course requirements and core contents with tuition fees, duration of course of my selected Australian academic program:</strong></p>

<p>In Health Promotion course IELTS (Academic) requirements is an overall score of 6.5 with no less than 6 in any subtest and estimated total tuition fees are AUD $48,400 and program duration is 4 semester (2 years).</p>

<p>The&nbsp;<em>University Name</em>&nbsp;is the only public university in Queensland to be awarded 5 stars for teaching quality in the 2017 Good Universities Guide. It is one of the world&rsquo;s top 150 young universities, which is not limited by tradition or old ways of thinking.&nbsp;<em>University Name</em>&nbsp;encourages its students to challenge conventions and to always ask the next question.&nbsp;<em>University Name</em>&nbsp;is home to some of the most innovative learning and visualization facilities in Australia. Campus facilities include a $37m&nbsp;<a href="https://www.usc.edu.au/learn/why-choose-usc/usc-spaces/the-cave2-visualisation-studio">Engineering Learning Hub</a>&nbsp;with 3D CAVE2TM visualization studio, simulated nursing and paramedic labs, specialized computer, science, manufacturing and design labs, nationally accredited sport science labs, and a range of interactive digital learning spaces. 9&nbsp;out of 10&nbsp;<em>University Name</em>&nbsp;graduates are employed within four months of finishing their degree, and graduate students are currently using their skills and expertise to drive change in more than 5000 communities worldwide.</p>

<p>I believe it is one of the most exhaustive and globally inclusive universities in Australia that offers many programs and courses over a wide range of study areas. Coming from an underdeveloped country like Nepal, where the choice of study courses is very limited for a student, it gives me immense satisfaction and happiness to be able to choose subjects of my interest at&nbsp;<em>University Name</em>&nbsp;as it runs programs in a wide range of disciplines. In addition to this, the tuition fee for an international student is a major important factor that needs to be considered before applying for a foreign degree. Besides this, it&rsquo;s extensive student support services that aim to endeavor for an international student to gain academically, socially and culturally are very impressive in comparison to support services that other universities in Australia provide. Moreover, in order to build a successful career,&nbsp;<em>University Name</em>&nbsp;offers internship and placement opportunities to its students on certain degree programs. Hence, these are a few of the reasons why I chose&nbsp;<em>University Name</em>&nbsp;to continue my further education than in other universities in Australia.</p>

<p><strong>Reasons for choosing this particular educational institution rather than a similar course at other education institution inside Australia:</strong></p>

<p>I went through different researches on different universities via the internet, which was a great experience for me. I also attempted a number of seminars and educational fairs in my country. I started looking for ideal Universities while researching I came across different Universities like University of Wollongong, Flinders University, Torrens University, Charles Sturt University, Curtin University. But among all of them, I find the University Of The Sunshine Coast very impressive which matches my profile academically.</p>

<p>IELTS Requirement:</p>

<p>Australian Catholic University: overall 6</p>

<p>University of Wollongong: 6.5 each band and overall 6.5</p>

<p>University of Sunshine Coast: overall 6.5 with no less than 6 in subtest</p>

<p>Fee structure:</p>

<p>There are other universities that offer the same course but&nbsp;the&nbsp;<em>University Name</em>&nbsp;offers much affordable tuition fees with AUD $ ***** per year. Typically, the master&rsquo;s degree course fee is between AUD$ ***** to AUD$ ***** Although I compared other universities offering the same courses;</p>

<p><strong>The&nbsp;</strong><em>University Name</em>&nbsp;is the one that offers the same course but there but the course fee is higher in comparison to&nbsp;<em>university&nbsp;Name</em>. Its annual course fee is AUD $ *****</p>

<p>Likewise,&nbsp;<em>University Name</em>&nbsp;offers the same course but tuition fees per is higher than&nbsp;<em>University Name</em>. Its annual fee is AUD$ *****</p>

<p>The&nbsp;<em>University Name</em>&nbsp;is located in Brisbane&rsquo;s cultural precinct, approximately 1 hour 8 min drive from South Bank Parklands. The&nbsp;<em>University Name</em>&nbsp;is listed on the Common Wealth Register of Institutions and Courses for Overseas Students. The most significant fact is that it has earned five stars for teaching quality and graduate&rsquo;s satisfaction. In addition, the university offers the most contemporary university programs which will make students able to prepare for a great future. This university provides quality education programs, practical based knowledge; excellent support systems which can be more effective to students. The total cost of study for an international student has always been a major concern to decide whether to study abroad or not. As per my research, the environment and atmosphere of the university are motivating and fresh. &nbsp;I&rsquo;m sure the office for the international student will provide adequate information later on regarding queries. This university can lead to accomplishing my goal to be a good professional and on completion of a degree in Master in Health Promotion gives me a sense of personal accomplishment, career satisfaction, and endless possibilities. Hence, I decided to join the&nbsp;<em>University Name.</em></p>

<p><strong>Relevancy of my selected academic program to my past education and /or employment history. If there is no link, my explanation why I am seeking a change of discipline and therefore a future career change:</strong></p>

<p>My selected course for my master&rsquo;s degree has relevance to what I studied in my bachelor&rsquo;s. Therefore I have chosen Master of Health Promotion and I aim to become a health promotion specialist and more importantly this program covers the core concept of public health foundations, the assessment of health needs and the planning, principles of health promotion, implementation, and evaluation of health promotion setting. The increment of mortality linked with preventable disease and developing countries like Nepal needs more concern health aspect and I believe change is needed; the voice is needed to be heard regarding the importance of health. I will study a socio-ecological model of health and explore contemporary health promotion at individuals group, organization, community, and population level. Health promotion is a chief constituent of a preventable advance. It offers a solution to many of the health problems facing society through developing skills and knowledge, community action, health public policy&nbsp;and&nbsp;supportive environments.</p>

<p><strong>Reasons for choosing this particular academic program</strong></p>

<p>Health promotion is more relevant today than ever in addressing public health problems. The health scenario is positioned at unique crossroads as the world is facing a &lsquo;triple burden of diseases&rsquo; constituted by the unfinished agenda of communicable diseases, newly emerging and re-emerging diseases as well as the unprecedented rise of non-communicable chronic diseases. The factors which aid progress and development in today&rsquo;s world such as globalization of trade, urbanization, ease of global travel, advanced technologies, etc., act as a double-edged sword as they lead to positive health outcomes on one hand and increase the vulnerability to poor health on the other hand as these contribute to sedentary lifestyles and unhealthy dietary patterns. There is a high prevalence of tobacco use along with an increase in unhealthy dietary practices and a decrease in physical activity contributing to increases in biological risk factors which in turn leads to an increase in non-communicable diseases. The adverse effects of global climate change, sedentary lifestyle, increasing frequency of occurrence of natural disasters, financial crisis, security threats, etc., add to the challenges that public health faces today.</p>

<p>Moreover, Health promotion specialist is a fantastic career. It allows working directly with people, or indirectly by creating programs that will help to achieve longer lives in good health. The Master of Health Promotion enhances professional career development, preparing health professionals for leadership in a health care setting. Theory and research, as well as professional role development, are an integral part of the course, which is focused on the development of the multiple roles of leaders and prepares for managerial and leadership roles within health care teams, units&nbsp;and&nbsp;organizations.&nbsp;Fundamental to this course is the development of leadership, critical thinking&nbsp;and&nbsp;decision-making capacity, preparing health professionals for a leadership role at an executive level.</p>

<p><strong>Relevancy of my selected academic program to my future study or career plans upon successful completion of my selected course of study from Australia:</strong></p>

<p>Short term plans:</p>

<p>After the completion of my master&rsquo;s degree, I will have the academic knowledge and will take hold of the opportunity PSW which will increase the level of confidence, competitiveness, and will add value in my resume later to find out the better job. I intend to return to my homeland after gaining valuable experience from Australia and implement that knowledge that I gained into practice here. My aim is to work with different leading INGOs and NGOs in Nepal like USAID,&nbsp;DFID, RTI, Health Net Nepal, UNICEF, WHO, Nepal Red Cross Society, ENPHO, Nepal water for health, etc. as a health promotion specialist. Health Promotion Specialist job roles go far beyond working with just individuals to improving individual health, alerting and making people aware regarding the importance of good health, and more significantly it&rsquo;s a job that is a way to integral for society and world. And I am looking forward to&nbsp;take&nbsp;the challenges and become one. So, my focal point will be in community field-based NGO/INGOs especially those working in remote areas of Nepal as the remote part of Nepal has a devastating lifestyle before the major earthquake hit in 2015 and even worse after the major catastrophe. As Nepal is a developing country, the high demand for dedicated health professionals is essential. Well, when it comes to salary benefits of Health promotion specialists, the salary is attractive which might range 50 thousand to 70 thousand monthly as told by acquaintances. &nbsp;</p>

<p>Long term plans:</p>

<p>As Nepal is a developing country still there are no sufficient health centers to fulfill the health needs in rural areas. So, I will do business by opening primary health centers and work as a health promotion specialist in it. In this way, I can get my return on investment for my studies in my career.</p>

<p><strong>Reason for accompanying my spouse with me in Australia:</strong></p>

<p>I got married to my&nbsp;<em>Husband&rsquo;s name</em>&nbsp;on 19th April 2016. He will accompany me to Australia as it will provide me with emotional and psychological support and prevents me from suffering from homesickness. He will help me in household works as well as in my day to day activities. In his presence, I will be able to concentrate fully on my studies and perform well. Also in unpleasant times, unforeseen events and situation he will be there to lighten things up and ease the situation. We will have plenty of opportunities to experience something both of us have never tried before and created moments we will always look back with affection and humor. And I think it is a good idea to accompany my spouse as far away from home you need to have someone there to give you courage and strength.</p>

<p><strong>List the student and dependent visa conditions that we must satisfy while studying on a student visa in Australia</strong></p>

<p>If successful, Student Visa subclass 500 holders will have several conditions to obey. Some of these conditions are explained as follows:</p>

<ul>
<li>While the registered course of study is in session, you cannot work more than 40 hours per fortnight or 20 hours per week;</li>
<li>You must maintain enrolment in a registered full-time course of study;</li>
<li>While you are in Australia, you must maintain their Overseas Student Health Cover;</li>
<li>You must notify your education provider of their residential address within 7 days of moving to Australia.<em>&nbsp;</em></li>
</ul>

<p>Lastly, I would like to declare that I am a genuine student and I will abide by the rules and regulations of your university. I look forward to my admission into the Master in Health Promotion in your esteemed University.</p>

<p>&nbsp;</p>

<p>Kind Regards,</p>

<p><em>your name</em></p>

<p>Passport Num: *******</p>

<p>Address:&nbsp;<em>permanent address</em></p>',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": "14"}',
                'meta_name' => 'Health Course - SOP',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 16:34:08',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            8 => 
            array (
                'id' => 17,
                'slug' => 'architecture-and-building-course-sop',
                'name' => 'Architecture and Building Course - SOP',
                'excerpt' => NULL,
            'description' => '<p><strong><u>STATEMENT OF PURPOSE</u></strong><strong>&nbsp;(</strong>UJJ01BHA<strong>)</strong></p>

<p>I am grateful to the&nbsp;<em>University Name&nbsp;</em>for providing me this opportunity to be enrolled into the Master of Engineering-Civil program for the Autumn (March) 2019 session. It is with genuine pleasure I place my Statement of Purpose.</p>

<p><strong><u>INTRODUCTION</u></strong></p>

<p>My name is&nbsp;<em>Applicant Name</em>. A permanent resident of&nbsp;<em>Applicant Address</em>, I was born on&nbsp;<em>D.O.B</em>. My citizenship no. is&nbsp;<em>Citizenship Number</em>&nbsp;and passport no. is&nbsp;<em>Passport Number</em>.&nbsp;Brought up in a design and engineering environment, I opted to be an instrumental part of this industry by selecting Civil Engineering for my Undergraduate degree. With a Bachelor of Engineering (BE) degree in Civil Engineering from&nbsp;<em>University Name, Location</em>, I graduated with a First Class degree securing a distinction with&nbsp;<em>Score&nbsp;</em>as my Cumulative GPA in the year&nbsp;<em>Year</em>. Prior to that I was in Senior High School at&nbsp;&nbsp;in&nbsp;<em>Year</em>&nbsp;where I received my Senior School Leaving Certificate(SSLC) with a first division securing a percentage of&nbsp;<em>University Name, Location</em>,&nbsp;<em>Score</em>%&nbsp;after I had received my School Leaving Certificate (SLC) from&nbsp;<em>School Name, Location</em>, &nbsp;in&nbsp;<em>Year</em>&nbsp;with a first division securing a percentage of&nbsp;<em>Score</em>&nbsp;%.</p>

<p><strong><u>FAMILY BACKGROUND</u></strong></p>

<p>I have 3 members in my family. Father, Mother and myself. My father,&nbsp;<em>Father Name</em>, is an Architect and engaged in freelancing. My mother,&nbsp;<em>Mother Name</em>,&nbsp;is the owner and manager of&nbsp;<em>Company Name</em>. I am a single child and unmarried.</p>

<p><strong><u>WORK EXPERIENCE</u></strong></p>

<p>Post Bachelor&rsquo;s I started working for&nbsp;<em>Company Name, Location</em>. I was involved in two major construction projects. As a Project management and Site professional, I was involved with Project planning and scheduling as well as site supervision and personnel management. Involved in the Shop drawing drafting and detailing as well as execution on site. Having completed a year and executed the structural phase of these projects I moved to Dubai UAE where I started working with&nbsp;<em>Company Name, Location</em>. During my tenure, I was involved in the Structural Design and Projects team to conceptualize, plan, design and execute the projects involving warehouses and industrial structures mostly Steel Structures. Me along with my team of senior engineers and Project manager worked on 5 different projects. My responsibilities included liaising with Municipal engineers and authorities to get approvals on structural design drawings, execution and supervision of site works. It struck me that I needed to pursue my Masters and after a year at&nbsp;<em>Company Name,</em>&nbsp;I decided to head back to Nepal and apply for a Master of Engineering course in Australia. I&rsquo;ve been working as a Content Writer for&nbsp;<em>Company Name</em>&nbsp;for the past couple of months and managing my application for the Master&rsquo;s degree hand in hand.</p>

<p>Having completed my Bachelor in Civil Engineering, what I learnt during my 4 years at college was instrumental as I started my professional practice. I was involved in projects which required demonstration of skills pertaining to designing and drafting structural members including footings, columns, beams and slab. Calculation of the Area of steel per square meter and the size of structural members based on Code books and guidelines was a part of the job. All of this I learnt during the senior year i.e. 3<sup>rd</sup>&nbsp;and 4<sup>th</sup>&nbsp;year of college where I was introduced to the Indian Standard code books namely during the Units of&nbsp;<strong>Design of Reinforced Concrete Elements</strong>&nbsp;and&nbsp;<strong>Design of Steel Structures</strong>. I found this analytical part of my course challenging and exciting at the same time. I used to be praised for my enthusiasm and participation in my class while my tutors encouraged me with assignments and tutorials. Similarly, I was equally enthusiastic about&nbsp;<strong>Computer Aided Drafting and Design</strong>&nbsp;which was another of the core units during my senior year. I learnt the basics of drafting using&nbsp;<strong>AutoCAD</strong>&nbsp;and design using&nbsp;<strong>StaadPRO V8i</strong>. Later on, I practiced the RCC design software&nbsp;<strong>Etabs&nbsp;</strong>from Computer and Structures Institute (CSI). Additionally, I practiced SAFE<strong>,</strong>&nbsp;analysis and design software for foundation and slab as well as&nbsp;<strong>Prokon</strong>&nbsp;for Design of structural elements. Most recently, I have been intrigued by the Project Management side of Civil and Construction Engineering. While the design phase is a challenging part, execution of projects is a whole new level. I am interested in pursuing this part of my course if suitable electives are available or will do it eventually after completing my Master of Engineering degree.</p>

<p>To demonstrate my English Proficiency, I appeared for the IELTS (Academic) on&nbsp;<em>Date</em>. I received an overall band score of&nbsp;<em>X (All Band Score)</em>.&nbsp;</p>

<p>I completed my Bachelor&rsquo;s in Engineering degree in&nbsp;<em>Year</em>&nbsp;from&nbsp;<em>University Name, Location</em>. Immediately after, I returned back to Nepal and joined&nbsp;<em>Company Name</em>. A construction company this, I was involved with&nbsp;<em>Company Name</em>&nbsp;for more than a year starting in June 2016 until June 2017. In July of 2017 I went to Dubai. I got an opportunity to work as a Junior Project Engineer/ Structural Engineer at&nbsp;<em>Company Name</em>.&nbsp;<em>Company Name</em>&nbsp;is an Architectural and Engineering Consultancy with a primary focus in Designing, Consulting and Project Management. I was involved with&nbsp;<em>Company Name</em>&nbsp;for a year starting from July 2017 to June 2018. I returned back to Nepal as I started preparing for the IELTS. I joined one of the best institutes in Kathmandu Valley, and went on to take the test in July 2018. I received my IELTS score in late July 2018. I started managing my application for the Master of Engineering degree and preparing documentations for the same. Hand in Hand I was involved in Freelancing jobs pertaining to Interior Design and Fit out works as I had minimal exposure in this field. During the month of August and September I worked on a project of&nbsp;<em>Company Name</em>&nbsp;involving office interior and fit out of a 200 square meter office apartment. I gained valuable exposure to this side of design i.e. the Interior Design and execution. Currently, I&rsquo;m involved as a Content writer for&nbsp;<em>Company Name.</em></p>

<p>Post high school, I have a gap of around 3 years. I was in a moment popularly referred to as&nbsp;<em>Name</em>, which was a point where I had to decide on what to do next. While I was brought up in an architectural and engineering environment all my life, I was unsure. I wanted to apply for Aeronautical studies abroad but was unsure about the career prospects once I completed my degree and returned to Nepal. This was in&nbsp;<em>Year</em>. Having lost some time and still unsure, I got an opportunity to work in Dubai as a Sales Executive and Merchandiser for the&nbsp;<em>Company Name</em>&nbsp;which is popular for its consumer electronics. I took the opportunity and worked in Dubai for a year and half before I decided on pursuing my Bachelor in Engineering and headed off to India in&nbsp;<em>Year</em>.</p>

<p>During these 3 years, I worked on my English language skills and took the TOEFL. I then started preparing for the SAT as I took the test along with the SAT I and II. I used to work as a Trainee Sales Executive at&nbsp;<em>Company Name</em>. This was in&nbsp;<em>Year</em>. I worked for a couple of months in this organization.</p>

<p><strong><u>Why Study in Australia?</u></strong></p>

<p>Of the many points in favor of Australia, I believe that Australia is a melting pot for Millennials. It has everything for everyone, and I being a student, it offers me quality education unparalleled among countries in the Asia Pacific region. Australia is the 3<sup>rd</sup>&nbsp;most popular destination that has English as its native language. To add to that, it recognizes our potential and helps scholars build their career.&nbsp;</p>

<p><strong>Quality of education:</strong>&nbsp;With a long tradition of producing world class scholars, Australia contributes to the lives of many individuals through its quality education. This quality is evident as the qualification received from Australia is recognized and sought after across the world. To nurture one&rsquo;s talent through guidance and support is a quality and Australian education has these qualities.</p>

<p><strong>Affordability:&nbsp;</strong>Tuition and Living expenses in Australia are considerably lower compared to other destinations, including the USA and UK. For eg. A Master of Engineering in the USA costs around $40000 whereas the same course in Australia comes around AUD $30000. Similarly, the cost of living in the UK is anywhere around &pound;1300 whereas that in Australia is around $1690 which is equivalent to &pound;994. Thus, overall it is affordable to pursue higher education in Australia.</p>

<p><strong>ESOS Act:</strong>&nbsp;The Education Services for Overseas Students Act 2000 ensures that education and training institution maintain certain standards and legislative requirements, this specially for international students in Australia on student visa. This is another reason for choosing Australia as my destination for further studies.</p>

<p><strong>Tuition Protection Service(TPS):</strong>&nbsp;The Tuition Protection Service is an innovative initiative by the Australian Government which assists international students if the education provider is unable to fully deliver the course of study. It ensures that international students are either able to complete their studies in another course or another education provider or receive a refund of their unspent tuition fees. This helps students pursue their course with a peace of mind.</p>

<p><strong>Post Study Work (PSW) opportunity of Australia:&nbsp;</strong>The temporary graduate visa allows graduates to work in Australia temporarily after they finish their studies with two available streams i.e. the Graduate Work stream and Post-study work stream. This is instrumental to fresh graduates as they get industry exposure in a multi-cultural environment of highest standard.<strong>&nbsp;&nbsp;</strong></p>

<p><strong>Friendly Natives:&nbsp;</strong>Australian folks are considered to be one of the friendliest people in the World. It is evident from the percentage of individuals willing to choose Australia as their destination for further studies as well as those willing to migrate there.</p>

<p><strong>Standard of Living:&nbsp;</strong>Living expenses in Australia is minimal compared to other popular destinations for students. And the living standard in Australia is one of the best with Melbourne and Sydney consistently in the top 10 most livable cities in the World.</p>

<p><strong>Cultural Diversity:&nbsp;</strong>As Australia is a Melting pot for Millennials, nationals from countries across the world residing there is an evidence of the cultural diversity. This is because of a combination of factors including living standard, quality education, world class health care and immaculate infrastructure.</p>

<p><strong>MENTION ABOUT YOUR COURSE, DURATION, FEES, TOTAL CREDIT POINTS OF YOUR COURSE, TOTAL UNITS YOU NEED TO STUDY, CAREER OPPORTUNITIES AFTER COMPLETING COURSE, SPECILIZATION OR MAJOR IF ANY, IMPORTANCE OF THIS COURSE IN NATIONAL AND INTERNATIONAL JOB MARKET, PROFESSIONAL ACCREDITATIONOF THE COURSE INSIDE AUSTRALIA.</strong></p>

<p>I am applying for the Master of Engineering (MEng) at the&nbsp;<em>University Name</em>. The course code is&nbsp;<em>Code</em>.&nbsp; It is a professional Master&rsquo;s degree in the field of Engineering. The duration of this course is mentioned as 2-years full time. The fees for International Student as mentioned in the&nbsp;<em>University Name</em>&nbsp;website is AUD $31,680.00.&nbsp;</p>

<p>To qualify for the award of MEng, I will need to complete 160 credit points successfully.</p>

<p>I will need to complete 8 core units which include:</p>

<ol>
<li>Advanced Engineering Project 1</li>
<li>Advanced Engineering Project 2</li>
<li>Master Project 1</li>
<li>Master Project 2</li>
<li>Professional Practice and Communication</li>
<li>Research preparation in Post Graduate Studies</li>
<li>Specialized software application</li>
<li>Sustainable Systems</li>
</ol>

<p>Similarly, I will need to complete 5 specialized alternates. As my major will be Civil, I have chosen the following 5 units to specialize in:</p>

<ol>
<li>Advanced Applied Mechanics</li>
<li>Advanced Geotechnical Engineering</li>
<li>Advanced Structural Analysis</li>
<li>Advanced Timber Structures</li>
<li>Deep Foundations</li>
</ol>

<p>Additionally, I will be required to complete three 10 credit point elective units. I plan on choose units related to Construction Project Management and Risk Management.</p>

<p>This course has a full accreditation at the level of professional engineer at&nbsp;<em>University Name, Location</em>. As mentioned in the Course Handbook, the MEng degree has been designed to meet Engineers Australia professional accreditation requirements. So an MEng from&nbsp;<em>University Name</em>&nbsp;is eligible to apply for full membership of Engineers Australia. To add to that, upon successful completion, graduates are eligible to apply for Chartered professional engineering registration after completion of engineering practice period specified by Engineers Australia.</p>

<p><strong>FUTURE PLANS</strong></p>

<p>Upon completion of this course, I will have an opportunity to work at a private organization, a Design firm which specializes in Structural and Geotechnical Design or at a Project Management firm. Apart from these firms, I can also join Government entities in Nepal which include The Building Department, National Reconstruction Authority as well as the Road and Railway Departments.&nbsp; This course will help me become a seasoned professional with a strong knowledge base in my field of Civil and Structural Engineering. The demand for a Professional Engineer with specialization in Structural and Geotechnical design is increasing with the rapid rise in construction of mega structures world-wide. Additionally, I will have opportunities to work abroad in countries like the United Arab Emirates which prides itself for an ever changing and evolving construction industry. With my understanding of the Engineering industry of this region, I will find a suitable position and will adapt to it quickly.</p>

<p>I am looking forward to completing my Master&rsquo;s in Engineering. Upon completion, I have great plans for my career. While a prospect of working for some of the biggest construction firms in Nepal is an added bonus, I do have plans to setup my own Engineering and Project Management Consultancy. Some of the best employers of Graduate Civil Engineers in Nepal include,&nbsp;<strong>CE Construction Pvt. Ltd, Lama Construction Company Pvt. Ltd, Kalika Group and Raman Construction Pvt. Ltd.&nbsp;</strong>They offer a competitive package for Graduates from Australian Universities with average salary of around hundred thousand (100,000.00 Nepali Rupees per month). While the tuitions and other expenses for the duration of my course in Australia at Western Sydney University will come around AU$100,000.00 which is equivalent to Nepali Rupees 8,500,000.00, this figure is a small amount in the long run. It will be a matter of 5 years before I recover my investment. But I will gain valuable experience during this time which will help me succeed in my career. Starting a private firm is another option and Government of Nepal offers incentives to those willing to be self-employed in a technical field.&nbsp;</p>

<p>&nbsp;</p>

<p><strong><u>WHY THIS COURSE? WHAT IS YOUR CAREER PLAN AFTER COMPLETING THIS COURSE? HOW THIS COURSE WILL HELP YOU ACHIEVE CAREER GOAL?&nbsp;</u></strong></p>

<p>The Master of Engineering in Civil covers the field of Structural Design and Geotechnical Engineering among others. For a career, I plan on accumulating as much of an understanding of the design stream of Civil Engineering. The Geotechnical as well as Structural part of this stream is fundamental to understand the overall design of a structure. Although a vast stream this, I plan on taking this challenge one step at a time. As I started with this during my Bachelor&rsquo;s Degree, I plan on continuing this quest with a Master&rsquo;s degree with a specialization in the same stream. Further, I plan to take on a degree by research. This of course if I am able to sustain the rigors of my current challenge. Although, I am quite confident about it, with multiple choices and prospects upon graduation, I will decide on this eventually i.e. once I complete my Master of Engineering course.</p>

<p>After spending a small yet significant portion of my professional as well as academic career in this field I have come to realize that if we dedicate certain amount of time at something that we enjoy doing, we make a habit to further investigate it until we are successful at figuring it out completely. While the field of Engineering is vast and challenging, I want this course to help me figure out the streams of Structural and Geotechnical engineering. I want to understand the modes of analysis of structural components, under various loading conditions, that will be required in the design of such components. I find steel design challenging and exciting at the same time and want to be able to design a complete structure with a full understanding of the Codes, provisions and guidelines. This to design a structure both strong and serviceable. And upon understanding the theory, I want to practice the same on live projects using computer programs used in the analysis, design and modelling of such structures.</p>

<p>On a personal level, a Master&rsquo;s Degree in Civil Engineering from&nbsp;<em>University Name</em>&nbsp;will empower me in competing at the highest level. With my aim to specialize in Structural and Geotechnical engineering, the skills I shall gain in this field will be instrumental in designing and executing large scale projects. Nepal is a country with abundant water resources and majority of civil and infrastructure projects are related to hydropower. The planning and design phase of such projects require an in depth knowledge of Geotechnical as well as Structural engineering. Substructure of the Dam used in retaining large volumes of water needs to be stable. As these dams rest on the underlying strata, it is important to design them considering all possible cases. Similarly, the topic of slope stability and retaining structure, which comes under Geotechnical and structural engineering respectively, is an important unit which I expect to master during the course. The prospect of mastering the skills of Analysis and Design of Reinforced concrete and steel structure is appealing as these will be applied in the Design of most of the structures.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>WHY&nbsp;<em>University Name</em>?</strong></p>

<p>With students from more than 70 countries, the diversity at&nbsp;<em>University Name</em>&nbsp;is second to none. This illustrates the superior quality of education on offer at&nbsp;<em>University Name</em>&nbsp;as prospective students find it easy to choose&nbsp;<em>University Name</em>&nbsp;as the University of choice. And with a quality education comes the personal satisfaction of having earned a valuable degree. This combination is the principal reason for my choosing&nbsp;<em>University Name</em>&nbsp;as the institution for pursuing Master of Engineering.</p>

<p><em>University Name</em>, starting its operations in 1989, has become a world class University. Recognized for its research strengths and innovations in teaching,&nbsp;<em>University Name</em>&nbsp;is Sydney&rsquo;s highest rated University for employer satisfaction with 9 out of 10 employers saying great things about&nbsp;<em>University Name</em>&nbsp;graduates. As the University stands among the top 2% of Universities across the world and is ranked at 71 among top 100 Young Universities,&nbsp;<em>University Name</em>&nbsp;is my first choice to purse Post graduate degree in engineering.</p>

<p>Another reason for choosing&nbsp;<em>University Name</em>&nbsp;is it helps fuel my ambition to be a Globe trotter. With the Global Mobility, internship and work placement programs,&nbsp;<em>University Name</em>&nbsp;offers an opportunity to travel and work in over 300 destinations worldwide. The traveler in me is jubilant to have this opportunity and that is one more reason to choose&nbsp;<em>University Name</em>.</p>

<p>Campus of the future at Parramatta CBD is a campus in the mind of every prospective student. This innovative campus, built to meet the requirements of workplace of the future is amongst the most technologically advanced teaching and research campuses in the world. Located conveniently and close to public transport, this facility adds to the reason for choosing&nbsp;<em>University Name</em>&nbsp;over other Universities.</p>

<p>Similarly, I have come to understand that the support structure for International students at&nbsp;<em>University Name</em>&nbsp;is impressive with round the clock care available to students at all levels. And the possibility of industrial internship programs to continue professional development is an advantage over other universities.&nbsp;</p>

<p>Having researched similar programs at the University of Central Queensland and Charles Darwin University, I decided on&nbsp;<em>University Name</em>&nbsp;for its quality, futuristic approach to learning, course structure, student support facility, tuition and scholarships.&nbsp;</p>

<p><strong>IS A SIMILAR COURSE AVAILABLE IN NEPAL?</strong></p>

<p>A similar course i.e. Masters in Engineering is available at the Tribhuvan University and Kathmandu University. Both of these institutions are renowned in Nepal. The course structure for both of these Universities are similar. However, the curriculum at these Universities are not up to date. This I have learnt from alumni of these universities after they graduated and applied for higher degree abroad. Similarly, inadequate laboratories and facilities at these institutions add to the sub-par curricula as students are unable to choose specialized units. To add to that, the educational as well as overall environment is volatile for students who wish to purse technical education such as engineering with politics coming into play in most of the institutions.</p>

<p>While India is an option and offers variety of specialization as well as locales, I have already experienced the education system there having pursued my Bachelor degree in Civil Engineering in Tamil Nadu, which is southern India. I am more aligned towards a better quality of education, in a multicultural environment at a world class facility. This is the reason for my choosing Australia and&nbsp;<em>University Name</em>&nbsp;for Master of Engineering in Civil.&nbsp;</p>

<p><strong>HOW ARE YOU GOING TO FUND YOUR EDUCATION IN AUSTRALIA?</strong></p>

<p>My mother will sponsor me during my study and stay in Australia. Besides that, she owns a land which is in lease and the rent from that will act as an income source for my funds. I am grateful to have a family which has always been supportive towards my decisions. And having made my decision to pursue a Master of Engineering degree in Australia, I will be financially supported by my family as we have enough financial resources to cover my studies, lodging, food and other expenses during my stay in Australia.</p>

<p>We are a closely knit family. My father and Uncle (father&rsquo;s brother) with family make up 7 strong members as a family. My mother, on the other hand, has two younger sisters and two elder brothers. That side of my family tree sums up to be 22 members including my grandparents. We live fairly close and have something or the other happening which keeps us together. Festivities and ceremonies are fun and we make it a purpose to share our experiences during this time.</p>

<p>As far as my future plans are concerned, I will return back to Nepal upon completion of my course and Post Study Work (PSW). With the knowledge I will have gained by the end of the course, I will be able to grow as an individual and help become a valuable player in developing Nepal. As the country is struggling in the Civil and Infrastructure sector, a small effort in my part will help direct the country in the right direction while inspiring others.&nbsp;</p>

<p><strong>UNDERSTANDING OF VISA CONDITIONS FOR INTERNATIONAL STUDENT</strong></p>

<p>Having gone through relevant information provided in the Department of Immigration and Border Protection website, I confirm I have understood the terms and conditions of Visa Sub Class 500. This Visa is for students who want to enter Australia as a temporary entrant to study at a registered education institution. In order to maintain my Visa status:</p>

<ol>
<li>I should maintain a minimum of 80% of attendance</li>
<li>I need to have a minimum 50% pass marks in each subject</li>
<li>I will have to cover the OSHC (Overseas Student Health Cover) during my stay in Australia.</li>
<li>I should pay the tuitions before due date</li>
<li>I am not allowed to work more than 40 hours per fortnight.</li>
<li>I must inform my university within 7 days of arrival to Australia and should notify within 7 days of any changes in address and contact.</li>
<li>I am not allowed to change the course without approval of the department and cannot change institution until six months of my study.</li>
<li>I can study and live in Australia as long as I am enrolled in the course registered in Commonwealth Registration of Institutions and Courses for Overseas Students (CRICOS)</li>
</ol>

<p><strong><u>CONCLUSION</u></strong></p>

<p>In Conclusion, I&rsquo;d like to stress my desire to pursue my Master&rsquo;s degree in Australia. I believe that a quality education coupled with exposure to international standards and practices will help polish myself as a valued professional in the industry of Civil Engineering. And a Master of Engineering in Civil from&nbsp;<em>University Name</em>&nbsp;will help bridge the gap between who I am today and who I aspire to be in the future. Hence, I sincerely request you to accept my Statement of Purpose and offer me a place at your esteemed institution to pursue a Master&rsquo;s degree in Civil Engineering. Anticipating a positive response.</p>

<p>I declare that the particulars given above are true and correct in every detail. I understand that incorrect or misleading statements may result in refusal of my admission and/or student visa application.</p>

<p>Yours truly,</p>

<p><em>Applicant Name</em></p>

<p>Passport Number:</p>

<p>Date:&nbsp;</p>',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": "14"}',
                'meta_name' => 'Architecture and Building Course - SOP',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 16:35:07',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            9 => 
            array (
                'id' => 18,
                'slug' => 'engineering-and-technology-course-sop',
                'name' => 'Engineering and Technology Course - SOP',
                'excerpt' => NULL,
                'description' => '<p><strong>Introduction</strong></p>

<p>The ensuring statement of purpose is meant to put forth my aspiration to pursue my career through a Masters of Mechanical Engineering at your esteemed university. As well as desecration of my plans subsequent to my graduation. In this ever-changing world of technology, the passing day makes them obsolete, I want to attain the highest level of education and transcend new scope on information technology. This has always fascinated me and I am keen to continue my academic pursuit in this field.</p>

<p>I would present myself as&nbsp;<em>your full name</em>, son of&nbsp;<em>Father Name</em>&nbsp;and&nbsp;<em>Mother Name</em>, a permanent resident of&nbsp;<em>Full address</em>. I present myself as a Nepalese citizen withholding citizenship number&nbsp;<em>********</em>&nbsp;and passport number&nbsp;********. I am a fully committed engineer in Nepal in the Mechanical engineering sector. So, I want to be a part of the<em>&nbsp;University name</em>&nbsp;to pursue a Master for Mechanical Engineering.</p>

<p><strong>Academic Background</strong></p>

<p>Concerning my academic qualification, I completed my school level from&nbsp;<em>Your School Name</em>&nbsp;in&nbsp;<em>Pass out year</em>&nbsp;A.D with&nbsp;<em>Academic %</em>&nbsp;and&nbsp;<em>your proficiency certificate</em>,&nbsp;<em>the address of proficiency certificate</em>&nbsp;with&nbsp;<em>Academic %</em>&nbsp;in&nbsp;<em>Pass out Year</em>. I decided to&nbsp;go to&nbsp;India after giving entrance I got the opportunity to join one of the most reputed colleges of India,&nbsp;<em>College Name</em>&nbsp;where I graduated from&nbsp;<em>Course Name</em>. I had four-month industrial training during my 8th&nbsp;semester in&nbsp;<em>Company Name</em>.&nbsp;Ltd. Finally, I graduate with&nbsp;<em>Academic %</em>, which is the first division with distinction in&nbsp;<em>Pass out Year</em>&nbsp;I showed up my International English Language Test System (IELTS) examination scoring overall 6 bands with no band less than 6 my test date is on&nbsp;<em>IELTS Examination Date</em><em>.</em></p>

<p><strong>The reason why I choose Australia</strong></p>

<p>I have always cherished a dream to become an engineer, a dream that was innate and develop slowly over the years. Right from my school days, I found myself fascinated by the intricacies of mathematics and physics, I have always felt a strong need for archived in my academic career. Australia offers a diverse range of study options for international students due to its qualitative education, practically oriented teaching system and friendly and safer environment. As per my research on Australian education, Australia offers a diverse range of study options for international students, with more than 1200 intuitions and over 22000 courses to choose from. Australia has formulated ESOS (Education Services for Overseas Students) act in 2000 and implement in 2001, which has three basic functions: Firstly, Tuition Protection Services, by which students can claim and acknowledge the refund policy of the institution.</p>

<p>Secondly, right to receive, before enrolling, current and accurate information about the courses, fees, modes of study and other agreement with our institutions and institution agent. And the third one is, right to sign written agreement with or institutions before paying fees, setting out the services to be provided, fees payable and information about refunds of course money and make sure to copy of our written agreement. Besides this, Commonwealth Register of Institution and Course for Overseas Students (CRICOS) registration guarantees that the course and the institution at which study meet the high standards expected by international students. Apart from being a great place to get a first-rate education, Australia is the safest and welcoming with cultural diversity and friendly natives.</p>

<p>This is proof of the excellence of Australian education. Along with ESOS, there are also regulatory and quality assurance organizations name Australian Skills Quality Authority (ASAQ) which promotes quality training so that the students have confidence in the Australian Training sector. The Australian government provides more than 200 million Australian Dollar scholarships every year for international students. Further Australian degree has worldwide acceptance and the environment is moderate and clam similar to that of Nepal. Lastly, their cultural diversity lures and attracts students.</p>

<p><strong>The reason why I choose the&nbsp;University name.</strong></p>

<p><em>University&rsquo;s name</em>&nbsp;is an Australian multi-campus&nbsp;<a href="https://en.wikipedia.org/wiki/Public_university">public university</a>. Established in 1902, it was named after the first women to be elected to an Australian.&nbsp;<em>University name</em>&nbsp;has three&nbsp;campuses&nbsp;located in Joondalup, Mount Lawley and one at Bunbury, in&nbsp;Western&nbsp;Australia. The<em>&nbsp;Campus name</em>&nbsp;is the University&rsquo;s Headquarters where the master of engineering (major: Mechanical) is available. Lower costs of living, unpolluted air and an increased sense of safety are just some of the advantages of living and studying in regional Australia. Campuses are ideally located, enabling access to a wealth of activities, from joining sporting groups to enjoying local clubs or a night at the theatre. Whatever we desire from our time at university,&nbsp;<em>University name</em>&nbsp;ensures us that we are at home.&nbsp;&nbsp;<em>University name</em>,&nbsp;<em>University name</em>,&nbsp;<em>University name</em>,&nbsp;also provide the engineering program but the location, fee structure and the ranking of the university as well as the teaching methodology inspire me to choose the&nbsp;<em>University name</em>&nbsp;rather than the other universities.</p>

<p>I have completed my bachelor&rsquo;s degree from India and Master of Engineering (major: mechanical) is the subject, which I intended to do in Australia. The reason behind choosing India for bachelors, why not my home is because the education system is not satisfactory in comparison to the Global Market. But for&nbsp;Masters,&nbsp;I saw a better opportunity&nbsp;and significant practical training in Australia more than India, which is the key point that attracts me. The&nbsp;Engineer&rsquo;s job market is increasingly competitive and employers are putting more emphasis on formal education than ever before. Master in mechanical engineering at&nbsp;<em>University name</em>&nbsp;provides me with the&nbsp;opportunity&nbsp;to gain industrial and technical knowledge to enhance my engineering skills and further develop expertise in specific and cutting edge areas of the Engineering profession. The program is flexible, allowing studying online&nbsp;either on a&nbsp;full&nbsp;or part-time basis.</p>

<p><strong>Family Background</strong></p>

<p>I was born in a rural municipality&nbsp;<em>Your full address</em>. I have a small family of 6 members including Father (<em>Father Name</em>), Mother&nbsp;(<em>Mother Name</em>), sister (<em>Sister Name</em>), Brother&nbsp;(<em>Brother Name</em>), my wife (<em>Wife Name</em>) and me. They have been saving the fund that is required for my postgraduate studies. I am a&nbsp;married&nbsp;person, so my wife is accompanying me to Australia. My family is capable of financing my study. Since I am the elder son so I have many responsibilities towards my family. As our&nbsp;tradition,&nbsp;we have to&nbsp;look at&nbsp;our parents so I will come to the home after my postgraduate study.</p>

<p><strong>My future career plan after the completion of course</strong></p>

<p>After completing my studies, I intended to return to Nepal where opportunities are immense and&nbsp;challenge&nbsp;alluring. I believe that any engineering field requires a channeling to obtain the effective output out of it. The proper industrial knowledge of that an engineer learns is the must when it comes to the processing of minimum input into the maximum output. This is the reason why I want to study a&nbsp;Masters&rsquo;s&nbsp;in mechanical engineering. With this as my major, I will be able to connect the dots between effective technology and industrial engineering. This will help me to understand how to properly channel all the techniques I&rsquo;ve learned to get a better result. This will allow me to develop my technical and business skills to their fullest. The specialization in mechanical strategy within the course will help me become an engineer strategist which in turn will help me guide the techniques I learn in Engineering to produce effective output&nbsp;on&nbsp;an industrial scale. I have also researched the&nbsp;different upper-level&nbsp;posts, which requires an engineer with various skills providing high starting salaries, and I am quite sure after I get a degree from&nbsp;<em>University name</em>, I will be more than eligible for the post and return my parent&rsquo;s&nbsp;investment in&nbsp;my education. I will be able to work as a mechanical engineer with more engineering skills in any Sector such as Automobile, Hydroelectric power plants and many more.</p>

<p><strong>My Understanding in Subclass 500 objectives</strong></p>

<p>I am aware&nbsp;of&nbsp;the new SSVF policy and I have applied for a Master&rsquo;s degree by coursework under visa subclass 500 Higher Education Sector. Being an international student, I must inherit the following condition:</p>

<p>I need to maintain 80% attendance.</p>

<p>I need to clear 50% of the&nbsp;subject&nbsp;in each term.</p>

<p>I am allowed to work 40 hours per fortnights on a part-time&nbsp;basis.</p>

<p>I cannot change the university for 6&nbsp;months&nbsp;upon enrollment.</p>

<p>I must have&nbsp;valid&nbsp;health insurance during the stay in Australia.</p>

<p>I must notify University/DIBP if I change the address/contact details within seven days.</p>

<p>I am quite sure that my statement of purpose demonstrates the required qualities to get acceptance in the Masters of Mechanical Engineering&nbsp;at&nbsp;<em>University name</em>. I will follow rules and regulations set by&nbsp;<em>University name</em>&nbsp;and Focus on gaining the maximum out of it. I will be&nbsp;a sincere&nbsp;and obedient student among others. I hope you will give me an opportunity to take a&nbsp;step&nbsp;closer to my aim.</p>

<p>Hereby, I have enclosed a comprehensive set of documents that at least to the circumstance of my sponsor. Please don&rsquo;t hesitate to contact me in&nbsp;case&nbsp;there is any additional information required. After hearing my words and after the verification of all my documents. I wish you will consider me as a genuine applicant for the course I have chosen, I hope you will kindly consider me and allow me to study in Australia.</p>

<p>Thank you</p>

<p>Sincerely yours</p>

<p><em>Your Name</em></p>

<p>Cell: +977&nbsp;*********</p>

<p>Email:&nbsp;<em>Your email address</em></p>',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": "14"}',
                'meta_name' => 'Engineering and Technology Course - SOP',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 16:35:56',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            10 => 
            array (
                'id' => 19,
                'slug' => 'law-course-sop',
                'name' => 'Law Course - SOP',
                'excerpt' => NULL,
                'description' => '<p>My name is&nbsp;<strong>Applicant Name</strong>&nbsp;and I am a permanent resident of&nbsp;<strong>Address</strong>, Nepal. I was born on&nbsp;<strong>DOB</strong>&nbsp;as the second child of my parents,&nbsp;<strong>Parents Name</strong>. Apart from my parents, I have an elder sister and a younger brother in my family. As of now, my marital status is single.</p>

<p><strong>Academic background</strong></p>

<p>I completed my Secondary Education Examination (S.E.E) &ndash; Grade 10 from&nbsp;<strong>School</strong>, , Securing a grade point average of 2.90 out of 4 in 2018. After the completion of the course in 2018, I joined&nbsp;<strong>college</strong>&nbsp;to pursue my higher secondary education in the field of my interest i.e. law. I completed it with CGPA 2.84 in the year March, 2021. After the completion of high school, it took a while for me to study and understand myself where I was able to acknowledge my strength and goals. It didn&rsquo;t take me long to understand that I needed a good education to accomplish my goals to establish myself in the field of Law. It was really tough for me to decide where to study. After a lot of research, webinar attendance, and many counseling sessions, I decided to study abroad for my bachelor&rsquo;s degree. Before deciding to apply abroad, I researched the potential study options here in Nepal. But because of the ample reasons I decided not to start education here in my home country Nepal. I thought about applying abroad but Covid 19 broke in Nepal from April and all the educational consultancies along the border of my intended country, Australia closed from March 29, 2021. Due to that I could not go ahead with the application. When the lockdown ended in September 2021, I started to prepare for the English Test and about to take the test on 13 Feb 2022 and Scored overall 52 in Pearson test of English.</p>

<p><strong><u>Reason for not choosing to study in Nepal</u></strong></p>

<p>I want to study for a Bachelors of Law and I am not sure if I can achieve my full potential in the relevant field if I am to continue my studies in Nepal. First of all, the curriculums of most of the Nepalese universities have not been updated for decades and the approach of studies is still theoretical. A research-based education is practiced very little in Nepal. Education system in Nepal is book-focused where we can pass the exams by memorizing notes, old questions and books rather than any research or practical projects. I have been educated this way all my life but I am old enough to know that I have considered other options of studies.</p>

<p>I visited a number of well-reputed local colleges and universities including Purwanchal University, Tribhuvan University, Pokhara University and their affiliated colleges during my spare time between now and the time of my high school graduation. None of them were enticing enough to consider studying in Nepal itself as they lacked so many things apart from the quality of curriculum structure and delivery of them. Some of them severely lacked physical infrastructures such as modern labs, research activities and teaching faculty members which would definitely harm students&rsquo; potential to be competitive to the international market. Based on my research, Even employers in Nepal these days prefer foreign graduates over the graduates from Nepal. I think the curriculum, teaching methodology, infrastructure of practical labs etc. which are comparatively poorer in Nepal are the major reasons behind the employers giving priority to the foreign graduates. Here in Nepal, there&rsquo;s a lack of reputed universities and also lack of modern courses and most importantly Nepalese qualification is not globally recognized. Furthermore, as the world is getting competitive day by day and face worldly challenges yet to come, Nepal&rsquo;s education degree is not globally competitive and this is the major reason for me to choose abroad for my further education.</p>

<p><strong><u>Why Australia?</u></strong></p>

<p>During my spare time, I did some research on the other options such as the USA, The UK, Canada and other European nations as well. With some research and conversations with friends and relatives, I came to know that the crime rates in the USA are one of the chief reasons for international students to avoid the USA from their wish list whereas UK&rsquo;s living expenses scare students from choosing British education. Canada and other European nations have a very chilling climate for over 6 months which could be very frustrating for international students to adapt to. Due to these various reasons, I found Australia to be the most neutral option among all others mentioned.</p>

<p>Australia is a country which has quality research programs and impressive technology available for international students. It has a reputation for adopting new technologies at a faster rate than in other countries. Australian qualifications are recognized by employers and leading educational institutions in many countries around the world. The graduates of Australian universities have always grabbed global opportunities. Australia has the third highest number of international students in the world after the UK and US despite having a population of only 23 million. Many Australian Universities are ranked in the top 100 universities of the world and provide a unique kind of education so that students can be creative, innovative and think independently. Studying overseas in Australia will thus give me not only a greater range of professional skills but also a much broader, more international perspective.</p>

<p><strong><u>Why University?</u></strong></p>

<p>I did plenty of research on the internet and talked to many individuals who have proper insights regarding the universities in Australia. I began to search for different universities which would provide me with my particular course. The course that I am going to study i.e. Bachelors of law is pretty much a common subject that most of the universities in Australia provide. As per my research from surfing different websites and attending Australian fairs (held in Kathmandu, Nepal), I found that&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;has a very successful Bachelors of Law program, as well as thriving higher degree in research program. The school of law offers programs on the Parramatta and Campbell town campus,&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;has ranked in the top 2% of universities globally and values academic excellence, integrity and the pursuit of knowledge.</p>

<p>I believe it&rsquo;s one of the most exhaustive and globally inclusive in Australia that offers many programs and courses over a wide range of study areas coming from an underdeveloped country like Nepal, Where the choice of study courses is very limited for a student, it gives me immense satisfaction and happiness to be able to choose satisfaction and happiness to be able to subjects of my interest at&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;as it runs program in a wide range of disciplines. In addition to this, the tuition fee for an international student is a major important factor that needs to be considered before applying for a foreign degree. Beside this, its extensive student support services that aim to endeavor for an international student to gain academically, socially, and culturally are very impressive in comparison to support services that other universities in Australia provide. Moreover, in order to build a successful career,&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;offers opportunities to its students on a certain degree program. Hence, these are a few of the reasons why I choose&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;to continue my further education than in other universities in Australia.</p>

<p>After a lot of research, I found out that&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;values academic excellence, integrity and the pursuit of knowledge.&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;is ranked 19<sup>th</sup>&nbsp;in Best Global Universities in Australia and 21th in Best Global Universities in Australia/New Zealand. Hence, looking at various aspects like course structure, reputation, quality of education, multiple intakes, tuition fee, teaching method, I am personally very much impressed with&nbsp;<strong>UNIVERSITY NAME</strong>. I am desperately looking forward to studying Bachelor of law in&nbsp;<strong>UNIVERSITY NAME</strong>.</p>

<p><strong><u>Why Sydney?</u></strong></p>

<p>Sydney, being home to The Opera House and the capital city of New South Wales (NSW) is the largest city in Australia. With an extraordinary Australian education system, Sydney stands tall above all as one of the top destinations for international students in the whole world. The temperate climate equivalent to fantastic summers and mild winters is one of the main reasons for international students to choose Sydney over other states in Australia. Students make the most of the perfect weather doing a long list of outdoor activities, whether learning to surf, riding a bicycle or just exploring the city center, there are plenty of things to do literally under the sun.</p>

<p>Apart from education and climate reasons, another reason for international students to choose Sydney is its diversity as thousands of students from all over the world enter Sydney every year for higher education. It is a golden opportunity for international students to be able to adapt and learn in a community full of people with different backgrounds of race, religion, cultural and social values. Home to hundreds of individuals from different cultural backgrounds, the city&rsquo;s friendly atmosphere welcomes everyone adding to its vibrancy and colors.</p>

<p>Furthermore, Sydney has been listed in the top most livable cities in the world for many consecutive years, according to the Economist Intelligence Unit (EIU). This shows that Sydney offers not only a diversified and vibrant environment, it also provides a peaceful atmosphere for international students to pursue their higher education and enjoy life. According to the Economist Intelligence Unit&rsquo;s 2016 global liveability survey on 140 cities in the world, Sydney is the world&rsquo;s second friendliest destination. So, these all qualities of Sydney encouraged me to choose Sydney as a study destination.</p>

<p><strong><u>Reasons for choosing Bachelor of law</u></strong></p>

<p>Studying abroad has its benefits and pursuing a professional course from a renowned abroad university gives professionals an edge over the others in the job market. Not only this, the experiences of studying abroad play a huge role in shaping humans and transforming their existing personalities for the better. Law is one such field, when pursued on the international front brings forth various opportunities for the graduates while helping them with an international perspective to operate more efficiently.</p>

<p>My obsession with pursuing a degree in law is driven by my deepest interest and curiosity about corporate law. From my childhood till today, I have always been fond of business, companies, and organization&rsquo;s rules and regulations. One important reason is the scope of corporate lawyer. It offers a demanding and lucrative career. Studying corporate law will make me more creative, competent and provide me with a whole lot of information which will also directly help me land a job. I believe that corporate law is the body of law governing the rights, relations and conduct of persons, companies, organization and business. It refers to the legal practice of law relating to corporations or to the theory of corporations.</p>

<p>I am aware that the history of successful corporate lawyers of this field like Wichai Thongtang, Charlie Munger, Bill Neukom, Judge Judy, Roy Black, Robert Shapiro, John Branca and others used to be an ordinary person like I am today but had big dreams like I do today. I truly would like to do all I can as a corporate lawyer in Nepal</p>

<p>The Bachelor of Law degree at&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;is the right program for me to learn so much in the field. The course is designed to provide students like me with proper knowledge and skills required to be successful in the field of corporate law. They provide various opportunities to learn including industry-based experiences where I can learn things that happen in real world scenarios. The degree makes students like me competent enough for the working environment soon after graduation.</p>

<p><strong><u>Course Structure and Contents</u></strong></p>

<p>My course, Bachelors of Law( Non Graduate entry) is a 4 years degree course with 320 Credit points including 12 Credit points for core subjects, 80credit points for alternate law subjects and Non LLB elective subjects. The course falls under AQF level 7 program with [program code 2502 and CRICOS 041112G. Every Year Teaching is divided into 2 sessions; Autumn Session and Spring Session. The table below demonstrates course content distribution and allocated credit points<a href="https://hbook.westernsydney.edu.au/programs/bachelor-laws-non-graduate-entry/#sequencetext">https://hbook.westernsydney.edu.au/programs/bachelor-laws-non-graduate-entry/#sequencetext</a>&nbsp;. &nbsp;</p>

<p><strong>&nbsp;</strong></p>

<table style="width:690px">
<tbody>
<tr>
<td colspan="2">
<p>AUTUMN SESSION</p>
</td>
<td>
<p>CREDIT POINTS</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%201003">LAWS 1003</a></p>
</td>
<td>
<p>Fundamentals of Australian Law</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%202004">LAWS 2004</a></p>
</td>
<td>
<p>Criminal Law</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%202003">LAWS 2003</a></p>
</td>
<td>
<p>Contracts</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%202015">LAWS 2015</a></p>
</td>
<td>
<p>Professional Responsibility and Legal Ethics</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>Credit Points</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>SPRING SESSION</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%201009">LAWS 1009</a></p>
</td>
<td>
<p>Legal Analysis and Critique</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%202013">LAWS 2013</a></p>
</td>
<td>
<p>Torts Law</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%202001">LAWS 2001</a></p>
</td>
<td>
<p>Alternative Dispute Resolution</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%202008">LAWS 2008</a></p>
</td>
<td>
<p>Government and Public Law</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>Credit Points</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>Year 2</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>AUTUMN SESSION</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%203018">LAWS 3018</a></p>
</td>
<td>
<p>Equity &amp; Trusts</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%203082">LAWS 3082</a></p>
</td>
<td>
<p>Property Law</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td colspan="2">
<p>Select two LLB alternate subjects</p>
</td>
<td>
<p>20</p>
</td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>Credit Points</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>SPRING SESSION</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%203081">LAWS 3081</a></p>
</td>
<td>
<p>Administrative Law</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%203045">LAWS 3045</a></p>
</td>
<td>
<p>Law of Associations</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td colspan="2">
<p>Select two LLB alternate subjects</p>
</td>
<td>
<p>20</p>
</td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>Credit Points</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>Year 3</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>AUTUMN SESSION</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%204015">LAWS 4015</a></p>
</td>
<td>
<p>Constitutional Law</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%204004">LAWS 4004</a></p>
</td>
<td>
<p>Criminal Procedure and Evidence</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td colspan="2">
<p>Select two LLB alternate subjects</p>
</td>
<td>
<p>20</p>
</td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>Credit Points</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>SPRING SESSION</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%204013">LAWS 4013</a></p>
</td>
<td>
<p>Civil Procedure and Arbitration</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td>
<p><a href="https://hbook.westernsydney.edu.au/search/?P=LAWS%204014">LAWS 4014</a></p>
</td>
<td>
<p>Remedies</p>
</td>
<td>
<p>10</p>
</td>
</tr>
<tr>
<td colspan="2">
<p>Select two LLB alternate subjects</p>
</td>
<td>
<p>20</p>
</td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>Credit Points</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>Year 4</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>AUTUMN SESSION</p>
</td>
</tr>
<tr>
<td colspan="2">
<p>Select four elective subjects</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>Credit Points</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td colspan="3">
<p>SPRING SESSION</p>
</td>
</tr>
<tr>
<td colspan="2">
<p>Select four elective subjects</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>Credit Points</p>
</td>
<td>
<p>40</p>
</td>
</tr>
<tr>
<td>
<p>&nbsp;</p>
</td>
<td>
<p>Total Credit Points</p>
</td>
<td>
<p>320</p>
</td>
</tr>
</tbody>
</table>

<p>I have to choose 2 alternate subjects from year 2 Autumn Session. Options under Alternate subjects are like Advance Family Law, Advanced Taxation Law, Australian Consumer Law, Corporate governance, gender and the law, International business transactional law, law for international organizations, Public international law and so on. I have to choose alternate law courses upto Year 3 Spring Session. In final year&rsquo;s both sessions I need to choose 4/4 elective subjects bearing 40/40 credit points for each session.</p>

<p><strong><u>Financial Support</u></strong></p>

<p>My family is very excited about my further education in Australia. They are so well assured that my education in Australia will help me achieve my career goals and future dreams. Therefore, they are more than willing to sponsor all the expenses that will occur while I study in Australia. I am aware that I have to fund my study in Australia for my financial security. For that I have managed an education loan worth&nbsp;<strong>NPR</strong>&nbsp;in Bank mortgaging the land with plot no. owned by my&nbsp;<strong>father.</strong>&nbsp;The total value of the land is&nbsp;<strong>NPR</strong>. Similarly, My&nbsp; sold her land with plot no 478 located in Tarkughat 6 Lamjung Nepal.The land was sold to&nbsp;<strong>Name&nbsp;</strong>&nbsp;in 9 Lakhs 50 Thousands Nepalese Rupees and deposited in bank. Along with the fund my family has good regular income sources. My father works in and earns NPR 6,00,000 annually. My father Mr. Purna Bahadur Gurung has income from pension worth Annually. Similarly, My mother works in a cafe named Mayur Cafe as Manager and has NPR income annually. Likewise my elder sister, Gurung works in&nbsp; Private Limited as Customer service officer and earns. My father&rsquo;s land with plot no 357 is given is lease to&nbsp;<strong>NAME</strong>. We get NPR &hellip;&hellip; per Year. Above mentioned funding and income sources will surely secure my family&rsquo;s obligation to run the family and my living and study in Australia.</p>

<p><strong><u>My Future Career Plan</u></strong></p>

<p>The world has seen fantastic growth in the field of law. Law in Nepal has been rising in a way that the industry needs more competent graduates in the field. I believe that I will be well with all the corporate law&rsquo;s knowledge, skills needed to start working as a lawyer in a career, once I graduate from&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;in Australia.</p>

<p>Once I complete my education in&nbsp;<strong>UNIVERSITY NAME</strong>, Sydney, I will get industry related experience in Australia, an international market to sharpen my skill and knowledge gained in&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;during Post study work. After the completion of the course, I will be eligible to work as Solicitor, Barrister, Human Rights Advocate, Judges Associates, Legal advisor to a company and so on. I am really looking for a bright future career in the field of law, as there are a lot of different career options and paths for me in the reverent field in Nepal. There are many top companies and law firms in Nepal to utilize my knowledge to reach a successful career. I do not expect to be paid too much of remuneration immediately after joining any of the companies, thus I will have plenty of room to grow and promote my career in Nepalese law world. I plan to utilize all the skills gained from&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;in my own home country. Once I have enough experience and knowledge, I will move forward to start working as a lawyer in my own country Nepal. In addition, I also plan to associate myself with some organizations and companies and share the knowledge and skills that I learnt from Australia here in Nepal. Students who are financially sound can get better education flying abroad but I can be of help for those students who have a zeal for learning something new but aren&rsquo;t able to afford an education abroad.</p>

<p>&nbsp;<strong><u>Incentives to return</u></strong></p>

<p>There are many forces that will drive me back to Nepal after I complete my studies like my career opportunities, my vision, my friends etc. and above all the things, I do have my family. My parents have never deprived me of anything I wanted. They have always backed me and my interest and have been very supportive. How successful a human is, I can&rsquo;t deny the fact that he/she is always carving for happiness and I am not an exception.</p>

<p>Though I will miss my family for a short time while I am studying in Australia, I will be back and fulfill my dream of living with my family. Here in Nepal, I will have my parents, siblings and other relatives to support me to achieve my aim rather than struggling in loneliness. I have seen my great career here in Nepal in the field of Law in Corporate law industry and legal institutes, thus my education in the field of Law in&nbsp;<strong>UNIVERSITY NAME</strong>&nbsp;will surely be boon for my career development and establishment here in Nepal. If I have assurance of my career with full potential, I have no motive to stay outside my country. Similarly, I am a responsible citizen of my nation. My wish to contribute for my nation in the field of maintaining law and order will remain unfulfilled, so that I must be back to Nepal.</p>

<p><strong>Subclass 500 Student Visa Obligation:&nbsp;</strong>&nbsp;</p>

<p>I understand the terms and conditions and my limits to the Visa Subclass&nbsp; 500, which has been effective since July 01, 2016 under Simplified&nbsp; Student Visa Framework (SSVF) for all international students who wish to&nbsp; study in Australia at a registered education institution. Some visa&nbsp; conditions that I should follow in Australia are:&nbsp;</p>

<ul>
<li>I should maintain at least 80% attendance in my course and satisfactory course progress in each study period.</li>
<li>I must maintain an Overseas Student Health Cover (OSHC) policy for the full duration of the visa.</li>
<li>I am allowed to work 40 hours per fortnight on a part-time basis. &bull; I must maintain the payment of tuition fees by the census date of each term in which I am enrolled to study and should have a genuine access to&nbsp; funding to meet travel costs and leasing expenses.&nbsp;</li>
<li>I must score a minimum of 50% in each subject throughout the study program.</li>
<li>I have to inform college and immigration if I change the address or contact details within seven days.</li>
</ul>

<p>&nbsp;</p>

<p>Lastly, I assure you that all above mentioned information is genuine and true and I am aware that any false information may lead to the rejection of my student visa. I am a sincere candidate with pure intentions to study in Australia. I shall abide by the Australian law while in Australia and return to Nepal upon completion of my studies.</p>

<p>Thanking you in anticipation with hope for a positive response.</p>

<p>Sincerely,</p>

<p>Applicant Name</p>',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": "14"}',
                'meta_name' => 'Law Course - SOP',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 16:36:45',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            11 => 
            array (
                'id' => 20,
                'slug' => 'business-economics-course-sop',
                'name' => 'Business & Economics Course - SOP',
                'excerpt' => NULL,
                'description' => '<p>My name is&nbsp;<em>Your Name</em>. I live in&nbsp;<em>your full address</em>. I am 23 years old. I have completed my bachelor&rsquo;s degree in&nbsp;<em>your faculty</em>&nbsp;from&nbsp;<em>Your college name</em>. It is a 5 years course. This college is affiliated to Tribhuvan University. I got&nbsp;<em>Academic %</em>&nbsp;in S.L.C form&nbsp;<em>Your School Name</em>,<em>&nbsp;Academic %</em>&nbsp;from Your&nbsp;<em>Higher School name</em>&nbsp;and&nbsp;<em>Academic %</em>&nbsp;in the bachelor from&nbsp;<em>Your College</em>.</p>

<p>I have not involved in any kind of employment. But I have worked as a trainee architect for 6 months in&nbsp;<em>Company Name</em>. The internship is a part of our course which is done in the fourth year. I was also involved in different architectural exhibitions which have helped me to gain extra knowledge and experiences. Involvement in these kinds of exhibitions helps me to learn about management, leadership, and teamwork.</p>

<p>I choose Master of Business and Project Management for my further study because every profession should have knowledge of managing different kinds of projects. Similarly, being an architect, I also want to have knowledge of project management. This course will give me knowledge about initiating, planning, executing, controlling and closing of the projects. Architects are involved in different kinds of projects in cooperation with different organizations such as private, government, NGO and INGO. And every company requires project managers to run their projects as well as the company. This course will make me capable of handling many kinds of projects in a skillful and professional manner. Architects having knowledge of project management surely have huge scope. Realizing the importance of project managers with high scope, I decided to undertake this course for my further study.</p>

<p>Today, the whole world is in the phase of development. Every nation is more developed in the context of everything compared to the past and further, it goes on in the future. Likewise, in the field of architecture also, everything is growing rapidly with advanced resources and technology. Many architects are well known about architecture only. They lack the knowledge and skill for managing projects. This may lead to the failure of work also. So, in my opinion, architects should have an understanding of project management as well. This will enhance their knowledge and innovation as well as they will learn to manage and control the budget. Moreover, MBPM graduates will gain knowledge of leadership, teamwork and a high level of professional skill and attitude. These kinds of things grab my attention towards a Master&rsquo;s in Business and Project management. There are only a few architects having knowledge of project management in our country. This shows that I will not have to wait for landing a good job with an attractive salary after returning to my home country.</p>

<p>Australia has become the third most popular destination to study for international students because there are top-ranked and well-reputed universities. All most all universities are globally recognized. The main reason to choose Australia is because of its high-quality education and reasonable tuition fee with laid-back nature. It is a multicultural and English-speaking country with friendly natives. Australian education focuses on both theoretical as well as practical knowledge. They provide practical and international exposure to international students. They provide a variety of courses and degrees which give students a wide range of options. Australia offers an educational experience that makes a real difference in life. They believe in providing education in such a way that students get encouraged to be innovative, creative and think independently. Excellence in education has lead Australia to win more than 15 Nobel prizes. Australian Government invests more than A$200 million each year in international scholarship which attracts students and motivates them to grab the opportunity. There are the Tuition Protection Scheme (TPS) and the ESOS Act for international students who are provided in Australia only. Australia also provides Post Study Work (PSW) opportunities. After the completion of the degree, students are eligible for 2 years of PSW. Australia is well known for adopting new technologies at a faster rate than in most of the countries. Facilities for teaching, training and research are provided at its best with classrooms, laboratories, outstanding libraries and modern technology. Australia has the most vibrant cities in the world. They are safe and clean with low crime rates. The climatic condition is also favorable. The flexibility and excellency in education with a safe and enthusiastic environment attract the students in Australia.</p>

<p>The institution&rsquo;s name&nbsp;is one of the globally ranked colleges. It is a well known and reputed college in Australia. The facilities for my course in this college suits my needs and requirements. Because of its affordable fee structure and location, I choose&nbsp;the&nbsp;institution&rsquo;s name&nbsp;over other universities and colleges. I would consider it a privilege to study in such a renowned college.&nbsp;the&nbsp;institution&rsquo;s name&nbsp;offers a refreshing environment that will give a platform to explore my interest and give a definite direction to my goals. The programs of&nbsp;the&nbsp;institution&rsquo;s name&nbsp;are flexible, customized, experimental and reflective learning. I am eagerly waiting to approach this program with enthusiasm and hard work and use the opportunity to advance my learning and skills professionally. There are many colleges and universities providing this course but they do not meet my requirements.&nbsp;the&nbsp;institution&rsquo;s name&nbsp;and&nbsp;the&nbsp;institution&rsquo;s name&nbsp;have a very high fee structure. And some of the preferred universities are not available in my chosen location. So,&nbsp;the&nbsp;institution&rsquo;s name&nbsp;is the one with a reasonable tuition fee and preferred location.</p>

<p>There is only one university i.e. Kathmandu University which has Project Management in its course but only in a small portion. There is no Master of Business and Project Management program specifically in our country. Through education in our country, it is good it deficits a wide range of courses as well as international standards. There are limited options of programs and they are also restricted to theoretical knowledge only. The universities and colleges of Nepal lack practical knowledge and exposures. Our education system lacks proper infrastructures and resources to gain skills and understanding related to the course which is hampering the studies of students. Unnecessary holidays and striking occur time by time here which disturb our education. Being a genuine student, I also deserve a high-quality education in my selected course from a globally recognized college. Only theoretical knowledge cannot help me grow my practical and critical abilities and I will not be able to work professionally in the future. Seeking for high-quality education with proper resources and practical exposures in my interested course lead me to choose abroad for my further study. &nbsp;</p>

<p>Though there are countries that also provide high-quality education, I choose Australia because of its affordable living expenses, tuition fee and safe environment. Australia is better because the crime rate is much lower than that of America. The living expenses and fee structure is relatively high in the USA and UK. In European countries, we have to learn their languages such as Dutch, Spanish, etc. Public infrastructures are better than in the USA and Europe. Students need to appear in SAT, GRE or GMAT exams to get admission to the USA, UK and Canada.</p>

<p>The cost of my education in Australia will be paid for by my family. My parents and parents&rsquo; in-law will be sponsoring for my abroad study. As all of them are job holders, they are capable of paying all my studies as well as living expenses in Australia. After completing my master&rsquo;s degree, I will return to my home country and will associate with a good company.</p>

<p>There is a high demand for architects in Nepal. Even the undergraduate ones get a satisfying salary. So, I am hoping for more attractive remuneration after graduating from this college having knowledge of both architecture and business and project management.</p>

<p>After the completion of my study, I will return to my home country Nepal. There are high job prospects in my country for engineers and architects as I mentioned before. With the increasing population, the demand for people living in a comfortable environment is also increasing. An architect is the one who fulfills the dream of people and creates standard and pleasant surroundings for them whether it would be their home or office or any plazas and parks. In the past years, people were not concerned about their homes and other buildings. But in recent years, the scope of architects has boomed because people want to make their buildings more beautiful, attractive and cozy. Even malls, companies and offices are increasing day by day which automatically increases the demand of architects. There are many government and private companies, NGO and INGO which are seeking good architects. Today architects are also involved in the development of the country such as in urban and rural development. And being an Australian degree holder with an understanding of architecture as well as business and project management, it will certainly make it easier to find a good job in reputed companies. I will be eligible to work professionally after gaining enough knowledge and skills from a reputed college. Observing the growth of architecture in past and recent years, I see a huge demand of architects and I am confident about my successful career in this field in the future.</p>

<p>Finally, I would like to assure that I am fully aware of the Visa conditions provided by Australia. I am aware of all the obligations under the visa subclass 500. I know that throughout my stay in Australia, I must maintain 80% of attendance in college, Overseas Student Health Cover (OSHC) is for the duration of my stay in Australia, and I must maintain 50% of the marks in the exam. I should inform the College/Department of Immigration and Border Protection (DIBP) about my home address within 7 days of arriving in Australia as well as inform College/DIBP within 7 days in case of changing my address. Also, I am only eligible to work 40 hours per fortnight. I assure that the information given above is true and correct from the best of my knowledge. I understand that incorrect or misleading information provided to the education institute and or department of Immigration may result in the refusal of my application for admission and or student visa. Finally, I will like to conclude that my sole purpose in traveling is only to seek quality education needed for my career.</p>

<p>Thank you for your time and consideration.</p>

<p>Yours sincerely</p>

<p><em>Your Name</em></p>',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": "14"}',
                'meta_name' => 'Business & Economics Course - SOP',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 16:37:32',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            12 => 
            array (
                'id' => 21,
                'slug' => 'interview-preparation',
                'name' => 'Interview Preparation',
                'excerpt' => NULL,
                'description' => '<h4><strong>VISA INTERVIEW CHECKLIST FOR AUSTRALIA, CANADA, GERMANY, NEW ZEALAND, UK, USA AND ANY OTHER COUNTRY.</strong></h4>

<p>Visa interview is an important step prior to the final confirmation of student visa approval for most countries including Australia, Canada, Germany, New Zealand, UK and USA. Your interview could fasten or delay your visa processing. Therefore, it is crucial that you prepare for the interview and address all concerns of the visa officer. The interview is taken by the ambassador or visa officer who may ask you a range of questions mainly to ensure that your application case is genuine and your intentions align with what is being written in the application form. The officer is a trained professional, who could ask multiple unrelated questions, not to annoy you but to know your real interests and objectives. If you are prepared, you can enjoy this process and meeting with someone who opens the door of a new country for you.</p>

<h3><strong>A few visa interview tips:</strong></h3>

<ul>
<li>Prepare for the interview questions in advance.</li>
<li>Get a copy of your all documents with you for the interview.</li>
<li>Dress appropriately (formally).</li>
<li>Be on time for the interview.</li>
<li>Be courteous, friendly and polite throughout the interview.</li>
<li>Be confident as you the best about yourself, where and why you have made applications.</li>
<li>Give brief and clear answers. If not sure, then you can ask the question again. Be thoughtful in your answers.</li>
<li>Go through the website and handbook of your university carefully.</li>
<li>Know about your course contents thoroughly including course duration, fee, commencement &amp; end date, credits points etc.</li>
<li>You should be clear about your future plans after completing the course.</li>
<li>Be ready for any strange questions and don&rsquo;t get nervous when you have them. They are meant to test your intentions, skills or IQ.</li>
<li>Interview may take 20-30 minutes or more, so be comfortable with it.</li>
<li>Enjoy the interview!</li>
</ul>

<h3><strong>Preparatory interview questions for the Student Visa Interview:</strong></h3>

<h4>Introductory questions:</h4>

<ul>
<li>How are you doing?</li>
</ul>

<p>(This Question to make you comfortable)</p>

<ul>
<li>Have you ever been to the respective country before?</li>
</ul>

<p>(This is for the visa officer&rsquo;s records &ndash; If yes then it is advisable to remember the date of last arrival and departure from the country of visa application)</p>

<h3>Questions on your intention and motivation of study in the respective country:</h3>

<ul>
<li>Why do you want to study in the respective country?</li>
</ul>

<p>(It is to check your intention to go to the respective country)</p>

<ul>
<li>Why did you select this particular university?</li>
</ul>

<p>(It is to check you have done your research about your education and serious about it)</p>

<ul>
<li>Which are the other universities you have applied to?</li>
</ul>

<p>(It is to check whether you are really serious about your education and have planned well)</p>

<h3>Questions on your subject and course:</h3>

<ul>
<li>For which course you are going?</li>
</ul>

<p>(It is to check that you know about what you have applied for)</p>

<ul>
<li>Why did you choose this course?</li>
</ul>

<p>(It is to check that you have chosen your course by yourself)</p>

<ul>
<li>Why don&rsquo;t you do this course here in Nepal?</li>
</ul>

<p>(It is to know whether this course is available here and which differences motivate you to visit the respective country &ndash; bring out the difference between the courses offered in Nepal and abroad; State the difference in terms of theoretical and practical education)</p>

<ul>
<li>What are the course commencement and completion dates?</li>
</ul>

<p>(Remember the exact start and end date of the course)</p>

<h3>Questions on funding for study in the respective country:</h3>

<ul>
<li>How are you going to fund your education?</li>
</ul>

<p>(It is to check you are aware of your funds and how you will manage your finances during your course duration)</p>

<ul>
<li>Who is sponsoring your education?</li>
</ul>

<p>(If you have a scholarship, then say that. Otherwise mention the name of your sponsors. If they are your parents then mention that your father and/or mother are supporting you as per the financial documents [My father and relatives &ndash; As per Visa documents &amp; Funds])</p>

<ul>
<li>What does s/he (mother/father) do?</li>
</ul>

<p>(Visa officer basically wants to verify the financial capability of the sponsors. Go through the tax documents, all bank statements and other supporting documents, and have a good idea of the income source of your sponsors)</p>

<ul>
<li>What savings does your family have?</li>
</ul>

<p>(Visa officer wants to confirm you have sufficient funds. Show your proofs and be sure that you know your financial documents.)</p>

<ul>
<li>What is your father&rsquo;s annual income?</li>
</ul>

<p>(This is just to get the idea if your father&rsquo;s annual income is sufficient enough to meet your expenses of&nbsp;<a href="https://www.kiec.edu.np/abroad-study/">studying abroad</a>)</p>

<ul>
<li>How many brothers and sisters do you have?</li>
</ul>

<p>(Such questions are asked to evaluate the balance of income and expenses of the family)</p>

<ul>
<li>Do you have enough funds while you are there?</li>
</ul>

<p>(Give a confident answer stating that you meet the educational expenses.)</p>

<h3>Questions on academic qualifications of the student:</h3>

<ul>
<li>What is your undergraduate GPA?</li>
</ul>

<p>(Convert your percentage in GPA and remember it exactly)</p>

<ul>
<li>Can you show me your degree?</li>
</ul>

<p>(Only show the document that has been asked)</p>

<ul>
<li>Mention some professors&rsquo; name?</li>
</ul>

<p>(Give names of professors you know and explain your relation with them)</p>

<ul>
<li>Show me your GRE and TOEFL Score?</li>
</ul>

<p>(Keep your documents in order and remember that, so that when they ask you again, you give them without wasting any time. Saving time counts a lot)</p>

<h3>Questions on students achievements:</h3>

<ul>
<li>Tell me something about your past?</li>
</ul>

<p>(It is to know you more &ndash; mention what you were doing after your last school till today. Make sure your answers cover your achievements, skills and sincerity)</p>

<ul>
<li>From where did you do your under graduation?</li>
</ul>

<p>(It is to know your study background &ndash; mention the name of your university and course. If the university has any high ranking then mention that too)</p>

<ul>
<li>Are you getting any school waiver?</li>
</ul>

<p>(It is to check your excellence &ndash; if you have got any tuition fee waiver or teaching assistantship or research assistantship then mention it)</p>

<ul>
<li>Why do you think the university is giving scholarship to you?</li>
</ul>

<p>(It is to check your sharpness &ndash; most scholarships are awarded for good academic records, GRE or TOEFL scores)</p>

<h3>Questions on awareness of and living arrangements in the respective:</h3>

<ul>
<li>Where do you plan to stay in the respective country?</li>
</ul>

<p>(Mention the address and arrangements for your education abroad)</p>

<ul>
<li>Do you have any relative in the respective country?</li>
</ul>

<p>(Be truthful at this instance)</p>

<ul>
<li>Is your brother/sister enjoying there?</li>
</ul>

<p>(Never answer in a way that makes them believes that they plan to settle or overstay)</p>

<ul>
<li>What do you plan to do during your vacations?</li>
</ul>

<p>(Give a plan to show your ties up with your family and country. Don&rsquo;t show your intention for work)</p>

<ul>
<li>What is the location of your university?</li>
</ul>

<p>(Know the exact location of your university and whether it is the reason to go there)</p>

<h3>Questions on future plans:</h3>

<ul>
<li>What are your future plans? Do you intend to stay in the respective country?</li>
</ul>

<p>(Your answers should reflect clarity of your thoughts and intentions. Mention your strong ties to the home country, and excellent opportunities available in Nepalstablish your business or career)</p>

<ul>
<li>Do you plan to work there?</li>
</ul>

<p>(Convince the officer that your intention is not to stay in the respective country permanently. You have your liabilities at home and your family is in Nepal, for whom you would like to come back to)</p>

<ul>
<li>What&rsquo;s the difference you can make by doing your course in the respective country?</li>
</ul>

<p>(Prepare for this answer that suit best to your profile and course. You can mention about better job opportunities and future prospects.)</p>

<ul>
<li>*Respective country is the country where you intend to go for further studies.</li>
</ul>',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": null}',
                'meta_name' => 'Interview Preparation',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-07 17:55:47',
                'updated_at' => '2024-10-08 17:02:34',
            ),
            13 => 
            array (
                'id' => 22,
                'slug' => 'scholarships',
                'name' => 'Scholarships',
                'excerpt' => NULL,
                'description' => '<p>Any hesitation about studying abroad&nbsp;is typically related to the cost. However, what most students don&rsquo;t know is that they can actually apply their current on-campus financial aid package to their study abroad trip in addition to scholarships. In fact, for some students, particularly those who pay out-of-state-tuition, studying abroad can sometimes be cheaper than a traditional on-campus semester.</p>

<p>A study abroad scholarship is a monetary award for students to use toward the expenses of their program such as travel, course credits, books and lodging. Students must apply for scholarships and some can be very competitive while others are underutilized. There are several types of study abroad scholarships to apply for such as:</p>

<h2>Merit-based:</h2>

<p>These awards are based on a student&rsquo;s academic, artistic, athletic or other abilities, and often factor in an applicant&rsquo;s extracurricular activities and community service record. It&rsquo;s important to note that qualifications will vary based on the particular scholarship.</p>

<h2>Student-specific:</h2>

<p>These are scholarships for applicants who initially qualify based on factors such as gender, race, religion, family and medical history, or many other student-specific factors. Minority scholarships are the most common awards in this category, but qualifications will vary based on the particular scholarship.</p>

<h2>Destination-specific:</h2>

<p>These are scholarships awarded by a country to students planning to pursue a study abroad program in that particular country. They are awarded as an incentive to study in that country instead of elsewhere. Check with government-sponsored travel websites of the country where you wish to study to see what scholarships are available.</p>

<h2>Program-specific:</h2>

<p>Program-specific scholarships are offered by individual study abroad programs and/or the colleges and universities where they may be associated to qualified applicants. These scholarships are often given on the basis of academic and personal achievement, but qualifications will vary based on the particular scholarship. Check with your study abroad program and university to see what scholarships are available.</p>

<h2>Subject-specific:</h2>

<p>Subject-specific scholarships are awarded by study abroad programs or institutions to students based on their particular major or field of study. These scholarships may require the recipients to enroll in subject-specific courses while abroad or conduct subject-specific research while abroad, but it&rsquo;s important to note that qualifications will vary based on each scholarship.</p>',
                'category_id' => 4,
                'active' => 1,
                'featured' => 0,
                'position' => 1,
                'icon' => NULL,
                'color' => NULL,
                'data' => '{"parent_page": null}',
                'meta_name' => 'Scholarships',
                'meta_description' => NULL,
                'meta_keywords' => NULL,
                'created_at' => '2024-10-08 08:29:13',
                'updated_at' => '2024-10-08 17:02:34',
            ),
        ));
        
        
    }
}