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
										<i class="material-icons icon">assignment</i>
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

								<circle cx="5%" cy="30%" r="8"></circle>
								<rect x="10%" y="28%" rx="3" ry="4" width="100" height="10"></rect>

								<rect x="0" y="40%" rx="3" ry="4" width="100%" height="2"></rect>

								<rect x="15%" y="50%" rx="3" ry="4" width="250" height="30"></rect>
								<rect x="15%" y="70%" rx="3" ry="4" width="250" height="65"></rect>
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
													<h6 class="semibold">{{ jawabans.nama }}</h6>
													<p>1202170035</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="divider h05"></div>

								<div class="panel">
									<div class="row nm" style="padding: 1rem 0">
										<div class="col s12">
											<label class="matter-checkbox">
												<input type="checkbox">
												<span>Saya telah mengkoreksi pekerjaan ini</span>
											</label>
										</div>
									</div>
								</div>

								<div class="divider h05"></div>

								<blockquote>
									<div class="panel">
										<div class="row">
											<div class="col s12 mb1">
												<p class="normal dark7-text nm">Pengetahuan<i class="material-icons line-icon-p">stop_circle</i>UTS</p>
											</div>
											<div class="col s12">
												<label class="matter-textfield-outlined no-span" style="width: 100%">
													<input id="formnilai" type="text" placeholder="Nilai" />
													<span></span>
												</label>
											</div>
										</div>
									</div>

									<div class="panel">
										<div class="row">
											<div class="col s12">
												<label id="ta-normal" class="matter-textfield-outlined no-span" style="width: 100%">
													<textarea placeholder="Catatan"></textarea>
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
							<vue-content-loading :width="300" :height="220">
								<rect x="0" y="0" rx="3" ry="4" width="50" height="8"></rect>
								<rect x="77%" y="5%" rx="3" ry="4" width="50" height="8"></rect>
								<rect x="0" y="5%" rx="3" ry="4" width="150" height="8"></rect>

								<rect x="0" y="15%" rx="3" ry="4" width="100%" height="1"></rect>

								<circle cx="2%" cy="22%" r="6"></circle>
								<rect x="5%" y="20%" rx="3" ry="4" width="50" height="8"></rect>

								<rect x="30%" y="20%" rx="3" ry="4" width="100" height="25"></rect>
								<rect x="65%" y="20%" rx="3" ry="4" width="100" height="25"></rect>

								<rect x="30%" y="33%" rx="3" ry="4" width="100" height="25"></rect>
								<rect x="65%" y="33%" rx="3" ry="4" width="100" height="25"></rect>

								<rect x="0" y="50%" rx="3" ry="4" width="100%" height="1"></rect>

								<circle cx="2%" cy="57%" r="6"></circle>
								<rect x="5%" y="55%" rx="3" ry="4" width="50" height="8"></rect>

								<rect x="30%" y="55%" rx="3" ry="4" width="100" height="8"></rect>
								<rect x="30%" y="60%" rx="3" ry="4" width="200" height="8"></rect>
								<rect x="30%" y="65%" rx="3" ry="4" width="150" height="8"></rect>
								<rect x="30%" y="70%" rx="3" ry="4" width="110" height="8"></rect>
							</vue-content-loading>
						</div>

						<div v-else>
							<div class="row nm">
								<div class="col s12">
									<h5 class="primary-text nm">Jawaban Siswa</h5>
								</div>
							</div>

							<div class="row nm">
								<div class="col s12 m12 l6">
									<p class="normal dark7-text">Dikirim pada 13:00, 27 Januari 2021</p>
								</div>
								<div class="col s12 m12 l6 right-align-res">
									<p class="normal dark7-text hide-on-small-only"><span class="chip primary white-text">Tenggat 12 Juni, 13:00</span></p>
								</div>
							</div>

							<div class="divider h05 mtb1"></div>

							<div class="row">
								<div class="col s12 m12 l2">
									<h6 class="line-icon-text primary-text semibold">
										<i class="material-icons primary-text line-icon-p" style="font-size: 20px">attach_file</i>File
									</h6>
								</div>
								<div class="col s12 m12 l10">
									<div class="row mb0">
										<div class="col s12 m12 l6">
											<a href="#!">
												<div class="card outlined row mlr01 p05 hoverable-bg-dark" content="Nama File" v-tippy='{ placement : "bottom" }'>
													<div class="col s2 p0 center">
														<i class="material-icons icon-small-incard">
															chrome_reader_mode
														</i>
													</div>
													<div class="col s10">
														<div class="text-nowarp card-file dark-text">
															<span>Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File</span>
														</div>
														<p class="nm primary-text">2 mb</p>
													</div>
												</div>
											</a>
										</div>

										<div class="col s12 m12 l6">
											<a href="#!">
												<div class="card outlined row mlr01 p05 hoverable-bg-dark" content="Nama File" v-tippy='{ placement : "bottom" }'>
													<div class="col s2 p0 center">
														<i class="material-icons icon-small-incard">
															chrome_reader_mode
														</i>
													</div>
													<div class="col s10">
														<div class="text-nowarp card-file dark-text">
															<span>Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File</span>
														</div>
														<p class="nm primary-text">2 mb</p>
													</div>
												</div>
											</a>
										</div>

										<div class="col s12 m12 l6">
											<a href="#!">
												<div class="card outlined row mlr01 p05 hoverable-bg-dark" content="Nama File" v-tippy='{ placement : "bottom" }'>
													<div class="col s2 p0 center">
														<i class="material-icons icon-small-incard">
															chrome_reader_mode
														</i>
													</div>
													<div class="col s10">
														<div class="text-nowarp card-file dark-text">
															<span>Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File Nama File</span>
														</div>
														<p class="nm primary-text">2 mb</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="divider h05 mtb1"></div>

							<div class="row">
								<div class="col s12 m12 l2">
									<h6 class="line-icon-text primary-text semibold">
										<i class="material-icons primary-text line-icon-p" style="font-size: 20px">subject</i>Teks
									</h6>
								</div>
								<div class="col s12 m12 l10">
									<p class="ltext">
										Pengajar dapat memposting 2 jenis pertanyaan: pertanyaan dengan jawaban singkat atau pilihan ganda. Untuk pertanyaan jawaban singkat, Anda perlu memasukkan jawaban. Untuk pertanyaan pilihan ganda, Anda perlu memilih satu opsi. Anda dapat melihat dan menjawab pertanyaan di halaman Tugas Kelas atau halaman Forum. 
										Pengajar dapat memposting 2 jenis pertanyaan: pertanyaan dengan jawaban singkat atau pilihan ganda. Untuk pertanyaan jawaban singkat, Anda perlu memasukkan jawaban. Untuk pertanyaan pilihan ganda, Anda perlu memilih satu opsi. Anda dapat melihat dan menjawab pertanyaan di halaman Tugas Kelas atau halaman Forum. 
										Pengajar dapat memposting 2 jenis pertanyaan: pertanyaan dengan jawaban singkat atau pilihan ganda. Untuk pertanyaan jawaban singkat, Anda perlu memasukkan jawaban. Untuk pertanyaan pilihan ganda, Anda perlu memilih satu opsi. Anda dapat melihat dan menjawab pertanyaan di halaman Tugas Kelas atau halaman Forum. 
										Pengajar dapat memposting 2 jenis pertanyaan: pertanyaan dengan jawaban singkat atau pilihan ganda. Untuk pertanyaan jawaban singkat, Anda perlu memasukkan jawaban. Untuk pertanyaan pilihan ganda, Anda perlu memilih satu opsi. Anda dapat melihat dan menjawab pertanyaan di halaman Tugas Kelas atau halaman Forum. 
									</p>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</section>

		<div class="fixed-action-btn">
			<a class="btn-floating btn-large primary sidenav-trigger" data-target="sidenav-list">
				<i class="large material-icons">contacts</i>
			</a>
		</div>

		<sidebar-list-jawaban-pengumpulan-component></sidebar-list-jawaban-pengumpulan-component>

	</section>
