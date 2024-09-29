<?php

namespace App\Providers;

use App\Mixins\AdminRouteMixin;
use App\Mixins\WebsiteRouteMixin;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /* Repository Interface Binding */
        $this->repos();
        /* Mixins */
        Route::mixin(new AdminRouteMixin);
        Route::mixin(new WebsiteRouteMixin);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Registering Blade Directives
        Paginator::useBootstrap();
    }

    // Repository Interface Binding
    protected function repos()
    {
        // $this->app->bind(AnnouncementRepositoryInterface::class, AnnouncementRepository::class);
        $this->app->bind(\App\Contracts\CountryRepositoryInterface::class, \App\Repositories\CountryRepository::class);
        $this->app->bind(\App\Contracts\CourseRepositoryInterface::class, \App\Repositories\CourseRepository::class);
        $this->app->bind(\App\Contracts\VisaRepositoryInterface::class, \App\Repositories\VisaRepository::class);
        $this->app->bind(\App\Contracts\CategoryRepositoryInterface::class, \App\Repositories\CategoryRepository::class);
        $this->app->bind(\App\Contracts\ServiceRepositoryInterface::class, \App\Repositories\ServiceRepository::class);
        $this->app->bind(\App\Contracts\FacilityRepositoryInterface::class, \App\Repositories\FacilityRepository::class);
        $this->app->bind(\App\Contracts\FaqRepositoryInterface::class, \App\Repositories\FaqRepository::class);
        $this->app->bind(\App\Contracts\GalleryRepositoryInterface::class, \App\Repositories\GalleryRepository::class);
        $this->app->bind(\App\Contracts\PopupRepositoryInterface::class, \App\Repositories\PopupRepository::class);
        $this->app->bind(\App\Contracts\PageRepositoryInterface::class, \App\Repositories\PageRepository::class);
        $this->app->bind(\App\Contracts\TestimonialRepositoryInterface::class, \App\Repositories\TestimonialRepository::class);
        $this->app->bind(\App\Contracts\CategoryRepositoryInterface::class, \App\Repositories\CategoryRepository::class);
        $this->app->bind(\App\Contracts\SliderRepositoryInterface::class, \App\Repositories\SliderRepository::class);
        $this->app->bind(\App\Contracts\PostRepositoryInterface::class, \App\Repositories\PostRepository::class);
        $this->app->bind(\App\Contracts\PartnerRepositoryInterface::class, \App\Repositories\PartnerRepository::class);
        $this->app->bind(\App\Contracts\AssociationRepositoryInterface::class, \App\Repositories\AssociationRepository::class);
        $this->app->bind(\App\Contracts\CounterRepositoryInterface::class, \App\Repositories\CounterRepository::class);
        $this->app->bind(\App\Contracts\TestRepositoryInterface::class, \App\Repositories\TestRepository::class);
        $this->app->bind(\App\Contracts\CandidateRepositoryInterface::class, \App\Repositories\CandidateRepository::class);
        $this->app->bind(\App\Contracts\UniversityRepositoryInterface::class, \App\Repositories\UniversityRepository::class);
    $this->app->bind(\App\Contracts\StepRepositoryInterface::class, \App\Repositories\StepRepository::class);
$this->app->bind(\App\Contracts\TeamRepositoryInterface::class, \App\Repositories\TeamRepository::class);
$this->app->bind(\App\Contracts\BranchRepositoryInterface::class, \App\Repositories\BranchRepository::class);
}
}
