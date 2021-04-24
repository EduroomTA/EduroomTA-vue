{{-- MODAL DASHBAORD --}}

{{-- DELETE --}}
<div id="modal-delete" class="modal modal-small">
	<div class="modal-content">
		<h6 class="bold">Hapus Tahun Ajaran</h6>
		<p>Anda akan menghapus Tahun Ajaran ...</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Hapus</a>
	</div>
</div>

{{-- AKTIF / TIDAK AKTIF --}}
<div id="modal-aktifnonaktif" class="modal modal-small">
	<div class="modal-content">
		<h5>Aktifkan Tahun Ajaran</h5>
		<p>Anda akan mengaktifkan Tahun Ajaran ...</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Aktifkan</a>
	</div>
</div>

{{-- EDIT --}}
<div id="modal-edit" class="modal modal-small">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>Edit Tahun Ajaran</h5>
			</div>
			<div class="row">
				<div class="col s12">
					<label id="penilaian" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="tahun_ajaran" />
						<span>Tahun Ajaran</span>
					</label>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
			<button type="submit" class="matter-button-text primary-text">Simpan</button>
		</div>
	</form>
</div>