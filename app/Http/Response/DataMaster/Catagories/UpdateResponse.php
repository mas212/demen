<?php 
namespace App\Http\Response\DataMaster\Catagories;

use Redirect;
use App\Models\Categories;
use Illuminate\Contracts\Support\Responsable;

class UpdateResponse implements Responsable{
	public function toResponse($id){
		$category       = Categories::findById($id);
        $category->update($request->all());
        return response()->json(['status' => 'success']);
	}
}