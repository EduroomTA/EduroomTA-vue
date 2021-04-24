@extends('home.app')

@section('title')
Register | EduRoom
@endsection

@section('content')
<section class="section-img section-hide-small" style="background-image: url('/asset/img/illustrasi/footer_login.png');background-size: 104rem;background-position-y: 101%; height: 99vh">
	<div class="container w30">

		<div class="card noutlined">
			<div class="card-content">
				
				<div class="row nm valign-wrapper">
					<div class="col s1 valign">
						<a href="{{route('login')}}" class="matter-button-circle"><i class="material-icons">arrow_back</i></a>
					</div>
					<div class="col s11">
						<div class="right-align">
							<a href="/">
								<img class="ptb1" src="{{asset('asset/img/logo/asset_erlogo_blue.png')}}" width="130px">
							</a>
						</div>
					</div>
				</div>

				<div class="divider mb2"></div>

				<div class="row">
					<div class="col s12">
						<a href="{{route('register.siswa')}}">
							<div class="card panel outlined hoverable-shadow-nb waves-effect" style="display: block">
								<div class="row nm">
									<div class="col s6"></div>
									<div class="col s6">
										<h5 class="primary-text semibold nm mb08">Siswa</h5>
										<p class="dark-text">Daftar sebagai siswa</p>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col s12">
						<a href="{{route('register.sekolah')}}">
							<div class="card panel outlined hoverable-shadow-nb waves-effect" style="display: block">
								<div class="row nm">
									<div class="col s6"></div>
									<div class="col s6">
										<h5 class="primary-text semibold nm mb08">Sekolah</h5>
										<p class="dark-text">Daftar sebagai siswa</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
				
				<div class="center">
					<div class="divider mt2 mb3"></div>
					&copy; Copyright 2020 <a class="primary-text" href="/">EduRoom</a>
				</div>
			</div>
		</div>

	</div>
</section>
@endsection

@section('js-plus')
@endsection