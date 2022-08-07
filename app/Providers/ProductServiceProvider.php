<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;
	use Illuminate\Http\Request;


	use App\Models\Product;

	class ProductServiceProvider extends ServiceProvider{

		public function boot(Request $request)
	    {
	        View::composer('pages.admin.products', function($view){
				// dd($request);
	        	if($request->category == 0 || $request->category == null){
					$products = Product::paginate(4);
				}
				else{
					$products = Product::where('category_id', $request->category)->paginate(4);
				}

	            $view->with('all_products_filtered', view('providers.filter', compact('product')));
	        });
	    }
	}