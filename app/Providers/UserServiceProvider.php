<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Invitation;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
      View::composer(
          ["subview.header","user.edit"],function($view){
           $invite = Invitation::where("reciever", Auth::user()->name)->get();
              $view->with("invite",$invite);
          }
        );
        View::composer(
            ["subview.header","user.edit"],function($view){
              $user = User::find(Auth::id());
                $view->with("user",$user);
            }
          );
    }
}
