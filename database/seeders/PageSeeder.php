<?php

namespace Database\Seeders;

use App\Models\Admin\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::whereNotNull('id')->delete();

        // Score Comparison
        Page::create([
            'name' => 'Score Comparison',
            'slug' => 'score-comparison',
            'excerpt' => 'Score comparison among various English proficiency test examinations',
            'description' => '
            <table>
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
</table>
',
            'meta_name' => 'Score Comparison',
            'meta_description' => 'Score comparison among various English proficiency test examinations',
        ]);

        // SOP Tips

        Page::create([
            'name' => 'SOP Tips',
            'slug' => 'sop-tips',
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
        ]);

        // Salary Certificate
        Page::create([
            'name' => 'Salary Certificate',
            'slug' => 'salary-certificate',
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
        ]);
    }
}
