<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Folder;
use App\User;

class FoldersController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
       $folders = Folder::where("user_id", Auth::id())->paginate(8);
        return view("folder/index",compact("folders"));
    }
      
    public function show($id)
    {   $folder =  Folder::find($id);
        $folders = $folder->todos;
        $notyet = $folders->where("status", "未処理")->count();
        $doing = $folders->where("status", "処理中")->count();
        $done = $folders->where("status", "完了")->count();
        $user_folders = User::find(Auth::id())->folders;
      
        return view("folder/show",compact("folders","folder","user_folders","notyet","doing","done"));
    }

    public function create(Request $request)
    {
        Folder::create(["folder" =>  $request->folder, "user_id" => Auth::id()]);
         return back();
    }

}
