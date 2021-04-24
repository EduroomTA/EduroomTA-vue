{{-- MODAL KELAS --}}

{{-- ADD --}}
{{-- <div id="modal-add" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h5>Tambah Mapel Baru</h5>
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
						<label id="nama_pelajaran" class="matter-textfield-filled" style="width: 100%">
							<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama_pelajaran" />
							<span>Nama Mata Pelajaran</span>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col s12">
						<label id="select_search" class="matter-textfield-filled" style="width: 100%">
							<select class="select-search icons" searchable='List of options' required="" aria-required="true" name="id_guru">
								<option value="" disabled selected>Guru Mapel</option>
								<option value="" data-icon="https://materializecss.com/images/sample-1.jpg">Nama Guru</option>
								<option value="" data-icon="https://materializecss.com/images/office.jpg">Nama Guru</option>
								<option value="" data-icon="https://materializecss.com/images/yuna.jpg">Nama Guru</option>
							</select>
							<span>Guru Mapel</span>
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
--}}
{{-- EDIT --}}
{{-- <div id="modal-edit" class="modal modal-full">
	<div class="modal-header row nm">
		<div class="col s11">
			<h6>Edit Mapel</h6>
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
						<p class="normal dark7-text">Tema <i class="material-icons line-icon-p">stop_circle</i><br class="hide-on-med-and-up"><br class="hide-on-med-and-up"> <span class="badge-text1 primary white-text">Matematika</span></p>
					</div>
					<div class="col s12">
						<img class="responsive-img" src="{{asset('asset/img/tema/math2.png')}}">
					</div>
					<div class="col s12 right-align">
						<a class="matter-button-text primary-text modal-trigger" href="#modal-pilih-tema">Pilih Tema</a>
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
</div> --}}

<div id="modal-pilih-tema" class="modal modal-large">
	<div class="modal-content">
		<div class="mb2">
			<h5>Tema Mata Pelajaran</h5>
		</div>
		<div class="cc-selector-2 row">
			<div class="col s12 m12 l4 mtb05">
				<input id="cat2" type="radio" name="creditcard" value="cat" />
				<label class="drinkcard-cc" for="cat2" style="background-image: url('{{asset('asset/img/tema/math2.png')}}');"></label>
			</div>
			<div class="col s12 m12 l4 mtb05">
				<input id="dog2" type="radio" name="creditcard" value="dog" />
				<label class="drinkcard-cc" for="dog2" style="background-image: url('{{asset('asset/img/tema/math2.png')}}');"></label>
			</div>
			<div class="col s12 m12 l4 mtb05">
				<input id="dog3" type="radio" name="creditcard" value="dog" />
				<label class="drinkcard-cc" for="dog3" style="background-image: url('{{asset('asset/img/tema/math2.png')}}');"></label>
			</div>
			<div class="col s12 m12 l4 mtb05">
				<input id="dog4" type="radio" name="creditcard" value="dog" />
				<label class="drinkcard-cc" for="dog4" style="background-image: url('{{asset('asset/img/tema/math2.png')}}');"></label>
			</div>
		</div>

	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text">Batal</a>
		<a href="#!" class="modal-close matter-button-text primary-text">Simpan</a>
	</div>
</div>