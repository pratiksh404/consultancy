<?php

namespace App\Repositories;

use App\Contracts\GalleryRepositoryInterface;
use App\Http\Requests\GalleryRequest;
use App\Models\Admin\Gallery;
use Illuminate\Support\Facades\Cache;

class GalleryRepository implements GalleryRepositoryInterface
{
    // Gallery Index
    public function indexGallery()
    {
        $galleries = config('adminetic.caching', true)
            ? (Cache::has('galleries') ? Cache::get('galleries') : Cache::rememberForever('galleries', function () {
                return Gallery::orderBy('position')->get();
            }))
            : Gallery::orderBy('position')->get();

        return compact('galleries');
    }

    // Gallery Create
    public function createGallery()
    {
        return [];
    }

    // Gallery Store
    public function storeGallery(GalleryRequest $request)
    {
        $gallery = Gallery::create($request->validated());
        $this->uploadImage($gallery);
    }

    // Gallery Show
    public function showGallery(Gallery $gallery)
    {
        return compact('gallery');
    }

    // Gallery Edit
    public function editGallery(Gallery $gallery)
    {
        return compact('gallery'
        );
    }

    // Gallery Update
    public function updateGallery(GalleryRequest $request, Gallery $gallery)
    {
        $gallery->update($request->validated());
        $this->uploadImage($gallery);
    }

    // Gallery Destroy
    public function destroyGallery(Gallery $gallery)
    {
        $gallery->delete();
    }

    // Upload Image
    private function uploadImage(Gallery $gallery)
    {
        if (request()->has('images')) {
            $gallery
                ->addFromMediaLibraryRequest(request()->images)
                ->toMediaCollection('images');
        }
    }
}
