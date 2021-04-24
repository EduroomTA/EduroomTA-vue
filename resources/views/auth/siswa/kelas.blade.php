@extends('auth.app')

@section('title')
Siswa | EduRoom
@endsection

@section('content')
<section class="container">
	<div class="header row">
		<div class="col s12 m12 l8">
			<div class="title">
				<h5 class="primary-text">Mata Pelajaran</h5>
				<h6>Nama Kelas</h6>
			</div>
		</div>
		<div class="col s12 m12 l4">
			<div class="component right-align">
				<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
					<select class="select-search" searchable='List of options'>
						<option value="" disabled selected>Tahun Ajaran</option>
						<option value="1">2020/2021</option>
						<option value="2">2021/2022</option>
						<option value="3">2022/2023</option>
					</select>
					<span></span>
				</label>
			</div>
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
						<a class="matter-button-circle dropdown-trigger drop white-text" href='#' data-target='dropdown-menu'>
							<i class="material-icons">more_vert</i>
						</a>
					</div>
				</div>
				<a href="{{route('siswa.materi')}}">
					<div class="card-content">
						<h6>Nama Mapel</h6>
						<div class="divider mtb05"></div>
						<p class="normal dark7-text">Guru Wali <i class="material-icons line-icon-p">stop_circle</i> Nama Guru</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>

@include('components.modals.siswa.kelas')

<ul id='dropdown-menu' class='dropdown-content'>
	<li><a href="{{route('siswa.rekap.kelas')}}#rekap">Rekap</a></li>
	<li><a class="modal-trigger" href="#modal-keluar">Keluar</a></li>
</ul>
@endsection

@section('js-plus')

@endsection