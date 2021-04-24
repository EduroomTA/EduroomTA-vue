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

<section id="soal" class="container w60 mt2 mb5">
	<h5 class="semibold primary-text">Deskripsi</h5>
	<p class="ltext">
		Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
		berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
		Dan tambahkan file TXT dengan format NIM_NAMA
	</p>

	<div class="mtb3">
		<ul class="collapsible border right-icon popup expandable">
			<li class="active">
				<div class="collapsible-header">
					<i class="material-icons primary-text">settings</i>
					<i class="right material-icons">keyboard_arrow_down</i>
					<span>Pengaturan Tugas Pilihan Ganda</span>
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
			<a class="matter-button-contained button-icon mtb05 dropdown-trigger drop" data-target="dropdown-menu-addsoal">
				<i class="material-icons left">add</i>Soal Baru
			</a>
		</div>
		<div class="col s12 m6 l6 hide-on-small-only"></div>
		<div class="col s6 m3 l3 right-align-res">
			<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%;">
				<select>
					<option value="" disabled selected>Jenis Soal</option>
					<option value="esay">Esay</option>
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
					<p class="normal dark7-text">Esay</p>
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
					<p class="normal dark7-text">Pilihan Ganda</p>
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

<section id="rekap" class="container w60 mb5">
	<div class="row mb3">
		<div class="col s6 m3 l3">
			<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%;">
				<select>
					<option value="" disabled selected>Status</option>
					<option value="1">Belum Mengerjakan</option>
					<option value="2">Sudah Mengerjakan</option>
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
				<td><div class="semibold">Belum Mengerjakan</div></td>
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
				<td><div class="semibold">Sudah, 22 Juni 2020, 20:00</div></td>
				<td><div class="semibold">100</div></td>
				<td><a class="matter-button-text modal-trigger" href="#modal-hasil-pilgan">Detail</a></td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.guru.tugas-pilgan-detail')

<ul id="dropdown-menu-addsoal" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-add-esay">Esay</a></li>
	<li><a class="modal-trigger" href="#modal-add-pilgan">Pilihan Ganda</a></li>
	<li><a class="modal-trigger" href="#modal-add-truefalse">True False</a></li>
</ul>

<ul id="dropdown-rekap" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>

<ul id="dropdown-rekap-jawaban" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>

<ul id="dropdown-menu" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-detail-esay">Detail</a></li>
	<li><a class="modal-trigger" href="#modal-edit-esay">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete-soal">Hapus</a></li>
</ul>

<ul id="dropdown-menu-jawaban" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-jawaban-detail">Detail</a></li>
</ul>
@endsection

@section('js-plus')
@include('components.initialize-tyni-dynamic')

<script type="text/javascript">
	$(document).ready(function () {
		$('#yakin').click(function () {
			$('#btnnilai').prop("disabled", !$("#yakin").prop("checked")); 
			$('#formnilai').prop("disabled", !$("#yakin").prop("checked")); 
			$('#catatan').prop("disabled", !$("#yakin").prop("checked")); 
		})
	});
</script>

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

<script type="text/javascript">
	$(document).ready(function () {
		$('#select_jw').change(function () {
			var kunci_jw = $(this).val();
			var kunci = "jw_"+kunci_jw;

			var kunci_A = $('#jw_A').attr('id');
			var kunci_B = $('#jw_B').attr('id');
			var kunci_C = $('#jw_C').attr('id');
			var kunci_D = $('#jw_D').attr('id');

			var kuncis = [kunci_A, kunci_B, kunci_C, kunci_D];

			for (var i = 0; i < kuncis.length; i++) {
				if (kunci == kuncis[i]) {
					$('#'+kuncis[i]).text("radio_button_checked");
				} else {
					$('#'+kuncis[i]).text("radio_button_unchecked");
				}
			}
		});
	});

	$(document).ready(function () {
		$('#select_jw_edit').change(function () {
			var kunci_jw = $(this).val();
			var kunci = "jw_"+kunci_jw+"_edit";

			var kunci_A = $('#jw_A_edit').attr('id');
			var kunci_B = $('#jw_B_edit').attr('id');
			var kunci_C = $('#jw_C_edit').attr('id');
			var kunci_D = $('#jw_D_edit').attr('id');

			var kuncis = [kunci_A, kunci_B, kunci_C, kunci_D];

			for (var i = 0; i < kuncis.length; i++) {
				if (kunci == kuncis[i]) {
					$('#'+kuncis[i]).text("radio_button_checked");
				} else {
					$('#'+kuncis[i]).text("radio_button_unchecked");
				}
			}
		});
	});
</script>
@endsection