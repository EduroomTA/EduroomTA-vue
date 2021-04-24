@extends('auth.app')

@section('title')
Siswa | EduRoom
@endsection

@section('content')
<section class="container">
	<div class="header row">
		<div class="col s12 m12 l8">
			<div class="title">
				<h5>Dashboard</h5>
			</div>
		</div>
		<div class="col s12 m12 l4">
			<div class="component right-align">
				<div class="ptb05 hide-on-small-only">
					<button class="matter-button-contained button-icon modal-trigger" href="#modal-add">
						<i class="material-icons left">add</i>Masuk Kelas
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
		<div class="col s12 m12 l8"></div>
		<div class="col s12 m12 l4"></div>
	</div>
</section>

@include('components.modals.siswa.dashboard')

{{-- <section class="container">
	<div class="row">
		<div class="col s12 m6 l4">
			<div class="card outlined hoverable-shadow link">
				<div class="card-header row primary">
					<div class="title col s10">
					</div>
					<div class="link-card col s2">
						<a class="matter-button-circle dropdown-trigger drop white-text" href='#' data-target='dropdown-menu'>
							<i class="material-icons">more_vert</i>
						</a>
					</div>
				</div>
				<a href="{{route('siswa.materi')}}">
					<div class="card-content">
						<h6>Nama Mapel</h6>
						<div class="divider mtb05"></div>
						<p>Nama Guru</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

<ul id='dropdown-menu' class='dropdown-content'>
	<li><a href="{{route('siswa.setting.kelas')}}#rekap">Rekap</a></li>
	<li><a class="modal-trigger" href="#modal-keluar">Keluar</a></li>
</ul> --}}
@endsection

@section('js-plus')

@endsection