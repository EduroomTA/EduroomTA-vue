@extends('auth.app')

@section('title')
Penilaian | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header single-text row nm">
		<div class="col s12 m12 l8 row nm">
			<div class="col s12 m1 l1">
				<div class="center-content">
					<i class="material-icons icon">grading</i>
				</div>
			</div>
			<div class="col s12 m11 l11">
				<div class="title">
					<h5 class="semibold">Penilaian</h5>
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
	<table id="example">
		<thead>
			<tr>
				<th>Penilaian</th>
				<th>Tahun Ajaran</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a class="text-link dark-text" href="{{ route('admin-sekolah.penilaian.akademik.detail') }}">Akademik</a>
				</td>
				<td>
					<div class="semibold">2020/2021</div>
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-penilaian">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
			<tr>
				<td>
					<a class="text-link dark-text" href="{{ route('admin-sekolah.penilaian.nonakademik.detail') }}">Non Akademik</a>
				</td>
				<td>
					<div class="semibold">2020/2021</div>
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-penilaian">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.admin-sekolah.penilaian')

<ul id="dropdown-menu-penilaian" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-penilaian">Edit Tahun Ajaran</a></li>
	<li><a class="modal-trigger" href="#modal-delete-penilaian">Hapus</a></li>
</ul>
@endsection

@section('js-plus')
<script type="text/javascript" src="{{asset('asset/js/datatable/datatable.js')}}"></script>

<script type="text/javascript">
	$('#example').DataTable( {
		"dom": 
		"<'row'<'col s12 m12 l12'tr>>" +
		"<'row nm'<'col s12 m12 l4'><'col s12 m12 l8'p>>",

		pagingType: "simple",
	});

	tabel = $('#example').DataTable();
	$('#search-input').keyup(function(){
		tabel.search($(this).val()).draw();
	});
</script>
@endsection