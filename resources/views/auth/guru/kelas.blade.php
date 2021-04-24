@extends('auth.app')

@section('title')
Kelas | EduRoom
@endsection

@section('content')
<section class="container">
	<div class="header row">
		<div class="col s12 m12 l9">
			<div class="title">
				<h5 class="semibold primary-text">Mata Pelajaran</h5>
			</div>
		</div>
		<div class="col s12 m12 l3 right-align-res">
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
		<div class="col s12 m6 l4">
			<div class="card outlined hoverable-shadow link">
				<div class="card-header row primary image-bg" style="background-image: url('{{asset('asset/img/tema/math2.png')}}')">
					<div class="title col s10">
					</div>
					<div class="link-card col s2">
						<a class="matter-button-circle dropdown-trigger drop white-text" href='#' data-target='dropdown1'>
							<i class="material-icons">more_vert</i>
						</a>
					</div>
				</div>
				<a href="{{route('guru.mapel')}}">
					<div class="card-content">
						<h6>Matematika</h6>
						<div class="divider mtb05"></div>
						<p class="normal dark7-text">Guru Wali <i class="material-icons line-icon-p">stop_circle</i> Nama Guru</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card outlined hoverable-shadow link">
				<div class="card-header row primary image-bg" style="background-image: url('{{asset('asset/img/tema/biology.png')}}')">
					<div class="title col s10">
					</div>
					<div class="link-card col s2">
						<a class="matter-button-circle dropdown-trigger drop white-text" href='#' data-target='dropdown1'>
							<i class="material-icons">more_vert</i>
						</a>
					</div>
				</div>
				<a href="{{route('guru.materi')}}">
					<div class="card-content">
						<h6>Biology</h6>
						<div class="divider mtb05"></div>
						<p class="normal dark7-text">Guru Wali <i class="material-icons line-icon-p">stop_circle</i> Nama Guru</p>
					</div>
				</a>
			</div>
		</div>
		<div class="col s12 m6 l4">
			<div class="card outlined hoverable-shadow link">
				<div class="card-header row primary image-bg" style="background-image: url('{{asset('asset/img/tema/fisika.png')}}')">
					<div class="title col s10">
					</div>
					<div class="link-card col s2">
						<a class="matter-button-circle dropdown-trigger drop white-text" href='#' data-target='dropdown1'>
							<i class="material-icons">more_vert</i>
						</a>
					</div>
				</div>
				<a href="{{route('guru.materi')}}">
					<div class="card-content">
						<h6>Fisika</h6>
						<div class="divider mtb05"></div>
						<p class="normal dark7-text">Guru Wali <i class="material-icons line-icon-p">stop_circle</i> Nama Guru</p>
					</div>
				</a>
			</div>
		</div>
	</div>

{{-- 	<div class="center mtb5">
		<img class="mb3" src="{{asset('asset/img/illustrasi/no-kelas.png')}}" height="200px">
		<h6 class="semibold">Tidak ada mata pelajaran di sini!</h6>
		<p>
			Halo Nama Guru!, anda tidak memiliki mata pelajaran saat ini, <br>silahkan buat mata pelajran anda dengan klik tombol "Mata Pelajaran di atas."
		</p>
	</div>
	--}}
</section>

@include('components.modals.guru.kelas')

<ul id='dropdown1' class='dropdown-content medium'>
	<li><a href="{{route('guru.mapel.rekap')}}">Rekap</a></li>
	<li><a class="modal-trigger" href="#modal-pilih-tema">Edit Tema</a></li>
</ul>
@endsection