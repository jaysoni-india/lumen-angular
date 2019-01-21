<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function members()
    {            
         return User::take(8)->get();
    }

    public function user(Request $r)
    {
            return $r->auth;
    }

}
