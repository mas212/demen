<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propinsi extends Model
{
    protected $guarded = [];

    public function scopeSort($query){
    	return $query->orderBy('created_at', 'DESC');
    }
}
