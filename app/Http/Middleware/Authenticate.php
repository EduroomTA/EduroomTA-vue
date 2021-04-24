<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (Auth::guard('adminsekolah')->check()) {

          return redirect('/admin-sekolah');

      } else if (Auth::guard('guru')->check()) {

          return redirect('/guru');

      } else if (Auth::guard('siswa')->check()) {

          return redirect('/siswa');

      }
  }
}
