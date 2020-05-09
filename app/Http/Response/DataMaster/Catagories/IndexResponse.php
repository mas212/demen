<?php 
namespace App\Http\Response\DataMaster\Catagories;

use Redirect;
use App\Models\Categories;
use Illuminate\Contracts\Support\Responsable;

class IndexResponse implements Responsable{
	public function toResponse(){
		$category           = Categories::sort()->paginate(10);
	}
}