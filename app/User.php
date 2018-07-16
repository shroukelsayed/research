<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cases()
    {
        return $this->hasMany('App\Cases' , 'typer_id' ,  'id');
    }


    public function getMyPermissions()
    {
        return $this->belongsToMany(Role::class,'users_roles');
    }


    public function toArray()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'cases' => ($this->cases != null)? $this->cases : '',
        ];
    }
}
