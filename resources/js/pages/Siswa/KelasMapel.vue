<template>
	<section>

		<section class="container w60">
			<div class="header nb">
				<div class="card-panel white" style="background-image: url('/asset/img/tema/Asset 11.png');background-size: cover;background-position: 50%;min-height: 220px;">
					<div class="row">
						<div class="col s12 m12 l8">
							<router-link :to="{ name: 'siswa.kelas.mapels' }" class="text-link bold white-text h5" content="Kelas 8C" v-tippy='{ placement : "bottom" }'>8C
							</router-link>

							<h4 class="light white-text">Pendidikan Pancasila dan Kewarganegaraan</h4>
							<h6 class="white-text">2020/2021</h6>
						</div>
						<div class="col s12 m12 l4"></div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col s12 m12 l3">

					<router-link :to="{ name: 'guru.tinjauan' }">
						<div class="card flat-line hoverable-bg-prim link">
							<div class="row nm valign-wrapper">
								<div class="col s2 m2 l3 valign">
									<i class="material-icons icon-large-incard">pending_actions</i>
								</div>
								<div class="col s10 m10 l9">
									<div class="card-header just-head row">
										<div class="title col s12">
											<h6 class="semibold">Tinjauan</h6>
											<p class="normal dark7-text"> 5 perlu ditinjau</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</router-link>

				</div>

				<div class="col s12 m12 l9">
					<div class="row">

						<div class="col s12">
							<router-link :to="{name: 'siswa.kelas.mapel.topik'}">
								<div class="card outlined hoverable-bg-prim link">
									<div class="row nm valign-wrapper">
										<div class="col s10 m10 l12">
											<div class="card-header just-head row">
												<div class="title col s12">
													<h6 v-dummy="15" class="semibold"></h6>
													<p class="normal dark7-text"><br class="hide-on-med-and-up"><br class="hide-on-med-and-up">Belum ada komponen yang ditambahkan</p>
													<div class="progress">
														<div class="determinate" style="width: 70%"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</router-link>
						</div>

						<div class="col s12">
							<router-link :to="{name: 'siswa.kelas.mapel.topik'}">
								<div class="card outlined hoverable-bg-prim link">
									<div class="row nm valign-wrapper">
										<div class="col s10 m10 l12">
											<div class="card-header just-head row">
												<div class="title col s12">
													<h6 v-dummy="15" class="semibold"></h6>
													<p class="normal dark7-text"><br class="hide-on-med-and-up"><br class="hide-on-med-and-up">Belum ada komponen yang ditambahkan</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</router-link>
						</div>

						<div class="col s12">
							<router-link :to="{name: 'siswa.kelas.mapel.ujian.soal'}">
								<div class="card outlined hoverable-bg-prim link">
									<div class="row nm valign-wrapper">
										<div class="col s10 m10 l12">
											<div class="card-header just-head row">
												<div class="title col s12">

													<div class="normal line-icon-text primary-text nm mb05 mt1 semibold">
														<i class="material-icons primary-text line-icon-p" style="font-size: 20px;">content_paste
														</i>
														Ujian Tengah Semester
													</div>

													<div class="divider"></div>
													<h6 v-dummy="15" class="semibold"></h6>
													<p class="normal dark7-text"><br class="hide-on-med-and-up"><br class="hide-on-med-and-up">Belum ada komponen yang ditambahkan</p>
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
		</section>

	</section>
</template>

<script>
	export default {
		data() {
			return {
				show: false
			}
		},
		mounted() {
			$('.sidenavs').sidenav();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
			$('.select-search').formSelect2({closeOnClick: false});
			$('.modal').modal();
		},
		methods: {

		}
	}
</script>