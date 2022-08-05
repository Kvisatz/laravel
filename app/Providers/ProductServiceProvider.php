<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;

	use App\Models\Product;

	class ProductServiceProvider extends ServiceProvider{

		public function boot()
	    {
	        View::composer('pages.admin.products', function($view){

	        	$products = Product::paginate(2);

	            $view->with('all_products', view('providers.filter', compact('products')));
	        });
	    }
	}