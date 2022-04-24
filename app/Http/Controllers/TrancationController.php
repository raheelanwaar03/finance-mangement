<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\trancation;
use Illuminate\Http\Request;

class TrancationController extends Controller
{
    public function addBalance($id)
    {
        $customer = customer::find($id);
        return view('user.addBalance', compact('customer'));
    }

    public function removeBalance($id)
    {
        $customer = customer::find($id);
        return view('user.removeBalance', compact('customer'));
    }

    public function balanceStore(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'customer_id' => 'required|string',
        ]);

        // adding new transaction
        $transaction = new trancation();
        $transaction->user_id = auth()->user()->id;
        $transaction->customer_id = $validatedData['customer_id'];
        $transaction->amount = $validatedData['amount'];
        $transaction->sum = 'in';
        $transaction->description = $validatedData['description'];
        $transaction->save();

        return redirect()->back()->with('success', 'Transaction added successfully');
    }

    public function minusBalance(Request $request)
    {
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'customer_id' => 'required|string',
        ]);

        // adding new transaction
        $transaction = new trancation();
        $transaction->user_id = auth()->user()->id;
        $transaction->customer_id = $validatedData['customer_id'];
        $transaction->amount = $validatedData['amount'];
        $transaction->sum = 'out';
        $transaction->description = $validatedData['description'];
        $transaction->save();

        return redirect()->back()->with('success', 'Transaction added successfully');

    }
}
