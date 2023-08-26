<?php

namespace App\Http\Controllers;

use App\Models\items_and_prices;
use Illuminate\Http\Request;

class search_items
{

    public function search_items_fun(Request $request)
    {
        // items_and_prices::where('id', $request->id_row)
        //     ->update([
        //         'name' => $request->item_name,
        //         'id_group' => $request->group_id,
        //         'cost' => $request->item_cost,
        //         'mount' => $request->item_mount,
        //         'price' => $request->item_price,
        //         'price2' => $request->item_price2,
        //         'price3' => $request->item_price3
        //     ]);
        // return redirect()->route('home_admin');
    }
}
