<template>
	<section>
		<section v-if="$route.name === 'login' || $route.path.includes('/register/')">	
		</section>

		<section v-else-if="$route.path.includes('/guru') || $route.path.includes('/guru/')">
			<header>
				<div class="navbar-fixed">
					<nav class="nav-dash" v-bind:class="{ 'noshad': isNoshadow, 'border': isBorder }">
						<div class="nav-wrapper">
							<div class="row">
								<div class="col s12">

									<!-- LEFT CONTENT -->
									<section v-if="$route.name === 'guru.kelas.mapel.tugas.pengumpulan.jawaban' || $route.name === 'guru.kelas.mapel.diskusi.kontribusi' || $route.name === 'guru.kelas.mapel.create.topik' || $route.name === 'guru.kelas.mapel.tugas.kuis.jawaban'">
										<ul class="left">
											<li>
												<div class="btn-sec-nav">
													<a  @click="$router.go(-1)" class="matter-button-circle">
														<i class="material-icons">arrow_back</i>
													</a>
												</div>
											</li>
											<li>
												<div class="brand-logo dark-text text-logo long" style="position: absolute;top: -0.5rem;">
													<span>
														Pendidikan Pancasila dan Kewarganegaraan
													</span>
													<span class="primary-text" style="position: absolute;left: 0;top: 1.4rem;font-size: 0.9rem;letter-spacing: 0.03rem;">
														8C | 2020/2021
													</span>
												</div>
											</li>
										</ul>
									</section>

									<section v-else>
										<ul class="left">
											<li>
												<a href="#" data-target="sidenav-guru" class="sidenav-trigger show-on-large show-on-medium show-on-small primary-text nm">
													<i class="material-icons">menu</i>
												</a>
											</li>
											<li>
												<!-- start title navbar -->
												<section v-if="$route.name === 'guru.kelas.mapels' || $route.name === 'guru.kelas.anggota' || $route.path.includes('/guru/kelas/rapor/')">
													<router-link class="brand-logo dark-text text-logo" :to="{ name: 'guru.kelas.mapels' }" style="position: absolute;top: -0.5rem;">
														<span>8C</span>
														<span class="primary-text" style="position: absolute;left: 0;top: 1.4rem;font-size: 0.9rem;letter-spacing: 0.03rem;">
															2020/2021
														</span>
													</router-link>
												</section>

												<section v-else-if="$route.path.includes('/guru/kelas/mapel/')">
													<router-link class="brand-logo dark-text text-logo" :to="{ name: 'guru.kelas.mapel' }" style="position: absolute;top: -0.5rem;">
														<span>Pendidikan Pancasila dan Kewarganegaraan</span>
														<span class="primary-text" style="position: absolute;left: 0;top: 1.4rem;font-size: 0.9rem;letter-spacing: 0.03rem;">
															8C | 2020/2021
														</span>
													</router-link>
												</section>

												<section v-else-if="$route.name === 'guru.tinjauan'">
													<router-link class="brand-logo dark-text text-logo" :to="{ name: 'guru.tinjauan' }" style="position: absolute;top: -0.5rem;">
														<h5 class="dark-text nm mtb105">Tinjauan</h5>
													</router-link>
												</section>

												<section v-else>
													<router-link class="brand-logo" :to="{ name: 'guru.dashboard' }">
														<img class="responsive-img" :src="'/asset/img/logo/asset_erlogo_blue.png'" width="100px">
													</router-link>
												</section>
												<!-- end title navbar -->
											</li>
										</ul>
									</section>

									<!-- CENTER CONTENT -->
									<section v-if="$route.name === 'guru.kelas.mapels' || $route.name === 'guru.kelas.anggota' || $route.path.includes('/guru/kelas/rapor/')">
										<ul class="nav-center nav-menu-large hide-on-med-and-down">
											<router-link tag="li" :to="{ name: 'guru.kelas.mapels' }">
												<a>Mapel</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.rapor', params: { id: id_siswa_rapor} }">
												<a href="">E-Rapor</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.anggota' }">
												<a>Anggota</a>
												<div class="nav-actives"></div>
											</router-link>
										</ul>
									</section>

									<section v-else-if="$route.name === 'guru.kelas.mapel' || $route.path.includes('/guru/kelas/mapel/rekap/')">
										<ul class="nav-center nav-menu-large hide-on-med-and-down">
											<router-link tag="li" :to="{ name: 'guru.kelas.mapel' }">
												<a href="">Beranda</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.mapel.rekap.parents' }">
												<a href="">Nilai</a>
												<div class="nav-actives"></div>
											</router-link>
										</ul>
									</section>

									<section v-else>
									</section>

									<!-- RIGHT CONTENT -->
									<ul class="right">
										<section v-if="$route.name === 'guru.kelas.mapel.create.topik'">
										</section>

										<section v-else>
											<li class="">
												<div class="dropdown-trigger drop badge-img-in-navbar" data-target="dropdown-akun-guru">
													<div class="badge-ed img-text">
														<div content="Akun EduRoom Bima susila Mukti" v-tippy='{ placement : "bottom" }' class="img">
															<img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=Bima+Susila">
														</div>
													</div>
												</div>
											</li>
										</section>
									</ul>

								</div>
							</div>
						</div>
					</nav>
				</div>
			</header>

			<ul id='dropdown-akun-guru' class='dropdown-content'>
				<li><router-link :to="{ name: 'guru.setting' }">Setting</router-link></li>
				<li><a href="#!">Logout</a></li>
			</ul>
		</section>

		<section v-else-if="$route.path.includes('/siswa') || $route.path.includes('/siswa/')">
			<header>
				<div class="navbar-fixed">
					<nav class="nav-dash" v-bind:class="{ 'noshad': isNoshadow, 'border': isBorder }">
						<div class="nav-wrapper">
							<div class="row">
								<div class="col s12">

									<!-- LEFT CONTENT -->
									<ul class="left">
										<li>
											<a href="#" data-target="sidenav-siswa" class="sidenav-trigger show-on-large show-on-medium show-on-small primary-text nm">
												<i class="material-icons">menu</i>
											</a>
										</li>
										<li>
											<!-- start title navbar -->
											<section v-if="$route.name === 'siswa.kelas.mapels' || $route.name === 'siswa.kelas.anggota'">
												<router-link class="brand-logo dark-text text-logo" :to="{ name: 'siswa.kelas.mapels' }" style="position: absolute;top: -0.5rem;">
													<span>8C</span>
													<span class="primary-text" style="position: absolute;left: 0;top: 1.4rem;font-size: 0.9rem;letter-spacing: 0.03rem;">
														2020/2021
													</span>
												</router-link>
											</section>

											<section v-else-if="$route.path.includes('/siswa/kelas/mapel/')">
												<router-link class="brand-logo dark-text text-logo" :to="{ name: 'siswa.kelas.mapel' }" style="position: absolute;top: -0.5rem;">
													<span>Pendidikan Pancasila dan Kewarganegaraan</span>
													<span class="primary-text" style="position: absolute;left: 0;top: 1.4rem;font-size: 0.9rem;letter-spacing: 0.03rem;">
														8C | 2020/2021
													</span>
												</router-link>
											</section>

											<section v-else>
												<router-link class="brand-logo" :to="{ name: 'siswa.dashboard' }">
													<img class="responsive-img" :src="'/asset/img/logo/asset_erlogo_blue.png'" width="100px">
												</router-link>
											</section>
											<!-- end title navbar -->
										</li>
									</ul>

									<!-- CENTER CONTENT -->
									<section v-if="$route.name === 'siswa.kelas.mapels' || $route.name === 'siswa.kelas.anggota'">
										<ul class="nav-center nav-menu-large hide-on-med-and-down">
											<router-link tag="li" :to="{ name: 'siswa.kelas.mapels' }">
												<a>Mapel</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.rapor', params: { id: id_siswa_rapor} }">
												<a href="">E-Rapor</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'siswa.kelas.anggota' }">
												<a>Anggota</a>
												<div class="nav-actives"></div>
											</router-link>
										</ul>
									</section>

									<section v-else-if="$route.name === 'siswa.kelas.mapel'">
										<ul class="nav-center nav-menu-large hide-on-med-and-down">
											<router-link tag="li" :to="{ name: 'siswa.kelas.mapel' }">
												<a href="">Beranda</a>
												<div class="nav-actives"></div>
											</router-link>
											<router-link tag="li" :to="{ name: 'guru.kelas.mapel.rekap.parents' }">
												<a href="">Nilai</a>
												<div class="nav-actives"></div>
											</router-link>
										</ul>
									</section>
									<section v-else></section>


									<!-- RIGHT CONTENT -->
									<ul class="right">
										<li class="">
											<div class="dropdown-trigger drop badge-img-in-navbar" data-target="dropdown-akun-siswa">
												<div class="badge-ed img-text">
													<div content="Akun EduRoom Bima susila Mukti" v-tippy='{ placement : "bottom" }' class="img">
														<img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=Bima+Susila">
													</div>
												</div>
											</div>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</nav>
				</div>
			</header>

			<ul id='dropdown-akun-siswa' class='dropdown-content'>
				<li><router-link :to="{ name: 'siswa.setting' }">Setting</router-link></li>
				<li><a href="#!">Logout</a></li>
			</ul>
		</section>

		<section v-else>
			<div class="navbar-fixed">
				<nav id="navbar-home" class="navbar-home primary">
					<div class="container">
						<div class="nav-wrapper">

							<router-link :to="{ name: 'home' }" class="brand-logo">
								<img class="responsive-img" :src="'/asset/img/logo/asset_erlogo_white.png'" width="120px">
							</router-link>

							<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

							<ul class="right hide-on-med-and-down">
								<li class="item"><router-link :to="{ name: 'tentang' }">Tentang</router-link></li>
								<li class="item"><router-link :to="{ name: 'paket' }">Paket</router-link></li>
								<li class="item"><router-link :to="{ name: 'panduan' }">Panduan</router-link></li>
								<li class="item"><router-link :to="{ name: 'kontak' }">Hubungi Kami</router-link></li>
								<li class="item-button">
									<router-link :to="{ name: 'login' }" class="matter-button-outlined white-text white-border">Masuk</router-link>
								</li>
							</ul>

						</div>
					</div>
				</nav>
			</div>
		</section>

	</section>
