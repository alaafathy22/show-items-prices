<?php

namespace App\Http\Controllers;

use App\Models\groups;
use App\Models\items_and_prices;
use Illuminate\Http\Request;

class HomeController_Admin
{

    public function index()
    {
        $items_and_prices = items_and_prices::sortable()->get();
        $Groups = groups::get();
        return view('home_admin', ['items_and_prices' => $items_and_prices, 'Groups' => $Groups]);
    }
}
