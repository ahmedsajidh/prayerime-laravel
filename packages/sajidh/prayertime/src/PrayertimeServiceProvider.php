<?php

namespace sajidh\prayerime;

use Illuminate\Support\ServiceProvider;

class PrayertimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        this->app->make('sajidh\prayerime\PrayertimetController');
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
