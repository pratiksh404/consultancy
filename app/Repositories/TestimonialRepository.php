<?php

namespace App\Repositories;

use App\Contracts\TestimonialRepositoryInterface;
use App\Http\Requests\TestimonialRequest;
use App\Models\Admin\Testimonial;
use Illuminate\Support\Facades\Cache;

class TestimonialRepository implements TestimonialRepositoryInterface
{
    // Testimonial Index
    public function indexTestimonial()
    {
        $testimonials = config('adminetic.caching', true)
            ? (Cache::has('testimonials') ? Cache::get('testimonials') : Cache::rememberForever('testimonials', function () {
                return Testimonial::orderBy('position')->get();
            }))
            : Testimonial::orderBy('position')->get();

        return compact('testimonials');
    }

    // Testimonial Create
    public function createTestimonial()
    {
        return [];
    }

    // Testimonial Store
    public function storeTestimonial(TestimonialRequest $request)
    {
        $testimonial = Testimonial::create($request->validated());
        $this->uploadImage($testimonial);

        return $testimonial;
    }

    // Testimonial Show
    public function showTestimonial(Testimonial $testimonial)
    {
        return compact('testimonial');
    }

    // Testimonial Edit
    public function editTestimonial(Testimonial $testimonial)
    {
        return compact('testimonial');
    }

    // Testimonial Update
    public function updateTestimonial(TestimonialRequest $request, Testimonial $testimonial)
    {
        $testimonial->update($request->validated());
        $this->uploadImage($testimonial);
    }

    // Testimonial Destroy
    public function destroyTestimonial(Testimonial $testimonial)
    {
        $testimonial->delete();
    }

    // Upload Image
    private function uploadImage(Testimonial $testimonial)
    {
        if (request()->has('image')) {
            $testimonial
                ->addFromMediaLibraryRequest(request()->image)
                ->toMediaCollection('image');
        }
    }
}
