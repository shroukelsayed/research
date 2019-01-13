<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{

	public function city() {
	    return $this->belongsTo('App\City','city_id');
	}


    public function followings()
    {
        return $this->hasMany('App\Following' , 'following_id' ,  'code');
    }
}
