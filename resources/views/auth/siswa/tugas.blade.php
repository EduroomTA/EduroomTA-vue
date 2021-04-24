@extends('auth.app')

@section('title')
Tugas | Nama Kelas | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header row">
		<div class="col s12">
			<div class="title">
				<h5 class="primary-text">Tugas</h5>
				<h6 class="normal dark-text">8C <i class="material-icons line-icon-p">stop_circle</i> Pendidikan Pancasila dan Kewarganegaraan</h6>
			</div>
		</div>
	</div>
</section>

<section class="container w50 mb5">
	<div class="row">

		<div class="col s12">
			<a href="{{route('siswa.tugas.detail')}}">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 1rem">assignment</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m11">
									<h6 class="semibold">Nama Tugas</h6>
									<p class="normal dark-text">Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> UTS <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Tenggat 12 Juni 2020, 13:00</span></p>
								</div>
								<div class="link-card col s2 m1">
									<i class="material-icons success-text line-icon-p" style="font-size: 20px">check_circle</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="col s12">
			<a href="{{route('siswa.tugas.pilgan.detail')}}">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 1rem">assignment</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m11">
									<h6 class="semibold">Nama Tugas</h6>
									<p class="normal dark-text">Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> UTS <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Tenggat 12 Juni 2020, 13:00</span></p>
								</div>
								<div class="link-card col s2 m1">
									<i class="material-icons dark2-text line-icon-p" style="font-size: 20px">check_circle</i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

	</div>
</section>

@endsection