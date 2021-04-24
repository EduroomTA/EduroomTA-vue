{{-- MODAL DASHBOARD --}}

{{-- KELUAR --}}
<div id="modal-keluar" class="modal modal-small">
	<div class="modal-content center">
		<h5>Keluar Mata Pelajaran</h5>
		<p>Anda akan keluar dari mata pelajaran</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text danger-text">Cancel</a>
		<a href="#!" class="modal-close matter-button-text">Hapus</a>
	</div>
</div>

{{-- JOIN KELAS --}}
<div id="modal-add" class="modal modal-small">
	<form action="" method="">
		@csrf
		<div class="modal-content">
			<h6>Keluar Mata Pelajaran</h6>

			<div class="row mt2">
				<div class="col s12">
					<label id="kode" class="matter-textfield-filled" style="width: 100%">
						<input type="text" placeholder=" " required="" name="kode" />
						<span>Kode Kelas</span>
					</label>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<a href="#!" class="modal-close matter-button-text danger-text">Cancel</a>
			<button type="submit" class="modal-close matter-button-text">Masuk</button>
		</div>
	</form>
</div>