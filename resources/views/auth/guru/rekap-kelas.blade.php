@extends('auth.app')

@section('title')
Rekap | Nama Kelas | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header row mb0">
		<div class="col s12 m12 l5">
			<div class="title">
				<h5 class="primary-text">Rekap</h5>
				<h6 class="normal">KD1 <i class="material-icons line-icon-p">stop_circle</i> nama bab</h6>
			</div>
		</div>
		<div class="col s12 m12 l7">
			<div class="component right-align-res">
				<div class="ptb05">
					<button class="matter-button-text button-icon dropdown-trigger drop mtb05 primary-text" href="#!" data-target="dropdown-rekap-nilai">
						<i class="material-icons left dark8-text">save_alt</i>Rekap
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container row tab-menu-page">
	<div class="col s12">
		<ul class="tabs indicatorv2 inline">
			<li class="tab col s6"><a class="active" href="#single-test1">Pengetahuan</a></li>
			<li class="tab col s6"><a href="#single-test2">Keterampilan</a></li>
		</ul>
	</div>
</section>

<section class="container mb3">
	<div id="single-test1">
		<div class="table-scroll-x sticky-left mt3 mb6">
			<table class="striped border" style="width: max-content">
				<thead>
					<tr>
						<th></th>
						<th style="border: 1px solid var(--color-dark2)">Ulangan</th>
						<th style="border: 1px solid var(--color-dark2)">Tugas</th>
						<th style="border: 1px solid var(--color-dark2)">Ulangan</th>
						<th style="border: 1px solid var(--color-dark2)">Tugas</th>
						<th style="border: 1px solid var(--color-dark2)">Ulangan</th>
						<th style="border: 1px solid var(--color-dark2)">Tugas</th>
						<th style="border: 1px solid var(--color-dark2)">Ulangan</th>
						<th style="border: 1px solid var(--color-dark2)">Tugas</th>
						<th style="border: 1px solid var(--color-dark2)">Ulangan</th>
						<th style="border: 1px solid var(--color-dark2)">Tugas</th>
						<th class="success-smoth2" style="border: 1px solid var(--color-dark2)">Nilai KD</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td class="nb">
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center success-smoth2">100</td>
					</tr>
					<tr>
						<td class="nb">
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center success-smoth2">100</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
	<div id="single-test2">
		<div class="table-scroll-x sticky-left mt3 mb6">
			<table class="striped border" style="width: max-content">
				<thead>
					<tr>
						<th></th>

						<th style="border: 1px solid var(--color-dark2)">Proses</th>
						<th style="border: 1px solid var(--color-dark2)">Proyek</th>
						<th style="border: 1px solid var(--color-dark2)">Produ</th>
						<th style="border: 1px solid var(--color-dark2)">Portofolio</th>

						<th class="success-smoth2" style="border: 1px solid var(--color-dark2)">Nilai KD</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td class="nb">
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>

						<td class="center success-smoth2">100</td>
					</tr>
					<tr>
						<td class="nb">
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>
						<td class="center">100</td>

						<td class="center success-smoth2">100</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</section>

<ul id="dropdown-rekap-nilai" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>
@endsection

@section('js-plus')
@endsection