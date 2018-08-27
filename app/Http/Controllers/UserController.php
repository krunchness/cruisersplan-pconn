<?php

namespace cruiserplan\Http\Controllers;

use Illuminate\Http\Request;
use cruiserplan\User;

class UserController extends Controller
{
    public function usersList()
    {
    	$users = User::all();

    	return view('dashboard.dashboard-usermanagement', compact(['users']));
    }

    public function addUser(Request $request)
    {
       // dd($request->all());

       User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
       ]);

       return redirect()->route('usermanagement.usersList');
    }
}
