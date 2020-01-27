<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
   protected $fillable = ["user_id","folder"];

   public function user()
   {
     return $this->belongsTo("App\User");
   }

    public function todos()
    {
      return $this->hasMany("App\Todo");
    }
}
