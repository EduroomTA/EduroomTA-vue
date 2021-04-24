@extends('auth.app')

@section('title')
Tahun Ajaran | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header single-text row nm">
		<div class="col s12 m12 l8 row nm">
			<div class="col s12 m1 l1">
				<div class="center-content">
					<i class="material-icons icon">dns</i>
				</div>
			</div>
			<div class="col s12 m11 l11">
				<div class="title">
					<h5 class="semibold">Tahun Ajaran</h5>
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
				<th>Tahun Ajaran</th>
				<th>Status</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a class="matter-button-text">2020/2021</a>
				</td>
				<td>
					<div class="success-text">Aktif</div>
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-tahunajaran">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
			<tr>
				<td>
					<a class="matter-button-text">2020/2021</a>
				</td>
				<td>
					<div class="dark-text">Non Aktif</div>
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-tahunajaran">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.admin-sekolah.tahun-ajaran')

<ul id="dropdown-menu-tahunajaran" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-aktifnonaktif">Aktifkan</a></li>
	<li><a class="modal-trigger" href="#modal-edit">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete">Hapus</a></li>
</ul>

@endsection