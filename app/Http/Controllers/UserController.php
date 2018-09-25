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
       

       User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
       ]);

       return redirect()->route('usermanagement.usersList');
    }

    public function editUser(Request $request, User $user)
    {
        

        if ($request->password != '' || !empty($request->password)) {

          $user->update([
              'username' => $request->username,
              'name' => $request->name,
              'email' => $request->email,
          ]);

        }else{

          $user->update([
              'username' => $request->username,
              'name' => $request->name,
              'email' => $request->email,
              'password' => bcrypt($request->password)
          ]);

        }

        return back();
        
    }

    public function deleteUser($id)
    {
      $user = User::findorFail($id);

      $user->delete();

      return back();
    }
}
