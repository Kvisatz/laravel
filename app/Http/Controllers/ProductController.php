<?php
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;

	class ProductController extends Controller{
		
		public function productsAction(Request $request){
			
			return view('pages.product');
		}
		public function obrabAction(Request $request){
			dd($request);
			return Redirect::route('contacts', compact('status'));
		}
	}