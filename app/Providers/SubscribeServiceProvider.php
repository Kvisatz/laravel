<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;

	class SubscribeServiceProvider extends ServiceProvider{

		public function boot()
	    {
	        View::composer('layouts/default', function($view){

	            $view->with('widget', view('providers.subscribe'));
	        });
	    }
	}