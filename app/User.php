<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password',"icon"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function folders(){
        return $this->belongsToMany('App\Folder');
    }    

  public function invitations()
  {
      return $this->hasmany("App\Invitation");
  }

    public function todos(){
        return $this->hasmany('App\Todo');
    }
    

    public static $rules = array(
        'icon' => 'required',
        'name' => 'required'
      );
  

  
}
