<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(){
		return view('home.index');
	}

	public function tentang(){
		return view('home.tentang');
	}

	public function dokumentasi(){
		return view('home.dokumentasi');
	}

	public function dokumentasi_search(){
		return view('home.dokumentasi-search');
	}

	public function dokumentasi_kategori(){
		return view('home.dokumentasi-kategori');
	}

	public function dokumentasi_detail(){
		return view('home.dokumentasi-detail');
	}

	public function kontak(){
		return view('home.kontak');
	}

	public function paket(){
		return view('home.paket');
	}
}
