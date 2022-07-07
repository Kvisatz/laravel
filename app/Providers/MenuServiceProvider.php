<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;

	class MenuServiceProvider extends ServiceProvider{

		public function boot()
	    {
	        View::composer('layouts/default', function($view){

	            $view->with('menu', view('providers.menu'));
	        });
	    }
	}