@extends('auth.app')

@section('title')
Admin Sekolah | EduRoom
@endsection

@section('content')

{{-- <section id="notif-trial" class="container mtb2">
	<div class="card primary">
		<div class="card-header row nm">
			<div class="title col s10">
			</div>
			<div class="col s2 right-align">
				<a id="btn-notif-trial" class="matter-button-circle white-text" href='#!'><i class="material-icons">close</i></a>
			</div>
		</div>
		<div class="row">
			<div class="col s12 m12 l4"></div>
			<div class="col s12 m12 l8">
				<div class="pb2">
					<h5 class="white-text">Hello Nama, selamat datang di Eduroom!</h5>
					<h6 class="white-text">Saat ini anda sedang menikmati layanan <span class="bold">Trial</span> EduRoom.</h6>
					<a class="matter-button-outlined white-text white-border mt1" href="{{route('paket')}}">Upgrade Paket Layanan</a>
				</div>
			</div>
		</div>
	</div>
</section> --}}

{{-- IF TIDAK ADA SEKOLAH --}}
{{-- <section class="container">
	<div class="center mtb5">
		<div class="mb2">
			<img class="mb3" src="{{asset('asset/img/illustrasi/no-kelas.png')}}" height="200px">
			<h6 class="semibold">Tidak ada Sekolah di sini!</h6>
			<p>
				Halo Nama Admin!, anda tidak memiliki sekolah saat ini, <br>silahkan masukkan Sekolah anda untuk memulai Fitur EduRoom sekarang!
			</p>
		</div>
		<a class="matter-button-contained modal-trigger" href="#modal-add-sekolah">Tambahkan Sekolah</a>
	</div>
</section> --}}

{{-- IF ADA SEKOLAH --}}
<section class="container">
	<div class="header row nm">
		<div class="col s12">
			<div class="badge-ed img-text-center big">
				<div class="img">
					<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
				</div>
				<div class="text">
					<h6 class="semibold">Nama Sekolah</h6>
					<p>No pelanggan</p>
				</div>
			</div>
		</div>
	</div>
</section>

@include('components.modals.admin-sekolah.dashboard')

@endsection