<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function postSignUp(Request $request){
        $data= request()->validate([
            'name' => 'required|min:2',
            'email'=> 'required|min:2|unique:users',
            'password'=> 'required|min:2'
        ]);
        $user = new User();
        $user->name= $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->save();
        return redirect()->route('signin')->with('status', 'Your record has been saved successfully!, Try to Login');
        // ddd($request);
    }

    public function postSignIn(Request $request){
        if (Auth::attempt(['email'=> $request['email'], 'password' => $request['password']])) {
            return redirect()->route('dashboard');
        }
        return back();
    }
}
