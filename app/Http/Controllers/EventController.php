<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{

    public function events(Request $r)
    {      
      return Event::all();
    }

}
