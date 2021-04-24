<template>
	<div id="sidenav-list" class="sidenavs sidenav with-header" style="width: 30rem;">
		<div class="row valign-wrapper nm mtb1">
			<div class="col s9">
				<h5 class="nm">Daftar Siswa</h5>
			</div>
			<div class="col s3 right-align valign">
				<a class="matter-button-circle dropdown-trigger no-drop" data-target="dropdown-filter">
					<i class="material-icons">filter_list</i>
				</a>

				<a class="matter-button-circle sidenav-close"><i class="material-icons">clear</i></a>

				<section v-if="$route.name === 'guru.kelas.mapel.tugas.pengumpulan.jawaban'">
					<ul id="dropdown-filter" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="" v-model="status">
								<span>Semua Status</span>
							</label>
						</li>
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="asdas" v-model="status" checked>
								<span>Belum Mengerjakan</span>
							</label>
						</li>
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="xxxxx" v-model="status">
								<span>Belum Dikoreksi</span>
							</label>
						</li>
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="cccdd" v-model="status">
								<span>Sudah Dikoreksi</span>
							</label>
						</li>
					</ul>
				</section>

				<section v-else-if="$route.name === 'guru.kelas.mapel.tugas.kuis.jawaban'">
					<ul id="dropdown-filter" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="" v-model="status">
								<span>Semua Status</span>
							</label>
						</li>
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="asdas" v-model="status" checked>
								<span>Belum Mengerjakan</span>
							</label>
						</li>
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="xxxxx" v-model="status">
								<span>Belum Dikoreksi</span>
							</label>
						</li>
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="cccdd" v-model="status">
								<span>Sudah Dikoreksi</span>
							</label>
						</li>
					</ul>
				</section>

				<section v-else-if="$route.name === 'guru.kelas.mapel.diskusi.kontribusi'">
					<ul id="dropdown-filter" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="" v-model="status">
								<span>Semua Status</span>
							</label>
						</li>
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="cccdd" v-model="status" checked>
								<span>Pernah Berkontribusi</span>
							</label>
						</li>
						<li class="ptb05" style="min-height: auto;">
							<label class="matter-radio">
								<input type="radio" value="xxxxx" v-model="status">
								<span>Belum Berkontribusi</span>
							</label>
						</li>
					</ul>
				</section>

				<section v-else></section>

			</div>
		</div>

		<div class="content with-border-bottom">
			<ul>
				<li v-for="siswa in filteredUsers" v-bind:class="{'page-item':true, 'active':(route_id === siswa.id)}">
					<router-link :to="{ name: link_to, params: { id: siswa.id} }" class="sidenav-close">
						<div class="row nm valign-wrapper">
							<div class="col s6">
								<div class="badge-ed img-text">
									<div class="img">
										<img :src="'/asset/img/user/foto/foto.jpg'">
									</div>
									<div class="text">
										<div class="text-nowarp" style="width: 11rem;">
											<h6 class="semibold">{{ siswa.nama }}</h6>
											<p>1202170035</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col s6 right-align valign">
								<section v-if="$route.name === 'guru.kelas.mapel.tugas.pengumpulan.jawaban'">
									<div v-if="siswa.deskripsi === 'cccdd'" class="chip success-smoth1">75</div>
									<div v-else-if="siswa.deskripsi === 'asdas'" class="chip danger-smoth1">Belum Mengerjakan</div>
									<div v-else class="chip">Belum Dikoreksi</div>
								</section>

								<section v-else-if="$route.name === 'guru.kelas.mapel.tugas.kuis.jawaban'">
									<div v-if="siswa.deskripsi === 'cccdd'" class="chip success-smoth1">75</div>
									<div v-else-if="siswa.deskripsi === 'asdas'" class="chip danger-smoth1">Belum Mengerjakan</div>
									<div v-else class="chip">Belum Dikoreksi</div>
								</section>

								<section v-else-if="$route.name === 'guru.kelas.mapel.diskusi.kontribusi'">
									<div v-if="siswa.deskripsi === 'cccdd'" class="chip success-smoth1">10 Kontribusi</div>
									<div v-else class="chip danger-smoth1">Belum Berkontribusi</div>
								</section>

								<section v-else></section>
							</div>
						</div>
					</router-link>
				</li> 
			</ul>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				siswas:[],
				route_id: 0,
				link_to: '',
				status:''
			}
		},
		mounted() {
			this.getSiswa();
			$('.dropdown-trigger.no-drop').dropdown({
				closeOnClick: false,
				alignment: 'right'
			});
		},
		computed: {
			filteredUsers: function(){
				return this.filteredUsersByStatus(this.siswas)
			},
		},
		methods: {
			getSiswa() {
				let uri =`http://127.0.0.1:8002/api/barang`;

				axios.get(uri).then(response => {
					this.siswas = response.data
				});
			},
			filteredUsersByStatus: function(siswas){
				return siswas.filter(siswa => !siswa.deskripsi.indexOf(this.status))
			},
		},
		watch: {
			'$route' () {
				this.route_id = this.$route.params.id

				if (this.$route.name === 'guru.kelas.mapel.tugas.pengumpulan.jawaban') {
					this.link_to = 'guru.kelas.mapel.tugas.pengumpulan.jawaban'

				} else if(this.$route.name === 'guru.kelas.mapel.tugas.kuis.jawaban') {
					this.link_to = 'guru.kelas.mapel.tugas.kuis.jawaban'
					
				} else if(this.$route.name === 'guru.kelas.mapel.diskusi.kontribusi') {
					this.link_to = 'guru.kelas.mapel.diskusi.kontribusi'

				} else {
					
				}
			}
		}
	}
</script>