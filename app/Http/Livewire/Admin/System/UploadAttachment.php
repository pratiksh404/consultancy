<?php

namespace App\Http\Livewire\Admin\System;

use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class UploadAttachment extends Component
{
    public $model;

    public $attribute;

    public function mount($model = null, $attribute = 'attachments')
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function render()
    {
        return view('livewire.admin.system.upload-attachment');
    }

    public function removeAttachment(Media $media)
    {
        $media->delete();
        if (! is_null($this->model)) {
            $this->model->refresh();
        }
    }
}
