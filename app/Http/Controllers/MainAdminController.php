<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index ()
    {
        return view('welcome_admin');
    }

    public function addArtical ()
    {
        return view('add_artical_admin');
    }
}
