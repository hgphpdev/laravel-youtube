<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller {

    public function register() {
        return view('auth.registerView');
    }

    public function registerSubmit() {
        $data = Request::all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('login');
    }

    public function login() {
        return view('auth.loginView');
    }

    public function loginSubmit() {
        $data = Request::all();
        unset($data['_token']);
        $loginUser = Auth::attempt($data);
        if ($loginUser) {
            if (Auth::user()->role == 1) {
                return redirect()->route('home');
            }
            if (Auth::user()->role == 2) {
                return redirect()->route('homeNew');
            }
        }
        return redirect()->back();
    }

}
