@extends('auth.app')

@section('title')
Ujian | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header single-text row nm">
		<div class="col s12 m12 l8 row nm">
			<div class="col s12 m1 l1">
				<div class="center-content">
					<i class="material-icons icon">content_paste</i>
				</div>
			</div>
			<div class="col s12 m11 l11">
				<div class="title">
					<h5 class="semibold">Ujian</h5>
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
				<th>Ujian</th>
				<th>Tahun Ajaran</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a class="text-link dark-text" href="{{ route('admin-sekolah.ujian.detail') }}">UAS</a>
				</td>
				<td>
					<div class="semibold">2020/2021</div>
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-ujian">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.admin-sekolah.ujian')

<ul id="dropdown-menu-ujian" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-ujian">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete-ujian">Hapus</a></li>
</ul>
@endsection