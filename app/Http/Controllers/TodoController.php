<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller

{
    public function index(Request $request)
    {
        return view("todo.index");
    }

    public function new(Request $request)
    {
        return view("todo/new");
    }

    public function create(Request $request)
    {
        //eval(\Psy\Sh());
      Todo::create(["content" => $request->content, "title" => $request->title, "status" =>$request->status, "due" => $request->due]);
      return view("todo.index");
        
    }
}
