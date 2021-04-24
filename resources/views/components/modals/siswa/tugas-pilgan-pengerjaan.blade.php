{{-- MODAL TUGAS PILGAN PENGERJAAN --}}

{{-- MODAL SELESAI LOS TIME --}}
<div id="modal-gg" class="modal modal-small">
	<div class="modal-content center">
		<h5>Waktu Pengerjaan Habis</h5>
		<p>Anda akan keluar dari mata pelajaran</p>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close matter-button-text danger-text">Cancel</a>
		<a href="#!" class="modal-close matter-button-text">Hapus</a>
	</div>
</div>

{{-- MODAL SELESAI BY CLICK --}}
<div id="modal-selesai" class="modal modal-full">
	<div class="modal-content">
		<section class="container w60">
			<div class="header-detail">
				<div id="icon-page" class="center-content icon-page">
					<i class="material-icons icon">assignment</i>
				</div>
				<div class="title">
					<div class="left-align-res">
						<h5 class="semibold primary-text">Sprint Retrospective I</h5>
						<p class="normal primary-text">8C | Pendidikan Pancasila dan Kewarganegaraan</p>
					</div>
					<div class="row nm">
						<div class="col s12 m12 l6 left-align-res">
							<p class="normal dark7-text">Pengetahuan<i class="material-icons line-icon-p">stop_circle</i>UTS<i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020</p>
						</div>
						<div class="col s12 m12 l6 right-align-res">
							<p class="normal dark7-text"><span class="badge-text1 primary white-text">Tenggat 12 Juni, 13:00</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="divider h05 mb2"></div>
		</section>

		<section class="container w30">
			<table>
				<tbody>
					<tr>
						<td><div class="bold">1</div></td>
						<td>
							<button class="matter-button-text button-icon success-text" disabled="">
								<i class="material-icons left">check_circle_outline</i>Terjawab
							</button>
						</td>
					</tr>
					<tr>
						<td><div class="bold">2</div></td>
						<td>
							<button class="matter-button-text button-icon success-text" disabled="">
								<i class="material-icons left">check_circle_outline</i>Terjawab
							</button>
						</td>
					</tr>
					<tr>
						<td><div class="bold">3</div></td>
						<td>
							<button class="matter-button-text button-icon danger-text" disabled="">
								<i class="material-icons left">radio_button_unchecked</i>Belum Terjawab
							</button>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="row mtb2">
				<div class="col s12 m12 l6 left-align-res">
					<a id="kembali-mengerjakan" class="modal-close matter-button-text primary-text" href="#!">
						Kembali Mengerjakan
					</a>
				</div>
				<div class="col s12 m12 l6 right-align-res">
					<button class="matter-button-outlined button-icon" href="{{ route('siswa.tugas.pilgan.detail')}}">
						<i class="material-icons right">send</i>Kirim Jawaban
					</button>
				</div>
			</div>
		</section>
	</div>
</div>