<?php

namespace App\Http\Livewire\Admin\System;

use Livewire\Component;

class VideoMedia extends Component
{
    public $name;

    public $single_mode = true;

    public $data;

    public function mount($name = null, $data = null, $single_mode = true)
    {
        $this->name = 'videos';
        $this->data = $data;
        $this->single_mode = $single_mode;
    }

    public function addVideos()
    {
        $videos = $this->data;
        $videos[] = null;
        $this->data = $videos;
    }

    public function removeVideo($index)
    {
        $videos = $this->data;
        unset($videos[$index]);
        $this->data = $videos;
    }

    public function removeAllVideo()
    {
        $this->data = null;
    }

    public function render()
    {
        return view('livewire.admin.system.video-media');
    }
}
