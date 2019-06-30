<?php

namespace App\Providers;

use App\Repositories\Interfaces\IProductRepository;
use App\Repositories\ProductRepository;
use App\Services\Interfaces\IMarketService;
use App\Services\MarketService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IProductRepository::class, function () {
            return new ProductRepository();
        });

        $this->app->bind(IMarketService::class, function ($app) {
            return new MarketService(
                $app->make(IProductRepository::class)
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
