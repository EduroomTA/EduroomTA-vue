{{-- MODAL DASHBAORD --}}

{{-- DELETE --}}
<div id="modal-delete-komponen-penilaian" class="modal modal-small">
	<div class="modal-content">
		<h6 class="bold">Hapus Komponen Penilaian</h6>
		<p>Anda akan menghapus Komponen Penilaian ...</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Hapus</a>
	</div>
</div>

{{-- EDIT --}}
<div id="modal-edit-komponen-penilaian" class="modal modal-small initial">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>Edit Komponen Penilaian</h5>
			</div>
			
			<div class="row">
				<div class="col s12">
					<label id="penilaian" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama_komponen_penilaian" />
						<span>Komponen Penilaian</span>
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

{{-- ADD --}}
<div id="modal-add-komponen-penilaian-pengetahuan" class="modal modal-small initial">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>Tambah Komponen Penilaian</h5>
				<h6 class="primary-text">Pengetahuan</h6>
			</div>
			
			<div class="row">
				<div class="col s12">
					<label id="penilaian" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama_komponen_penilaian" />
						<span>Komponen Penilaian</span>
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

{{-- ADD --}}
<div id="modal-add-komponen-penilaian-keterampilan" class="modal modal-small initial">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>Tambah Komponen Penilaian</h5>
				<h6 class="primary-text">Keterampilan</h6>
			</div>
			
			<div class="row">
				<div class="col s12">
					<label id="penilaian" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama_komponen_penilaian" />
						<span>Komponen Penilaian</span>
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