<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $products = DB::table('products')
                ->orderBy('created_at', 'desc')
                ->take(2)
                ->get();

        return view('home', compact('products'));
    }

    public function show(Product $product)
    {
         return view('catalogs.projects', compact('product'));
    }
}
