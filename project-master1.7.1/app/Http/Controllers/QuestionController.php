<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vraag;

class QuestionController extends Controller
{
    public function index()
    {
    	$projects = Product::all();
    	$questions = Vraag::all();
    	return view('questions.index', compact('projects', 'questions'));
    }

    public function newQuestion()
    {
    	$projects = Product::all();
    	return view('questions.newQuestion', compact('projects'));

    }

    public function storeQuestion(Request $request)
    {
        $this->validate($request, [
            'vraag' => 'required',
            ]);

    	$question = New Vraag;

    	$question->product_id = $request->product_id;
    	$question->vraag = $request->vraag;

    	$question->save();

        \Flash::success("Vraag succesvol opgeslagen");

    	return back();

    }

    public function editQuestion(Vraag $question)
    {
    	return view('questions.editQuestion', compact('question'));
    }
    
     public function edit($id)
    {
        $projects = Product::all();
        $vraag = Vraag::findOrFail($id);
        return view('questions.editquestion', compact('projects','vraag'));
    }
    
    public function update(Request $request, $id)
    {
        $vraag = Vraag::findOrFail($id);

           $data = $request->only('vraag');
        
        $vraag->update($data);
        
        $projects = Product::all();
    	$questions = Vraag::all();
        \Flash::success('Vraag updated.');
        return view('questions.index', compact('projects', 'questions'));
    }
    
    public function destroy($id)
    {
        vraag::find($id)->delete();
        $projects = Product::all();
    	$questions = Vraag::all();
        return view('questions.index', compact('projects', 'questions'));
    }
}
