<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
     
    public function cities()
    {
        return $this->hasMany('App\City' , 'governorate_id' ,  'id');
    }
}
