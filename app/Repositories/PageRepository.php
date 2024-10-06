<?php

namespace App\Repositories;

use App\Contracts\PageRepositoryInterface;
use App\Http\Requests\PageRequest;
use App\Models\Admin\Page;
use Illuminate\Support\Facades\Cache;

class PageRepository implements PageRepositoryInterface
{
    // Page Index
    public function indexPage()
    {
        $pages = config('adminetic.caching', true)
            ? (Cache::has('pages') ? Cache::get('pages') : Cache::rememberForever('pages', function () {
                return Page::orderBy('position')->get();
            }))
            : Page::orderBy('position')->get();

        return compact('pages');
    }

    // Page Create
    public function createPage()
    {
        $parent_pages = Page::latest()->get();

        return compact('parent_pages');
    }

    // Page Store
    public function storePage(PageRequest $request)
    {
        $page = Page::create($request->validated());
        $this->uploadImage($page);
    }

    // Page Show
    public function showPage(Page $page)
    {
        return compact('page');
    }

    // Page Edit
    public function editPage(Page $page)
    {
        $parent_pages = Page::where('id', '!=', $page->id)->latest()->get();

        return compact('page', 'parent_pages');
    }

    // Page Update
    public function updatePage(PageRequest $request, Page $page)
    {
        $page->update($request->validated());
        $this->uploadImage($page);
    }

    // Page Destroy
    public function destroyPage(Page $page)
    {
        $page->delete();
    }

    // Upload Image
    private function uploadImage(Page $page)
    {
        if (request()->has('thumbnail')) {
            $page
                ->addFromMediaLibraryRequest(request()->thumbnail)
                ->toMediaCollection('thumbnail');
        }
        if (request()->has('downloads')) {
            $page
                ->addFromMediaLibraryRequest(request()->downloads)
                ->toMediaCollection('downloads');
        }
        if (request()->has('images')) {
            $page
                ->addFromMediaLibraryRequest(request()->images)
                ->toMediaCollection('images');
        }
    }
}
