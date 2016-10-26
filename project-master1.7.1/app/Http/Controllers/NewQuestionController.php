<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vraag;

class NewQuestionController extends Controller
{
    public function index()
    {
    	$projects = Product::all();
    	return view('manage.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'vraag' => 'required',
            ]);

    	$vraag = new Vraag;

    	$vraag->project_id = $request->project_id;
    	$vraag->vraag = $request->vraag;

    	$vraag->save();

        \Flash::success("Vraag succesvol opgeslagen");

    	return back();

    }
}
