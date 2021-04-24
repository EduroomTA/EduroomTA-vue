{{-- MODAL SETTING AKUN --}}

<div id="modal-edit" class="modal modal-small">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h6>Setting Akun</h6>
			</div>

			<div id="row_foto" class="row hide">
				<div class="col s12">
					<div class="mb2 img-bullet" style="width: 60px; height: 60px; margin: auto">
						<img src="https://ui-avatars.com/api/?background=0D8ABC&amp;color=fff&amp;name=Bima+Susila">
					</div>

					<input id="filepond-edit" type="file" 
					class="filepond"
					name="foto"
					data-max-file-size="3MB"/>
				</div>
			</div>
			<div id="row_nama" class="row hide">
				<div class="col s12">
					<label id="nama" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama" />
						<span>Nama Lengkap</span>
					</label>
				</div>
			</div>
			<div id="row_nip" class="row hide">
				<div class="col s12">
					<label id="nip" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nip" />
						<span>NIP</span>
					</label>
				</div>
			</div>
			<div id="row_username" class="row hide">
				<div class="col s12">
					<label id="username" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="username" />
						<span>Username</span>
					</label>
				</div>
			</div>
			<div id="row_password" class="row hide">
				<div class="col s12">
					<label id="password" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="password" />
						<span>Password</span>
					</label>
				</div>
			</div>
			<div id="row_kelamin" class="row hide">
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
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close matter-button-text danger-text">Cancel</a>
			<button type="submit" class="matter-button-text">Simpan</button>
		</div>
	</form>
</div>
