<?php

namespace App\Http\Livewire\Admin\Course;

use Livewire\Component;

class CourseSections extends Component
{
    public $sections;

    public function mount($sections = null)
    {
        $this->sections = $sections;
    }

    public function addSection()
    {
        $sections = $this->sections;
        $sections[] = [];
        $this->sections = $sections;
    }

    public function removeSection($index)
    {
        $sections = $this->sections;
        unset($sections[$index]);
        $this->sections = $sections;
    }

    public function render()
    {
        return view('livewire.admin.course.course-sections');
    }
}
