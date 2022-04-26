<?php

namespace App\Http\Controllers;

use App\Models\adminMangment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminMangmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role','user')->get();
        return view('admin.allUser', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'User Created Successfully');
    }
    public function loginUser()
    {
        $users = User::select("*")
                        ->whereNotNull('last_seen')
                        ->orderBy('last_seen', 'DESC')
                        ->paginate(10);
          
        return view('admin.loginUser', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\adminMangment  $adminMangment
     * @return \Illuminate\Http\Response
     */
    public function show(adminMangment $adminMangment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\adminMangment  $adminMangment
     * @return \Illuminate\Http\Response
     */
    public function edit(adminMangment $adminMangment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\adminMangment  $adminMangment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminMangment $adminMangment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\adminMangment  $adminMangment
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminMangment $adminMangment)
    {
        //
    }
}
