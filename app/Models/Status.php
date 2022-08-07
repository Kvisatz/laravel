<?php 


	namespace App\Models;
 
	use Illuminate\Database\Eloquent\Model;

	 
	class Status extends Model
	{
	    protected $table = 'status';


	    public function product()
	    {
	        return $this->hasMany(Product::class, 'status_id');
	    }
	}