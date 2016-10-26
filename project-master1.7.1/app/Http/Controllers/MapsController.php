<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MapsController extends Controller
{
    public function index()
    {
    	$projects = Product::all();

    	return view('maps.index', compact('projects'));
    }
}
