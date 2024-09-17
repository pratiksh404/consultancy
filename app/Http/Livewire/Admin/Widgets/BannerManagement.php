<?php

namespace App\Http\Livewire\Admin\Widgets;

use App\Services\BannerContent;
use Livewire\Component;
use Livewire\WithFileUploads;

class BannerManagement extends Component
{
    use WithFileUploads;

    public $banner;

    public $title;

    public $subtitle;

    public $short_description;

    public $image;

    public $features;

    public $primary_button_title;

    public $primary_button_link;

    public $secondary_button_title;

    public $secondary_button_link;

    protected $listeners = [
        'trix_value_updated',
    ];

    public function mount()
    {
        $banner_management = new BannerContent();
        $this->banner = $banner_management->banner;
        $this->title = $this->banner['title'] ?? banner()->title ?? null;
        $this->subtitle = $this->banner['subtitle'] ?? banner()->subtitle ?? null;
        $this->short_description = $this->banner['short_description'] ?? banner()->short_description ?? null;
        $this->image = $this->banner['image'] ?? null;
        $this->features = $this->banner['features'] ?? banner()->features ?? null;
        $this->primary_button_title = $this->banner['primary_button_title'] ?? banner()->primary_button_title ?? null;
        $this->primary_button_link = $this->banner['primary_button_link'] ?? banner()->primary_button_link ?? null;
        $this->secondary_button_title = $this->banner['secondary_button_title'] ?? banner()->secondary_button_title ?? null;
        $this->secondary_button_link = $this->banner['secondary_button_link'] ?? banner()->secondary_button_link ?? null;
    }

    public function trix_value_updated($value)
    {
        $this->short_description = $value;
    }

    public function addFeature()
    {
        $this->features[] = [];
    }

    public function removeFeature($key)
    {
        $features = $this->features;
        unset($features[$key]);
        $this->features = $features;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|max:20',
            'subtitle' => 'required|max:35',
            'short_description' => 'nullable|max:100',
            'image' => 'nullable|max:4000',
            'features' => 'nullable|array',
            'primary_button_title' => 'nullable|max:20',
            'primary_button_link' => 'nullable|max:400',
            'secondary_button_title' => 'nullable|max:20',
            'secondary_button_link' => 'nullable|max:400',
        ]);
        $photo = null;
        if (! is_null($this->image)) {
            if (! is_string($this->image)) {
                $photo = $this->image->store('banner', 'public');
            }
        }

        $this->banner = [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'short_description' => $this->short_description,
            'image' => ! is_null($photo) ? $photo : $this->image,
            'features' => $this->features,
            'primary_button_title' => $this->primary_button_title,
            'primary_button_link' => $this->primary_button_link,
            'secondary_button_title' => $this->secondary_button_title,
            'secondary_button_link' => $this->secondary_button_link,
        ];
        (new BannerContent)->save($this->banner);
        $this->emit('banner_management_saved');
    }

    public function render()
    {
        return view('livewire.admin.widgets.banner-management');
    }
}
