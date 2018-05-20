<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckInController extends Controller
{
    public function checkIn () {
        return view('client.layouts.page_one_colomn', [
            'page' => 'client.pages.registration'
        ]);
    }

    public function checkIn (Request $request) {
        return redirect
            ->route('mainPageAdmin');
    }

}
