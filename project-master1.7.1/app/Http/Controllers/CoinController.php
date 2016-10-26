<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class CoinController extends Controller
{
    public function __construct()
    {
       
    }
    
    public function index()
    {
        $coin = User::all()->sortByDesc('coin');
        return view('coin.index', compact('coin','coinuser'));
    }

    public function puntenInwisselen()
    {
        return view('coin.puntenInwisslen');
    }

    
    public function create()
    {
       
    }

    
    public function store(Request $request)
    {
      
    }

    
    public function show($id)
    {

    }

   
    public function edit($id)
    {
        
    }

   
    public function update(Request $request, $id)
    {
        
    }

    
    public function destroy($id)
    {
       
    }
}
