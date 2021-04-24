@extends('auth.app')

@section('title')
Detail Kelas | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container w60">
	<div class="header-detail-2">
		<div class="title">
			<div class="row nm">
				<div class="col s12 m12 l6">
					<div class="left-align-res">
						<h5 class="normal primary-text nm">8C<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h5>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="row nm">
						<div class="col s12">
							<ul class="tabs small-land indicatorv2 inline">
								<li class="tab col s4"><a href="#mapel">Mapel</a></li>
								<li class="tab col s4"><a href="#rekap">Rekap</a></li>
								<li class="tab col s4"><a href="#anggota">Anggota</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="divider"></div>
		</div>
	</div>
</section>

<section id="mapel" class="container w60 mb5">
	<table>
		<tbody>
			<tr>
				<th>Mapel</th>
				<th>Guru Mapel</th>
			</tr>
			<tr>
				<td>
					<a class="text-link dark-text" href="{{ route('admin-sekolah.kelas.detail.mapel') }}" target="__blank">Fisika</a>
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
			</tr>
		</tbody>
	</table>
</section>

<section id="rekap" class="container w60">
	b
</section>

<section id="anggota" class="container w50 mb5">
	<div class="mt3">
		<div class="mb5">
			<div class="left-align-res">
				<h5 class="semibold primary-text">Guru</h5>
			</div>
			<table>
				<tbody>
					<tr>
						<td>
							<a class="text-link dark-text" href="{{ route('admin-sekolah.guru.detail') }}" target="_blank">
								<div class="badge-ed img-text p1">
									<div class="img">
										<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
									</div>
									<div class="text">
										<h6 class="semibold">Nama Guru</h6>
										<p>1202170035</p>
									</div>
								</div>
							</a>
						</td>
						<td>
							<div class="right-align semibold">Guru Wali</div>
						</td>
					</tr>
					<tr>
						<td>
							<a class="text-link dark-text" href="{{ route('admin-sekolah.guru.detail') }}" target="_blank">
								<div class="badge-ed img-text p1">
									<div class="img">
										<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
									</div>
									<div class="text">
										<h6 class="semibold">Nama Guru</h6>
										<p>1202170035</p>
									</div>
								</div>
							</a>
						</td>
						<td>
							<div class="right-align semibold">Guru Mapel PKN</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="mb5">
			<div class="row">
				<div class="col s12 m12 l6 left-align-res">
					<h5 class="semibold primary-text">Siswa</h5>
				</div>
				<div class="col s12 m12 l6">
				</div>
			</div>

			<table>
				<tbody>
					<tr>
						<td>
							<a class="text-link dark-text" href="{{ route('admin-sekolah.siswa.detail') }}" target="_blank">
								<div class="badge-ed img-text p1">
									<div class="img">
										<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
									</div>
									<div class="text">
										<h6 class="semibold">Nama Siswa</h6>
										<p>1202170035</p>
									</div>
								</div>
							</a>
						</td>
						<td><div class="semibold">13:00, 12 Juni 2020</div></td>
						<td class="right-align">
							<button class="matter-button-circle dark-text dropdown-trigger drop" data-target="dropdown-menu-anggota">
								<i class="material-icons">more_vert</i>
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>

@include('components.modals.admin-sekolah.kelas-detail')

<ul id="dropdown-menu-anggota" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-keluarkan-anggota">Keluarkan</a></li>
</ul>

@endsection

@section('js-plus')
@endsection