{{-- MODAL ADD --}}

{{-- ADD SEKOLAH --}}
<div id="modal-add-sekolah" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Tambah Sekolah Baru</h5>
		</div>
		<div class="col s1 right-align">
			<button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
		</div>
	</div>

	<div class="modal-content">
		<div class="container">
			
			<form action="" method="">
				@csrf
				<div class="row">
					<div class="col s12 m12 l6">
						<label id="nama_sekolah" class="matter-textfield-filled" style="width: 100%">
							<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama_sekolah" />
							<span>Nama Sekolah</span>
						</label>
					</div>
					<div class="col s12 m12 l6">
						<label id="npsn" class="matter-textfield-filled" style="width: 100%">
							<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="npsn" />
							<span>NPSN</span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m12 l6">
						<label id="jenjang" class="matter-textfield-filled" style="width: 100%">
							<select name="jenjang" required="" aria-required="true">
								<option value="" disabled selected>Jenjang</option>
								<option value="sd">SD</option>
								<option value="smp">SMP</option>
								<option value="sma">SMA</option>
							</select>
							<span>Jenjang</span>
						</label>
					</div>
					<div class="col s12 m12 l6">
						<label id="status" class="matter-textfield-filled" style="width: 100%">
							<select name="status" required="" aria-required="true">
								<option value="" disabled selected>Status</option>
								<option value="negeri">Negeri</option>
								<option value="swasta">Swasta</option>
							</select>
							<span>Status</span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m12 l4">
						<label id="provinsi" class="matter-textfield-filled" style="width: 100%">
							<select name="provinsi" required="" aria-required="true">
								<option value="" disabled selected>Status</option>
								<option value="negeri">Negeri</option>
								<option value="swasta">Swasta</option>
							</select>
							<span>Provinsi</span>
						</label>
					</div>
					<div class="col s12 m12 l4">
						<label id="kabupaten" class="matter-textfield-filled" style="width: 100%">
							<select name="kabupaten" required="" aria-required="true">
								<option value="" disabled selected>Status</option>
								<option value="negeri">Negeri</option>
								<option value="swasta">Swasta</option>
							</select>
							<span>Kabpupaten</span>
						</label>
					</div>
					<div class="col s12 m12 l4">
						<label id="kecamatan" class="matter-textfield-filled" style="width: 100%">
							<select name="kecamatan" required="" aria-required="true">
								<option value="" disabled selected>Status</option>
								<option value="negeri">Negeri</option>
								<option value="swasta">Swasta</option>
							</select>
							<span>Kecamatan</span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m12 l12">
						<label id="jalan" class="matter-textfield-filled" style="width: 100%">
							<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="jalan" />
							<span>Jalan</span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 right-align">
						<button type="submit" class="matter-button-contained">Publikasi</button>
					</div>
				</div>
			</form>

		</div>
	</div>
</div>

{{-- ADD KELAS --}}
<div id="modal-add-kelas" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Tambah Kelas Baru</h5>
		</div>
		<div class="col s1 right-align">
			<button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
		</div>
	</div>

	<div class="modal-content">
		<div class="container w40">
			<form action="" method="POST">
				@csrf
				<div class="row">
					<div class="col s12">
						<label id="nama_kelas" class="matter-textfield-filled" style="width: 100%">
							<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama_kelas" />
							<span>Nama Kelas</span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<p class="dark8-text semibold labeling">Guru Wali</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select-search icons" searchable='List of options' required="" aria-required="true" name="id_guru">
								<option value="" disabled selected>Guru Wali</option>
								<option value="" data-icon="https://materializecss.com/images/sample-1.jpg">Nama Guru</option>
								<option value="" data-icon="https://materializecss.com/images/office.jpg">Nama Guru</option>
								<option value="" data-icon="https://materializecss.com/images/yuna.jpg">Nama Guru</option>
							</select>
							<span></span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<p class="dark8-text semibold labeling">Tahun Ajaran</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="validate select-search" searchable='List of options' required="true" aria-required="true" name="tahun_ajaran">
								<option value="" disabled selected>Pilih Tahun Ajaran</option>
								<option value="1">2020/2021</option>
								<option value="2">2021/2022</option>
							</select>
							<span></span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 right-align">
						<button type="submit" class="matter-button-contained">Terbitkan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

