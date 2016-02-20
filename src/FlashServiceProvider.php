<?php

namespace Reed\Flash;

use Illuminate\Support\ServiceProvider;

/**
 * Allows the usage of Flash::<type>($message).
 *
 * @see Flash
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
		$this->app['flash'] = $this->app->share(function()
        {
			return new Flash();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
    {
		return array('flash');
	}

	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(__DIR__ . 'views', 'flash');
	}
}