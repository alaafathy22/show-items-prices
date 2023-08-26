<?php

namespace App\Http\Controllers;

use App\Models\items_and_prices;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController_Admin_logout
{

    public function index(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // if ($response = $this->loggedOut($request)) {
        //     return $response;
        // }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/login_admin');
    }
}
