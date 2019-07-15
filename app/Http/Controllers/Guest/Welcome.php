<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GuestAttendance;

class Welcome extends Controller
{
    public function __invoke(Request $request, GuestAttendance $user)
    {
        return view("guest.welcome", compact("user"));
    }
}
