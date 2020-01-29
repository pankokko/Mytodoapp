<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Todo;
use App\User;
use App\Http\Requests\TodoRequest;
use App\Http\Requests\TodoUpdateRequest;
class TodoController extends Controller

{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function create(TodoRequest $request)
    {
      Todo::create(["content" => $request->content, "folder_id" => $request->folder_id, "title" => $request->title, "status" =>$request->status, "due" => $request->due, "user_id" => Auth::user()->id]);
      return redirect("folder/$request->folder_id/show");
        
    }

    public function edit(Request $request,$id)
    {
     $item = Todo::find($id);
      return view("todo/edit")->with("item", $item);
    }

    public function update(Request $request)
    {
      $this->Validate($request, Todo::$rules);
      $folder = Todo::find($request->id)->folder()->first();
      $id = $folder->id;
      Todo::where("id",$request->id)->update(["content" => $request->content, "title" => $request->title, "status" => $request->status]);
      //eval(\Psy\Sh());
      return redirect("folder/$id/show");
    }

    public function delete(Request $request,$id)
    {
       Todo::find($id)->delete();
       return back(); 
    }
}
