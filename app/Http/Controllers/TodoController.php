<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Todo;
use App\Folder;
use App\User;
use App\Http\Requests\TodoRequest;
use App\Http\Requests\TodoUpdateRequest;
class TodoController extends Controller

{
    public function __construct()
    {
      $this->middleware('auth');
    }

    // public function index(Request $request)
    // {
    //    $folders = Folder::where("user_id", Auth::id())->get();
    //    $items =  Todo::where("user_id", Auth::id())->paginate(10);
    //    $total = Todo::where("user_id", Auth::id())->get(); //ユーザーのタスク数を取得するため
    //    $count = $total->count();
    //      return view("todo.index",compact("items","count","folders"));
    // }

    public function new(Request $request,$id)
    {   
        
        return view("todo/new")->with("id",$id);
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
