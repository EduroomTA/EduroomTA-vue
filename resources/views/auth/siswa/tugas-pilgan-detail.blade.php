@extends('auth.app')

@section('title')
Tugas Pilgan Detail | Nama Kelas | EduRoom
@endsection

@section('content')

<section class="container w60">
	<div class="header-detail">
		<div class="center-content icon-page">
			<i class="material-icons icon">assignment</i>
		</div>
		<div class="title">
			<div class="left-align-res">
				<h5 class="semibold primary-text">Sprint Retrospective I</h5>
				<p class="normal primary-text">8C | Pendidikan Pancasila dan Kewarganegaraan</p>
			</div>
			<div class="row nm">
				<div class="col s12 m12 l6 left-align-res">
					<p class="normal dark7-text">Pengetahuan<i class="material-icons line-icon-p">stop_circle</i>UTS<i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020</p>
				</div>
				<div class="col s12 m12 l6 right-align-res">
					<p class="normal dark7-text"><span class="badge-text1 primary white-text">Tenggat 12 Juni, 13:00</span></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container w60 mb4">
	<div class="divider h05 mb2"></div>
	
	<h5 class="semibold primary-text">Deskripsi</h5>
	<p class="ltext">
		Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
		berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
		Dan tambahkan file TXT dengan format NIM_NAMA
	</p>
</section>

<section class="hide container w60 mb4">
	<h5 class="semibold primary-text">Hasil</h5>

	<div id="sudah-jawab" class="center mt3">
		<div class="mb2">
			<h5 class="semibold primary-text">Selamat Nama Siswa!</h5>
			<p>Nilai anda di tugas ini adalah</p>
			<span class="text-initial"><h4 class="bold primary-text">70</h4><h6 class="semibold">/100</h6></span>
		</div>

		<a class="matter-button-outlined modal-trigger" href="#modal-detail">Detail</a>
	</div>
</section>

<section class="container w60 mb4">
	<div class="card outlined panel center">
		<div class="mb05">
			<ul class="horizontal nm" style="display: inline-block;">
				<li>
					<p class="normal line-icon-text dark-text">
						<i class="material-icons line-icon-p primary-text" style="font-size: 20px">view_comfy</i>20 Soal
					</p>
				</li>
				<li>
					<p class="normal line-icon-text dark-text">
						<i class="material-icons line-icon-p primary-text" style="font-size: 20px">timer</i>20 menit
					</p>
				</li>
			</ul>
		</div>
		<a href="{{route('siswa.tugas.pilgan.pengerjaan')}}" class="matter-button-contained mb1">Mulai Mengerjakan</a>
	</div>
</section>

@include('components.modals.siswa.tugas-detail')

@endsection