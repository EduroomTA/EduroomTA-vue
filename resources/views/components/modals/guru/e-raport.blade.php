{{-- MODAL E-RAPORT --}}

{{-- ADD EKSTRAKURIKULER --}}
<div id="modal-add-ekstra" class="modal modal-small initial">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb2">
				<div class="badge-ed img-text p1">
					<div class="img">
						<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
					</div>
					<div class="text">
						<h6 class="semibold">Nama Siswa</h6>
						<p>1202170035</p>
					</div>
				</div>
				<div class="divider"></div>
			</div>

			<div class="row nm">
				<div class="col s12">
					<p class="dark8-text semibold labeling">Tambah Ekstrakurikuler</p>
					<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
						<select class="validate select-search" searchable='List of options' required="true" aria-required="true" name="tahun_ajaran">
							<option value="" disabled selected>Pilih Tahun Ajaran</option>
							<option value="1">Pramuka</option>
							<option value="2">Sepak Bola</option>
							<option value="2">Bola Voli</option>
						</select>
						<span></span>
					</label>
				</div>
			</div>

		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
			<button type="submit" class="matter-button-text primary-text">Terbitkan</button>
		</div>
	</form>
</div>

{{-- Nilai --}}
<div id="modal-view-nilai" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<div class="badge-ed img-text p1">
				<div class="img">
					<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
				</div>
				<div class="text">
					<h6 class="semibold">Nama Siswa</h6>
					<p>1202170035</p>
				</div>
			</div>
		</div>
		<div class="col s1 right-align">
			<button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
		</div>
	</div>

	<div class="modal-content">

		<section class="container row tab-menu-page">
			<div class="col s12">
				<ul class="tabs indicatorv2 inline">
					<li id="link-pengetahuan" class="tab col s6"><a href="#page-pengetahuan">Pengetahuan</a></li>
					<li id="link-keterampilan" class="tab col s6"><a href="#page-keterampilan">Keterampilan</a></li>
				</ul>
			</div>
		</section>

		<section id="page-pengetahuan" class="container mb3">
			<div class="animated fadeIn">
				<div class="table-scroll-x sticky-left mt3 mb6">
					<table id="table-pengetahuan" class="border">

						<thead>
							<tr class="white">
								<th class="white center" style="width: 340px !important; z-index: 2" rowspan="2">
									<div>Matpel</div>
								</th>
								<th class="center">Nilai</th>
								<th class="center">Predikat</th>
								<th class="center">Deskripsi</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
							<tr>
								<td>
									Bahasa Indonesia
								</td>
								<td class="center">
									100
								</td>
								<td class="center">
									A
								</td>
								<td>
									Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
								</td>
							</tr>
						</tbody>

					</table>
				</div>
			</div>
		</section>

		<section id="page-keterampilan" class="container mb3">
		</section>
	</div>
</div>