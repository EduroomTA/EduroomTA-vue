@extends('auth.app')

@section('title')
Tugas Detail | Nama Kelas | EduRoom
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
	
	<h5 class="semibold primary-text">Soal</h5>
	<p class="ltext">
		Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
		berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
		Dan tambahkan file TXT dengan format NIM_NAMA
	</p>
	<a href="#!" class="matter-button-outlined button-icon modal-trigger" href="#modal-add">
		<i class="material-icons left">description</i>Nama File
	</a>
</section>

<section class="container w60 mb4">
	<h5 class="semibold primary-text">Jawaban</h5>

	<div id="belum-jawab" class="hide">
		<form action="" method="">
			@csrf
			<textarea id="konten" name="konten"></textarea>
			<div class="row">
				<div class="col s12">
					<div class="ptb1 right-align">
						<button type="submit" class="matter-button-contained">Kirim</button>
					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="sudah-jawab" class="hide center mt3">
		<div class="mb2">
			<h5 class="semibold primary-text">Selamat Nama Siswa!</h5>
			<p>Nilai anda di tugas ini adalah</p>
			<span class="text-initial"><h4 class="bold primary-text">70</h4><h6 class="semibold">/100</h6></span>
		</div>

		<a class="matter-button-outlined modal-trigger" href="#modal-detail">Detail</a>
	</div>

	<div id="sudah-jawab-belum-nilai" class="center mt3">
		<h5 class="semibold primary-text">Anda Sudah Mengumpulkan!</h5>
		<p>Jawaban anda telah terkirim, <br>mohon tunggu guru anda mengkoreksi pekerjaan anda!</p>

		<div class="container w40 mtb2">
			<div class="progress">
				<div class="indeterminate"></div>
			</div>
		</div>
	</div>
</section>

@include('components.modals.siswa.tugas-detail')

@endsection

@section('js-plus')
@include('components.initialize-tyni')
@endsection