<?php

namespace App\Contracts;

use App\Http\Requests\GalleryRequest;
use App\Models\Admin\Gallery;

interface GalleryRepositoryInterface
{
    public function indexGallery();

    public function createGallery();

    public function storeGallery(GalleryRequest $request);

    public function showGallery(Gallery $Gallery);

    public function editGallery(Gallery $Gallery);

    public function updateGallery(GalleryRequest $request, Gallery $Gallery);

    public function destroyGallery(Gallery $Gallery);
}
