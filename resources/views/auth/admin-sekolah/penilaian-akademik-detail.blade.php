@extends('auth.app')

@section('title')
Detail Penilaian | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container w60">
	<div class="header-detail-2">
		<div class="title">
			<div class="row nm">
				<div class="col s12 m12 l6">
					<div class="left-align-res">
						<h5 class="normal primary-text nm">Akademik<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h5>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="row nm">
						<div class="col s12">
							<ul class="tabs small-land indicatorv2 inline">
								<li class="tab col s4"></li>
								<li class="tab col s4"><a href="#pengetahuan">Pengetahuan</a></li>
								<li class="tab col s4"><a href="#keterampilan">Keterampilan</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="divider"></div>
		</div>
	</div>
</section>

<section id="pengetahuan" class="container w60 mb5">
	<table>
		<thead>
			<tr>
				<th>Komponen Penilaian</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<div class="semibold">Ulangan Harian</div>
				</td>
				<td>
					
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-komponen-penilaian">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="fixed-action-btn">
		<a class="btn-floating btn-large primary modal-trigger" href="#modal-add-komponen-penilaian-pengetahuan">
			<i class="large material-icons">add</i>
		</a>
	</div>
</section>

<section id="keterampilan" class="container w60">
	<table>
		<thead>
			<tr>
				<th>Komponen Penilaian</th>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<div class="semibold">Project</div>
				</td>
				<td>
					
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-komponen-penilaian">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>

	<div class="fixed-action-btn">
		<a class="btn-floating btn-large primary modal-trigger" href="#modal-add-komponen-penilaian-keterampilan">
			<i class="large material-icons">add</i>
		</a>
	</div>
</section>

@include('components.modals.admin-sekolah.penilaian-detail')

<ul id="dropdown-menu-komponen-penilaian" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-komponen-penilaian">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete-komponen-penilaian">Hapus</a></li>
</ul>
@endsection

@section('js-plus')
@endsection