@extends('auth.app')

@section('title')
Siswa | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header single-text row nm">
		<div class="col s12 m12 l8 row nm">
			<div class="col s12 m1 l1">
				<div class="center-content">
					<i class="material-icons icon">sentiment_satisfied</i>
				</div>
			</div>
			<div class="col s12 m11 l11">
				<div class="title">
					<h5 class="semibold">Siswa</h5>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l4">

			<div class="search">
				<label id="search" class="matter-textfield-outlined icon-input left-icon no-span" style="width: 100%">
					<input id="search-input" type="text" placeholder="Search...">
					<span></span>
					<i class="material-icons">search</i>
				</label>
			</div>


		</div>
	</div>
</section>

<section class="container">
	<table>
		<thead>
			<tr>
				<th>Nama/NIS</th>
				<th>Kelas Aktif</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a class="text-link dark-text" href="{{ route('admin-sekolah.siswa.detail') }}">
						<div class="badge-ed img-text small">
							<div class="img">
								<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
							</div>
							<div class="text">
								<p class="semibold">Nama Siswa</p>
								<p>1202170035</p>
							</div>
						</div>
					</a>
				</td>
				<td>
					<h6 class="normal dark-text nm">8C
						<i class="material-icons line-icon-p">stop_circle</i>
						<span style="font-size: 1rem">2020/2021</span>
					</h6>
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-siswa">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.admin-sekolah.siswa')

<ul id="dropdown-menu-siswa" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-siswa">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete-siswa">Hapus</a></li>
</ul>

<ul id="dropdown-rekap" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>

@endsection