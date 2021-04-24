<template>
	<section>

		<sliding-header :threshold-hide="100" :threshold-open="200">
			<template v-slot:first-header>
				
			</template>

			<template v-slot:second-header>
				<section style="top: 4rem !important; position: relative;">
					<div class="navbar sticky-sec-nav">
						<nav class="nav-dash in-scroll-page">
							<div class="container w60">
								<div class="nav-wrapper">
									<div class="left">
										<div class="hide-on-med-and-down icon-sec-nav">
											<div class="icon-sec-container center-content primary">
												<i class="material-icons icon">forum</i>
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
										<router-link tag="li" :to="{ name: 'guru.kelas.mapel.diskusi.detail' }">
											<a class="primary-text" href="">Diskusi</a>
											<div class="nav-actives"></div>
										</router-link>
										<router-link tag="li" :to="{ name: 'guru.kelas.mapel.diskusi.rekap' }">
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
						<i class="material-icons icon">forum</i>
					</div>
					<div class="title">
						<div class="left-align-res">
							<h5 class="semibold primary-text">Sprint Retrospective I</h5>
							<p class="normal primary-text">KD1 | Nama BAB</p>
						</div>
						<div class="row nm">
							<div class="col s12 m12 l6 left-align-res">
								<p class="normal dark7-text">Pengetahuan<i class="material-icons line-icon-p">stop_circle</i>UTS<i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020</p>
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
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.diskusi.detail' }">
									<a class="primary-text" href="">Diskusi</a>
									<div class="nav-actives"></div>
								</router-link>
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.diskusi.rekap' }">
									<a class="primary-text" href="">Rekap</a>
									<div class="nav-actives"></div>
								</router-link>
							</ul>
						</div>
					</nav>
				</div>
			</section>
		</section>

		<section id="forum" class="container w60 mb6">
			<div class="mt2">
				<p class="ltext">
					Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
					berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
					Dan tambahkan file TXT dengan format NIM_NAMA
				</p>
			</div>

			<div class="right-align mb6">
				<a class="matter-button-contained button-icon modal-trigger" href="#modal-add-kontribusi">
					<i class="material-icons left">add</i>Kontribusi
				</a>
			</div>

			<div class="row mb4">

				<div class="col s12">
					<div class="card outlined hoverable-shadow link">
						<div class="card-header row">
							<div class="title col s10 m11">
								<div class="badge-ed img-text p1">
									<div class="img">
										<img :src="'/asset/img/user/foto/foto.jpg'">
									</div>
									<div class="text">
										<h6 class="semibold">Nama Siswa</h6>
										<p class="dark7-text">1202170035 <i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020, 13:00</p>
									</div>
								</div>
							</div>
							<div class="link-card col s2 m1">
								<!-- <a class="matter-button-circle dropdown-trigger drop dark-text" href="#!" data-target="dropdown-menu">
									<i class="material-icons">more_vert</i>
								</a> -->
							</div>
						</div>
						<div class="card-content ptb0">
							<div class="row pl4-res">
								<div class="col s12">
									<p class="ltext">
										Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
										berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
										Dan tambahkan file TXT dengan format NIM_NAMA
									</p>
								</div>
							</div>
							<div class="pl4-res">
								<div class="right-align ptb1">
									<a class="matter-button-text" @click.prevent="showBalasClick(1)">10 Balasan</a>
									<a class="matter-button-outlined" @click.prevent="modalBalasClick()">Balas</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="contbalasan1" class="col s12 hide">
					<div class="bordered-left-show">
						<div class="card outlined hoverable-shadow link">
							<div class="card-header row">
								<div class="title col s10 m11">
									<div class="badge-ed img-text p1">
										<div class="img">
											<img :src="'/asset/img/user/foto/foto.jpg'">
										</div>
										<div class="text">
											<h6 class="semibold">Nama Siswa</h6>
											<p class="dark7-text">1202170035 <i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020, 13:00</p>
										</div>
									</div>
								</div>
								<div class="link-card col s2 m1">
									
								</div>
							</div>
							<div class="card-content ptb0">
								<div class="row pl4-res">
									<div class="col s12">
										<p class="ltext">
											Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
											berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
											Dan tambahkan file TXT dengan format NIM_NAMA
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="card outlined hoverable-shadow link">
							<div class="card-header row">
								<div class="title col s10 m11">
									<div class="badge-ed img-text p1">
										<div class="img">
											<img :src="'/asset/img/user/foto/foto.jpg'">
										</div>
										<div class="text">
											<h6 class="semibold">Nama Siswa</h6>
											<p class="dark7-text">1202170035 <i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020, 13:00</p>
										</div>
									</div>
								</div>
								<div class="link-card col s2 m1">

								</div>
							</div>
							<div class="card-content ptb0">
								<div class="row pl4-res">
									<div class="col s12">
										<p class="ltext">
											Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
											berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
											Dan tambahkan file TXT dengan format NIM_NAMA
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<modal-diskusi-add-kontribusi-component></modal-diskusi-add-kontribusi-component>
		<modal-diskusi-add-balasan-component></modal-diskusi-add-balasan-component>

	</section>
</template>

<script>
	import SlidingHeader from "@vuesence/sliding-header";

	export default {
		mounted() {
			$('.sidenavs').sidenav();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
			$('.modal').modal();
		},
		data(){
			return{
				id_diskusi:''
			}
		},
		components: {
			SlidingHeader
		}, 
		methods: {
			modalBalasClick() {
				$('#modal-add-balasan').modal('open');
			},
			showBalasClick(id) {
				$('#contbalasan'+id).toggleClass('hide');
			},
		}     
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