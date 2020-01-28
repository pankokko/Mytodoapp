<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
protected $fillable = ["status","content","title", "due","user_id","folder_id"];

    
public function user(){
  return $this->belongsTo('App\User');
}

public function folder(){
  return $this->belongsTo('App\Folder');
}



public static $rules = array(
  "title" => "required",
  "due"   => "required",
  "content" => "required",
  "status" => "required"
);

}
