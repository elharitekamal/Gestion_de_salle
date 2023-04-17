<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);
        $data['role'] = 1;
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect("login");
    }


    public function signin(Request $request)
    {


        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:4']
        ]);


        $result = $request->only('email', 'password');
        if (Auth()->attempt($result)) {
            if (Auth::user()->role == '0') {
                return redirect('dash');
            } else {
                return redirect('home');
            }
        } else {
            return redirect('login');
        }

    }
    public function logout(Request $request)
    {

        session::flush();
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }


}