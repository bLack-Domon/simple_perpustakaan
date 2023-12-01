<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataAkun extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akun = User::all();
        return view('Admin.akun', compact('akun'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.akun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'username' => 'required|unique:users',
            'status_akun' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'status_akun' => $request->get('status_akun'),
            'password' => Hash::make($request->get('password')),
        ]);

        return redirect()->route('Akun.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $Akun)
    {
        $options = ['admin', 'anggota', 'petugas'];
        return view('Admin.akun.edit', compact(['Akun', 'options']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $Akun)
    {
        $request->validate([
            'name' => 'required|unique:users,name,' . $Akun->id,
            'username' => 'required|unique:users,username,' . $Akun->id,
            'status_akun' => 'required',
            'password' => 'nullable|min:8|confirmed',
        ]);

        $data = [
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'status_akun' => $request->get('status_akun'),
        ];
    
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->get('password'));
        }
    
        $Akun->update($data);
    
        return redirect()->route('Akun.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $Akun)
    {
        $Akun->delete();

        return redirect()->route('Akun.index');
    }
}
