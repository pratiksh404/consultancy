<?php

namespace App\Providers;

use App\Models\Admin\Candidate;
use App\Observers\CandidateObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerObserver();
    }

    private function registerObserver()
    {
        Candidate::observe(CandidateObserver::class);
    }
}