{{-- ADD GURU --}}
<div id="modal-add-guru" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Tambah Guru Baru</h5>
		</div>
		<div class="col s1 right-align">
			<button class="matter-button-circle modal-close"><i class="material-icons">close</i></button>
		</div>
	</div>

	<div class="modal-content">
		<div class="container w40">
			<form action="" method="POST">
				@csrf
				<div class="row">
					<div class="col s12">
						<label id="nama" class="matter-textfield-filled" style="width: 100%">
							<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama" />
							<span>Nama Lengkap</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<label id="nip" class="matter-textfield-filled" style="width: 100%">
							<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nip" />
							<span>NIP</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<label id="username" class="matter-textfield-filled" style="width: 100%">
							<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="username" />
							<span>Username</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<label id="password" class="matter-textfield-filled" style="width: 100%">
							<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="password" />
							<span>Password</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<label id="select_standared" class="matter-textfield-filled" style="width: 100%">
							<select required="" aria-required="true" name="kelamin">
								<option value="" disabled selected>Pilih Jenis Kelamin</option>
								<option value="laki-laki">Laki-laki</option>
								<option value="perempuan">Perempuan</option>
							</select>
							<span>Jenis Kelamin</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12 right-align">
						<button type="submit" class="matter-button-contained">Terbitkan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

{{-- ADD PENILAIAN --}}
<div id="modal-add-penilaian" class="modal modal-small initial">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>Tambah Penilaian Baru</h5>
			</div>

			<div class="row">
				<div class="col s12">
					<label class="matter-radio">
						<input type="radio" name="nama_penilaian">
						<span>Akademik</span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col s12">
					<label class="matter-radio">
						<input type="radio" name="nama_penilaian">
						<span>Non Akademik</span>
					</label>
				</div>
			</div>
			<div class="row mt3">
				<div class="col s12">
					<p class="dark8-text semibold labeling">Tahun Ajaran</p>
					<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
						<select class="validate select-search" searchable='List of options' required="true" aria-required="true" name="tahun_ajaran">
							<option value="" disabled selected>Pilih Tahun Ajaran</option>
							<option value="1">2020/2021</option>
							<option value="2">2021/2022</option>
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

{{-- ADD MAPEL --}}
<div id="modal-add-mapel" class="modal modal-small initial">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>Tambah Mapel Baru</h5>
			</div>

			<div class="row">
				<div class="col s12">
					<label id="penilaian" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="mapel" />
						<span>Nama Mapel</span>
					</label>
				</div>
			</div>
			<div class="row mt3">
				<div class="col s12">
					<p class="dark8-text semibold labeling">Tahun Ajaran</p>
					<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
						<select class="validate select-search" searchable='List of options' required="true" aria-required="true" name="tahun_ajaran">
							<option value="" disabled selected>Pilih Tahun Ajaran</option>
							<option value="1">2020/2021</option>
							<option value="2">2021/2022</option>
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

{{-- ADD TAHUN AJARAN --}}
<div id="modal-add-tahunajaran" class="modal modal-small">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>Tambah Tahun Ajaran</h5>
			</div>
			<div class="row">
				<div class="col s5 p0">
					<label id="penilaian" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="number" placeholder=" " required="" aria-required="true" name="tahun_ajaran1" />
						<span>Tahun Ajaran</span>
					</label>
				</div>
				<div class="col s2">
					<div class="dark2-text" style="margin: 1.2rem 1rem;font-size: 1.8rem;position: absolute;" >/</div>
				</div>
				<div class="col s5 p0">
					<label id="penilaian" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="number" placeholder=" " required="" aria-required="true" name="tahun_ajaran2" />
						<span>Tahun Ajaran</span>
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

{{-- ADD UJIAN --}}
<div id="modal-add-ujian" class="modal modal-small initial">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>Tambah Ujian Baru</h5>
			</div>
			<div class="row">
				<div class="col s12">
					<label id="penilaian" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="ujian" />
						<span>Nama Ujian</span>
					</label>
				</div>
			</div>
			<div class="row mt3">
				<div class="col s12">
					<p class="dark8-text semibold labeling">Tahun Ajaran</p>
					<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
						<select class="validate select-search" searchable='List of options' required="true" aria-required="true" name="tahun_ajaran">
							<option value="" disabled selected>Pilih Tahun Ajaran</option>
							<option value="1">2020/2021</option>
							<option value="2">2021/2022</option>
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