<?php 

	namespace App\Providers;

	use Illuminate\Support\Facades\View;
	use Illuminate\Support\ServiceProvider;
	use Illuminate\Pagination\Paginator;

	use App\Models\Widget;

	class PaginateServiceProvider extends ServiceProvider{

		public function boot()
	    {
	        Paginator::useBootstrapFive();
	    }
	}