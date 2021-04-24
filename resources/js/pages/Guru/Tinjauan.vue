<template>
	<section class="mb5">
		
		<section class="container w60">
			<div class="header nb row">
				<div class="col s12 m12 l8">
					<div class="row nm">
						<div class="col s12 m12 l7">
							<div class="component right-align">
								<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%; border: 0">
									<select class="select-search" searchable='List of options'>
										<option value="1" selected>Semua Kelas</option>
										<option value="1">Pendidikan Kewarganegaraan XI Mipa 10</option>
										<option value="2">Pendidikan Kewarganegaraan XI Mipa 11</option>
										<option value="3">Pendidikan Kewarganegaraan XI Mipa 1</option>
									</select>
									<span></span>
								</label>
							</div>
						</div>
						<div class="col s12 m12 l5">
							<div class="component right-align">
								<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%; border: 0">
									<select class="select">
										<option value="" selected>Semua Tipe</option>
										<option value="1">Tugas</option>
										<option value="2">Diskusi</option>
									</select>
									<span></span>
								</label>
							</div>
						</div>
					</div>
				</div>
				<div class="col s12 m12 l4">

				</div>
			</div>
		</section>

		<section class="container w60">
			<div class="row">
				<div class="col s12">
					<h6 class="primary-text nm mtb1">Tenggat Senin, 12 Juni 2020</h6>
					<div class="divider h05"></div>
				</div>

				<div class="col s12">
					<router-link :to="{ name: 'guru.kelas.mapel.tugas.kuis.detail' }">
						<div class="card flat-line hoverable-bg-prim link">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<i class="material-icons icon-large-incard" style="margin: 0 1rem;">assignment</i>
								</div>
								<div class="col s10 m10 l7">
									<div class="card-header just-head row">
										<div class="title col s12">
											<h6 v-dummy="10" class="semibold"></h6>
											<p class="normal dark7-text">10 Mipa 1 <i class="material-icons line-icon-p dark3-text">stop_circle</i> Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Ulangan <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Tenggat 12 Juni 2020</span></p>
										</div>
									</div>
								</div>
								<div class="col s12 m12 l4">
									<div class="row nm">
										<div class="col s6 center">
											<h5>50</h5>
											<p class="normal dark7-text">Mengumpulkan</p>
										</div>
										<div class="col s6 center">
											<h5>50</h5>
											<p class="normal dark7-text">Terkoreksi</p>
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
								<div class="col s10 m10 l7">
									<div class="card-header just-head row">
										<div class="title col s12">
											<h6 v-dummy="10" class="semibold"></h6>
											<p class="normal dark7-text">10 Mipa 1 <i class="material-icons line-icon-p dark3-text">stop_circle</i> Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Harian <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Tenggat 12 Juni 2020</span></p>
										</div>
									</div>
								</div>
								<div class="col s12 m12 l4">
									<div class="row nm">
										<div class="col s6 center">
											<h5>50</h5>
											<p class="normal dark7-text">Mengumpulkan</p>
										</div>
										<div class="col s6 center">
											<h5>50</h5>
											<p class="normal dark7-text">Terkoreksi</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</router-link>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<h6 class="primary-text nm mtb1">Tenggat Selasa, 13 Juni 2020</h6>
					<div class="divider h05"></div>
				</div>

				<div class="col s12">
					<router-link :to="{ name: 'guru.kelas.mapel.tugas.kuis.detail' }">
						<div class="card flat-line hoverable-bg-prim link">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l1 valign">
									<i class="material-icons icon-large-incard" style="margin: 0 1rem;">assignment</i>
								</div>
								<div class="col s10 m10 l7">
									<div class="card-header just-head row">
										<div class="title col s12">
											<h6 v-dummy="10" class="semibold"></h6>
											<p class="normal dark7-text">10 Mipa 1 <i class="material-icons line-icon-p dark3-text">stop_circle</i> Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Ulangan <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Tenggat 12 Juni 2020</span></p>
										</div>
									</div>
								</div>
								<div class="col s12 m12 l4">
									<div class="row nm">
										<div class="col s6 center">
											<h5>50</h5>
											<p class="normal dark7-text">Mengumpulkan</p>
										</div>
										<div class="col s6 center">
											<h5>50</h5>
											<p class="normal dark7-text">Terkoreksi</p>
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
								<div class="col s10 m10 l7">
									<div class="card-header just-head row">
										<div class="title col s12">
											<h6 v-dummy="10" class="semibold"></h6>
											<p class="normal dark7-text">10 Mipa 1 <i class="material-icons line-icon-p dark3-text">stop_circle</i> Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Harian <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Tenggat 12 Juni 2020</span></p>
										</div>
									</div>
								</div>
								<div class="col s12 m12 l4">
									<div class="row nm">
										<div class="col s6 center">
											<h5>50</h5>
											<p class="normal dark7-text">Mengumpulkan</p>
										</div>
										<div class="col s6 center">
											<h5>50</h5>
											<p class="normal dark7-text">Terkoreksi</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</router-link>
				</div>
			</div>
		</section>

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

		}
	}
</script>