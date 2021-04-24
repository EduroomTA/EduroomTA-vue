<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;
class SiswaController extends Controller
{
    
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('auth.siswa.dashboard');
    }

    public function kelas(){
        return view('auth.siswa.kelas');
    }

    public function kelas_anggota(){
        return view('auth.siswa.anggota');
    }

    public function materi(){
        return view('auth.siswa.materi');
    }

    public function materi_detail(){
        return view('auth.siswa.materi-detail');
    }

    public function tugas(){
        return view('auth.siswa.tugas');
    }

    public function tugas_detail(){
        return view('auth.siswa.tugas-detail');
    }

    public function tugas_pilgan_detail(){
        return view('auth.siswa.tugas-pilgan-detail');
    }

    public function tugas_pilgan_pengerjaan(){
        return view('auth.siswa.tugas-pilgan-pengerjaan');
    }

    public function diskusi(){
        return view('auth.siswa.diskusi');
    }

    public function diskusi_detail(){
        return view('auth.siswa.diskusi-detail');
    }

    public function rekap_kelas(){
        return view('auth.siswa.rekap-kelas');
    }

    public function setting_akun(){
        return view('auth.siswa.setting-akun');
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        Siswa::create([          
                    'nama' => $request->nama,
                    'nis' => $request->nis,
                    'username' => $request->username,
                    'password' => Hash::make($request->password),
                    'kelamin' => $request->kelamin,
                    'kelas' => '0',
        ]);
        return redirect()->route('login');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
