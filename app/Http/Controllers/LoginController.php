<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginClient () {
        return view('login');
    }

    public function loginClientPost (Request $request) {
       $login = $request->input('login');
       $password = $request->input('password');

       if ($login === admin && $password === 1234) {
           return redirect
            ->route('mainPageAdmin');
       }

            return view('login',['$errorMessage' => 'Неправильный логин или пароль']);

    }
}
