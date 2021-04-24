<template>
	<section>

		<sliding-header :threshold-hide="100" :threshold-open="200">
			<template v-slot:first-header>
				
			</template>

			<template v-slot:second-header>

				<div class="row">
					<div class="col s12 m12 l3">
					</div>
					<div class="col s12 m12 l9">
						<section class="sect-sticky-sec-nav">
							<div class="navbar" style="">
								<nav class="nav-dash in-page">
									<div class="nav-wrapper">
										<ul class="nav-left">
											<router-link tag="li" :to="{ name: 'guru.kelas.rapor.nilai', params: { id: $route.params.id} }">
												<a class="primary-text" href="">Nilai Akademis</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.rapor.sikap', params: { id: $route.params.id} }">
												<a class="primary-text" href="">Nilai Sikap</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.rapor.kehadiran', params: { id: $route.params.id} }">
												<a class="primary-text" href="">Kehadiran</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.rapor.ekstrakurikuler', params: { id: $route.params.id} }">
												<a class="primary-text" href="">Ekstrakurikuler</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.rapor.prestasi', params: { id: $route.params.id} }">
												<a class="primary-text" href="">Prestasi</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.rapor.catatan', params: { id: $route.params.id} }">
												<a class="primary-text" href="">Catatan</a>
												<div class="nav-actives"></div>
											</router-link>
										</ul>
										<ul class="nav-right">
											
										</ul>
									</div>
								</nav>
							</div>
						</section>
					</div>
				</div>

			</template>
		</sliding-header>

		<div class="mt3">
			<div class="row">
				<div class="col s12">
					<div class="badge-ed img-text p1">
						<div class="img">
							<img :src="'/asset/img/user/foto/foto.jpg'">
						</div>
						<div class="text">
							<h6 class="semibold">{{ nama }}</h6>
							<p>{{ id }}</p>
						</div>
					</div>
				</div>
			</div>

			<div class="divider"></div>
		</div>
		
		<div class="navbar" style="">
			<nav class="nav-dash in-page">
				<div class="nav-wrapper">
					<ul class="nav-left">
						<router-link tag="li" :to="{ name: 'guru.kelas.rapor.nilai', params: { id: $route.params.id} }">
							<a class="primary-text" href="">Nilai Akademis</a>
							<div class="nav-actives"></div>
						</router-link>
						<router-link tag="li" :to="{ name: 'guru.kelas.rapor.sikap', params: { id: $route.params.id} }">
							<a class="primary-text" href="">Nilai Sikap</a>
							<div class="nav-actives"></div>
						</router-link>
						<router-link tag="li" :to="{ name: 'guru.kelas.rapor.kehadiran', params: { id: $route.params.id} }">
							<a class="primary-text" href="">Kehadiran</a>
							<div class="nav-actives"></div>
						</router-link>
						<router-link tag="li" :to="{ name: 'guru.kelas.rapor.ekstrakurikuler', params: { id: $route.params.id} }">
							<a class="primary-text" href="">Ekstrakurikuler</a>
							<div class="nav-actives"></div>
						</router-link>
						<router-link tag="li" :to="{ name: 'guru.kelas.rapor.prestasi', params: { id: $route.params.id} }">
							<a class="primary-text" href="">Prestasi</a>
							<div class="nav-actives"></div>
						</router-link>
						<router-link tag="li" :to="{ name: 'guru.kelas.rapor.catatan', params: { id: $route.params.id} }">
							<a class="primary-text" href="">Catatan</a>
							<div class="nav-actives"></div>
						</router-link>
					</ul>
					<ul class="nav-right">
						
					</ul>
				</div>
			</nav>
		</div>

	</section>
</template>

<script>
	import SlidingHeader from "@vuesence/sliding-header"

	export default {
		data(){
			return {
				nama: '',
				id: ''
			}
		},
		mounted() {
			this.getdata();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
		},
		components: {
			SlidingHeader,
		},
		methods: {
			getdata() {
				this.nama = this.$root.$refs.SidebarErapor.nama;
				this.id = this.$root.$refs.SidebarErapor.id;
			}
		},	
		watch: {
			'$route' () {
				this.nama = this.$root.$refs.SidebarErapor.nama;
				this.id = this.$root.$refs.SidebarErapor.id;
			}
		}
	}
</script>