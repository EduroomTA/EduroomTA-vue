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

<section class="container w60">
	<div class="divider h05 mb2"></div>

	<div class="mb3">
		<h5 class="semibold primary-text">Topik</h5>
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

@include('components.modals.guru.diskusi-detail')

<ul id="dropdown-menu" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete">Hapus</a></li>
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
@endsection