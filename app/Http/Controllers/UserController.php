<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function all(Request $r)
    {
            return $r->auth;
            // return User::all();
    }

}
