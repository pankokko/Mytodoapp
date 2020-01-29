<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
   protected $fillable = ["folder"];

   

   public function users(){
    return $this->belongsToMany('App\User');
}    

    public function todos()
    {
      return $this->hasMany("App\Todo");
    }
}
