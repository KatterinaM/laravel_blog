<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckInController extends Controller
{
    public function userCheckIn () {
        return view('check_in');
    }

    public function userCheckInPost (Request $request) {




    }
}
