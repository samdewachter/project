<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Vraag;
use App\Answer;
use App\User;
use App\Answers_user;

class AnswerController extends Controller
{
    public function newAnswer(Vraag $question)
    {

    	return view('answers.newAnswer', compact('question'));

    }

    public function storeAnswer(Request $request)
    {
        $this->validate($request, [
            'antwoord' => 'required',
            ]);

        $answer = new Answer;

        $answer->antwoord = $request->antwoord;
        $answer->vraag_id = $request->vraag_id;

        $answer->save();

        \Flash::success("Antwoord succesvol opgeslagen");

        return back();
    }

    public function storeAntwoord($id)
    {
        $antwoord = Answer::find($id);
        $antwoord->aantal+=1;
        $antwoord->save();

    }

    public function storeCoin($userID)
    {
        $coin = User::find($userID);
        $coin->coin+=1;
        $coin->save();
    }

       public function storeAnswerUser($userID, $vraagID)
    {
        $user = new Answers_user;

        $user->vraag_id = $vraagID;
        $user->user_id = $userID;

        $user->save();
    }
    
     public function destroy($id)
    {
        Answer::find($id)->delete();
         
        $projects = Product::all();
    	$questions = Vraag::all();
        return view('questions.index', compact('projects', 'questions'));
    }
    
}