</template>

<script>
	export default {
		data() {
			return {
				isNoshadow: true,
				isBorder: true,
				jawabans:{},
				id_siswa_rapor:''
			}
		},
		watch: {
			'$route' () {
				if (this.$route.name === 'guru.kelas.mapel.tugas.pengumpulan.jawaban' || this.$route.name === 'guru.kelas.mapel.tugas.kuis.jawaban') {

					this.isNoshadow = true
					this.isBorder = false;
					let uri =`http://127.0.0.1:8002/api/barang/${this.$route.params.id}`;

					axios.get(uri).then(response => {
						this.jawabans = response.data
					}).catch(error => {
						this.errored = true
					}).finally(() => this.loading = false);
				}

				else if (this.$route.name === 'guru.kelas.mapel.diskusi.kontribusi') {
					this.isNoshadow = true
					this.isBorder = false;
				}

				else if (this.$route.name === 'guru.kelas.mapels' || this.$route.name === 'guru.kelas.anggota' || this.$route.path.includes('/guru/kelas/rapor/')) {
					this.isNoshadow = false
					this.isBorder = false;

					let uri =`http://127.0.0.1:8002/api/barang`;

					axios.get(uri).then(response => {
						this.id_siswa_rapor = response.data[0].id

					}).catch(error => {
						this.errored = true

					}).finally(() => {
						this.loading = false
						this.$nextTick(() => {
						});
					});
				}

				else {
					this.isNoshadow = false
					this.isBorder = false;
				}  
			}
		}
	}
</script>