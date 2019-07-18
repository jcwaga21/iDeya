<?php

namespace App\Http\Controllers\Account;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChangePassword extends Controller
{
    public function __invoke(User $user)
    {
        return view('co-working.changepassword', compact('user'));
    }
}
