<?php

namespace App\Http\Livewire\Website\Testimonial;

use App\Models\Admin\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class TestimonialPanel extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'website.layouts.components.pagination';
    }

    public function render()
    {
        $testimonials = Testimonial::approved()->latest()->paginate(8);

        return view('livewire.website.testimonial.testimonial-panel', compact('testimonials'));
    }
}
