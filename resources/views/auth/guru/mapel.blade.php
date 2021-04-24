@extends('auth.app')

@section('title')
8C | Pendidikan Pancasila dan Kewarganegaraan
@endsection

@section('content')

<section>
	<div class="row main-dashboard-mapel">
		<div class="col s12 m12 l4 image-main" style="background-image: url('{{asset('asset/img/tema/dashboard-matematika_5.png')}}');">

			<div class="container">
				<div class="row valign-wrapper mt2 mb1 nm">
					<div class="col s12 m12 l6 valign">
						<a class="text-link bold white-text h5" href="{{ route('guru.kelas') }}">8C</a>
					</div>
					<div class="col s12 m12 l6 right-align">
						<h6 class="white-text">2020/2021</h6>
					</div>
				</div>
				<div class="row nm">
					<div class="col s12">
						<h4 class="light white-text">Pendidikan Pancasila dan Kewarganegaraan</h4>
					</div>
				</div>
				<div class="divider mtb1"></div>
				<div class="row nm">
					<div class="col s12">
						<h6 class="white-text"><span class="bolder">Oleh</span> Nama Guru Mapel</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l12 content-main">
			<div class="container">
				<div class="header row">
					<div class="col s12 m12 l6">
						<div class="title">
							<h5 class="primary-text">Beranda Mapel</h5>
						</div>
					</div>
					<div class="col s12 m12 l6">
						<div class="component right-align">
							<div class="ptb05 hide-on-small-only">
								<a class="matter-button-contained button-icon modal-trigger" href="#modal-add-bab">
									<i class="material-icons left">add</i>BAB
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row mb6">
					<div class="col s12">
						<a href="{{route('guru.materi')}}">
							<div class="card outlined hoverable-shadow-nb link">
								<div class="row nm valign-wrapper">
									<div class="col s2 m2 l1 valign">
										<i class="material-icons icon-large-incard" style="margin: 0 1rem;">chrome_reader_mode</i>
									</div>
									<div class="col s10 m10 l11">
										<div class="card-header just-head row">
											<div class="title col s10 m11">
												<h6 class="semibold"><span class="primary-text">KD1.</span> Nama BAB</h6>
												<p class="normal dark-text"><br class="hide-on-med-and-up"><br class="hide-on-med-and-up">12 Juni 2020</p>
											</div>
											<div class="link-card col s2 m1">
												<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-bab">
													<i class="material-icons">more_vert</i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col s12">
						<a href="{{route('guru.materi')}}">
							<div class="card outlined hoverable-shadow-nb link">
								<div class="row nm valign-wrapper">
									<div class="col s2 m2 l1 valign">
										<i class="material-icons icon-large-incard" style="margin: 0 1rem;">chrome_reader_mode</i>
									</div>
									<div class="col s10 m10 l11">
										<div class="card-header just-head row">
											<div class="title col s10 m11">
												<h6 class="semibold"><span class="primary-text">KD2.</span> Nama BAB</h6>
												<p class="normal dark-text"><br class="hide-on-med-and-up"><br class="hide-on-med-and-up">12 Juni 2020</p>
											</div>
											<div class="link-card col s2 m1">
												<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-bab">
													<i class="material-icons">more_vert</i>
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>

{{-- 					<div class="col s12">
						<a href="{{route('guru.ujian.detail')}}">
							<div class="card outlined hoverable-shadow-nb link">
								<div class="row nm valign-wrapper">
									<div class="col s2 m2 l1 valign">
										<i class="material-icons icon-large-incard" style="margin: 0 1rem;">content_paste</i>
									</div>
									<div class="col s10 m10 l11">
										<div class="card-header just-head row">
											<div class="title col s10 m11">
												<h6 class="semibold"><span class="primary-text">UAS</span></h6>
												<p class="normal dark-text"><br class="hide-on-med-and-up"><br class="hide-on-med-and-up">12 Juni 2020</p>
											</div>
											<div class="link-card col s2 m1">
											</div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div> --}}
				</div>
			</div>
		</div>
	</div>
</section>

@include('components.modals.guru.mapel')

<ul id="dropdown-menu-bab" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-bab">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete-bab">Hapus</a></li>
</ul>

{{-- <ul id="dropdown-add-menu" class="dropdown-content">
	<li><a class="modal-trigger modal-trigger" href="#modal-add-bab">BAB</a></li>
	<li><a class="modal-trigger modal-trigger" href="#modal-add-ujian">Ujian</a></li>
</ul> --}}
@endsection