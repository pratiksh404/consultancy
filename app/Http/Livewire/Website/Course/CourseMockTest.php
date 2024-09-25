<?php

namespace App\Http\Livewire\Website\Course;

use App\Models\Admin\Course;
use App\Models\Admin\Test;
use Livewire\Component;
use Livewire\WithPagination;

class CourseMockTest extends Component
{
    use WithPagination;

    public $course;

    public function mount(Course $course)
    {
        $this->course = $course;
    }

    public function paginationView()
    {
        return 'website.layouts.components.pagination';
    }

    public function render()
    {
        $tests = Test::where('course_id', $this->course->id)->paginate(3);

        return view('livewire.website.course.course-mock-test', compact('tests'));
    }
}
