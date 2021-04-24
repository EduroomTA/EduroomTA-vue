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

		<section class="container w95 mtb3 row">
			<div class="col s12 m12 l4 pr2-res">
				<section v-if="errored2">
				</section>

				<section v-else>
					<div v-if="loading2" class="mt2">
						<vue-content-loading :width="300" :height="250">
							<circle cx="10%" cy="18" r="18"></circle>
							<rect x="20%" y="0" rx="3" ry="4" width="120" height="10"></rect>
							<rect x="20%" y="10%" rx="3" ry="4" width="60" height="10"></rect>

							<rect x="0" y="20%" rx="3" ry="4" width="100%" height="2"></rect>

							<rect x="40%" y="30%" rx="3" ry="4" width="60" height="10"></rect>
							<rect x="33%" y="40%" rx="3" ry="4" width="100" height="10"></rect>

							<rect x="0" y="50%" rx="3" ry="4" width="100%" height="2"></rect>

							<rect x="0" y="60%" rx="3" ry="4" width="120" height="10"></rect>
							<circle cx="95%" cy="62%" r="10"></circle>

							<rect x="0" y="72%" rx="3" ry="4" width="100%" height="2"></rect>

							<rect x="0" y="80%" rx="3" ry="4" width="120" height="10"></rect>
							<circle cx="95%" cy="82%" r="10"></circle>
						</vue-content-loading>
					</div>

					<div v-else>
						<div class="card shadow-8 panel-selection white mb4" style="padding-bottom: 0">
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

							<div class="divider h05 mtb1"></div>

							<div class="panel mb1">
								<div class="row nm">
									<div class="col s12 center">
										<span class="semibold primary-text" style="font-size: 2rem">20<span class="dark8-text" style="font-size: 1.2rem"> /100 poin</span></span>
									</div>
								</div>
							</div>

							<ul class="collapsible border right-icon no-radius">
								<li>
									<div class="collapsible-header"><i class="material-icons dark8-text">timer</i><i class="material-icons right dark8-text">keyboard_arrow_down</i><span>Waktu Pengerjaan</span></div>
									<div class="collapsible-body pl0">

										<blockquote>
											<div class="row nm">
												<div class="col s12 m12 l4">
													<p class="bold nm dark8-text">Pengerjaan</p>
												</div>
												<div class="col s12 m12 l8">
													120 menit
												</div>
											</div>

											<div class="divider h05 mtb1"></div>

											<div class="row nm">
												<div class="col s12 m12 l4">
													<p class="bold nm dark8-text">Mulai</p>
												</div>
												<div class="col s12 m12 l8">
													Senin 12 April 2021, 12:00
												</div>
											</div>

											<div class="divider h05 mtb1"></div>

											<div class="row nm">
												<div class="col s12 m12 l4">
													<p class="bold nm dark8-text">Selesai</p>
												</div>
												<div class="col s12 m12 l8">
													Senin 12 April 2021, 12:00
												</div>
											</div>
										</blockquote>

									</div>
								</li>
								<li class="active">
									<div class="collapsible-header"><i class="material-icons dark8-text">view_module</i><i class="material-icons right dark8-text">keyboard_arrow_down</i><span>Pengerjaan Siswa</span></div>
									<div class="collapsible-body">
										<div class="row">
											<div class="col s12 m12 l6">
												<p class="dark8-text semibold labeling">Tipe Soal</p>
												<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
													<select v-model="cari_tipe" class="select">
														<option value="" selected>Semua</option>
														<option value="cccaa">Pilihan Ganda</option>
														<option value="asdad">Benar/Salah</option>
														<option value="asdad">Jawaban Singkat</option>
													</select>
													<span></span>
												</label>
											</div>
											<div class="col s12 m12 l6">
												<p class="dark8-text semibold labeling">Nilai</p>
												<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
													<select v-model="cari_waktu" class="select">
														<option value="" selected>Semua</option>
														<option value="tepat">Benar</option>
														<option value="telat">Salah</option>
													</select>
													<span></span>
												</label>
											</div>
										</div>

										<div class="row nm">
											<div v-for="jw in jawabans" class="col s2 tt">
												<a href="#!" @click.prevent="getDataJawaban(jw.id)">
													<div v-if="jw.nama === 'cccaa'" class="tb tb-success" v-bind:class="jw.id == id_start?' success white-text':'success-smoth2 dark-text'">
														{{ jw.id }}
													</div>
													<div v-else class="tb tb-danger" v-bind:class="jw.id == id_start?' danger white-text':'danger-smoth2 dark-text'">
														{{ jw.id }}
													</div>
												</a>
											</div>
										</div>

									</div>
								</li>
							</ul>
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
							<circle cx="5%" cy="10" r="10"></circle>
							<rect x="10%" y="0" rx="3" ry="4" width="50" height="8"></rect>
							<rect x="77%" y="0" rx="3" ry="4" width="50" height="8"></rect>
							<rect x="10%" y="15%" rx="3" ry="4" width="200" height="8"></rect>
							<rect x="10%" y="25%" rx="3" ry="4" width="250" height="8"></rect>
							<rect x="10%" y="35%" rx="3" ry="4" width="230" height="8"></rect>
							<rect x="10%" y="45%" rx="3" ry="4" width="250" height="8"></rect>
							<rect x="10%" y="65%" rx="3" ry="4" width="250" height="40"></rect>
						</vue-content-loading>
					</div>

					<div v-else>
						<div class="row mt1">
							<div class="col s12 m12 l1">
								<h6 style="padding: 1rem 0;background: var(--color-danger-soft2);border-radius: 50%;text-align: center;width: 40px;height: 40px;margin: auto;line-height: 0.7;border: 1px solid var(--color-danger);">{{jawaban.id}}
								</h6>
							</div>
							<div class="col s12 m12 l11">
								<div>
									<div class="row">
										<div class="col s6">
											<p class="normal nm dark7-text">Poin 0/1</p>
										</div>
										<div class="col s6 right-align">
											<p class="normal nm dark7-text">Dijawab dalam 60 detik</p>
										</div>
									</div>

									<p v-dummy="60" class="semibold nm" style="line-height: revert;"></p>
								</div>

								<div class="divider h05 mtb2"></div>

								<div class="mb2">
									<h6>Jawaban</h6>
								</div>

								<div class="row">
									<div class="col s12">
										<p v-dummy="60" class="semibold nm" style="line-height: revert;"></p>
									</div>

									<div class="col s12">
										<div class="divider h05 mtb2"></div>
									</div>

									<div class="col s12">
										<div class="row">
											<div class="col s12 m12 l6">
												<button class="matter-button-outlined button-icon success-text"><i class="material-icons left">done</i>Benar</button>
												<button class="matter-button-outlined button-icon danger-text"><i class="material-icons left">close</i>Salah</button>
											</div>
											<div class="col s12 m12 l6">

											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</section>
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
	import moment from "moment"
	import { VueContentLoading } from 'vue-content-loading'

	export default {
		mounted() {
			$('.sidenavs').sidenav();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
			$('.select').formSelect({closeOnClick: true});
			$('.modal').modal();
			$('.collapsible').collapsible();

			this.getData();
			this.getDataSiswa(this.$route.params.id);
		},
		components: {

			VueContentLoading

		},
		data() {
			return {

				jawabans:[],
				jawaban:{},
				siswa:{},
				id_start: '',
				moment: moment,

				loading: true,
				errored: false,

				loading2: true,
				errored2: false,

				cari_tipe: '',
				cari_waktu: '',

			}
		},
		computed: {
			filteredKontribusi: function(){
				return this.filteredKontribusisByType(this.jawabans)
			},
		},
		watch: {
			'$route.params.id'(newId, oldId) {
				this.getDataSiswa(newId)
				this.loading2 = true;
			}
		},
		methods: {
			getData() {
				let uri =`http://127.0.0.1:8002/api/barang`;

				axios.get(uri).then(response => {
					this.jawabans = response.data
					$('.collapsible').collapsible();

					this.jawaban = this.jawabans[0]
					this.id_start = this.jawabans[0].id

					console.log(this.id_start)

				}).catch(error => {
					this.errored = true

				}).finally(() => this.loading = false);
			},

			getDataJawaban(id) {
				window.scrollTo({top: 0, behavior: 'smooth'});
				
				this.loading=true
				this.errored=false
				this.id_start = id

				let uri =`http://127.0.0.1:8002/api/barang/${id}`;

				axios.get(uri).then(response => {
					this.jawaban = response.data

				}).catch(error => {
					this.errored = true

				}).finally(() => this.loading = false);
			},

			getDataSiswa(id) {
				this.loading=true
				this.errored=false

				let uri =`http://127.0.0.1:8002/api/barang/${id}`;

				axios.get(uri).then(response => {
					this.siswa = response.data

				}).catch(error => {
					this.errored2 = true

				}).finally(() => {
					this.loading2 = false
					this.$nextTick(() => {
						$('.sidenavs').sidenav();
						$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
						$('.select').formSelect({closeOnClick: true});
						$('.modal').modal();
						$('.collapsible').collapsible();

						if (this.id_start == this.jawabans[0].id) {
							this.getData()

						} else {
							this.getDataJawaban(this.id_start)
						}
					});
				});
			},
		}
	}
</script>