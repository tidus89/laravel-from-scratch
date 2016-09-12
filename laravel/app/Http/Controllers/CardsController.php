<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Card;
use DB;

class CardsController extends Controller
{
    public function index() {
        //$cards = DB::table('cards')->get(); // Needs to use DB
        $cards = Card::all(); // This is using Laravels built in stuff.
        return view('cards.index', compact('cards'));
    }
    
    public function show(Card $card) {
        //$card = DB::table('cards')->where('id', $card)->first();
        //$card = Card::find($card); // This is using Laravels built in stuff.
        
        // This without any of the above and using show(Card $card) is using 
        // even more built in stuff from Laravel.
        return view('cards.show', compact('card')); 

    }
}
