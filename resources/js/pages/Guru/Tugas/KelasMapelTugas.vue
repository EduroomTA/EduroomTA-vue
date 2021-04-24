<template>
	<section>
		
		<section class="container w50">
			<div class="header row">
				<div class="col s12 m12 l6">
					<div class="title">
						<h5 class="primary-text">Tugas</h5>
						<h6 class="normal">KD1 <i class="material-icons line-icon-p">stop_circle</i> nama bab</h6>
					</div>
				</div>
				<div class="col s12 m12 l6">
					<div class="component right-align">
						<div class="ptb05 hide-on-small-only">
							<a class="matter-button-contained button-icon dropdown-trigger drop" data-target="dropdown-menu-tugas">
								<i class="material-icons left">add</i>Tugas
							</a>

							<ul id="dropdown-menu-tugas" class="dropdown-content">
								<li><a class="modal-trigger" href="#modal-add-tugas-pengumpulan">Pengumpulan</a></li>
								<li><a class="modal-trigger" href="#modal-add-tugas-kuis">Kuis</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<modal-tugas-pengumpulan-add-component></modal-tugas-pengumpulan-add-component>
		<modal-tugas-kuis-add-component></modal-tugas-kuis-add-component>

		<section class="container w50 mb5">
			
			<div class="row">

				<div class="col s12">
					<router-link :to="{ name: 'guru.kelas.mapel.tugas.pengumpulan.detail' }">
						<div class="card outlined hoverable-shadow-nb link">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<i class="material-icons icon-large-incard" style="margin: 0 1rem;">assignment</i>
								</div>
								<div class="col s10 m10 l11">
									<div class="card-header just-head row">
										<div class="title col s10 m11">
											<h6 class="semibold">Nama Tugas</h6>
											<p class="normal dark7-text">Pengumpulan <i class="material-icons line-icon-p dark3-text">stop_circle</i>Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Ulangan <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
										</div>
										<div class="link-card col s2 m1">
											<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-pilgan">
												<i class="material-icons">more_vert</i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</router-link>

					<ul id="dropdown-menu-pilgan" class="dropdown-content">
						<li><a class="modal-trigger" @click.prevent="modalEditTPengumpulanClick()">Edit</a></li>
						<li><a class="modal-trigger" @click.prevent="modalDeleteClick()">Hapus</a></li>
					</ul>
				</div>

				<div class="col s12">
					<a href="#!">
						<div class="card outlined hoverable-shadow-nb link">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<i class="material-icons icon-large-incard" style="margin: 0 1rem;">assignment</i>
								</div>
								<div class="col s10 m10 l11">
									<div class="card-header just-head row">
										<div class="title col s10 m11">
											<h6 class="semibold">Nama Tugas</h6>
											<p class="normal dark7-text">Kuis <i class="material-icons line-icon-p dark3-text">stop_circle</i>Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Ulangan <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
										</div>
										<div class="link-card col s2 m1">
											<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-pilgan2">
												<i class="material-icons">more_vert</i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>

					<ul id="dropdown-menu-pilgan2" class="dropdown-content">
						<li><a class="modal-trigger" @click.prevent="modalEditTKuisClick()">Edit</a></li>
						<li><a class="modal-trigger" @click.prevent="modalDeleteClick()">Hapus</a></li>
					</ul>
				</div>

			</div>
		</section>

		<modal-tugas-pengumpulan-edit-component></modal-tugas-pengumpulan-edit-component>
		<modal-tugas-kuis-edit-component></modal-tugas-kuis-edit-component>
		<modal-tugas-delete-component></modal-tugas-delete-component>

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
			modalEditTPengumpulanClick() {
				$('#modal-edit-tugas-pengumpulan').modal('open');
			},
			modalEditTKuisClick() {
				$('#modal-edit-tugas-kuis').modal('open');
			},
			modalDeleteClick() {
				$('#modal-delete-tugas-pengumpulan').modal('open');
			},
		}
	}
</script>