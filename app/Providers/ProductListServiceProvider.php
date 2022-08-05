<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;
	use App\Models\Product;



	class ProductListServiceProvider extends ServiceProvider{

		public function boot()
	    {
	    	
	        View::composer('pages.admin.products', function($view){

	        	$products = Product::paginate(2);
	        	//dd($products);
	            $view->with('product_all', view('providers.filter', compact('products')));
	        });
	    }
	}