<?php

namespace App\Http\Controllers;

use App\Models\items_and_prices;
use Illuminate\Http\Request;

class Controller_Admin_to_remove
{

    public function index(Request $request)
    {
        items_and_prices::find($request->id)->delete();
        return redirect()->route('home_admin');
    }
}
