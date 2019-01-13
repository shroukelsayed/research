<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

	public function governorate() {
	    return $this->belongsTo('App\Governorate','governorate_id');
	}

    public function districts()
    {
        return $this->hasMany('App\District' , 'district_id' ,  'code');
    }
}
