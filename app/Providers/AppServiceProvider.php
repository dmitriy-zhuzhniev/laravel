<?php

namespace App\Providers;

use App\Infrastructure\PasswordHasher;
use App\Utils\Bus\Container;
use App\Utils\Bus\Inflector;
use App\Utils\Bus\LaravelContainer;
use App\Utils\Bus\NameInflector;
use App\Infrastructure\BcryptPasswordHasher;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        $this->app->bind(PasswordHasher::class, BcryptPasswordHasher::class);
        $this->app->bind(Container::class, LaravelContainer::class);
        $this->app->bind(Inflector::class, NameInflector::class);
    }
}
