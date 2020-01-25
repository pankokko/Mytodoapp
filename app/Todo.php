<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
protected $fillable = ["status","content","title", "due","user_id"];

    


public function user(){
  return $this->belongsTo('App\User');
}



public function Folder(){
  return $this->belongsTo('App\Folder');
}


}
