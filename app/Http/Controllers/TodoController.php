<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Todo;
use App\User;
use App\Http\Requests\TodoRequest;
class TodoController extends Controller

{
   
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(Request $request)
    {
       $items =  Todo::where("user_id", Auth::id())->get();
         return view("todo.index",compact("items"));
    }

    public function new(Request $request)
    {
        return view("todo/new");
    }

    public function create(TodoRequest $request)
    {

      Todo::create(["content" => $request->content, "title" => $request->title, "status" =>$request->status, "due" => $request->due, "user_id" => Auth::user()->id]);
      return view("todo.index");
        
    }
}
