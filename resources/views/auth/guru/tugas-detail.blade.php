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
				<p class="normal primary-text">KD1 | Nama BAB</p>
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

<section class="container w60 row tab-menu-page">
	<div class="divider h05"></div>
	<div class="col s12">
		<ul class="tabs indicatorv2 inline">
			<li class="tab col s6"><a class="active" href="#soal">Soal</a></li>
			<li class="tab col s6"><a href="#rekap">Rekap Tugas</a></li>
		</ul>
	</div>
</section>

<section id="soal" class="container w60 mt2 mb2">
	<p class="ltext">
		Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
		berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
		Dan tambahkan file TXT dengan format NIM_NAMA
	</p>

	<a href="#!" class="matter-button-outlined button-icon modal-trigger" href="#modal-add">
		<i class="material-icons left">description</i>Nama File
	</a>
</section>

<section id="rekap" class="container w60 mb5">
	<div class="row mb3">
		<div class="col s6 m3 l3">
			<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%;">
				<select>
					<option value="" disabled selected>Status</option>
					<option value="1">Belum Mengumpulkan</option>
					<option value="2">Sudah Mengumpulkan</option>
					<option value="3">Belum Dikoreksi</option>
				</select>
				<span></span>
			</label>
		</div>
		<div class="col s12 m7 l7 hide-on-small-only"></div>
		<div class="col s6 m2 l2 right-align-res">
			<button class="matter-button-text button-icon dropdown-trigger drop mtb05 primary-text" href="#!" data-target="dropdown-rekap">
				<i class="material-icons left dark8-text">save_alt</i>Rekap
			</button>
		</div>
	</div>

	<table class="no-border">
		<thead>
			<tr>
				<th>Name</th>
				<th>Status</th>
				<th>Nilai</th>
				<th class="action"></th>
			</tr>
		</thead>
		<tbody>
			<tr class="danger-smoth2">
				<td>
					<div class="badge-ed img-text">
						<div class="img">
							<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
						</div>
						<div class="text">
							<h6 class="semibold">Nama Siswa</h6>
							<p>1202170035</p>
						</div>
					</div>
				</td>
				<td><div class="semibold">Belum Mengumpulkan</div></td>
				<td><div class="semibold">-</div></td>
				<td>-</td>
			</tr>
			<tr class="success-smoth2">
				<td>
					<div class="badge-ed img-text">
						<div class="img">
							<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
						</div>
						<div class="text">
							<h6 class="semibold ">Nama Siswa</h6>
							<p>1202170035</p>
						</div>
					</div>
				</td>
				<td><div class="semibold">Sudah Mengumpulkan</div></td>
				<td><div class="semibold">100</div></td>
				<td><a class="matter-button-text modal-trigger" href="#modal-jawaban">Koreksi</a></td>
			</tr>
			<tr class="warning-smoth2">
				<td>
					<div class="badge-ed img-text">
						<div class="img">
							<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
						</div>
						<div class="text">
							<h6 class="semibold">Nama Siswa</h6>
							<p>1202170035</p>
						</div>
					</div>
				</td>
				<td><div class="semibold">Belum Dikoreksi</div></td>
				<td><div class="semibold">-</div></td>
				<td><a class="matter-button-text modal-trigger" href="#modal-jawaban">Koreksi</a></td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.guru.tugas-detail')

<ul id="dropdown-rekap" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>
@endsection

@section('js-plus')
<script type="text/javascript">
	$(document).ready(function () {
		$('#yakin').click(function () {
			$('#btnnilai').prop("disabled", !$("#yakin").prop("checked")); 
			$('#formnilai').prop("disabled", !$("#yakin").prop("checked")); 
			$('#catatan').prop("disabled", !$("#yakin").prop("checked")); 
		})
	});
</script>
@endsection