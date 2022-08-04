<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;

	use App\Models\Category;

	class MenutopServiceProvider extends ServiceProvider{

		public function boot()
	    {
	        View::composer('layouts/default', function($view){

	        	$categories = Category::get();

	            $view->with('widget_menu_top', view('providers.menutop', compact('categories')));
	        });
	    }
	}