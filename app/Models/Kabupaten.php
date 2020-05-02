<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $guarded = [];

    public function propinsi(){
    	return $this->belongsTo('App\Models\Propinsi');
    }
}
