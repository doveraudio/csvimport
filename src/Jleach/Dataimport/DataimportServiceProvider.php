<?php namespace Jleach\Dataimport;

use Illuminate\Support\ServiceProvider;

class DataimportServiceProvider extends ServiceProvider {

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
	public function boot()
	{
		$this->package('jleach/dataimport', null, __DIR__);
                include __DIR__.'/../../routes.php'; 
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['dataimport'] = $this->app->share(function($app)
		{
		
			return new Dataimport;
		
		});
		
		$this->app->booting(function()
		{
		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		$loader->alias('Dataimport', 'Jleach\Dataimport\Facades\Dataimport');
                $loader->alias('Upload', 'Jleach\Dataimport\Models\Upload');
		});
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
