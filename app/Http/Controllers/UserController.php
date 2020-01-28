<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
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
        
       $user = User::find(Auth::id());
       return view("user/edit",compact("user"));
   }

   public function update(Request $request,$id)
   {
       //eval(\Psy\Sh());
       $this->Validate($request, User::$rules);       
        $image =  $request->file('icon');
        $filename = time() . '.' . $image->getClientOriginalName();
        $path = public_path('/storage/icon/'.$filename);
         Image::make($image)->resize(300,300)->save($path);
        User::find(Auth::id())->update(["icon" => basename($path),"name" => $request->name]);
  
        return redirect("user/$id/show");
   }
}
