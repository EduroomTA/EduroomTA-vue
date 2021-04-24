@extends('auth.app')

@section('title')
Mapel | Admin Sekolah | EduRoom
@endsection

@section('content')
<form action="" method="POST">
	@csrf
	<section class="container w60">
		<div class="header-detail-2">
			<div class="title">
				<div class="row">
					<div class="col s12 m12 l8">
						<div class="left-align-res">
							<h5 class="normal primary-text nm">Pendidikan Pancasila dan Kewarganegaraan<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h5>
						</div>
					</div>
					<div class="col s12 m12 l4 right-align-res">
						<button class="matter-button-outlined">
							Simpan
						</button>
					</div>
				</div>
				<div class="divider primary"></div>
			</div>
		</div>
	</section>

	<section class="container w60 mtb1">
		<div class="row nm">
			<div class="col s12 m12 l3">
				<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%; border: 0">
					<select class="select-search" searchable='List of options'>
						<option value="" selected>Semua Kelas</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
					</select>
					<span></span>
				</label>
			</div>
			<div class="col s12 m12 l9">

			</div>
		</div>
	</section>

	<section class="container w60 mb5">
		<table>
			<thead>
				<tr>
					<th>Kelas</th>
					<th style="width: 32rem">Guru Mapel</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="semibold">8A</div>
					</td>
					<td>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select-search icons" searchable='List of options' required="" aria-required="true" name="id_guru">
								<option value="" disabled selected></option>
								<option value="" data-icon="https://materializecss.com/images/sample-1.jpg">Nama Guru 1</option>
								<option value="" data-icon="https://materializecss.com/images/office.jpg">Nama Guru 2</option>
								<option value="" data-icon="https://materializecss.com/images/yuna.jpg">Nama Guru 3</option>
							</select>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>
						<div class="semibold">8B</div>
					</td>
					<td>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select-search icons" searchable='List of options' required="" aria-required="true" name="id_guru">
								<option value="" disabled selected></option>
								<option value="" data-icon="https://materializecss.com/images/sample-1.jpg">Nama Guru 1</option>
								<option value="" data-icon="https://materializecss.com/images/office.jpg">Nama Guru 2</option>
								<option value="" data-icon="https://materializecss.com/images/yuna.jpg">Nama Guru 3</option>
							</select>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>
						<div class="semibold">8C</div>
					</td>
					<td>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select-search icons" searchable='List of options' required="" aria-required="true" name="id_guru">
								<option value="" disabled selected></option>
								<option value="" data-icon="https://materializecss.com/images/sample-1.jpg">Nama Guru 1</option>
								<option value="" data-icon="https://materializecss.com/images/office.jpg">Nama Guru 2</option>
								<option value="" data-icon="https://materializecss.com/images/yuna.jpg">Nama Guru 3</option>
							</select>
							<span></span>
						</label>
					</td>
				</tr>
			</tbody>
		</table>
	</section>
</form>
@endsection