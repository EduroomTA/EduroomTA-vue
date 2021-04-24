@extends('auth.app')

@section('title')
Mapel | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header single-text row nm">
		<div class="col s12 m12 l8 row nm">
			<div class="col s12 m1 l1">
				<div class="center-content">
					<i class="material-icons icon">cast_for_education</i>
				</div>
			</div>
			<div class="col s12 m11 l11">
				<div class="title">
					<h5 class="semibold">Mapel</h5>
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
				<th>Mapel</th>
				<th>Tahun Ajaran</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a class="text-link dark-text" href="{{ route('admin-sekolah.mapel.detail') }}">Fisika</a>
				</td>
				<td>
					<div class="semibold">2020/2021</div>
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-mapel">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.admin-sekolah.mapel')

<ul id="dropdown-menu-mapel" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-mapel">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete-mapel">Hapus</a></li>
</ul>

<ul id="dropdown-rekap" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>

@endsection