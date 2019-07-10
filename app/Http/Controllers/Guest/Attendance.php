<?php

namespace App\Http\Controllers\Guest;

use App\Http\Requests\GuestRegistrationRequest;
use App\Http\Controllers\Controller;
use App\GuestAttendance;

class Attendance extends Controller
{
    public function __invoke(GuestRegistrationRequest $request)
    {
        $user = GuestAttendance::create($request->except("_token"));
        return redirect()->route("guest.welcome", compact('user'));
    }
}
