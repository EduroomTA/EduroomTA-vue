{{-- MODAL DASHBAORD --}}

{{-- DELETE --}}
<div id="modal-delete-penilaian" class="modal modal-small">
	<div class="modal-content">
		<h6 class="bold">Hapus Penilaian</h6>
		<p>Anda akan menghapus Penilaian ...</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Hapus</a>
	</div>
</div>

{{-- EDIT --}}
<div id="modal-edit-penilaian" class="modal modal-small initial">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>Edit Penilaian</h5>
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

		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
			<button type="submit" class="matter-button-text primary-text">Terbitkan</button>
		</div>
	</form>
</div>