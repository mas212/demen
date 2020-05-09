<?php 
namespace App\Http\Response\DataMaster\Catagories;

use Redirect;
use App\Models\Categories;
use Illuminate\Contracts\Support\Responsable;

class StoreResponse implements Responsable{
	public function toResponse(){
		Categories::create($request->all());
        return response()->json(['status' => 'success']);
	}
}