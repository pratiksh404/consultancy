<?php

namespace App\Http\Livewire\Website\Testimonial;

use App\Models\Admin\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class TestimonialPanel extends Component
{
    use WithPagination;

    public $testimonial_ids = null;

    public function mount($testimonial_ids = null)
    {
        $this->testimonial_ids = $testimonial_ids;
    }

    public function paginationView()
    {
        return 'website.layouts.components.pagination';
    }

    public function render()
    {
        $query = count($this->testimonial_ids ?? []) > 0 ? Testimonial::whereIn('id', $this->testimonial_ids) : Testimonial::query();
        $testimonials = $query->with('country', 'course', 'visa')->approved()->latest()->paginate(8);

        return view('livewire.website.testimonial.testimonial-panel', compact('testimonials'));
    }
}
