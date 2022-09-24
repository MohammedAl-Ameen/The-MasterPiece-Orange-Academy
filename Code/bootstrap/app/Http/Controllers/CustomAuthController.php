<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Routing\Controller;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function registration()
    {
        return view("auth.Registration");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users|email',
            'city' => 'required',
            'password' => 'required|min:5|max:16'

        ]);

        $user = new User($data);

        $user->password = Hash::make($request->password);

        if ($user->save()) {
            return back()->with('success', 'You have registerd successfuly');
        } else {
            return back()->with('fail', 'Something Wrong');
        }
    }


    public function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {

            if (Hash::check($request->password, $user->password)) {
                $request->Session()->put('loginId', $user->id);
                return redirect('/');
            } else {
                return back()->with("fail", 'The password is wrong');
            }
        } else {
            return back()->with("fail", 'this email does not existe');
        }
    }


    public function dashboard()
    {

        if (Session()->has('loginId')) {
            $data = array();
            $data = User::where('id', Session()->get('loginId'))->first();
            return view('welcome', compact('data'));
        } else {
            return view('welcome');
        }
    }

    // public function dashboard()
    // {
    //     return view('welcome');
    // }


    public function logout()
    {
        if (Session()->has('loginId')) {
            Session()->pull('loginId');
            return Redirect('login');
        }
    }
}
