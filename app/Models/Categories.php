<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $guarded = [];

    public function scopeSort($query){
    	return $query->orderBy('created-at', 'DESC');
    }
}
