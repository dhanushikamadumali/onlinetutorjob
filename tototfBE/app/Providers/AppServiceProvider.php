<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

use Modules\BidProposalsManagement\App\Repositaries\BidProposalImplements;
use Modules\BidProposalsManagement\App\Repositaries\BidProposalInterface;

use Modules\Category\App\CategoryRepository\CategoryInterface;
use Modules\Category\App\CategoryRepository\CategoryImplementation;

use  Modules\Auth\App\Repositaries\AuthImplements;
use Modules\Auth\App\Repositaries\AuthInterface;

use  Modules\StudentJobsManagement\App\Repositaries\StudentJobImplements;
use Modules\StudentJobsManagement\App\Repositaries\StudentJobInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(BidProposalInterface::class, BidProposalImplements::class);
        $this->app->bind(CategoryInterface::class, CategoryImplementation::class);
        $this->app->bind(AuthInterface::class, AuthImplements::class);
       
        $this->app->bind(StudentJobInterface::class, StudentJobImplements::class);
    }

    /**
     * Bootstrap any application services.
     */

    public function boot(): void
    {
        Schema::defaultstringLength(191);
    }
}
