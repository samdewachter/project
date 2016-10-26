<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use Auth;

class RedeemCoinsController extends Controller
{
    
    public function index()
    {
        $user = Auth::user();

        return view('coin.puntenInwisselen', compact('user'));
    }
    
    public function update()
    {
        $user = Auth::user();                          //get logdin user
        $coins = $user->coin - 100;                
        
        $user->coin = $coins;
        $user->save();
        
        \Flash::success('Mail met geschenksbon is verzonden!');

        return back();
    }

}
