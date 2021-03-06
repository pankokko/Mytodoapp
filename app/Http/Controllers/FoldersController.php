<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\FolderRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
       $folders = User::find(Auth::id())->folders()->paginate(8);
        return view("folder/index",compact("folders"));
    }
      
    public function show($id)
    {  
      $folder =  Folder::find($id);
        $folders = $folder->todos;
        $notyet = $folders->where("status", "未処理")->count();
        $doing = $folders->where("status", "処理中")->count();
        $done = $folders->where("status", "完了")->count();
        $user_folders = User::find(Auth::id())->folders;
      
        return view("folder/show",compact("folders","folder","user_folders","notyet","doing","done"));
    }

    public function create(FolderRequest $request)
    {
        $user = User::find(Auth::id());
        Folder::create(["folder" =>  $request->folder]);
        $folderid = Folder::all()->last()->id;
        $user->folders()->attach(["folder_id" => $folderid]); 
         return back();
    }

    public function done(Request $request,$id)
    {
       $folders = Folder::find($id)->todos()->where("status","完了")->get();
       return view("folder/done",compact("folders"));   
     }
}
