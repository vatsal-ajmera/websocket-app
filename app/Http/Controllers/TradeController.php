<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\NewTrade;
use Event;

class TradeController extends Controller
{
    public function newTrade() {

        Event::dispatch(new NewTrade("430"));
        dd('New Trade Added!!');

    }
}
