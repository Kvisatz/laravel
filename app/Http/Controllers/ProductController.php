<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class ProductController extends Controller{

	public function productAction(){
		return view('pages.product');
	}
	public function obrAction(Request $request){
		$dataId = [];
		if(isset($request->third)){
			$dataId[]=$request->third;
		}
		if(isset($request->second)){
			$dataId[]=$request->second;
		}
		if(isset($request->first)){
			$dataId[]=$request->first;
		}
		return redirect()->action('ProductController@productResult', compact('dataId'));
	}
	public function productResult(){
		return view('pages.product-result');
	}

}