{{-- MODAL DASHBAORD --}}

{{-- DELETE --}}
<div id="modal-delete-siswa" class="modal modal-small">
	<div class="modal-content">
		<h6 class="bold">Hapus Siswa</h6>
		<p>Anda akan menghapus Siswa ...</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Hapus</a>
	</div>
</div>

{{-- EDIT --}}
<div id="modal-edit-siswa" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Edit Siswa</h5>
			<p>Nama Siswa</p>
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
			</form>
		</div>
	</div>
</div>