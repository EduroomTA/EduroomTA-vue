{{-- MODAL KKM --}}

{{-- ADD --}}
<div id="modal-add" class="modal modal-small">
	<form action="" method="POST">
		@csrf
		<div class="modal-content">
			<div class="mb3">
				<h5>KKM</h5>
				<h6 class="semibold">Pendidikan Kewarga Negaraan<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h6>
				<p class="normal primary-text">Kelas 10 Mipa</p>
			</div>
			<div class="row">
				<div class="col s12">
					<label id="penilaian" class="matter-textfield-filled" style="width: 100%">
						<input class="validate" max="100" min="0" type="number" placeholder=" " required="" aria-required="true" name="kkm" />
						<span>KKM</span>
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