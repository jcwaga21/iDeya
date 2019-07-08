<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GuestAttendance;

class Attendance extends Controller
{
	public function __invoke(Request $request){
    $user = GuestAttendance::create($request->except("_token"));
    return redirect()->route("guest.welcome", compact('user'));
	}
}