</template>

<script>
	import VueLoadingButton from 'vue-loading-button'
	import { VueContentLoading } from 'vue-content-loading'

	export default {
		components: {
			VueContentLoading,
			VueLoadingButton
		},
		created() {
			this.$root.$refs.JawabanPengumpulan = this;
		},
		data() {
			return {
				jawabans:{},
				loading: true,
				errored: false,

				isLoading: false,
				isEnd: true,
			}
		},
		mounted () {
			this.getJawaban(this.$route.params.id);
		},
		watch: {
			'$route.params.id'(newId, oldId) {
				this.getJawaban(newId)
				this.loading = true;
			}
		},
		methods: {
			getJawaban(id) {
				let uri =`http://127.0.0.1:8002/api/barang/${id}`;

				axios.get(uri).then(response => {
					this.jawabans = response.data
					$('.sidenavs').sidenav();

				}).catch(error => {
					this.errored = true
				}).finally(() => this.loading = false);
			},
			handleClick() {
				const v = this;
				this.isLoading = true;
				this.disabled = 1;

				setTimeout(() => {
					this.isLoading = false;
					v.isEnd = false;

					if(v.isEnd == false) {
						this.disabled = 0;

						$('.modal').modal('close');
					}
				}, 2000);
			}
		}
	}
</script>