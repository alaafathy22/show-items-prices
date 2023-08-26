<?php

namespace App\Http\Controllers;

use App\Models\groups;
use App\Models\items_and_prices;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $items_and_prices = items_and_prices::sortable()->get();
        // $Groups = groups::get();
        // return view('home',['items_and_prices'=>$items_and_prices,'Groups'=>$Groups]);
        $items_and_prices = items_and_prices::sortable()->get();
        $Groups = groups::get();
        return view('home', ['items_and_prices' => $items_and_prices, 'Groups' => $Groups]);
        // return view('home');

    }
}
