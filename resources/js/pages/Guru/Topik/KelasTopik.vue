<template>
	<section class="mb5">
		
		<section class="container w50">
			<div class="header-detail no-pb">
				<div class="title">
					<div class="row">
						<div class="col s12 m12 l9">
							<div class="left-align-res">
								<h5 v-dummy="15" class="primary-text"></h5>
							</div>
						</div>
						<div class="col s12 m12 l3 right-align">
							<button class="matter-button-contained button-icon hide-on-small-only dropdown-trigger drop btn-bigger-border" data-target="dropdown-menu-add">
								<i class="material-icons left">add</i>
								Tambah
							</button>

							<ul id="dropdown-menu-add" class="dropdown-content fit">
								<li>
									<a class="modal-trigger" href="#modal-add-materi">
										<i class="material-icons primary-text">book</i>Materi
									</a>
								</li>
								<li>
									<a class="modal-trigger" href="#modal-add-tugas-pengumpulan">
										<i class="material-icons primary-text">assignment</i>Tugas Pengumpulan
									</a>
								</li>
								<li>
									<a class="modal-trigger" href="#modal-add-tugas-kuis">
										<i class="material-icons primary-text">view_list</i>Tugas Kuis
									</a>
								</li>
								<li>
									<a class="modal-trigger" href="#modal-add-diskusi">
										<i class="material-icons primary-text">forum</i>Diskusi
									</a>
								</li>
								<li class="divider" tabindex="-1"></li>
								<li>
									<a class="modal-trigger" href="#modal-add-subtopik">
										<i class="material-icons primary-text">chrome_reader_mode</i>Sub Topik
									</a>
								</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>

			<div class="divider mtb2"></div>
		</section>

		<section class="container w50">
			<div class="row">

				<div class="col s12">
					<div class="card outlined pb1 p12">
						<div class="panel-05">
							<div class="row nm">
								<div class="col s2 m2 l1 p0">
									<i class="material-icons icon-large-incard mt1" style="margin: 0 1rem;">chrome_reader_mode</i>
								</div>
								<div class="col s10 m10 l11 p0">
									<div class="card-header just-head row">
										<div class="title col s10 m11">
											<h6 v-dummy="12" class="primary-text" style="white-space: break-spaces;"></h6>
										</div>
										<div class="link-card col s2 m1">
											<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-subtopik">
												<i class="material-icons primary-text">more_vert</i>
											</button>

											<ul id="dropdown-menu-subtopik" class="dropdown-content">
												<li><a class="modal-trigger" @click.prevent="modalEditSubTopikClick()">Edit</a></li>
												<li><a class="modal-trigger" @click.prevent="modalDeleteSubTopikClick()">Hapus</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="divider primary h05 mtb1"></div>
						</div>

						<div class="row nm">
							<div class="col s12 p0">
								<router-link :to="{ name: 'guru.kelas.mapel.materi.detail' }">
									<div class="card flat-line hoverable-bg-prim link">
										<div class="row nm valign-wrapper">
											<div class="col s2 m2 l1 valign">
												<i class="material-icons icon-large-incard" style="margin: 0 1rem;">book</i>
											</div>
											<div class="col s10 m10 l11">
												<div class="card-header just-head row">
													<div class="title col s10 m11">
														<h6 v-dummy="20" class="semibold"></h6>
														<p class="normal dark7-text">Terbit 12 Juni 2020</p>
													</div>
													<div class="link-card col s2 m1">
														<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-materi">
															<i class="material-icons">more_vert</i>
														</button>

														<ul id="dropdown-menu-materi" class="dropdown-content">
															<li>
																<a class="modal-trigger" @click.prevent="modalEditMateriClick()">
																	Edit
																</a>
															</li>
															<li>
																<a class="modal-trigger" @click.prevent="modalDeleteMateriClick()">Hapus</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</router-link>
							</div>

							<div class="col s12 p0">
								<router-link :to="{ name: 'guru.kelas.mapel.tugas.pengumpulan.detail' }">
									<div class="card flat-line hoverable-bg-prim link">
										<div class="row nm valign-wrapper">
											<div class="col s2 m2 l1 valign">
												<i class="material-icons icon-large-incard" style="margin: 0 1rem;">assignment</i>
											</div>
											<div class="col s10 m10 l11">
												<div class="card-header just-head row">
													<div class="title col s10 m11">
														<h6 v-dummy="10" class="semibold"></h6>
														<p class="normal dark7-text"> Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Ulangan <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
													</div>
													<div class="link-card col s2 m1">
														<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-tugas-pengumpulan">
															<i class="material-icons">more_vert</i>
														</button>

														<ul id="dropdown-menu-tugas-pengumpulan" class="dropdown-content">
															<li>
																<a class="modal-trigger" @click.prevent="modalEditTugasPengumpulanClick()">
																	Edit
																</a>
															</li>
															<li>
																<a class="modal-trigger" @click.prevent="modalDeleteTugasClick()">Hapus</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</router-link>
							</div>

							<div class="col s12 p0">
								<router-link :to="{ name: 'guru.kelas.mapel.diskusi.detail' }">
									<div class="card flat-line hoverable-bg-prim link">
										<div class="row nm valign-wrapper">
											<div class="col s2 m2 l1 valign">
												<i class="material-icons icon-large-incard" style="margin: 0 1rem;">forum</i>
											</div>
											<div class="col s10 m10 l11">
												<div class="card-header just-head row">
													<div class="title col s10 m11">
														<h6 v-dummy="10" class="semibold"></h6>
														<p class="normal dark7-text">Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Harian <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
													</div>
													<div class="link-card col s2 m1">
														<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-diskusi">
															<i class="material-icons">more_vert</i>
														</button>

														<ul id="dropdown-menu-diskusi" class="dropdown-content">
															<li>
																<a class="modal-trigger" @click.prevent="modalEditDiskusiClick()">
																	Edit
																</a>
															</li>
															<li>
																<a class="modal-trigger" @click.prevent="modalDeleteDiskusiClick()">Hapus</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</router-link>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col s12">
					<router-link :to="{ name: 'guru.kelas.mapel.materi.detail' }">
						<div class="card flat-line hoverable-bg-prim link">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<i class="material-icons icon-large-incard" style="margin: 0 1rem;">book</i>
								</div>
								<div class="col s10 m10 l11">
									<div class="card-header just-head row">
										<div class="title col s10 m11">
											<h6 v-dummy="20" class="semibold"></h6>
											<p class="normal dark7-text">Terbit 12 Juni 2020</p>
										</div>
										<div class="link-card col s2 m1">
											<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-materi">
												<i class="material-icons">more_vert</i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</router-link>
				</div>

				<div class="col s12">
					<router-link :to="{ name: 'guru.kelas.mapel.tugas.kuis.detail' }">
						<div class="card flat-line hoverable-bg-prim link">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<i class="material-icons icon-large-incard" style="margin: 0 1rem;">assignment</i>
								</div>
								<div class="col s10 m10 l11">
									<div class="card-header just-head row">
										<div class="title col s10 m11">
											<h6 v-dummy="10" class="semibold"></h6>
											<p class="normal dark7-text"> Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Ulangan <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
										</div>
										<div class="link-card col s2 m1">
											<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-tugas-kuis">
												<i class="material-icons">more_vert</i>
											</button>

											<ul id="dropdown-menu-tugas-kuis" class="dropdown-content">
												<li>
													<a class="modal-trigger" @click.prevent="modalEditTugasKuisClick()">
														Edit
													</a>
												</li>
												<li>
													<a class="modal-trigger" @click.prevent="modalDeleteTugasClick()">Hapus</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</router-link>
				</div>

				<div class="col s12">
					<router-link :to="{ name: 'guru.kelas.mapel.diskusi.detail' }">
						<div class="card flat-line hoverable-bg-prim link">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<i class="material-icons icon-large-incard" style="margin: 0 1rem;">forum</i>
								</div>
								<div class="col s10 m10 l11">
									<div class="card-header just-head row">
										<div class="title col s10 m11">
											<h6 v-dummy="10" class="semibold"></h6>
											<p class="normal dark7-text">Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Harian <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
										</div>
										<div class="link-card col s2 m1">
											<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-diskusi">
												<i class="material-icons">more_vert</i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</router-link>
				</div>

			</div>
		</section>

		<modal-subtopik-add-component></modal-subtopik-add-component>
		<modal-subtopik-edit-component></modal-subtopik-edit-component>
		<modal-subtopik-delete-component></modal-subtopik-delete-component>

		<modal-materi-add-component></modal-materi-add-component>
		<modal-tugas-pengumpulan-add-component></modal-tugas-pengumpulan-add-component>
		<modal-tugas-kuis-add-component></modal-tugas-kuis-add-component>
		<modal-diskusi-add-component></modal-diskusi-add-component>

		<modal-materi-edit-component></modal-materi-edit-component>
		<modal-tugas-pengumpulan-edit-component></modal-tugas-pengumpulan-edit-component>
		<modal-tugas-kuis-edit-component></modal-tugas-kuis-edit-component>
		<modal-diskusi-edit-component></modal-diskusi-edit-component>

		<modal-materi-delete-component></modal-materi-delete-component>
		<modal-tugas-delete-component></modal-tugas-delete-component>
		<modal-diskusi-delete-component></modal-diskusi-delete-component>

	</section>
</template>

<script>
	export default {
		mounted() {
			$('.sidenavs').sidenav();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
			$('.select-search').formSelect2({closeOnClick: false});
			$('.select').formSelect({closeOnClick: true});
			$('.modal').modal();
		},
		methods: {
			modalEditSubTopikClick() {
				$('#modal-edit-subtopik').modal('open');
			},
			modalDeleteSubTopikClick() {
				$('#modal-delete-subtopik').modal('open');
			},

			modalEditMateriClick() {
				$('#modal-edit-materi').modal('open');
			},
			modalEditTugasPengumpulanClick() {
				$('#modal-edit-tugas-pengumpulan').modal('open');
			},
			modalEditDiskusiClick() {
				$('#modal-edit-diskusi').modal('open');
			},
			modalEditTugasKuisClick() {
				$('#modal-edit-tugas-kuis').modal('open');
			},

			modalDeleteMateriClick() {
				$('#modal-delete-materi').modal('open');
			},
			modalDeleteTugasClick() {
				$('#modal-delete-tugas').modal('open');
			},
			modalDeleteDiskusiClick() {
				$('#modal-delete-diskusi').modal('open');
			},
		}
	}
</script>