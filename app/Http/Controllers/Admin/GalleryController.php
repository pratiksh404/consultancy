<?php

namespace App\Http\Controllers\Admin;

use App\Contracts\GalleryRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Admin\Gallery;

class GalleryController extends Controller
{
    protected $galleryRepositoryInterface;

    public function __construct(GalleryRepositoryInterface $galleryRepositoryInterface)
    {
        $this->galleryRepositoryInterface = $galleryRepositoryInterface;
        $this->authorizeResource(Gallery::class, 'gallery');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gallery.index', $this->galleryRepositoryInterface->indexGallery());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create', $this->galleryRepositoryInterface->createGallery());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $this->galleryRepositoryInterface->storeGallery($request);

        return redirect(adminRedirectRoute('gallery'))->withSuccess('Gallery Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        return view('admin.gallery.show', $this->galleryRepositoryInterface->showGallery($gallery));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', $this->galleryRepositoryInterface->editGallery($gallery));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $this->galleryRepositoryInterface->updateGallery($request, $gallery);

        return redirect(adminRedirectRoute('gallery'))->withInfo('Gallery Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $this->galleryRepositoryInterface->destroyGallery($gallery);

        return redirect(adminRedirectRoute('gallery'))->withFail('Gallery Deleted Successfully.');
    }
}
