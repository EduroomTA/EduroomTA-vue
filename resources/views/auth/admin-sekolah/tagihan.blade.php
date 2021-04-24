@extends('auth.app')

@section('title')
Tagihan | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header single-text row nm">
		<div class="col s12 m12 l8 row nm">
			<div class="col s12 m1 l1">
				<div class="center-content">
					<i class="material-icons icon">account_balance_wallet</i>
				</div>
			</div>
			<div class="col s12 m11 l11">
				<div class="title">
					<h5 class="semibold">Tagihan</h5>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l4">

			<div class="search">
				<label id="search" class="matter-textfield-outlined icon-input left-icon no-span" style="width: 100%">
					<input id="search-input" type="text" placeholder="Search...">
					<span></span>
					<i class="material-icons">search</i>
				</label>
			</div>


		</div>
	</div>
</section>

<section class="container">
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
					<a class="matter-button-outlined white-text white-border mt1" href="{{route('paket')}}">Order Paket Lainnya</a>
				</div>
			</div>
		</div>
	</div>
	
	<table>
		<thead>
			<tr>
				<th>Paket</th>
				<th>Status</th>
				<th>Batas Waktu Aktif</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<div class="semibold">Free</div>
				</td>
				<td>
					<div class="semibold success-text">Aktif</div>
				</td>
				<td>
					<div>13:00, 12 Juni 2020</div>
				</td>
				<td class="right-align">
					<button class="matter-button-outlined">Detail</button>
				</td>
			</tr>
		</tbody>
	</table>
</section>
@endsection