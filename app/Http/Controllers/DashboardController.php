<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('pages.dashboard');
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('auth.login');
    }
}
