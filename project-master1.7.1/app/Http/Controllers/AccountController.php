<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AccountController extends Controller
{
    
    public function index()
    {
        $users = User::all();

        return view('account.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('account.show', compact('user'));
    }

    public function edit(User $user)
    {

        return view('account.edit', compact('user'));

    }


    public function update(Request $request, User $user)
    {

        $user->update($request->all());

        return back();

    }

}
