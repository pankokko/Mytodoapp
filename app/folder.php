<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class folder extends Model
{
   protected $fillable = ["user_id","folder"];

    public function todos()
    {
      return $this->hasMany("App\Todo");
    }
}
