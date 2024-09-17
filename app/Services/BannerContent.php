<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Pratiksh\Adminetic\Models\Admin\Data;

class BannerContent
{
    public $data;

    public $banner;

    public function __construct()
    {
        $this->data = Data::firstOrCreate([
            'name' => 'banner_content',
        ]);

        $this->banner = $this->data->content;
    }

    public function save($content)
    {
        $this->data->update([
            'content' => $content,
        ]);

        $this->banner = $this->data->content;
        $banner = $this->data->content;
        Cache::forget('banner');
        Cache::rememberForever('banner', function () use ($banner) {
            return $banner;
        });

        return $this->data;
    }
}
