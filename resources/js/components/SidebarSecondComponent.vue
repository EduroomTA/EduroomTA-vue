<template>
	<section>

		<section v-if="$route.path.includes('/guru/kelas/rapor/')">
			<div id="sidenav-list" class="sidenavs sidenav with-header sidenav-fixed sidenav-dash-t" style="width: 22rem; padding-bottom: 0 !important; margin-top: 4.4rem;">

				<div v-if="init == false" class="header row valign-wrapper">
					<div class="col s8">
						<a class="matter-button-outlined button-icon no-border modal-trigger" href="#modal-unduh">
							<i class="material-icons left">assignment_returned</i>Unduh Rekap
						</a>
					</div>

					<div class="col s4 right-align valign center">
						<a class="matter-button-circle" @click.prevent="getSearch()"><i class="material-icons">search</i></a>

						<a class="matter-button-circle dropdown-trigger no-drop" data-target="dropdown-filter">
							<i class="material-icons">filter_list</i>
						</a>

						<ul id="dropdown-filter" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
							<li class="ptb05" style="min-height: auto;">
								<label class="matter-radio">
									<input type="radio" value="" v-model="fil_status">
									<span>Semua Nilai</span>
								</label>
							</li>
							<li class="ptb05" style="min-height: auto;">
								<label class="matter-radio">
									<input type="radio" value="cccdd" v-model="fil_status">
									<span>Nilai Lengkap</span>
								</label>
							</li>
							<li class="ptb05" style="min-height: auto;">
								<label class="matter-radio">
									<input type="radio" value="asdas" v-model="fil_status">
									<span>Nilai Belum Lengkap</span>
								</label>
							</li>
						</ul>
					</div>
				</div>

				<div v-else class="header row valign-wrapper">
					<div class="col s9 valign">
						<label class="matter-textfield-outlined icon-input left-icon no-span" style="width: 100%;">
							<input v-model="cari_nama" type="text" placeholder="Cari Siswa" content="Cari Siswa" v-tippy='{ placement : "bottom" }'/>
							<span></span> 
							<i class="material-icons">search</i>
						</label>
					</div>
					<div class="col s3 center">
						<a class="matter-button-circle" @click.prevent="closeSearch()"><i class="material-icons">close</i></a>
					</div>
				</div>

				<div class="content with-border-bottom" style="height: 574px !important;">
					<section v-if="errored">
						<p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
					</section>

					<section v-else>
						<div v-if="loading" class="mt2">
							<ul>
								<li>
									<div style="margin: 1rem 0">
										<vue-content-loading :width="300" :height="50">
											<circle cx="10%" cy="30" r="20"></circle>
											<rect x="70" y="15" rx="8" ry="6" width="200" height="16"></rect>
											<rect x="70" y="35" rx="8" ry="6" width="100" height="16"></rect>
										</vue-content-loading>
									</div>
								</li>
								<li>
									<div style="margin: 1rem 0">
										<vue-content-loading :width="300" :height="50">
											<circle cx="10%" cy="30" r="20"></circle>
											<rect x="70" y="15" rx="8" ry="6" width="200" height="16"></rect>
											<rect x="70" y="35" rx="8" ry="6" width="100" height="16"></rect>
										</vue-content-loading>
									</div>
								</li>
								<li>
									<div style="margin: 1rem 0">
										<vue-content-loading :width="300" :height="50">
											<circle cx="10%" cy="30" r="20"></circle>
											<rect x="70" y="15" rx="8" ry="6" width="200" height="16"></rect>
											<rect x="70" y="35" rx="8" ry="6" width="100" height="16"></rect>
										</vue-content-loading>
									</div>
								</li>
								<li>
									<div style="margin: 1rem 0">
										<vue-content-loading :width="300" :height="50">
											<circle cx="10%" cy="30" r="20"></circle>
											<rect x="70" y="15" rx="8" ry="6" width="200" height="16"></rect>
											<rect x="70" y="35" rx="8" ry="6" width="100" height="16"></rect>
										</vue-content-loading>
									</div>
								</li>
								<li>
									<div style="margin: 1rem 0">
										<vue-content-loading :width="300" :height="50">
											<circle cx="10%" cy="30" r="20"></circle>
											<rect x="70" y="15" rx="8" ry="6" width="200" height="16"></rect>
											<rect x="70" y="35" rx="8" ry="6" width="100" height="16"></rect>
										</vue-content-loading>
									</div>
								</li>
								<li>
									<div style="margin: 1rem 0">
										<vue-content-loading :width="300" :height="50">
											<circle cx="10%" cy="30" r="20"></circle>
											<rect x="70" y="15" rx="8" ry="6" width="200" height="16"></rect>
											<rect x="70" y="35" rx="8" ry="6" width="100" height="16"></rect>
										</vue-content-loading>
									</div>
								</li>
							</ul>
						</div>

						<div v-else>
							<ul>
								<li v-if="!filterSiswas.length" class="page-item nb">
									<div class="center" style="padding: 2rem 0">
										<h6>Pencarian tidak ditemukan</h6>
									</div>
								</li>
								<router-link tag="li" v-for="siswa in filterSiswas" :to="{ name: route_name, params: { id: siswa.id} }" class="page-item">
									<a href="">
										<div class="row nm valign-wrapper">
											<div class="col s6">
												<div class="badge-ed img-text">
													<div class="img">
														<img :src="'/asset/img/user/foto/foto.jpg'">
													</div>
													<div class="text">
														<div class="text-nowarp" style="width: 11rem;">
															<h6 class="semibold">{{ siswa.nama }}</h6>
															<p>{{ siswa.id }}</p>
														</div>
													</div>
												</div>
											</div>
											<div class="col s6 right-align valign">
												<span v-if="siswa.deskripsi === 'cccdd'" class="material-icons success-text" style="font-size: 12px;">circle</span>

												<span v-else-if="siswa.deskripsi === 'asdas'" class="material-icons danger-text" style="font-size: 12px;">circle</span>
												<span v-else class="material-icons danger-text" style="font-size: 12px;">circle</span>
											</div>
										</div>
									</a>
								</router-link> 
							</ul>
						</div>
					</section>
				</div>
			</div>

			<modal-rapor-unduh-rekap-component></modal-rapor-unduh-rekap-component>
		</section>

		<section v-else></section>

	</section>
