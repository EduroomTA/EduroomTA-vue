@extends('home.app')

@section('title')
Kontak Kami | EduRoom
@endsection

@section('content')
<section>
	<div class="container w60 mtb5">
		<div class="row">
			<div class="col s12 center">
				<div class="header-page-home mb3">
					<div class="text">
						<h4>Kontak <span class="bold primary-text">EduRoom</span></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-landing-first">
	<div class="container w90">
		<div class="content">
			<div class="row">

				<div class="col s12 m12 l6">
					<form action="" method="">
						@csrf
						<div class="row">
							<div class="col s12 m12 l6">
								<label class="matter-textfield-outlined" style="width: 100%">
									<input class="validate" type="text" placeholder=" " name="nama" />
									<span>Nama</span>
								</label>
							</div>
							<div class="col s12 m12 l6">
								<label class="matter-textfield-outlined" style="width: 100%;">
									<input class="validate" type="email" placeholder=" " name="email" />
									<span>Email</span>
								</label>
							</div>
						</div>

						<div class="row">
							<div class="col s12">
								<label id="xmas" class="matter-textfield-outlined" style="width: 100%">
									<input type="text" placeholder=" " name="subjek" />
									<span>Subjek</span>
								</label>
							</div>
						</div>

						<div class="row">
							<div class="col s12">
								<label id="ta-normal" class="matter-textfield-outlined" style="width: 100%; height: 200px">
									<textarea placeholder=" " name="pesan"></textarea>
									<span>Pesan</span>
								</label>
							</div>
						</div>

						<div class="row">
							<div class="col 12 m12 l4"></div>
							<div class="col s12 m12 l4">
								<button type="submit" class="matter-button-contained btn-full matter-large">Kirim</button>
							</div>
							<div class="col 12 m12 l4"></div>
						</div>
					</form>
				</div>

				<div class="col s12 m12 l2"></div>

				<div class="col s12 m12 l3 offset-s0 offset-m0 offset-l1">
					<div class="widget-item">
						<div class="header-page-home left-content">
							<div class="text">
								<h5>Layanan Pelanggan</h5>
							</div>
							<div class="border"></div>
						</div>
						<ul class="mb3">
							<li>
								<p class="normal line-icon-text">
									<i class="material-icons dark-text line-icon-p" style="font-size: 20px">call</i>085-855-696-975
								</p>
							</li>
							<li>
								<p class="normal line-icon-text">
									<i class="material-icons dark-text line-icon-p" style="font-size: 20px">email</i>service@eduroom.com
								</p>
							</li>
							<li>
								<p class="normal line-icon-text">
									<i class="material-icons dark-text line-icon-p" style="font-size: 20px">query_builder</i>Setiap Hari (06:00-24:00)
								</p>
							</li>
						</ul>
					</div>

					<div class="widget-item">
						<div class="header-page-home left-content">
							<div class="text">
								<h5>Ikuti Kami</h5>
							</div>
							<div class="border"></div>
						</div>
						<ul class="horizontal">
							<li>
								<a href="#!" class="matter-button-circle primary-text"><i class="material-icons fab fa-instagram"></i></a>
							</li>
							<li>
								<a href="#!" class="matter-button-circle primary-text"><i class="material-icons fab fa-facebook-square"></i></a>
							</li>
							<li>
								<a href="#!" class="matter-button-circle primary-text"><i class="material-icons fab fa-twitter-square"></i></a>
							</li>
							<li>
								<a href="#!" class="matter-button-circle primary-text"><i class="material-icons fab fa-youtube"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection