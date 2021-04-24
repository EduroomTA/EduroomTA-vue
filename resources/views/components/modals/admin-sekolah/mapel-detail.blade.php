{{-- MODAL DASHBAORD --}}

{{-- ADD MAPEL KE KELAS --}}
<div id="modal-add" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Tambah Mapel Kelas</h5>
			<h6 class="normal dark-text">Pendidikan Pancasila dan Kewarganegaraan<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h6>
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
						<p class="dark8-text semibold labeling">Tujuan Kelas</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select multiple class="select-search validate" searchable='List of options' name="kelas">
								<option value="1" selected="">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
								<option value="4">Option 4</option>
							</select>
							<span></span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<p class="dark8-text semibold labeling">Guru Mapel</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select-search icons" searchable='List of options' required="" aria-required="true" name="id_guru">
								<option value="" disabled selected>Guru Mapel</option>
								<option value="" data-icon="https://materializecss.com/images/sample-1.jpg">Nama Guru</option>
								<option value="" data-icon="https://materializecss.com/images/office.jpg">Nama Guru</option>
								<option value="" data-icon="https://materializecss.com/images/yuna.jpg">Nama Guru</option>
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

{{-- HAPUS MAPEL KELAS DARI MAPEL --}}
<div id="modal-delete" class="modal modal-small">
	<div class="modal-content">
		<h6 class="bold">Hapus Mapel dari Kelas</h6>
		<p>Anda akan menghapus Mapel ... dari Kelas ...</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Hapus</a>
	</div>
</div>

{{-- EDIT MAPEL KE KELAS --}}
<div id="modal-edit" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Edit Mapel Kelas</h5>
			<h6 class="normal dark-text">Pendidikan Pancasila dan Kewarganegaraan<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h6>
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
						<p class="dark8-text semibold labeling">Tujuan Kelas</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select multiple class="select-search validate" searchable='List of options' name="kelas">
								<option value="1" selected="">Option 1</option>
								<option value="2">Option 2</option>
								<option value="3">Option 3</option>
								<option value="4">Option 4</option>
							</select>
							<span></span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<p class="dark8-text semibold labeling">Guru Mapel</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select-search icons" searchable='List of options' required="" aria-required="true" name="id_guru">
								<option value="" disabled selected>Guru Mapel</option>
								<option value="" data-icon="https://materializecss.com/images/sample-1.jpg">Nama Guru</option>
								<option value="" data-icon="https://materializecss.com/images/office.jpg">Nama Guru</option>
								<option value="" data-icon="https://materializecss.com/images/yuna.jpg">Nama Guru</option>
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