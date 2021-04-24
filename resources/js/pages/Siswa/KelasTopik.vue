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

										</div>
									</div>
								</div>
							</div>

							<div class="divider primary h05 mtb1"></div>
						</div>

						<div class="row nm">
							<div class="col s12 p0">
								<router-link :to="{ name: 'siswa.kelas.mapel.materi' }">
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

													</div>
												</div>
											</div>
										</div>
									</div>
								</router-link>
							</div>

							<div class="col s12 p0">
								<router-link :to="{ name: 'siswa.kelas.mapel.tugas.pengumpulan' }">
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

													</div>
												</div>
											</div>
										</div>
									</div>
								</router-link>
							</div>

							<div class="col s12 p0">
								<router-link :to="{ name: 'siswa.kelas.mapel.diskusi' }">
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
					<router-link :to="{ name: 'siswa.kelas.mapel.materi' }">
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

										</div>
									</div>
								</div>
							</div>
						</div>
					</router-link>
				</div>

				<div class="col s12">
					<router-link :to="{ name: 'siswa.kelas.mapel.tugas.kuis' }">
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

										</div>
									</div>
								</div>
							</div>
						</div>
					</router-link>
				</div>

				<div class="col s12">
					<router-link :to="{ name: 'siswa.kelas.mapel.diskusi' }">
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