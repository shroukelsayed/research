<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Following extends Model
{
     public function district() {
	    return $this->belongsTo('App\District','district_id');
	}
}
