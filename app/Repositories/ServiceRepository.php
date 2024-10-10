<?php

namespace App\Repositories;

use App\Contracts\ServiceRepositoryInterface;
use App\Http\Requests\ServiceRequest;
use App\Models\Admin\Service;
use Illuminate\Support\Facades\Cache;

class ServiceRepository implements ServiceRepositoryInterface
{
    // Service Index
    public function indexService()
    {
        $services = config('adminetic.caching', true)
            ? (Cache::has('services') ? Cache::get('services') : Cache::rememberForever('services', function () {
                return Service::orderBy('position')->get();
            }))
            : Service::orderBy('position')->get();

        if (! Cache::has('home_services')) {
            Cache::rememberForever('home_services', function () {
                return Service::where('active', true)->orderBy('position')->get();
            });
        }

        return compact('services');
    }

    // Service Create
    public function createService()
    {
        //
    }

    // Service Store
    public function storeService(ServiceRequest $request)
    {
        $service = Service::create($request->validated());
        $this->uploadImage($service);
    }

    // Service Show
    public function showService(Service $service)
    {
        return compact('service');
    }

    // Service Edit
    public function editService(Service $service)
    {
        return compact('service');
    }

    // Service Update
    public function updateService(ServiceRequest $request, Service $service)
    {
        $service->update($request->validated());
        $this->uploadImage($service);
    }

    // Service Destroy
    public function destroyService(Service $service)
    {
        $service->delete();
    }

    // Upload Image
    private function uploadImage(Service $service)
    {
        if (request()->has('image')) {
            $service
                ->addFromMediaLibraryRequest(request()->image)
                ->toMediaCollection('image');
        }
        if (request()->has('icon_image')) {
            $service
                ->addFromMediaLibraryRequest(request()->icon_image)
                ->toMediaCollection('icon_image');
        }
        if (request()->has('downloads')) {
            $service
                ->addFromMediaLibraryRequest(request()->downloads)
                ->toMediaCollection('downloads');
        }
        if (request()->has('images')) {
            $service
                ->addFromMediaLibraryRequest(request()->images)
                ->toMediaCollection('images');
        }
    }
}
