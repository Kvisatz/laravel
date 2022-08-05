<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;
	use App\Models\Product;
	use Illuminate\Http\Request;
	use Illuminate\Contracts\Routing\ResponseFactory;




	class FilterProducttServiceProvider extends ServiceProvider{

		public function boot(Request $request)
	    {
	    	if($request->id == 0 || $request == null){
	    		View::composer('pages.admin.products', function($view){

		        	$products = Product::paginate(2);
		        	dd($products);

		            $view->with('product_all', view('providers.filter', compact('products')));
		        });
	    	}
	    	else{
	    		View::composer('pages.admin.products', function($view, $request){

		        	$products = Product::where('category_id', $request->id)->paginate(2);
		        	dd($products);
		            $view->with('product_all', view('providers.filter', compact('products')));
		        });
	    	}
	        
	    }
	}