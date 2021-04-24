@extends('auth.app')

@section('title')
Diskusi Detail | Nama Kelas | EduRoom
@endsection

@section('content')

<section class="container w60">
	<div class="header-detail">
		<div class="center-content icon-page">
			<i class="material-icons icon">forum</i>
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
			<li class="tab col s6"><a class="active" href="#forum">Forum Diskusi</a></li>
			<li class="tab col s6"><a href="#rekap">Rekap Diskusi</a></li>
		</ul>
	</div>
</section>

<section id="forum" class="container w60">
	<div class="mt2 mb4">
		<p class="ltext">
			Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
			berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
			Dan tambahkan file TXT dengan format NIM_NAMA
		</p>
		<a href="#!" class="matter-button-outlined button-icon modal-trigger" href="#modal-add">
			<i class="material-icons left">description</i>Nama File
		</a>
	</div>

	<div class="row">
		<div class="col s12">
			<div class="card outlined hoverable-shadow link">
				<div class="card-header row">
					<div class="title col s10 m11">
						<div class="badge-ed img-text p1">
							<div class="img">
								<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
							</div>
							<div class="text">
								<h6 class="semibold">Nama Siswa</h6>
								<p class="dark7-text">1202170035 <i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020, 13:00</p>
							</div>
						</div>
					</div>
					<div class="link-card col s2 m1">
						<a class="matter-button-circle dropdown-trigger drop dark-text" href="#!" data-target="dropdown-menu">
							<i class="material-icons">more_vert</i>
						</a>
					</div>
				</div>
				<div class="card-content ptb0">
					<div class="row pl4-res">
						<div class="col s12">
							<p class="ltext">
								Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
								berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
								Dan tambahkan file TXT dengan format NIM_NAMA
							</p>
						</div>
					</div>
					<div class="pl4-res">
						<div class="right-align ptb1">
							<button id="balasan" class="matter-button-text">10 Balasan</button>
							<button id="balas" class="matter-button-outlined">Balas</button>
						</div>
					</div>
					<div id="formbalas" class="hide pl4-res ptb1">
						<form action="" method="POST">
							@csrf
							<textarea name="konten"></textarea>
							<div class="ptb1 right-align">
								<a id="batal" class="matter-button-text">Batal</a>
								<button type="submit" class="matter-button-contained">Kirim</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="contbalasan" class="col s12 hide">
			<div class="bordered-left-show">
				<div class="card outlined hoverable-shadow link">
					<div class="card-header row">
						<div class="title col s10 m11">
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p class="dark7-text">1202170035 <i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020, 13:00</p>
								</div>
							</div>
						</div>
						<div class="link-card col s2 m1">
							<a class="matter-button-circle dropdown-trigger drop dark-text" href="#!" data-target="dropdown-menu">
								<i class="material-icons">more_vert</i>
							</a>
						</div>
					</div>
					<div class="card-content ptb0">
						<div class="row pl4-res">
							<div class="col s12">
								<p class="ltext">
									Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
									berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
									Dan tambahkan file TXT dengan format NIM_NAMA
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="card outlined hoverable-shadow link">
					<div class="card-header row">
						<div class="title col s10 m11">
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p class="dark7-text">1202170035 <i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020, 13:00</p>
								</div>
							</div>
						</div>
						<div class="link-card col s2 m1">

						</div>
					</div>
					<div class="card-content ptb0">
						<div class="row pl4-res">
							<div class="col s12">
								<p class="ltext">
									Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
									berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
									Dan tambahkan file TXT dengan format NIM_NAMA
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col s12">
			<div class="divider h05 mtb3"></div>
		</div>

		<div class="col s12">
			<textarea id="konten" name="konten"></textarea>
			<div class="pl4-res ptb1">
				<div class="ptb1 right-align">
					<button type="submit" class="matter-button-contained">Kirim</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="rekap" class="container w60 mb5">
	<div class="row mb3">
		<div class="col s6 m3 l3">
			<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%;">
				<select>
					<option value="" disabled selected>Status</option>
					<option value="1">Sudah Berkontribusi</option>
					<option value="2">Belum Berkontribusi</option>
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
				<th>Nama</th>
				<th class="center">Kontribusi Utama</th>
				<th class="center">Kontribusi Balasan</th>
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
				<td class="center"><div class="semibold">-</div></td>
				<td class="center"><div class="semibold">-</div></td>
				<td>-</td>
			</tr>
			<tr class="success-smoth2">
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
				<td class="center"><div class="semibold">1</div></td>
				<td class="center"><div class="semibold">3</div></td>
				<td><a class="matter-button-text modal-trigger" href="#modal-detail">Detail</a></td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.guru.diskusi-detail')

<ul id="dropdown-menu" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete">Hapus</a></li>
</ul>

<ul id="dropdown-rekap" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>

<ul id="dropdown-rekap2" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>
@endsection

@section('js-plus')
@include('components.initialize-tyni')
</script>

<script type="text/javascript">
	$( "#balas" ).click(function() {
		$("#formbalas").toggleClass( "hide" );
	});

	$( "#batal" ).click(function() {
		$("#formbalas").toggleClass( "hide" );
	});

	$( "#balasan" ).click(function() {
		$("#contbalasan").toggleClass( "hide" );
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#trigger-filter2").click(function(){
			$('#filter-table2').toggleClass('hide');
			$(this).toggleClass('active-button');
		});
	});
</script>
@endsection