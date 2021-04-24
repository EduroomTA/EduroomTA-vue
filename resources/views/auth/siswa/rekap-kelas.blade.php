@extends('auth.app')

@section('title')
Rekap | Nama Kelas | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header row">
		<div class="col s12 m12 l5">
			<div class="title">
				<h5 class="primary-text">Rekap</h5>
				<h6 class="normal dark-text">8C <i class="material-icons line-icon-p">stop_circle</i> Pendidikan Pancasila dan Kewarganegaraan</h6>
			</div>
		</div>
		<div class="col s12 m12 l7">
		</div>
	</div>
</section>

<section class="container w60">
	<div class="row mb3">
		<div class="col s6 m3 l3">
			<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%;">
				<select>
					<option value="" disabled selected>Penilaian</option>
					<option value="1">UTS</option>
					<option value="2">UAS</option>
					<option value="3">Ulangan</option>
				</select>
				<span></span>
			</label>
		</div>
		<div class="col s12 m7 l7 hide-on-small-only"></div>
		<div class="col s6 m2 l2 right-align-res">
			<button class="matter-button-text button-icon dropdown-trigger drop mtb05 primary-text" href="#!" data-target="dropdown-rekap-nilai">
				<i class="material-icons left dark8-text">save_alt</i>Rekap
			</button>
		</div>
	</div>

	<table>
		<thead>
			<tr>
				<th>Judul</th>
				<th>Penilaian</th>
				<th class="center">Nilai</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>Alvin</td>
				<td>Alvin</td>
				<td class="center">80</td>
			</tr>
			<tr>
				<td>Alvin</td>
				<td>Alan</td>
				<td class="center">100</td>
			</tr>
			<tr>
				<td>Alvin</td>
				<td>Jonathan</td>
				<td class="center">50</td>
			</tr>
		</tbody>
	</table>
</section>

<ul id="dropdown-rekap-nilai" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>
@endsection