<?php

namespace App\Repositories;

use App\Contracts\SliderRepositoryInterface;
use App\Http\Requests\SliderRequest;
use App\Models\Admin\Slider;
use Illuminate\Support\Facades\Cache;

class SliderRepository implements SliderRepositoryInterface
{
    // Slider Index
    public function indexSlider()
    {
        $sliders = config('adminetic.caching', true)
            ? (Cache::has('sliders') ? Cache::get('sliders') : Cache::rememberForever('sliders', function () {
                return Slider::latest()->get();
            }))
            : Slider::latest()->get();

        if (! Cache::has('home_sliders')) {
            Cache::rememberForever('home_sliders', function () {
                return Slider::where('active', true)->orderBy('position')->get();
            });
        }

        return compact('sliders');
    }

    // Slider Create
    public function createSlider()
    {
        //
    }

    // Slider Store
    public function storeSlider(SliderRequest $request)
    {
        $slider = Slider::create($request->validated());
        $this->uploadImage($slider);
    }

    // Slider Show
    public function showSlider(Slider $slider)
    {
        return compact('slider');
    }

    // Slider Edit
    public function editSlider(Slider $slider)
    {
        return compact('slider');
    }

    // Slider Update
    public function updateSlider(SliderRequest $request, Slider $slider)
    {
        $slider->update($request->validated());
        $this->uploadImage($slider);
    }

    // Slider Destroy
    public function destroySlider(Slider $slider)
    {
        $slider->delete();
    }

    // Upload Image
    private function uploadImage(Slider $slider)
    {
        if (request()->has('image')) {
            $slider
                ->addFromMediaLibraryRequest(request()->image)
                ->toMediaCollection('image');
        }
    }
}
