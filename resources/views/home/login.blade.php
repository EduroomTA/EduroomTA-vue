@extends('home.app')

@section('title')
Login | EduRoom
@endsection

@section('content')
<section class="section-img section-hide-small" style="background-image: url('/asset/img/illustrasi/footer_login.png');background-size: 104rem;background-position-y: 101%; height: 99vh">
	<div class="container w30">

		<div class="card noutlined">
			<div class="card-content">
				<div class="center">
					<a href="/">
						<img src="{{asset('asset/img/logo/asset_erlogo_blue.png')}}" width="130px" style="padding: 40px 0">
					</a>
					<div class="divider mb2"></div>
				</div>

				<form action="{{route('postlogin')}}" method="post">
					@csrf
					<div class="row">
						<div class="col s12">
							<label id="xmas" class="matter-textfield-outlined" style="width: 100%">
								<input type="text" placeholder=" " name="username" />
								<span>Username</span>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<label id="xmas" class="matter-textfield-outlined" style="width: 100%">
								<input type="password" placeholder=" " name="password" />
								<span>Password</span>
							</label>
						</div>

						<div class="col s12">
							<a href="#!" class="matter-button-text mtb1">Lupa Username atau Password ?</a>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<button type="submit" class="btn-full btn-ns matter-button-contained">Login</button>
						</div>
					</div>
					<div class="row">
						<div class="col s12">
							<a href="{{route('register')}}" class="btn-full matter-button-outlined">Register</a>
						</div>
					</div>
				</form>

				
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