<?php 
	namespace App\Models;

	use Illuminate\Support\Facades\DB;

	class Page{

		static function select(){
			return DB::select('SELECT * FROM `page` WHERE id = 1');
		}

	}