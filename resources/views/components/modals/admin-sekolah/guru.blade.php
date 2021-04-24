{{-- MODAL DASHBAORD --}}

{{-- DELETE --}}
<div id="modal-delete-guru" class="modal modal-small">
	<div class="modal-content">
		<h6 class="bold">Hapus Guru</h6>
		<p>Anda akan menghapus Guru ...</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Hapus</a>
	</div>
</div>

{{-- EDIT --}}
<div id="modal-edit-guru" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Edit Guru</h5>
			<p>Nama Guru</p>
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
						<button type="submit" class="matter-button-contained">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>