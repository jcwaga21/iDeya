<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventory;

class CreateChairController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $items = Inventory::all();

        return view('inventory.create', compact('items'));
    }
}
