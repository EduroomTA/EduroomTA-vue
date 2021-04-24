<template>
	<section>

		<sliding-header :threshold-hide="100" :threshold-open="200">
			<template v-slot:first-header>
				
			</template>

			<template v-slot:second-header>
				<section class="sect-sticky-sec-nav">
					<div class="navbar sticky-sec-nav">
						<nav class="nav-dash in-scroll-page">
							<div class="container w60">
								<div class="nav-wrapper">

									<div class="left">
										<div class="hide-on-med-and-down icon-sec-nav">
											<div class="icon-sec-container center-content primary">
												<i class="material-icons icon">content_paste</i>
											</div>
										</div>
										<div class="titles">
											<span class="title">Sprint Retrospective I</span>
											<span class="desc">
												KD1 | Nama BAB
											</span>
										</div>
									</div>

									<ul class="nav-right">
										<router-link tag="li" :to="{ name: 'guru.kelas.mapel.ujian.soal' }">
											<a class="primary-text" href="">Soal</a>
											<div class="nav-actives"></div>
										</router-link>
										<router-link tag="li" :to="{ name: 'guru.kelas.mapel.ujian.rekap' }">
											<a class="primary-text" href="">Rekap</a>
											<div class="nav-actives"></div>
										</router-link>
									</ul>

								</div>
							</div>
						</nav>
					</div>
				</section>
			</template>
		</sliding-header>

		<section class="dark4">
			<section class="container w60">
				<div class="header-detail">
					<div class="center-content icon-page">
						<i class="material-icons icon">content_paste</i>
					</div>
					<div class="title">
						<div class="left-align-res">
							<h5 class="semibold primary-text">Sprint Retrospective I</h5>
							<p class="normal primary-text">KD1 | Nama BAB</p>
						</div>
						<div class="row nm">
							<div class="col s12 m12 l6 left-align-res">
								<p class="normal dark7-text">UTS<i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020</p>
							</div>
							<div class="col s12 m12 l6 right-align-res">
								<p class="normal dark7-text"><span class="badge-text1 primary white-text">Tenggat 12 Juni, 13:00</span></p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>

		<section>
			<section class="container w60">
				<div class="navbar" style="">
					<nav class="nav-dash in-page">
						<div class="nav-wrapper">
							<ul class="nav-left">
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.ujian.soal' }">
									<a class="primary-text" href="">Soal</a>
									<div class="nav-actives"></div>
								</router-link>
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.ujian.rekap' }">
									<a class="primary-text" href="">Rekap</a>
									<div class="nav-actives"></div>
								</router-link>
							</ul>

							<ul class="nav-right">
								<li>
									<a 
									data-target="dropdown-menu-rekap" 
									class="matter-button-outlined button-icon dropdown-trigger drop no-border">
									<i class="material-icons left">assignment_returned</i>Unduh Rekap</a>

									<ul id="dropdown-menu-rekap" class="dropdown-content">
										<li><a>Unduh Pdf</a></li>
										<li><a>Unduh Excel</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</section>
		</section>

		<section class="container w60 mb6">

			<div class="row nm mtb2">
				<div class="col s4">
					<label class="matter-textfield-outlined icon-input left-icon no-span" style="width: 100%">
						<input v-model="cari" type="text" placeholder="Cari Siswa" content="Cari Nama Siswa" v-tippy='{ placement : "bottom" }'/>
						<span></span>
						<i class="material-icons">search</i>
					</label>
				</div>
				<div class="col s3">
					<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
						<select class="select" v-model="cari2">
							<option value="" selected>Semua Status</option>
							<option value="xxxxx">Belum Dikoreksi</option>
							<option value="cccdd">Belum Mengerjakan</option>
							<option value="asdas">Sudah Mengerjakan</option>
						</select>
						<span></span>
					</label>
				</div>
			</div>

			<div class="divider h05"></div>

			<section v-if="errored">
				<p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
			</section>

			<section v-else>
				<div v-if="loading" class="mt2">
					<vcl-table></vcl-table>
				</div>

				<div v-else>
					<table>
						<thead>
							<tr>
								<th>
									<a @click="sort('nama')" class="matter-button-text button-icon" content="Urutkan Berdasarkan Nama" v-tippy='{ placement : "bottom" }'>
										<i 
										v-show="currentSort === 'nama' && currentSortDir === 'asc'" 
										class="material-icons left">expand_less</i>
										<i 
										v-show="currentSort === 'nama' && currentSortDir === 'desc'" 
										class="material-icons left">expand_more</i>

										Siswa
									</a>
								</th>
								<th>
									<a @click="sort('deskripsi')" class="matter-button-text button-icon" content="Urutkan Berdasarkan Status" v-tippy='{ placement : "bottom" }'>
										<i 
										v-show="currentSort === 'deskripsi' && currentSortDir === 'asc'" 
										class="material-icons left">expand_less</i>
										<i 
										v-show="currentSort === 'deskripsi' && currentSortDir === 'desc'" 
										class="material-icons left">expand_more</i>

										Status
									</a>
								</th>
								<th>
									<a @click="sort('jumlah')" class="matter-button-text button-icon" content="Urutkan Berdasarkan Nilai" v-tippy='{ placement : "bottom" }'>
										<i 
										v-show="currentSort === 'jumlah' && currentSortDir === 'asc'" 
										class="material-icons left">expand_less</i>
										<i 
										v-show="currentSort === 'jumlah' && currentSortDir === 'desc'" 
										class="material-icons left">expand_more</i>

										Nilai
									</a>
								</th>
								<th>
									<a @click="sort('jumlah')" class="matter-button-text button-icon" content="Urutkan Berdasarkan Nilai" v-tippy='{ placement : "bottom" }'>
										<i 
										v-show="currentSort === 'jumlah' && currentSortDir === 'asc'" 
										class="material-icons left">expand_less</i>
										<i 
										v-show="currentSort === 'jumlah' && currentSortDir === 'desc'" 
										class="material-icons left">expand_more</i>

										Durasi
									</a>
								</th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							<span v-if="!filteredUsers.length">No results.</span>

							<tr v-for="user in filteredUsers">
								<td>
									<div class="badge-ed img-text">
										<div class="img">
											<img :src="'/asset/img/user/foto/foto.jpg'">
										</div>
										<div class="text">
											<h6 class="semibold">{{ user.nama }}</h6>
											<p>1202170035</p>
										</div>
									</div>
								</td>
								<td>
									<div v-if="user.deskripsi === 'cccdd'">
										<div class="chip danger-smoth1">
											Belum Mengerjakan
										</div>
									</div>
									<div v-else-if="user.deskripsi === 'asdas'">
										<div class="chip success-smoth1">
											Sudah Mengerjakan
										</div>
									</div>
									<div v-else>
										<div class="chip warning-smoth1">
											Belum Dikoreksi
										</div>
									</div>
								</td>
								<td>{{ user.jumlah }}</td>
								<td>{{ user.jumlah }} menit</td>
								<td class="right-align">
									<div v-if="user.deskripsi === 'cccdd'">	
										<button class="matter-button-outlined" disabled>Koreksi</button>
									</div>
									<div v-else>
										<router-link 
										:to="{ name: 'guru.kelas.mapel.tugas.kuis.jawaban', params: { id: user.id} }" 
										class="matter-button-outlined" 
										>Koreksi</router-link>
									</div>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</section>
		</section>

	</section>
