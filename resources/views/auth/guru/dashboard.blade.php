@extends('auth.app')

@section('title')
Guru | EduRoom
@endsection

@section('content')
<section class="container">
	<div class="header row">
		<div class="col s12 m12 l9">
			<div class="title">
				<h5 class="semibold primary-text">Dashboard</h5>
			</div>
		</div>
		<div class="col s12 m12 l3">
			<div class="component right-align">
				<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%; border: 0">
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
			<a href="{{route('guru.kelas')}}">
				<div class="primary white-text box-properti">
					<h6 class="nm">8C</h6>
				</div>
			</a>
			<div class="card outlined hoverable-shadow link">
				<div class="card-header row dark3">
					<div class="title col s10">
					</div>
					<div class="link-card col s2">
						<a class="matter-button-circle dropdown-trigger drop dark-text" href='#' data-target='dropdown1'>
							<i class="material-icons">more_vert</i>
						</a>
					</div>
				</div>
				<a href="{{route('guru.kelas')}}">
					<div class="card-content">
						<br>
						<br>
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

@include('components.modals.guru.dashboard')

<ul id='dropdown1' class='dropdown-content medium'>
	<input type="text" id="copy-me" class="hide" value="1232131231"/>
	<li><a id="copy-btn" href="#!">Salin Kode</a></li>
</ul>
@endsection

@section('js-plus')
<script type="text/javascript" src="{{asset('asset/js/copy-button.js')}}"></script>
@endsection