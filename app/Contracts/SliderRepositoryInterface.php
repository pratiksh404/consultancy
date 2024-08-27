<?php

namespace App\Contracts;

use App\Http\Requests\SliderRequest;
use App\Models\Admin\Slider;

interface SliderRepositoryInterface
{
    public function indexSlider();

    public function createSlider();

    public function storeSlider(SliderRequest $request);

    public function showSlider(Slider $Slider);

    public function editSlider(Slider $Slider);

    public function updateSlider(SliderRequest $request, Slider $Slider);

    public function destroySlider(Slider $Slider);
}
