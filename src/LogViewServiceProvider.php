<?php 
namespace KPsLogView;
use IlluminateSupportServiceProvider;
class LogViewServiceProvider extends ServiceProvider {
	/**--------------------------------------------
	| Bootstrap the application services.
	|
	| @return void
	--------------------------------------------**/
	public function boot(){		
		//Publishes package config file to applications config folder
		$this->publishes([__DIR__.'/config/LogView.php' => config_path('LogView.php')]);
	}
	
	/**--------------------------------------------
	| Register the application services.
    |
    | @return void
	--------------------------------------------**/
	public function register(){
		//
	}
}