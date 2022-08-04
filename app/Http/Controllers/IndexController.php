<?php 
	
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use App\Models\Category;
	use App\Models\Page;
	use App\Models\Product;

	class IndexController extends Controller{

		private $template = 'default';

		public function indexAction(){

			$template = $this->template;

			$page = Page::select();




			return view('pages.index', compact('template', 'page'));
		}

		public function categoryAction($id){

			$template = $this->template;

			$page = Page::select();


			$category = Category::where(['id' => $id])->first();

		
			if(!$category){
				return abort(404);
			}

			

			$title = 'Страница категории';

			return view('pages.category', compact('template', 'title', 'page', 'category'));
		}

		public function productAction(){

			$template = $this->template;

			return view('pages.product', compact('template'));
		}

		public function cartAction(){

			$template = $this->template;

			return view('pages.cart', compact('template'));
		}

		public function cabinetAction(){

			$template = $this->template;

			return view('pages.cabinet', compact('template'));
		}

	}