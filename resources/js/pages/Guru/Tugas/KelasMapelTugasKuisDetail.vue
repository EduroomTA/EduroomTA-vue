<template>
	<section>

		<sliding-header :threshold-hide="100" :threshold-open="200">
			<template v-slot:first-header>
				
			</template>

			<template v-slot:second-header>
				<section class="sect-sticky-sec-nav">
					<div class="navbar sticky-sec-nav">
						<nav class="nav-dash in-scroll-page">
							<div class="container w60">
								<div class="nav-wrapper">

									<div class="left">
										<div class="hide-on-med-and-down icon-sec-nav">
											<div class="icon-sec-container center-content primary">
												<i class="material-icons icon">assignment</i>
											</div>
										</div>
										<div class="titles">
											<span class="title">Sprint Retrospective I</span>
											<span class="desc">
												KD1 | Nama BAB
											</span>
										</div>
									</div>

									<ul class="nav-right">
										<router-link tag="li" :to="{ name: 'guru.kelas.mapel.tugas.kuis.detail' }">
											<a class="primary-text" href="">Kuis</a>
											<div class="nav-actives"></div>
										</router-link>
										<router-link tag="li" :to="{ name: 'guru.kelas.mapel.tugas.kuis.rekap' }">
											<a class="primary-text" href="">Rekap</a>
											<div class="nav-actives"></div>
										</router-link>
									</ul>

								</div>
							</div>
						</nav>
					</div>
				</section>
			</template>
		</sliding-header>

		<section class="dark4">
			<section class="container w60">
				<div class="header-detail">
					<div class="center-content icon-page">
						<i class="material-icons icon">assignment</i>
					</div>
					<div class="title">
						<div class="left-align-res">
							<h5 class="semibold primary-text">Sprint Retrospective I</h5>
							<p class="normal primary-text">KD1 | Nama BAB</p>
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
			</section>
		</section>

		<section>
			<section class="container w60">
				<div class="navbar" style="">
					<nav class="nav-dash in-page">
						<div class="nav-wrapper">
							<ul class="nav-left">
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.tugas.kuis.detail' }">
									<a class="primary-text" href="">Kuis</a>
									<div class="nav-actives"></div>
								</router-link>
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.tugas.kuis.rekap' }">
									<a class="primary-text" href="">Rekap</a>
									<div class="nav-actives"></div>
								</router-link>
							</ul>

							<ul class="nav-right">
								<li>
									<a 
									class="matter-button-outlined button-icon no-border modal-trigger"
									@click="modalSettingClick()"
									href="#!">
									<i class="material-icons left">settings</i>Pengaturan</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</section>
		</section>

		<section class="container w60 mb6">
			<div class="mt2">

				<div class="row mtb2">
					<div class="col s12 m12 l3">
						<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select">
								<option value="" selected>Semua Tipe Jawaban</option>
								<option value="xxxxx">Pilihan Ganda</option>
								<option value="cccdd">Benar / Salah</option>
								<option value="asdas">Jawaban Singkat</option>
							</select>
							<span></span>
						</label>
					</div>
					<div class="col s12 m12 l3 center">
						<p class="nm dark7-text mtb1">100 Poin Maksimal</p>
					</div>
					<div class="col s12 m12 l3 center">
						<p class="nm dark7-text mtb1">3 Soal ditambahkan</p>
					</div>
					<div class="col s12 m12 l3 right-align">
						<button 
						class="matter-button-contained button-icon hide-on-small-only btn-bigger-border dropdown-trigger drop" 
						data-target="dropdown-menu-add">
						<i class="material-icons left">add</i>Tambah Soal</button>

						<ul id="dropdown-menu-add" class="dropdown-content fit">
							<li><a class="modal-trigger" href="#modal-add-new-soal">Soal Baru</a></li>
							<li><a class="modal-trigger" href="#modal-add-bank-soal">Bank Soal</a></li>
						</ul>
					</div>
				</div>

				<div class="divider h05"></div>

				<div class="row">
					<div class="col s12">
						<div class="card flat-line hoverable-bg-prim">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<div>
										<h6 class="number-card">1</h6>
									</div>
								</div>
								<div class="col s10 m10 l11 p0">
									<div class="card-header just-head row">
										<div class="title col s10 m11">
											<a class="modal-trigger" @click="modalDetailSoalClick()" href="#!">
												<h6 v-dummy="20" class="semibold dark-text"></h6>
											</a>

											<p class="normal dark7-text">
												Pilihan Ganda<i class="material-icons line-icon-p dark3-text">stop_circle</i>30 Poin
											</p>
										</div>
										<div class="link-card col s2 m1">
											<button 
											class="matter-button-circle dropdown-trigger drop dark-text" 
											data-target="dropdown-menu-materi">
											<i class="material-icons">more_vert</i></button>

											<ul id="dropdown-menu-materi" class="dropdown-content">
												<li><a class="modal-trigger" @click.stop="modalEditSoalClick()">Edit</a></li>
												<li><a class="modal-trigger" @click.stop="modalDeleteSoalClick()">Hapus</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12">
						<div class="card flat-line hoverable-bg-prim">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<div>
										<h6 class="number-card">2</h6>
									</div>
								</div>
								<div class="col s10 m10 l11 p0">
									<div class="card-header just-head row">
										<div class="title col s10 m11">
											<a class="modal-trigger" @click="modalDetailSoalClick()" href="#!">
												<h6 v-dummy="20" class="semibold dark-text"></h6>
											</a>

											<p class="normal dark7-text">
												Pilihan Ganda<i class="material-icons line-icon-p dark3-text">stop_circle</i>30 Poin
											</p>
										</div>
										<div class="link-card col s2 m1">
											<button 
											class="matter-button-circle dropdown-trigger drop dark-text" 
											data-target="dropdown-menu-materi">
											<i class="material-icons">more_vert</i></button>

											<ul id="dropdown-menu-materi" class="dropdown-content">
												<li><a class="modal-trigger" @click.stop="modalEditSoalClick()">Edit</a></li>
												<li><a class="modal-trigger" @click.stop="modalDeleteSoalClick()">Hapus</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12">
						<div class="card flat-line hoverable-bg-prim">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<div>
										<h6 class="number-card">3</h6>
									</div>
								</div>
								<div class="col s10 m10 l11 p0">
									<div class="card-header just-head row">
										<div class="title col s10 m11">
											<a class="modal-trigger" @click="modalDetailSoalClick()" href="#!">
												<h6 v-dummy="20" class="semibold dark-text"></h6>
											</a>

											<p class="normal dark7-text">
												Pilihan Ganda<i class="material-icons line-icon-p dark3-text">stop_circle</i>30 Poin
											</p>
										</div>
										<div class="link-card col s2 m1">
											<button 
											class="matter-button-circle dropdown-trigger drop dark-text" 
											data-target="dropdown-menu-materi">
											<i class="material-icons">more_vert</i></button>

											<ul id="dropdown-menu-materi" class="dropdown-content">
												<li><a class="modal-trigger" @click.stop="modalEditSoalClick()">Edit</a></li>
												<li><a class="modal-trigger" @click.stop="modalDeleteSoalClick()">Hapus</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<modal-tugas-kuis-soal-add-component></modal-tugas-kuis-soal-add-component>
		<modal-tugas-kuis-soal-bank-component></modal-tugas-kuis-soal-bank-component>
		<modal-tugas-kuis-soal-delete-component></modal-tugas-kuis-soal-delete-component>
		<modal-tugas-kuis-soal-edit-component></modal-tugas-kuis-soal-edit-component>
		<modal-tugas-kuis-soal-detail-component></modal-tugas-kuis-soal-detail-component>
		<modal-tugas-kuis-setting-component></modal-tugas-kuis-setting-component>

	</section>
</template>

<script>
	import SlidingHeader from "@vuesence/sliding-header";

	export default {
		mounted() {
			$('.sidenavs').sidenav();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
			$('.select-search').formSelect2({closeOnClick: false});
			$('.select').formSelect({closeOnClick: true});
			$('.modal').modal();
		},
		components: {
			SlidingHeader
		},
		methods: {
			modalDeleteSoalClick() {
				$('#modal-delete-soal').modal('open');
			},
			modalEditSoalClick() {
				$('#modal-edit-soal').modal('open');
			},
			modalDetailSoalClick() {
				$('#modal-detail-soal').modal('open');
			},
			modalSettingClick() {
				$('#modal-setting-kuis').modal('open');
			}
		}
	};
</script>

<style>
.sliding-header {
	transition: 0.3s;
}
.sliding-header.hidden {
	top: -100px;
}
</style>