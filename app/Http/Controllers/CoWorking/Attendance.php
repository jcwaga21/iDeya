<?php

namespace App\Http\Controllers\CoWorking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CoWorkingAttendance;

class Attendance extends Controller
{
    public function __invoke(Request $request){
    $user = CoWorkingAttendance::create($request->except("_token"));
    return redirect()->route("co-working.welcome", compact('user'));

    }
}
