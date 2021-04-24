@extends('auth.app')

@section('title')
Materi | Nama Kelas | EduRoom
@endsection

@section('content')
{{-- 
<section style="background-image: url('{{asset('asset/img/tema/math2.png')}}');background-repeat: no-repeat;background-position: 0;background-size: 1540px;height: 47rem;top: -65px;position: relative;">
</section> --}}

{{-- <section class="container">
	<div>
		<img src="{{asset('asset/img/tema/math2.png')}}">
	</div>
</section> --}}

<section class="container">
	<div class="header row">
		<div class="col s12 m12 l6">
			<div class="title">
				<h5 class="primary-text">Materi</h5>
				<h6 class="normal dark-text">8C <i class="material-icons line-icon-p">stop_circle</i> Pendidikan Pancasila dan Kewarganegaraan</h6>
			</div>
		</div>
		<div class="col s12 m12 l6">
		</div>
	</div>
</section>

{{-- <section class="container w40">
	<div class="header row">
		<div class="col s12 m12 l6">
			<img class="responsive-img" src="{{asset('asset/img/illustrasi/landing_page/materi.png')}}">
		</div>
		<div class="col s12 m12 l6">
			<h5 class="primary-text">Materi</h5>
			<h6>Pendidikan Pancasila dan Kewarganegaraan</h6>
		</div>
	</div>
</section> --}}

<section class="container w50 mb5">
	<div class="row">

		<div class="col s12">
			<a href="{{route('siswa.materi.detail')}}">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 1rem;">book</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s12">
									<h6 class="semibold">Nama Materi</h6>
									<p class="normal dark-text">10 Komponen <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i><br class="hide-on-med-and-up"><br class="hide-on-med-and-up"> Terbit 12 Juni 2020</p>
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