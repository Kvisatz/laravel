<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;

	use App\Models\Widget;

	class SubscribeServiceProvider extends ServiceProvider{

		public function boot()
	    {
	        View::composer('layouts/default', function($view){


	        	$data = Widget::where('id', 1)->first();

	            $view->with('widget', view('providers.subscribe', compact('data')));
	        });
	    }
	}