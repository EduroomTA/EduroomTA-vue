{{-- MODAL DASHBAORD --}}
{{-- DELETE --}}
<div id="modal-delete" class="modal modal-small">
	<div class="modal-content">
		<h6 class="bold">Hapus Mapel Ujian</h6>
		<p>Anda akan menghapus Mapel Ujian ...</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text dark-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Hapus</a>
	</div>
</div>

{{-- EDIT --}}
<div id="modal-edit" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Edit Mapel Ujian</h5>
			<p class="normal primary-text">UAS<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span><i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">Pendidikan Kewarganegaraan</span></p>
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
						<p class="dark8-text semibold labeling">Mapel</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="validate select-search" searchable='List of options' required="true" aria-required="true" name="id_mapel">
								<option value="" disabled selected>Pilih Mapel</option>
								<option value="1">Pendidikan Kewarganegaraan</option>
								<option value="2">Matematika</option>
							</select>
							<span></span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<p class="dark8-text semibold labeling">Tujuan Kelas</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select multiple class="select-search" searchable='List of options' name="id_kelas">
								<option value="" disabled>Pilih Kelas</option>
								<option value="1">Option 1</option>
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
						<p class="dark8-text semibold labeling">Guru Koordinator</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select-search icons" searchable='List of options' required="" aria-required="true" name="id_guru">
								<option value="" disabled selected>Guru Koordinator</option>
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
						<p class="dark8-text semibold labeling">Pelaksanaan</p>
					</div>
					<div class="col s6">
						<label id="xmas" class="matter-textfield-filled icon-input right-icon" style="width: 100%">
							<input type="text" placeholder=" " id="date2" data-select="datepicker" />
							<span>Tanggal</span>
							<i class="material-icons">insert_invitation</i>
						</label>
					</div>
					<div class="col s6">
						<label id="xmas" class="matter-textfield-filled icon-input right-icon time-picker" style="width: 100%">
							<input type="text" placeholder=" " />
							<span>Waktu</span>
							<i class="material-icons asdasd">query_builder</i>
						</label>
					</div>
				</div>

				<div id="penjadwalan_edit_ujian_layout" class="row hide">
					<div class="col s12 mb05">
						<p class="dark8-text semibold labeling">Penerbitan</p>
					</div>
					<div class="col s6">
						<label id="xmas" class="matter-textfield-filled icon-input right-icon" style="width: 100%">
							<input type="text" placeholder=" " id="date2" data-select="datepicker" />
							<span>Tanggal</span>
							<i class="material-icons">insert_invitation</i>
						</label>
					</div>
					<div class="col s6">
						<label id="xmas" class="matter-textfield-filled icon-input right-icon time-picker" style="width: 100%">
							<input type="text" placeholder=" " />
							<span>Waktu</span>
							<i class="material-icons asdasd">query_builder</i>
						</label>
					</div>
				</div>

				<div class="row nm mtb2">
					<div class="col s12">
						<label class="matter-checkbox">
							<input id="penjadwalan_ujian_edit" type="checkbox">
							<span>Jadwalkan Penerbitan</span>
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

{{-- ADD --}}
<div id="modal-add" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Tambah Mapel Ujian</h5>
			<p class="normal primary-text">UAS<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></p>
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
						<p class="dark8-text semibold labeling">Mapel</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="validate select-search" searchable='List of options' required="true" aria-required="true" name="id_mapel">
								<option value="" disabled selected>Pilih Mapel</option>
								<option value="1">Pendidikan Kewarganegaraan</option>
								<option value="2">Matematika</option>
							</select>
							<span></span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<p class="dark8-text semibold labeling">Tujuan Kelas</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select multiple class="select-search" searchable='List of options' name="id_kelas">
								<option value="" disabled>Pilih Kelas</option>
								<option value="1">Option 1</option>
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
						<p class="dark8-text semibold labeling">Guru Koordinator</p>
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select-search icons" searchable='List of options' required="" aria-required="true" name="id_guru">
								<option value="" disabled selected>Guru Koordinator</option>
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
						<p class="dark8-text semibold labeling">Pelaksanaan</p>
					</div>
					<div class="col s6">
						<label id="xmas" class="matter-textfield-filled icon-input right-icon" style="width: 100%">
							<input type="text" placeholder=" " id="date2" data-select="datepicker" />
							<span>Tanggal</span>
							<i class="material-icons">insert_invitation</i>
						</label>
					</div>
					<div class="col s6">
						<label id="xmas" class="matter-textfield-filled icon-input right-icon time-picker" style="width: 100%">
							<input type="text" placeholder=" " />
							<span>Waktu</span>
							<i class="material-icons asdasd">query_builder</i>
						</label>
					</div>
				</div>

				<div id="penjadwalan_add_ujian_layout" class="row hide">
					<div class="col s12 mb05">
						<p class="dark8-text semibold labeling">Penerbitan</p>
					</div>
					<div class="col s6">
						<label id="xmas" class="matter-textfield-filled icon-input right-icon" style="width: 100%">
							<input type="text" placeholder=" " id="date2" data-select="datepicker" />
							<span>Tanggal</span>
							<i class="material-icons">insert_invitation</i>
						</label>
					</div>
					<div class="col s6">
						<label id="xmas" class="matter-textfield-filled icon-input right-icon time-picker" style="width: 100%">
							<input type="text" placeholder=" " />
							<span>Waktu</span>
							<i class="material-icons asdasd">query_builder</i>
						</label>
					</div>
				</div>

				<div class="row nm mtb2">
					<div class="col s12">
						<label class="matter-checkbox">
							<input id="penjadwalan_ujian_add" type="checkbox">
							<span>Jadwalkan Penerbitan</span>
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