<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RedirectAfterSuccess extends Controller
{
    public function home()
    {
        if (auth()->user()->status_akun == 'admin') {
            return redirect()->route('adminDash');
        }
        elseif(auth()->user()->status_akun == 'petugas'){
            return redirect()->route('petugasDash');
        }
        elseif(auth()->user()->status_akun == 'anggota'){
            return redirect()->route('anggotaDash');
        }
        else{
            return auth()->logout();
        }
    }
}
