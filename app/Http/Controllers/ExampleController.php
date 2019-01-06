<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ExampleController extends Controller
{

    public function users(Request $r)
    {
      return $r->auth->name;
      return User::all();
    }

}
