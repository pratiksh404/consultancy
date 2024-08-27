<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\TestimonialRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Models\Admin\Adventurer;
use App\Models\Admin\Testimonial;

class TestimonialController extends Controller
{
    protected $testimonialRepositoryInterface;

    public function __construct(TestimonialRepositoryInterface $testimonialRepositoryInterface)
    {
        $this->testimonialRepositoryInterface = $testimonialRepositoryInterface;
        $this->authorizeResource(Testimonial::class, 'testimonial');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimonial.index', $this->testimonialRepositoryInterface->indexTestimonial());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create', $this->testimonialRepositoryInterface->createTestimonial());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adventurer_testimonial(Adventurer $adventurer)
    {
        return view('admin.testimonial.create', array_merge($this->testimonialRepositoryInterface->createTestimonial(), [
            'selected_adventurer' => $adventurer,
        ]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialRequest $request)
    {
        $testimonial = $this->testimonialRepositoryInterface->storeTestimonial($request);

        return redirect(! is_null($testimonial->adventurer_id) ? (adminEditRoute('adventurer', $testimonial->adventurer_id).'#pills-testimonials') : adminRedirectRoute('testimonial'))->withSuccess('Testimonial Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonial.show', $this->testimonialRepositoryInterface->showTestimonial($testimonial));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', $this->testimonialRepositoryInterface->editTestimonial($testimonial));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial)
    {
        $this->testimonialRepositoryInterface->updateTestimonial($request, $testimonial);

        return redirect(! is_null($testimonial->adventurer_id) ? (adminEditRoute('adventurer', $testimonial->adventurer_id).'#pills-testimonials') : adminRedirectRoute('testimonial'))->withInfo('Testimonial Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $this->testimonialRepositoryInterface->destroyTestimonial($testimonial);

        return redirect(! is_null($testimonial->adventurer_id) ? (adminEditRoute('adventurer', $testimonial->adventurer_id).'#pills-testimonials') : adminRedirectRoute('testimonial'))->withFail('Testimonial Deleted Successfully.');
    }
}
