<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class ResultatenController extends Controller
{
    
    public function index()
    {
        $projects = Product::all();

        return view('resultaat.index', compact('projects'));
    }

    public function results(Product $project)
    {
        return view('resultaat.results', compact('project'));
    }


}
