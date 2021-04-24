<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adminsekolah;
use App\Models\Siswa;
use App\Models\Guru;
use Auth;


class LoginController extends Controller
{
  public function login(){
   return view('home.login');
 }

 public function register(){
   return view('home.register');
 }

 public function register_siswa(){
   return view('home.register-siswa');
 }

 public function register_sekolah(){
   return view('home.register-sekolah');
 }

 public function postLogin(Request $request)
 {

  if (Auth::guard('adminsekolah')->attempt(['username' => $request->username, 'password' => $request->password])) {
    return redirect()->intended('/admin-sekolah');
  } else if (Auth::guard('guru')->attempt(['username' => $request->username, 'password' => $request->password])) {
    return redirect()->intended('/guru');
  } else if (Auth::guard('siswa')->attempt(['username' => $request->username, 'password' => $request->password])) {
    return redirect()->intended('/siswa');
  }

}

public function logout()
{
  if (Auth::guard('adminsekolah')->check()) {
    Auth::guard('adminsekolah')->logout();
  } elseif (Auth::guard('guru')->check()) {
    Auth::guard('guru')->logout();
  } elseif (Auth::guard('siswa')->check()) {
    Auth::guard('siswa')->logout();
  }

  return redirect('/');

}


}
