<?php

namespace App\Providers;

use App\Contracts\MyInterface;
use App\Services\MyConcreteClass;
use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MyInterface::class, MyConcreteClass::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
