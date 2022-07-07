<?php
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Redirect;
	use App\Models\Page;
	use App\Models\Product;

	class IndexController extends Controller{
		private $template = 'default';

		public function indexAction(){
			//метод главной страницы
			$title = 'Главная страница';
			$template = $this->template;
			
			return view('pages.index', compact('template', 'title'));
		}
		public function categoryAction(){
			$template = $this->template;

			$page = Page::select();

			$products = Product::where('price', '>', 300)->get();
			// dd($products);

			return view('pages.category', compact('template', 'page', 'products'));
		}
		public function productAction(){
			$title = 'Страница продукта';
			$template = $this->template;
			return view('pages.product', compact('template', 'title'));
		}
		public function cartAction(){
			$title = 'Страница корзины';
			$template = $this->template;
			return view('pages.cart', compact('template', 'title'));
		}
		public function cabinetAction(){
			$title = 'Страница личного кабинета';
			$template = $this->template;
			return view('pages.cabinet', compact('template', 'title'));
		}
		
	}