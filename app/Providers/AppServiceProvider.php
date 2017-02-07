<?php

namespace SIPCOFIP\Providers;

use Illuminate\Support\ServiceProvider;
use SIPCOFIP\Http\ViewComposers\MakeModelForm;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->make('view')->composer(
            ['admin.partials.dropdowns'],
            MakeModelForm::class
        );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
