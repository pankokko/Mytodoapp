<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Folder;
use App\Invitation;
use App\User;

class InvitationsController extends Controller
{

    public function new()
    {
       return view("invitation/new");
    }

    public function create(Request $request)
    {
        Invitation::create(["reciever" => $request->reciever, "url" => $request->url,"user_id" => Auth::id()]);
        return back();

    }

}
