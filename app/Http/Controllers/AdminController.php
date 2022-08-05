<?php 
	
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use Illuminate\Support\Facades\Validator;
	use Illuminate\Support\Facades\Auth;
	use App\Models\Product;
	use App\Models\Category;


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

			if($request->id === null){
				//dd($request);
				$products = Product::paginate(2);
			}
			// else{
			// 	$products = Product::where('category_id', $request->id)->paginate(2);
			// }
			$categories = Category::get();

			return view('pages.admin.products', compact('template', 'products', 'categories'));
		}

		public function productsfilterAction(Request $request){
			//dd($request);
			if($request->id == 0){
				// dd($request);
				$products = Product::paginate(2);
				
			}
			else{
				$products = Product::where('category_id', $request->id)->paginate(2);
			}
			return view('providers.filter', compact('products'));
		}
	
	}