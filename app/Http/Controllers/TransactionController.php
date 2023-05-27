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
        if (Auth::check()) {
            return view('pages.transactions', [
                'transactions' => Transaction::latest('created_at')->get(),
                'customer' => Customer::all()
            ]);
        }
   
        return redirect('login')->withSuccess('are not allowed to access');
    }

    public function addData(Request $request)
    {
        if (Auth::check()) {
            if ($request->input('addNewCustomer')) {
                $this->validate($request, [
                    'newCustomer' => 'required'
                ]);

                Customer::create(['name' => $request->input('newCustomer')]);
                
                $customer = Customer::latest('created_at')->first();
                $customerId = $customer->id;
            } else {
                $this->validate($request, [
                    'customer' => 'required'
                ]);

                $customerId = $request->input('customer');
            }

            $this->validate($request, [
                'paymentType' => 'required',
                'shippingCost' => 'required',
                'totalAmount' => 'required',
                'source' => 'required'
            ]);

            Transaction::create([
                'customer_id' => $customerId,
                'payment_type' => $request->input('paymentType'),
                'shipping_cost' => $request->input('shippingCost'),
                'description' => $request->input('description'),
                'total_amount' => $request->input('totalAmount'),
                'source' => $request->input('source')
            ]);
            
            return redirect('/transactions');
        }
   
        return redirect('login')->withSuccess('are not allowed to access');
    }

    public function deleteData($id)
    {
        if (Auth::check()) {
            $transactions = Transaction::findOrFail($id);
            $transactions->delete();
            
            return redirect('/transactions');
        }
   
        return redirect('login')->withSuccess('are not allowed to access');
    }
}
