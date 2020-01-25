<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Folder;

class FoldersController extends Controller
{
    
    public function index(Request $request)
    {
       $folders = Folder::where("user_id", Auth::id())->paginate(8);
        return view("folder/index",compact("folders"));
    }
      
    public function show($id)
    {
        return view("folder/show");
    }


    public function create(Request $request)
    {
        //eval(\Psy\Sh());
        Folder::create(["folder" =>  $request->folder, "user_id" => Auth::id()]);
         return back();
    }

}
