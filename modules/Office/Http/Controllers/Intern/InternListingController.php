<?php

namespace Modules\Office\Http\Controllers\Intern;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Office\Entities\Intern;

class InternListingController extends Controller
{
    public function __invoke(Request $request)
    {
        $interns = Intern::all();

        return view('office::intern.listing', compact('interns'));
    }
}
