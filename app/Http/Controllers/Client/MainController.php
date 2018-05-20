<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index ()
    {
        return view('client.layouts.page_two_colomn_main',[
            'page' => 'client.pages.main'
        ]);
    }

    public function about ()
    {
        return view('client.layouts.page_one_colomn',[
            'page' => 'client.pages.about'
        ]);
    }

    public function newArticles ()
    {
        return view('client.layouts.page_two_colomn',[
            'page' => 'client.pages.new_articles'
        ]);
    }

    public function oneArticles (Request $request, $id)
    {
        return view('client.layouts.page_one_colomn',[
            'page' => 'client.pages.one_articles'
        ]);
    }
}
