<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventory;

class AddChairController extends Controller
{
       /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
    	$data = $request->except('_token');
    	Inventory::create($data);
        return redirect()->route('inventory');
    }

}
