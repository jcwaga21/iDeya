<?php

namespace App\Http\Controllers\Inventory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventory;
use App\Http\Requests\Inventory\CreateChairRequest;

class AddChairController extends Controller
{
       /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateChairRequest $request)
    {

        $data = $request->except('_token');
        Inventory::create($data);
        return redirect()->route('inventory.create');
    }
}
