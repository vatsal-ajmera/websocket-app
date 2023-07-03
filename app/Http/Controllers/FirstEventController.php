<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\FirstEvent;
use Event;

class FirstEventController extends Controller
{
    public function index() {

        Event::dispatch(new FirstEvent("helloo"));
        dd('First event Completed!!');
    }
}
