<?php

namespace App\Providers;

use App\Domain\Admin\AdminRepository;
use App\Infrastructure\Doctrine\DoctrineAdminRepository;
use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AdminRepository::class, DoctrineAdminRepository::class);
    }
}
