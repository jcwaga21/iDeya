<?php

namespace Modules\Office\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Office\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {
        if ($request->isAuthenticated()) {
            return redirect()->route('dashboard.index');
        }

        return redirect()
            ->back()
            ->with('email');
    }
}
