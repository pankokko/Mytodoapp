<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Folder;

class FoldersController extends Controller
{
    public function create(Request $request)
    {
        //eval(\Psy\Sh());
        Folder::create(["folder" =>  $request->folder, "user_id" => Auth::id()]);
         return back();
    }

}
