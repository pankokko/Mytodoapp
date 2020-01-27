<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(Request $request)
    {
      $user = User::find(Auth::id());
      $todos = $user->todos;
      $doing = $todos->where("status" ,"未処理");
      $notyet = $todos->where("status","処理中");
      $done =  $todos->where("status", "完了");
        return view("user/show",compact("user","todos","done","notyet","doing"));
    }

   public function edit(Request $request)
   {
       return view("user/edit");
   }

}