</template>

<script>
	import { VueContentLoading } from 'vue-content-loading'

	export default {
		data() {
			return {
				siswas:[],
				siswass:[],
				route_name: '',
				loading: true,
				errored: false,
				nama: '',
				id: '',
				fil_status:'',
				cari_nama:'',
				length: 'aa',
				params: null,

				init: false,
			}
		},
		created() {
			this.$root.$refs.SidebarErapor = this;	
		},
		mounted() {
			this.route_name = this.$route.name;
		},
		components: {
			VueContentLoading
		},
		computed: {
			filterSiswas: function(){
				return this.filterUsersByStatus(this.filteredUsersByNama(this.siswas))
			},
		},
		methods: {
			getDataSiswa() {
				let uri =`http://127.0.0.1:8002/api/barang`;
				axios.get(uri).then(response => {
					this.siswas = response.data
					
				}).catch(error => {
					this.errored = true

				}).finally(() => {
					this.loading = false
					this.$nextTick(() => {
						$('.dropdown-trigger.no-drop').dropdown({closeOnClick: false,alignment: 'right'});
						$('.modal').modal();
					});
				});
			},
			get() {
				for (var i = this.siswas.length - 1; i >= 0; i--) {
					if (this.siswas[i].id === Number(this.$route.params.id)) {
						this.nama = this.siswas[i].nama
						this.id = this.siswas[i].id
					}
				}
			},
			filteredUsersByNama: function(siswas) {
				return siswas.filter(siswa => !siswa.nama.toLowerCase().indexOf(this.cari_nama.toLowerCase()))
			},
			filterUsersByStatus: function(siswas){
				return siswas.filter(siswa => !siswa.deskripsi.indexOf(this.fil_status))
			},




			getSearch() {
				this.init = true;
			},
			closeSearch() {
				this.init = false;
				this.$nextTick(() => {
					$('.dropdown-trigger.no-drop').dropdown({closeOnClick: false,alignment: 'right'});
					$('.modal').modal();
				});
			},
		},
		watch: {
			'$route'() {
				if (this.$route.path.includes('/guru/kelas/rapor/')) {
					this.get();
					this.getDataSiswa();
				}
			},
		},
	}
</script>