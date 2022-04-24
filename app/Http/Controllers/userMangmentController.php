<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userMangmentController extends Controller
{
    public function userShow()
    {
        $customers = customer::where('role', 'user')->get();
        return view('admin.userShow', compact('customers'));
    }

    public function createUser()
    {
        return view('admin.createUser');
    }


    public function userStore(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('success', 'User created successfully');
        
    }

    public function customerShow()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.showCustomer', compact('users'));
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }

}
