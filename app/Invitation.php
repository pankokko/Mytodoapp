<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{

   protected $fillable = ["url","reciever","user_id","status"];

    public function user()
    {
       return $this->belongsTo("App\User");
    }
}
