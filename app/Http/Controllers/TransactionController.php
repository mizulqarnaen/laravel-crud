<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return view('pages.transactions', [
                'transactions' => Transaction::latest('created_at')->get(),
                'customer' => Customer::all()
            ]);
        }
   
        return redirect('login')->withSuccess('are not allowed to access');
    }
}
