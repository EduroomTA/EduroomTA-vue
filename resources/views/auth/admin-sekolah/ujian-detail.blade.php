@extends('auth.app')

@section('title')
Detail Ujian | Admin Sekolah | EduRoom
@endsection

@section('content')
<div class="fixed-action-btn">
	<a class="btn-floating btn-large primary modal-trigger" href="#modal-add">
		<i class="large material-icons">add</i>
	</a>
</div>

<section class="container w60">
	<div class="header-detail-2">
		<div class="title">
			<div class="row">
				<div class="col s12 m12 l8">
					<div class="left-align-res">
						<h5 class="normal primary-text nm">UAS<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h5>
					</div>
				</div>
				<div class="col s12 m12 l4 right-align-res">

				</div>
			</div>

			<div class="divider primary"></div>
		</div>
	</div>
</section>

<section class="container w60 mb5">
	<table>
		<thead>
			<tr>
				<th>Mapel</th>
				<th>Koordinator</th>
				<th>Kelas</th>
				<th>Pelaksanaan</th>
				<th style="width: 1rem"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a class="semibold text-link dark-text" href="#!">Pendidikan Kewarganegaraan</a>
				</td>
				<td>
					<a class="text-link dark-text" href="{{ route('admin-sekolah.guru.detail') }}" target="_blank">
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
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 A</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 B</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 C</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 D</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 E</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 F</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 G</span>
					<span class="badge-text1 res-enter primary-smoth2 primary-text">8 H</span>
				</td>
				<td>
					<div class="semibold">12:30, Senin 20 Desember 2020</div>
				</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-mapel-ujian">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.admin-sekolah.ujian-detail')

<ul id="dropdown-menu-mapel-ujian" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete">Hapus</a></li>
</ul>

@endsection

@section('js-plus')
<script type="text/javascript">
	$(document).ready(function () {
		$('#penjadwalan_ujian_edit').click(function () {
			$('#penjadwalan_edit_ujian_layout').toggleClass("hide", !$("#penjadwalan_ujian_edit").prop("checked")); 
		});	
	});

	$(document).ready(function () {
		$('#penjadwalan_ujian_add').click(function () {
			$('#penjadwalan_add_ujian_layout').toggleClass("hide", !$("#penjadwalan_ujian_add").prop("checked")); 
		});	
	});
</script>
@endsection