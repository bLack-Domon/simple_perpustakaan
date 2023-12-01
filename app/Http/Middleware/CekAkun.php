<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekAkun
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $status_akun)
    {
    if ($status_akun == 'admin' && auth()->user()->status_akun != 'admin' ) {
    abort(403);
    }
    if ($status_akun == 'petugas' && auth()->user()->status_akun != 'petugas' ) {
    abort(403);
    }
    if ($status_akun == 'anggota' && auth()->user()->status_akun != 'anggota' ) {
    abort(403);
    }
    return $next($request);
    }
}
