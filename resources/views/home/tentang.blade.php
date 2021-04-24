@extends('home.app')

@section('title')
Tentang | EduRoom
@endsection

@section('content')
<section>
	<div class="container w60 mtb5">
		<div class="row">
			<div class="col s12 center">
				<div class="header-page-home mb3">
					<div class="text">
						<h4>Tentang <span class="bold primary-text">EduRoom</span></h4>
					</div>
				</div>
				<h6 style="line-height: 160%">
					EduRoom adalah sebuah startup yang bergerak di bidang pendidikan dengan menyediakan ruang belajar untuk para siswa dan guru berbasis IT yang membangun Sistem Informasi sekolah, agar proses belajar mengajar di sekolah berjalan dengan efektif dan efisien.
				</h6>
			</div>
			<div class="col s12">
				<div class="mtb6">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/hTGkh5_mxPY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin: auto; display: block;"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-img section-hide-small" style="background-image: url('/asset/img/illustrasi/about_3.png');background-size: 102rem;height: 33rem;">
	<div class="container mt4">
		<div class="content">
			<div class="row">
				<div class="col s12 m12 l6">
				</div>
				<div class="col s12 m12 l5 offset-s0 offset-m0 offset-l1">
					<div class="header-page-home nm mb3">
						<div class="text">
							<h4>Kenapa <span class="bold primary-text">EduRoom</span> ?</h4>
						</div>
					</div>
					<h6 class="mb2" style="line-height: 160%">
						EduRoom mendukung sekolah untuk menyediakan layanan proses belajar mengajar yang terekam dengan IT dan mempermudah perekapan data siswa seperti nilai dan diskusi untuk menghasilkan sebuah laporan peniliaan tanpa harus merekap ulang.
					</h6>
					<h6 class="mb2" style="line-height: 160%">
						Dengan layanan tersebut kami berkomitmen untuk membantu membangun Sekolah yang memiliki Sistem Informasi pembelajaran dan dokumentasi penilian yang berbasis IT dengan membuat sistem yang efektif dan efisien untuk sekolah.
					</h6>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-landing dark6">
	<div class="container">

		<div class="header-page-home mb4">
			<div class="text">
				<h4><span class="bold primary-text">Tim</span> Kami</h4>
			</div>
		</div>

		<div class="content">
			<div class="row">
				<div class="col s12 m12 l4 mb4">
					<div id="card-img1" class="tim-card">
						<div class="image">
							<img id="img-1" src="{{asset('asset/img/team/fotoan_1.jpg')}}">
						</div>
						<div class="text">
							<h6 class="bold primary-text">Anggit Mochammad G S</h6>
							<p class="large">Business Analyst</p>
						</div>
					</div>
				</div>

				<div class="col s12 m12 l4 mb4">
					<div id="card-img2" class="tim-card">
						<div class="image">
							<img id="img-2" src="{{asset('asset/img/team/fotobi_1.jpg')}}">
						</div>
						<div class="text">
							<h6 class="bold primary-text">Bima Susila</h6>
							<p class="large">Back-End Developer</p>
						</div>
					</div>
				</div>

				<div class="col s12 m12 l4 mb4">
					<div id="card-img3" class="tim-card">
						<div class="image">
							<img id="img-3" src="{{asset('asset/img/team/fotoiv_1.jpg')}}">
						</div>
						<div class="text">
							<h6 class="bold primary-text">Ivan Priyambudi</h6>
							<p class="large">Front-End Developer</p>
						</div>
					</div>
				</div>

				<div class="col s12 m12 l4 mb4">
					<div id="card-img4" class="tim-card">
						<div class="image">
							<img id="img-4" src="{{asset('asset/img/team/fotoiz_1.jpg')}}">
						</div>
						<div class="text">
							<h6 class="bold primary-text">Izha Mahendra</h6>
							<p class="large">Mobile Developer</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('js-plus')
<script type="text/javascript">
	$(document).ready(function(){
		$("#card-img1").mouseover(function(){
			$("#img-1").attr("src","{{asset('asset/img/team/fotoan.jpg')}}");
		}).mouseout(function(){
			$("#img-1").attr("src","{{asset('asset/img/team/fotoan_1.jpg')}}");
		});
	});

	$(document).ready(function(){
		$("#card-img2").mouseover(function(){
			$("#img-2").attr("src","{{asset('asset/img/team/fotobi.jpg')}}");
		}).mouseout(function(){
			$("#img-2").attr("src","{{asset('asset/img/team/fotobi_1.jpg')}}");
		});
	});

	$(document).ready(function(){
		$("#card-img3").mouseover(function(){
			$("#img-3").attr("src","{{asset('asset/img/team/fotoiv.jpg')}}");
		}).mouseout(function(){
			$("#img-3").attr("src","{{asset('asset/img/team/fotoiv_1.jpg')}}");
		});
	});

	$(document).ready(function(){
		$("#card-img4").mouseover(function(){
			$("#img-4").attr("src","{{asset('asset/img/team/fotoiz.jpg')}}");
		}).mouseout(function(){
			$("#img-4").attr("src","{{asset('asset/img/team/fotoiz_1.jpg')}}");
		});
	});
</script>
@endsection