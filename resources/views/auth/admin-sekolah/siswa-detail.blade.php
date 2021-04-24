@extends('auth.app')

@section('title')
Detail Kelas | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container w60">
	<div class="header-detail">
		<div class="title">
			<div class="row nm">
				<div class="col s12 m12 l6">
					<div class="left-align-res">
						<h5 class="semibold nm mb2-res0">Nama Siswanya</h5>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="row nm">
						<div class="col s12">
							<ul class="tabs small-land indicatorv2 inline">
								<li class="tab col s4"><a href="#profil">Profil</a></li>
								<li class="tab col s4"><a href="#kelas">Kelas</a></li>
								<li class="tab col s4"><a href="#rekap">Rekap</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="divider"></div>
		</div>
	</div>
</section>

<section id="profil" class="container w50">
	<div class="mb5">
		<table class="highlight">
			<tbody>
				<tr>
					<td>
						<div class="row nm">
							<div class="col s12 m12 l6">
								<div class="img-bullet" style="width: 60px; height: 60px">
									<img src="https://ui-avatars.com/api/?background=0D8ABC&amp;color=fff&amp;name=Bima+Susila">
								</div>
							</div>
							<div class="col s12 m12 l6">
							</div>
						</div>
					</td>
					<td>
						<div class="right-align">
							<a id="btn_foto" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="row nm">
							<div class="col s12 m12 l6">
								<div class="bold">
									Nama
								</div>
							</div>
							<div class="col s12 m12 l6">
								<div class="semibold">
									Nama nya siswanya
								</div>
							</div>
						</div>
					</td>
					<td>
						<div class="right-align">
							<a id="btn_nama" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="row nm">
							<div class="col s12 m12 l6">
								<div class="bold">
									NIS
								</div>
							</div>
							<div class="col s12 m12 l6">
								<div class="semibold">
									1202170035
								</div>
							</div>
						</div>
					</td>
					<td>
						<div class="right-align">
							<a id="btn_nis" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="row nm">
							<div class="col s12 m12 l6">
								<div class="bold">
									Jenis Kelamin
								</div>
							</div>
							<div class="col s12 m12 l6">
								<div class="semibold">
									Laki-laki
								</div>
							</div>
						</div>
					</td>
					<td>
						<div class="right-align">
							<a id="btn_kelamin" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="mb5">
		<table class="highlight">
			<tbody>
				<tr>
					<td>
						<div class="row nm">
							<div class="col s12 m12 l6">
								<div class="bold">
									Username
								</div>
							</div>
							<div class="col s12 m12 l6">
								<div class="semibold">
									nama username
								</div>
							</div>
						</div>
					</td>
					<td>
						<div class="right-align">
							<a id="btn_username" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="row nm">
							<div class="col s12 m12 l6">
								<div class="bold">
									Password
								</div>
							</div>
							<div class="col s12 m12 l6">

							</div>
						</div>
					</td>
					<td>
						<div class="right-align">
							<a id="btn_password" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>

<section id="kelas" class="container w50">
	<table>
		<thead>
			<tr>
				<th>Kelas</th>
				<th>Tahun Ajaran</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a class="matter-button-text" href="{{route('admin-sekolah.kelas.detail')}}">8C</a>
				</td>
				<td>
					2020/2021
				</td>
			</tr>
		</tbody>
	</table>
</section>

<section id="rekap" class="container w50">
	
</section>

@include('components.modals.admin-sekolah.guru-detail')
@endsection

@section('js-plus')
<script type="text/javascript">
	$(document).ready(function() {

		$( "#btn_nama" ).click(function() {
			$('.modal').modal({
				onOpenStart : function() {
					$('#row_nama').removeClass('hide');
				},

				onCloseStart : function() {
					$('#row_nama').addClass('hide');
				},
			});
		});

		$( "#btn_nip" ).click(function() {
			$('.modal').modal({
				onOpenStart : function() {
					$('#row_nip').removeClass('hide');
				},

				onCloseStart : function() {
					$('#row_nip').addClass('hide');
				},
			});
		});

		$( "#btn_kelamin" ).click(function() {
			$('.modal').modal({
				onOpenStart : function() {
					$('#row_kelamin').removeClass('hide');
				},

				onCloseStart : function() {
					$('#row_kelamin').addClass('hide');
				},
			});
		});

		$( "#btn_username" ).click(function() {
			$('.modal').modal({
				onOpenStart : function() {
					$('#row_username').removeClass('hide');
				},

				onCloseStart : function() {
					$('#row_username').addClass('hide');
				},
			});
		});

		$( "#btn_password" ).click(function() {
			$('.modal').modal({
				onOpenStart : function() {
					$('#row_password').removeClass('hide');
				},

				onCloseStart : function() {
					$('#row_password').addClass('hide');
				},
			});
		});

		$( "#btn_foto" ).click(function() {
			$('.modal').modal({
				onOpenStart : function() {
					$('#row_foto').removeClass('hide');
					$('#modal-edit').removeClass('modal-small');
				},

				onCloseStart : function() {
					$('#row_foto').addClass('hide');
					$('#modal-edit').addClass('modal-small');
				},
			});
		});
	});
</script>

@include('components.initialize-upload-foto-js')
@endsection