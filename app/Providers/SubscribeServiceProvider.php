<?php
	namespace App\Providers;
	use Illuminate\Support\ServiceProvider;
	use Illuminate\Support\Facades\View;
	use App\Models\Widget;


	class SubscribeServiceProvider extends ServiceProvider{
		public function boot() {
	        View::composer('layout.default', function ($view) {
	        	$widget = Widget::where('id', '=', 1)->first();
	        	
	            $view->with('widget', view('providers.subscribe', compact('widget')));
	        });
	    }
	}