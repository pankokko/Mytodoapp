<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Folder;
use App\User;

class InvitationsController extends Controller
{

    public function new()
    {
       return view("invitation/new");
    }

}
