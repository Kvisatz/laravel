<?php 
	
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Http\Response;
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

		public function productsAction(Request $request, Response $response){
			
			$template = $this->template;
			
			$products = Product::paginate(2);

			//dd($products);
			if($response !== null){
				$products = Product::paginate(2);	
				//dd($response);
			}
			else{
				$products = Product::where('category_id', $response->content)->paginate(2);	
				dd($response);

			}
			
			
			$categories = Category::get();

			return view('pages.admin.products', compact('template', 'products', 'categories'));
		}

		public function productsfilterAction(Request $request){
			//dd($request);
			if($request->id == 0){
				$cat_id = 1;
			}
			else{
				$cat_id = $request->id;
			}
			return response($cat_id);
		}
	
	}