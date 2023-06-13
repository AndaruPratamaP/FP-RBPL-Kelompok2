<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register_login');
    }

    public function register(Request $request){
        $request->validate([
            'uname' => 'required',
            'email' => 'required',
            'number' => 'required',
            'pass' => 'required',

        ]);

        $data = [
            'username' => $request->uname,
            'email' => $request->email,
            'number' => $request->number,
            'password' => $request->pass
        ];

        User::create($data);

        return redirect()->route('dashboard');
    }

    public function login(Request $request){
        $request->validate([
            'uname' => 'required',
            'email' => 'required',
            'number' => 'required',
            'pass' => 'required',

        ]);
    }
}
