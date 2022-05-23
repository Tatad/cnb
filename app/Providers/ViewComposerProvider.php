<?php

namespace App\Providers;

use App\Contact;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'site.includes.footer',
            function ($view) {
                $view->with('contact', Contact::first());
            }
        );
    }
}
