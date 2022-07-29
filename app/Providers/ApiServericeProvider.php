<?php

namespace App\Providers;

use App\Interface\ApiInterface;
use App\Services\ReqresService;
use Illuminate\Support\ServiceProvider;

class ApiServericeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ApiInterface::class, function () {
            return new ReqresService(config('services.base-url'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}