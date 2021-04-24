@extends('auth.app')

@section('title')
Ujian Detail | Nama Kelas | EduRoom
@endsection

@section('content')

<section class="container w60">
	<div class="header-detail">
		<div class="center-content icon-page">
			<i class="material-icons icon">content_paste</i>
		</div>
		<div class="title">
			<div class="left-align-res">
				<h5 class="semibold primary-text">Soal Ujian</h5>
			</div>
			<div class="row nm">
				<div class="col s12 m12 l8 left-align-res">
					<p class="normal dark7-text">UAS <i class="material-icons line-icon-p">stop_circle</i> Pendidikan Kewarganegaraan<i class="material-icons line-icon-p">stop_circle</i>Diterbitkan 12 Juni 2020, 13:30</p>
				</div>
				<div class="col s12 m12 l4 right-align-res">
					<p class="normal dark7-text"><span class="badge-text1 primary white-text">Pelaksanaan 12 Juni, 13:00</span></p>
				</div>
			</div>
			<div class="row nm mt1">
				<div>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 A</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 B</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 C</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 D</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 E</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 F</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 G</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 H</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container w60">
	<div class="divider h05"></div>
</section>

{{-- IF TEMA SOAL BELUM ADA --}}

{{-- <section class="container w60">
	<div class="row">
		<div class="col s12 center mtb2">
			<h5>Pilih Tema Ujian</h5>
		</div>
	</div>
</section>


<section class="container w20">
	<form action="" method="POST">
		@csrf
		<div class="row">
			<div class="col s12 m12">
				<label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
					<select class="validate" required="true" aria-required="true" name="type">
						<option value="" disabled selected>Pilih Tema Ujian</option>
						<option value="1">Esay</option>
						<option value="2">Pilihan Ganda</option>
					</select>
					<span></span>
				</label>
			</div>
		</div>
		<div class="row">
			<div class="col s12 center">
				<button type="submit" class="matter-button-contained">Simpan</button>
			</div>
		</div>
	</form>
</section> --}}

{{-- IF TEMA SOAL ESAY --}}
{{-- <section class="container w60 mb5">
	<div class="mt2">
		<h5 class="semibold primary-text">Kelas</h5>
		<div>

		</div>
	</div>
</section> --}}

<section class="container w60 mb5">
	<div class="mtb3">
		<ul class="collapsible border right-icon popup expandable">
			<li class="active">
				<div class="collapsible-header">
					<i class="material-icons primary-text">settings</i>
					<i class="right material-icons">keyboard_arrow_down</i>
					<span>Pengaturan Ujian</span>
				</div>
				<div class="collapsible-body">
					<form action="" method="">
						@csrf
						<div class="row nm">
							<div class="col s12 m12 l4">
								<label>Durasi (Menit)</label>
								<label class="matter-textfield-flat center-select select-flat" style="width: 100%;">
									<select id="pilihan_durasi" name="durasi">
										<option value="0">Tidak Ada Durasi</option>
										<option value="30">30</option>
										<option value="45">45</option>
										<option value="60">60</option>
										<option value="90">90</option>
										<option value="120">120</option>
										<option value="custom">Atur Sendiri</option>
									</select>
									<span></span>
								</label>
								<div id="durasi_custom" class="hide">
									<label class="matter-textfield-filled" style="width: 100%">
										<input list="languages" type="number" placeholder=" " min="1" name="custom_durasi" />
										<span>Durasi (menit)</span>
									</label>
								</div>
							</div>

							<div class="col s12 m12 l4"></div>

							<div class="col s12 m12 l4">
								<ul>
									<li class="mtb1">
										<label class="matter-checkbox">
											<input type="checkbox">
											<span>Acak Soal</span>
										</label>
									</li>
									<li class="mtb1">
										<label class="matter-checkbox">
											<input type="checkbox">
											<span>Acak Jawaban</span>
										</label>
									</li>
								</ul>
							</div>
						</div>

						<div class="divider mtb1"></div>
						<div class="mt1 right-align">
							<button type="submit" class="matter-button-text primary-text">Simpan</button>
						</div>
					</form>
				</div>
			</li>
		</ul>
	</div>

	<div class="row mb3">
		<div class="col s6 m3 l3">
			<a class="matter-button-contained button-icon mtb05 drop dropdown-trigger" data-target="dropdown-menu-soal">
				<i class="material-icons left">add</i>Soal Baru
			</a>
		</div>
		<div class="col s12 m6 l6 hide-on-small-only"></div>
		<div class="col s6 m3 l3 right-align-res">
			<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%;">
				<select>
					<option value="" disabled selected>Jenis Soal</option>
					<option value="pilihan">Esay</option>
					<option value="pilihan">Pilihan Ganda</option>
					<option value="true_false">True False</option>
				</select>
				<span></span>
			</label>
		</div>
	</div>

	<table class="no-border highlight">
		<thead>
			<tr>
				<th>No</th>
				<th>Soal</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>
					<p class="ltext">
						Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
						berpindah ke activity 2. Kirim file Java dan XML serta video capture ...
					</p>
					<p class="normal dark7-text">True False</p>
				</td>
				<td>
					<a class="matter-button-circle dropdown-trigger drop dark-text" href="#!" data-target="dropdown-menu">
						<i class="material-icons">more_vert</i>
					</a>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>
					<p class="ltext">
						Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
						berpindah ke activity 2. Kirim file Java dan XML serta video capture ...
					</p>
					<p class="normal dark7-text">True False</p>
				</td>
				<td>
					<a class="matter-button-circle dropdown-trigger drop dark-text" href="#!" data-target="dropdown-menu">
						<i class="material-icons">more_vert</i>
					</a>
				</td>
			</tr>
			<tr>
				<td>3</td>
				<td>
					<p class="ltext">
						Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
						berpindah ke activity 2. Kirim file Java dan XML serta video capture ...
					</p>
					<p class="normal dark7-text">True False</p>
				</td>
				<td>
					<a class="matter-button-circle dropdown-trigger drop dark-text" href="#!" data-target="dropdown-menu">
						<i class="material-icons">more_vert</i>
					</a>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.guru.ujian')

<ul id="dropdown-rekap" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>

<ul id="dropdown-rekap-jawaban" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>

<ul id="dropdown-menu" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-kunci">Detail</a></li>
	<li><a class="modal-trigger" href="#modal-edit-soal">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete-soal">Hapus</a></li>
</ul>

<ul id="dropdown-menu-soal" class="dropdown-content">
	<li><a class="modal-trigger" href="#!">Esay</a></li>
	<li><a class="modal-trigger" href="#!">Pilihan Ganda</a></li>
	<li><a class="modal-trigger" href="#!">True False</a></li>
	{{-- <li><a class="modal-trigger" href="#!">Hapus</a></li> --}}
</ul>

<ul id="dropdown-menu-jawaban" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-jawaban-detail">Detail</a></li>
</ul>
@endsection

@section('js-plus')
<script type="text/javascript">
	$(document).ready(function () {
		$('#pilihan_durasi').change(function () {
			var pilihan = $( "#pilihan_durasi" ).val();

			if (pilihan == "custom") {
				$('#durasi_custom').removeClass('hide');
				$(this).attr("name", "pilihan_durasi");
				$('#durasi_custom').attr("name", "durasi");

			} else {
				$('#durasi_custom').addClass('hide');
				$(this).attr("name", "durasi");
				$('#durasi_custom').attr("name", "custom_durasi");
			}
		});
	});
</script>
@endsection