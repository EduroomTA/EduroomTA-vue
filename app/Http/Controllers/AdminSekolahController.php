<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSekolahController extends Controller
{
    
    public function index()
    {
        //
    }

    public function dashboard(){
        return view('auth.admin-sekolah.dashboard');
    }

    public function guru(){
        return view('auth.admin-sekolah.guru');
    }

    public function guru_detail(){
        return view('auth.admin-sekolah.guru-detail');
    }

    public function siswa(){
        return view('auth.admin-sekolah.siswa');
    }

    public function siswa_detail(){
        return view('auth.admin-sekolah.siswa-detail');
    }

    public function mapel(){
        return view('auth.admin-sekolah.mapel');
    }

    public function mapel_detail(){
        return view('auth.admin-sekolah.mapel-detail');
    }

    public function tagihan(){
        return view('auth.admin-sekolah.tagihan');
    }

    public function setting(){
        return view('auth.admin-sekolah.setting');
    }

    public function kelas(){
        return view('auth.admin-sekolah.kelas');
    }

    public function kelas_detail(){
        return view('auth.admin-sekolah.kelas-detail');
    }

    public function kelas_detail_mapel(){
        return view('auth.admin-sekolah.kelas-detail-mapel');
    }

    public function penilaian(){
        return view('auth.admin-sekolah.penilaian');
    }

    public function penilaian_akademik_detail(){
        return view('auth.admin-sekolah.penilaian-akademik-detail');
    }

    public function penilaian_nonakademik_detail(){
        return view('auth.admin-sekolah.penilaian-nonakademik-detail');
    }

    public function tahun_ajaran(){
        return view('auth.admin-sekolah.tahun-ajaran');
    }

    public function ujian(){
        return view('auth.admin-sekolah.ujian');
    }

    public function ujian_detail(){
        return view('auth.admin-sekolah.ujian-detail');
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
