<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




// Route::get('/', function () {
//     if (Auth::guard('web')->check()) {
//         // return redirect()->route('home');
//         return view('home');
//     } elseif (Auth::guard('admin')->check()) {
//         return redirect()->route('home_admin');
//     } else {
//         return redirect('/login');
//     }
// });
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    } else {
        $users = User::get();
        return view('login_user',compact('users'));
    }
});


// Route::get('login_admin', function () {
//     if (Auth::guard('web')->check()) {
//         return redirect()->route('home');
//     } elseif (Auth::guard('admin')->check()) {
//         return redirect()->route('home_admin');
//     } else {
//         return view('login_admin');
//     }
// });


Route::post('/Add_item', [App\Http\Controllers\Controller_Admin_to_Add::class, 'index'])->name('Add_item')->middleware('auth');
Route::get('/remove_item', [App\Http\Controllers\Controller_Admin_to_remove::class, 'index'])->name('remove_item')->middleware('auth');
Route::post('/edit_item', [App\Http\Controllers\Controller_Admin_to_edit::class, 'index'])->name('edit_item')->middleware('auth');
// Route::get('/home_admin', [App\Http\Controllers\HomeController_Admin::class, 'index'])->name('home_admin')->middleware(['auth', 'prevent_Back_History']);
// Route::post('/logout_admin', [App\Http\Controllers\HomeController_Admin_logout::class, 'index'])->name('logout_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'prevent_Back_History']);
// Route::post('/login_admin_check', [App\Http\Controllers\auth_admin\auth_admin::class, 'check_admin_login'])
//     ->name('login_admin_check');

Route::post('/search_items', [App\Http\Controllers\search_items::class, 'search_items_fun'])->name('search_items');

Route::fallback(function () {
    return redirect('/');
});
Auth::routes();
