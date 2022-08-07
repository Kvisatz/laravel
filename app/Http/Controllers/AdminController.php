<?php 
	
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use Illuminate\Support\Facades\Validator;
	use Illuminate\Support\Facades\Auth;
	use App\Models\Product;
	use App\Models\Category;
	use App\Models\Status;


	class AdminController extends Controller{

		private $template = 'admin';

		public function indexAction(){

			if (!Auth::check()) {
			    return redirect()->route('login');
			}

			$template = $this->template;


			return view('pages.admin.index', compact('template'));
		}

		public function loginAction(){


			$template = $this->template;


			return view('pages.admin.login', compact('template'));
		}

		public function loginrequestAction(Request $request){

			$validator = Validator::make($request->all(), [
	            'email' => 'required|email:rfc,dns',
	            'password' => 'required|min:3',
	        ]);


			if($validator->fails()) {
				return redirect()->route('login');
			}


			if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			    return redirect()->route('dashboard');
			}
			else{
				return redirect()->route('login');
			}
		}	

		public function logoutAction(){
			Auth::logout();
			return redirect()->route('login');
		}

		public function productsAction(Request $request){
			
			$template = $this->template;

			
			$products = Product::paginate(5);
			
			$categories = Category::get();
			$statuses = Status::get();

			return view('pages.admin.products', compact('template', 'products', 'categories', 'statuses'));
		}

		public function productsfilterAction(Request $request){
			//dd($request);

			if($request->category == 0 && $request->category == 0){
				return redirect()->route('allproducts');
			}
			else{
				$data = [
							'cat_id'=>$request->category,
							//'data'=>$request->data,
							'status_id'=>$request->status,
						];
				return redirect()->route('filterproducts', [
																'cat_id' => $request->category,
																//'data'=>$request->data,
																'status_id'=>$request->status	
															]);

			}

		}

		public function productsfilterresultAction(Request $request){
			
			$template = $this->template;
			$products = Product::where('category_id', $request->cat_id)
			->where('status_id', $request->status_id)
			->paginate(5);
			if($request->cat_id == 0){
				$products = Product::where('status_id', $request->status_id)
								->paginate(5);
			}
			if(!$request->status_id){
				$products = Product::where('category_id', $request->cat_id)
								->paginate(5);
			}
			
			
			$categories = Category::get();
			$statuses = Status::get();

			return view('pages.admin.products', compact('template', 'products', 'categories', 'statuses'));
		}
	
	}