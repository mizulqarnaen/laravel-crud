<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    const REDIRECT_VIEW = "/transactions";

    public function index()
    {
        if (Auth::check()) {
            return view('pages.transactions', [
                'transactions' => Transaction::latest('created_at')->get(),
                'customer' => Customer::all()
            ]);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
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
            
            return redirect(self::REDIRECT_VIEW);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function updateData(Request $request)
    {
        if (Auth::check()) {
            $id = $request->input('transactionId');

            $this->validate($request, [
                'paymentType' => 'required',
                'shippingCost' => 'required',
                'totalAmount' => 'required',
                'source' => 'required'
            ]);

            $transaction = Transaction::find($id);
            $transaction->customer_id = $request->input('customerId');
            $transaction->payment_type = $request->input('paymentType');
            $transaction->shipping_cost = $request->input('shippingCost');
            $transaction->description = $request->input('description');
            $transaction->total_amount = $request->input('totalAmount');
            $transaction->source = $request->input('source');
            $transaction->save();
            
            return redirect(self::REDIRECT_VIEW);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }

    public function deleteData($id)
    {
        if (Auth::check()) {
            $transactions = Transaction::findOrFail($id);
            $transactions->delete();
            
            return redirect(self::REDIRECT_VIEW);
        }
   
        return redirect('login')->withSuccess(AuthController::NOT_ALLOWED);
    }
}