</template>

<script>
	import SlidingHeader from "@vuesence/sliding-header"
	import { VclTable } from 'vue-content-loading'

	export default {
		mounted() {
			$('.sidenavs').sidenav();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
			$('.select-search').formSelect2({closeOnClick: false});
			$('.select').formSelect({closeOnClick: true});
			$('.modal').modal();
			this.getDataSiswa();
		},
		components: {
			SlidingHeader,
			VclTable,
		},
		data() {
			return {
				users:[],
				tes:{},
				to_jawaban:{},
				loading: true,
				errored: false,
				cari: '',
				cari2: '',
				currentSort:'nama',
				currentSortDir:'asc'
			}
		},
		computed: {
			filteredUsers: function(){
				return this.filteredUsersByNama(this.filteredUsersByStatus(this.filteredUsersByShortNama(this.users)))
			},
		},
		methods: {
			getDataSiswa() {
				let uri =`http://127.0.0.1:8002/api/barang`;

				axios.get(uri).then(response => {
					this.users = response.data
				}).catch(error => {
					this.errored = true
				}).finally(() => this.loading = false);
			},
			filteredUsersByNama: function(users) {
				return users.filter(user => !user.nama.toLowerCase().indexOf(this.cari.toLowerCase()))
			},
			filteredUsersByStatus: function(users){
				return users.filter(user => !user.deskripsi.indexOf(this.cari2))
			},
			sort: function(s) {
				if (s === this.currentSort) {this.currentSortDir = this.currentSortDir==='asc'?'desc':'asc';}
				this.currentSort = s;
			},
			filteredUsersByShortNama: function() {
				return this.users.sort((a,b) => {
					let modifier = 1;
					if(this.currentSortDir === 'desc') modifier = -1;
					if(a[this.currentSort] < b[this.currentSort]) return -1 * modifier;
					if(a[this.currentSort] > b[this.currentSort]) return 1 * modifier;
					return 0;
				});
			}

		},
	};
</script>

<style>
.sliding-header {
	transition: 0.3s;
}
.sliding-header.hidden {
	top: -100px;
}
</style>