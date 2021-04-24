<template>
	<section>
		
		<section class="sect-sticky-sec-nav" style="top: 0 !important;">
			<div class="navbar sticky-sec-nav navbar-fixed">
				<nav class="nav-dash in-scroll-page">
					<div class="container w95">
						<div class="nav-wrapper">

							<div class="left">
								<div class="text-nowarp second-nav long">
									<div class="icon-sec-container center-content primary" style="display: inline-flex;position: absolute;top: 0.9rem;">
										<i class="material-icons icon">forum</i>
									</div>
									<span class="dark-text" style="position: absolute;left: 3.5rem;">
										Review Progress Sprint 2 minggu ke 2
									</span>
								</div>
							</div>

						</div>
					</div>
				</nav>
			</div>
		</section>

		<section class="container w95 mtb3">
			<div class="row nm">
				<div class="col s12 m12 l4 pr2-res">
					<section v-if="errored">
					</section>

					<section v-else>
						<div v-if="loading" class="mt2">
							<vue-content-loading :width="300" :height="250">
								<circle cx="10%" cy="18" r="18"></circle>
								<rect x="20%" y="0" rx="3" ry="4" width="120" height="10"></rect>
								<rect x="20%" y="10%" rx="3" ry="4" width="60" height="10"></rect>

								<rect x="0" y="20%" rx="3" ry="4" width="100%" height="2"></rect>

								<rect x="20%" y="30%" rx="3" ry="4" width="60" height="10"></rect>
								<rect x="20%" y="40%" rx="3" ry="4" width="60" height="10"></rect>

								<rect x="60%" y="30%" rx="3" ry="4" width="60" height="10"></rect>
								<rect x="60%" y="40%" rx="3" ry="4" width="60" height="10"></rect>

								<rect x="0" y="50%" rx="3" ry="4" width="100%" height="2"></rect>

								<rect x="20%" y="60%" rx="3" ry="4" width="230" height="25"></rect>
								<rect x="20%" y="75%" rx="3" ry="4" width="230" height="25"></rect>
							</vue-content-loading>
						</div>

						<div v-else>
							<div class="card shadow-8 panel-selection white mb4">
								<div class="panel">
									<div class="row">
										<div class="col s12">
											<div class="badge-ed img-text">
												<div class="img">
													<img :src="'/asset/img/user/foto/foto.jpg'">
												</div>
												<div class="text">
													<h6 class="semibold">{{ siswa.nama }}</h6>
													<p>1202170035</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="divider h05"></div>

								<div class="panel">
									<div class="row nm mtb1">
										<div class="col s6 center">
											<h5 class="semibold">20</h5>
											<h6>Utama</h6>
										</div>
										<div class="col s6 center">
											<h5 class="semibold">20</h5>
											<h6>Balasan</h6>
										</div>
									</div>
								</div>

								<div class="divider h05"></div>

								<blockquote>
									<div class="panel">
										<p class="dark8-text semibold labeling">Filter Data</p>
										<div class="row">
											<div class="col s12">
												<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
													<select v-model="cari_tipe" class="select">
														<option value="" selected>Semua Tipe Kontribusi</option>
														<option value="cccaa">Kontribusi Utama</option>
														<option value="asdad">Kontribusi Balasan</option>
													</select>
													<span></span>
												</label>
											</div>
											<div class="col s12">
												<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
													<select v-model="cari_waktu" class="select">
														<option value="" selected>Semua Status Waktu</option>
														<option value="tepat">Kontribusi Tepat Waktu</option>
														<option value="telat">Kontribusi Telat</option>
													</select>
													<span></span>
												</label>
											</div>
										</div>
									</div>
								</blockquote>
							</div>
						</div>
					</section>
				</div>

				<div class="col s12 m12 l8 pl2-res">
					<section v-if="errored">
					</section>

					<section v-else>
						<div v-if="loading" class="mt2">
							<vue-content-loading :width="300" :height="120">
								<rect x="0" y="0" rx="3" ry="4" width="50" height="8"></rect>
								<rect x="77%" y="0" rx="3" ry="4" width="50" height="8"></rect>

								<rect x="0" y="20%" rx="3" ry="4" width="100%" height="1"></rect>

								<rect x="0" y="30%" rx="3" ry="4" width="50" height="8"></rect>
								<rect x="20%" y="30%" rx="3" ry="4" width="50" height="8"></rect>
								<circle cx="90%" cy="35%" r="5"></circle>

								<rect x="0" y="45%" rx="3" ry="4" width="50" height="8"></rect>
								<rect x="20%" y="45%" rx="3" ry="4" width="50" height="8"></rect>
								<circle cx="90%" cy="50%" r="5"></circle>

								<rect x="0" y="60%" rx="3" ry="4" width="50" height="8"></rect>
								<rect x="20%" y="60%" rx="3" ry="4" width="50" height="8"></rect>
								<circle cx="90%" cy="65%" r="5"></circle>

								<rect x="0" y="75%" rx="3" ry="4" width="50" height="8"></rect>
								<rect x="20%" y="75%" rx="3" ry="4" width="50" height="8"></rect>
								<circle cx="90%" cy="80%" r="5"></circle>

								<rect x="0" y="90%" rx="3" ry="4" width="50" height="8"></rect>
								<rect x="20%" y="90%" rx="3" ry="4" width="50" height="8"></rect>
								<circle cx="90%" cy="95%" r="5"></circle>
							</vue-content-loading>
						</div>

						<div v-else>
							<div class="row">
								<div class="col s12 m12 l6">
									<h5 class="primary-text nm mtb1">Kontribusi Siswa</h5>
								</div>
								<div class="col s12 m12 l6 right-align-res">
									<p class="normal dark7-text hide-on-small-only"><span class="chip primary white-text">Tenggat 12 Juni, 13:00</span></p>
								</div>
							</div>

							<div class="divider h05"></div>

							<div class="row mt1">
								<div class="col s12">

									<ul class="collapsible border right-icon popup no-icon-left">

										<li v-for="kontribusi in filteredKontribusi">
											<div class="collapsible-header">
												<i class="material-icons nm"></i>
												<i class="material-icons right">keyboard_arrow_down</i>

												<span v-if="kontribusi.nama === 'cccaa'" class="chip mb0">Kontribusi Utama</span>
												<span v-else class="chip mb0">Kontribusi Balasan</span>

												<span v-if="kontribusi.created_at > diskusis.created_at" class="chip mb0 danger-smoth1">
													{{ moment(kontribusi.created_at).format("H:mm, DD MMMM YYYY") }}
												</span>
												<span v-else class="chip mb0 success-smoth1">
													{{ moment(kontribusi.created_at).format("H:mm, DD MMMM YYYY") }}
												</span>
											</div>
											<div class="collapsible-body">
												<section v-if="kontribusi.nama === 'cccaa'">
													<div class="row">
														<div class="col s12">
															<p class="ltext">
																{{ kontribusi.nama }}
															</p>
														</div>
													</div>
													<div class="row nm">
														<div class="col s12 right-align">
															<a class="matter-button-outlined" @click.prevent="modalBalasClick()">Balas</a>
														</div>
													</div>
												</section>
												<section v-else>
													<div>
														<div class="row nm">
															<div class="title col s12">
																<div class="badge-ed img-text">
																	<div class="img">
																		<img :src="'/asset/img/user/foto/foto.jpg'">
																	</div>
																	<div class="text">
																		<h6 class="semibold">Nama Siswa</h6>
																		<p class="dark7-text">1202170035 <i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020, 13:00</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="ptb0">
															<div class="row pl4-res">
																<div class="col s12">
																	<p class="ltext nm">
																		Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
																		berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
																		Dan tambahkan file TXT dengan format NIM_NAMA
																	</p>
																</div>
															</div>
														</div>
													</div>

													<div class="divider h05"></div>

													<div class="row nm">
														<div class="col s12">
															<h6 class="semibold nm mtb1 primary-text">Balasan</h6>
															<p class="ltext">
																Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
																berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
																Dan tambahkan file TXT dengan format NIM_NAMA
															</p>
														</div>
													</div>
												</section>	
											</div>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>

		<modal-diskusi-add-balasan-component></modal-diskusi-add-balasan-component>

		<div class="fixed-action-btn">
			<a class="btn-floating btn-large primary sidenav-trigger" data-target="sidenav-list">
				<i class="large material-icons">contacts</i>
			</a>
		</div>

		<sidebar-list-jawaban-pengumpulan-component></sidebar-list-jawaban-pengumpulan-component>

	</section>
