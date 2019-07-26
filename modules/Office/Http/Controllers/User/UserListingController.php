<?php

namespace Modules\Office\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class UserListingController extends Controller
{
    public function __invoke(Request $request)
    {
        $users = User::all();

        return view('office::user.listing', compact('users'));
    }
}