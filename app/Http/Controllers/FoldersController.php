<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Folder;
use App\User;

class FoldersController extends Controller
{
    
    public function index(Request $request)
    {
       $folders = Folder::where("user_id", Auth::id())->paginate(8);
        return view("folder/index",compact("folders"));
    }
      
    public function show($id)
    {   $folder =  Folder::find($id);
        $folders = Folder::find($id)->todos;
        $user_folders = User::find(Auth::id())->folders;
        //eval(\Psy\Sh());
        return view("folder/show",compact("folders","folder","user_folders"));
    }

    public function create(Request $request)
    {
        Folder::create(["folder" =>  $request->folder, "user_id" => Auth::id()]);
         return back();
    }

}
