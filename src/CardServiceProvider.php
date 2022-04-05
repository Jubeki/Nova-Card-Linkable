<?php

namespace Jubeki\Nova\Cards\Linkable;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/nova-card-linkable.php' => config_path('nova-card-linkable.php'),
        ], 'config');

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-card-linkable', __DIR__.'/../dist/js/tool.js');
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/nova-card-linkable.php', 'nova-card-linkable');
    }
}
