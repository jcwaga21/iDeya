<?php

namespace Modules\Office\Http\Controllers\CoWorking;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Office\Entities\CoWorking;

class CoWorkingListingController extends Controller
{
    public function __invoke(Request $request)
    {
        $coworking = CoWorking::all();

        return view('office::coworking.listing', compact('coworking'));
    }
}
