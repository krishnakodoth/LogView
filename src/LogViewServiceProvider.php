<?php
namespace krishnakodoth\LogView;
class LogViewerServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot(){
		//Publishes package config file to applications config folder
		$this->publishes([__DIR__.'/config/LogView.php' => config_path('LogView.php')]);
		/* if (method_exists($this, 'package')) {
			$this->package('rap2hpoutre/laravel-log-viewer', 'laravel-log-viewer', __DIR__ . '/../../');
		}

		if (method_exists($this, 'loadViewsFrom')) {
			$this->loadViewsFrom(__DIR__.'/../../views', 'laravel-log-viewer');
		} */
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register(){
		//
		include __DIR__.'/web.php';
		// Let Laravel Ioc Container know about our Controller
		$this->app->make('KPsPckg\LogView\LogViewerController');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
