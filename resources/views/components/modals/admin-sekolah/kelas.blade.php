{{-- MODAL KELAS --}}

{{-- DELETE --}}
<div id="modal-delete-kelas" class="modal modal-small">
	<div class="modal-content">
		<h6 class="bold">Hapus Kelas</h6>
		<p>Anda akan menghapus Kelas ...</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Hapus</a>
	</div>
</div>

{{-- EDIT --}}
<div id="modal-edit-kelas" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Edit Kelas</h5>
			<p>Nama Kelas</p>
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
						<label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="validate" required="true" aria-required="true" name="tahun_ajaran">
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
						<button type="submit" class="matter-button-contained">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>