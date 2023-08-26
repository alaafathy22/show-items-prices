<?php

namespace App\Http\Controllers\auth_admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class auth_admin
{

    public function __construct()
    {
    }

    public function check_admin_login(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            // return redirect()->route('alias_select_admin');
            return redirect('home_admin');
        } else {
            return back()->withErrors([
                'email' => 'يوجد عدم تشابهه',
                'password' =>  'يوجد عدم تشابهه',
            ])->onlyInput('email', 'password');
        }
    }
}
