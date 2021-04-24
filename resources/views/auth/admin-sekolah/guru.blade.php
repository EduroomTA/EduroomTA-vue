@extends('auth.app')

@section('title')
Guru | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header single-text row nm">
		<div class="col s12 m12 l8 row nm">
			<div class="col s12 m1 l1">
				<div class="center-content">
					<i class="material-icons icon">support_agent</i>
				</div>
			</div>
			<div class="col s12 m11 l11">
				<div class="title">
					<h5 class="semibold">Guru</h5>
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
				<th>Nama/NIP</th>
				<th style="width: 20rem;">Peran</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a class="text-link dark-text" href="{{ route('admin-sekolah.guru.detail') }}">
						<div class="badge-ed img-text small">
							<div class="img">
								<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
							</div>
							<div class="text">
								<p class="semibold">Nama Guru</p>
								<p>1202170035</p>
							</div>
						</div>
					</a>
				</td>
				<td>
					<span class="badge-text1 res-enter primary white-text">Mapel</span>
					<span class="badge-text1 res-enter warning white-text">Wali</span>
					<span class="badge-text1 res-enter success white-text">BK</span>
					<span class="badge-text1 res-enter danger white-text">Koordinator</span>
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-guru">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.admin-sekolah.guru')

<ul id="dropdown-menu-guru" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-guru">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete-guru">Hapus</a></li>
</ul>

<ul id="dropdown-rekap" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>
@endsection