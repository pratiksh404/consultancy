<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\SliderRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Admin\Slider;

class SliderController extends Controller
{
    protected $sliderRepositoryInterface;

    public function __construct(SliderRepositoryInterface $sliderRepositoryInterface)
    {
        $this->sliderRepositoryInterface = $sliderRepositoryInterface;
        $this->authorizeResource(Slider::class, 'slider');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slider.index', $this->sliderRepositoryInterface->indexSlider());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $this->sliderRepositoryInterface->storeSlider($request);

        return redirect(adminRedirectRoute('slider'))->withSuccess('Slider Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Admin\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('admin.slider.show', $this->sliderRepositoryInterface->showSlider($slider));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Admin\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', $this->sliderRepositoryInterface->editSlider($slider));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\SliderRequest  $request
     * @param  App\Models\Admin\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $this->sliderRepositoryInterface->updateSlider($request, $slider);

        return redirect(adminRedirectRoute('slider'))->withInfo('Slider Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Admin\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $this->sliderRepositoryInterface->destroySlider($slider);

        return redirect(adminRedirectRoute('slider'))->withFail('Slider Deleted Successfully.');
    }
}
