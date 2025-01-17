<?php

namespace Halo\Flash;

use Illuminate\Support\ServiceProvider;

/**
 * Allows the usage of Flash::<type>($message).
 *
 * @see \Halo\Flash\Flash
 */
class FlashServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('flash', function() {
            return new Flash;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['flash'];
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $path = __DIR__ . '/../resources/views';

        $this->loadViewsFrom($path, 'flash');

        $this->publishes([
            $path => base_path('resources/views/vendor/flash'),
        ], 'flash');
    }
}
