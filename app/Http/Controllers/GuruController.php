<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('auth.guru.dashboard');
    }

    public function kelas(){
        return view('auth.guru.kelas');
    }

    public function kelas_anggota(){
        return view('auth.guru.anggota');
    }

    public function mapel(){
        return view('auth.guru.mapel');
    }

    public function materi(){
        return view('auth.guru.materi');
    }

    public function materi_detail(){
        return view('auth.guru.materi-detail');
    }

    public function tugas(){
        return view('auth.guru.tugas');
    }

    public function tugas_detail(){
        return view('auth.guru.tugas-detail');
    }

    public function tugas_pilgan_detail(){
        return view('auth.guru.tugas-pilgan-detail');
    }

    public function diskusi(){
        return view('auth.guru.diskusi');
    }

    public function diskusi_detail(){
        return view('auth.guru.diskusi-detail');
    }

    public function komponen_rekap(){
        return view('auth.guru.rekap-kelas');
    }

    public function setting_akun(){
        return view('auth.guru.setting-akun');
    }

    public function mapel_rekap(){
        return view('auth.guru.mapel-rekap');
    }

    public function ujian(){
        return view('auth.guru.ujian');
    }

    public function ujian_detail(){
        return view('auth.guru.ujian-detail');
    }

    public function ujian_rekap(){
        return view('auth.guru.ujian-rekap');
    }

    public function kkm(){
        return view('auth.guru.kkm');
    }

    public function e_raport(){
        return view('auth.guru.e-raport');
    }
    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
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
