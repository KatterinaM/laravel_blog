<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login () {
        return view('client.layouts.page_one_colomn', [
            'page' => 'client.pages.login'
        ]);
    }

    public function loginPost (Request $request) {
       $login = $request->input('login');
       $password = $request->input('password');

       if ($login === admin && $password === 1234) {
           return redirect
            ->route('mainPageAdmin');
       }

            return view('client.layouts.page_one_colomn',[
                'page' => 'client.pages.login',
                '$errorMessage' => 'Неправильный логин или пароль'
            ]);

    }
}