</template>

<script>
	import moment from "moment"
	import { VueContentLoading } from 'vue-content-loading'

	export default {
		mounted() {
			$('.sidenavs').sidenav();
			this.getData();
			this.getDataDiskusi();
			this.getDataSiswa(this.$route.params.id);
		},
		components: {

			VueContentLoading

		},
		data() {
			return {

				kontribusis:[],
				diskusis:{},
				moment: moment,
				loading: true,
				errored: false,
				cari_tipe: '',
				cari_waktu: '',
				siswa:{},

			}
		},
		computed: {
			filteredKontribusi: function(){
				return this.filteredKontribusisByType(this.kontribusis)
			},
		},
		watch: {
			'$route.params.id'(newId, oldId) {
				this.getDataSiswa(newId)
				this.loading = true;
			}
		},
		methods: {
			getData() {
				let uri =`http://127.0.0.1:8002/api/barang`;

				axios.get(uri).then(response => {
					this.kontribusis = response.data
				}).catch(error => {
					this.errored = true
				}).finally(() => this.loading = false);
			},

			getDataDiskusi() {
				let uri =`http://127.0.0.1:8002/api/barang/${this.$route.params.id}`;

				axios.get(uri).then(response => {
					this.diskusis = response.data

					$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
					$('.select-search').formSelect2({closeOnClick: false});
					$('.select').formSelect({closeOnClick: true});
					$('.modal').modal();
					$('.collapsible').collapsible();

				}).catch(error => {
					this.errored = true
				}).finally(() => this.loading = false);
			},

			filteredKontribusisByType: function(kontribusis){
				return kontribusis.filter(kontribusi => !kontribusi.nama.indexOf(this.cari_tipe))
			},

			modalBalasClick() {
				$('#modal-add-balasan').modal('open');
			},

			getDataSiswa(id) {
				let uri =`http://127.0.0.1:8002/api/barang/${id}`;

				axios.get(uri).then(response => {
					this.siswa = response.data

				}).catch(error => {
					this.errored = true

				}).finally(() => {
					this.loading = false
					this.$nextTick(() => {
						$('.sidenavs').sidenav();
						$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
						$('.select').formSelect({closeOnClick: true});
						$('.modal').modal();
						$('.collapsible').collapsible();
					});
				});
			},
		}
	}
</script>