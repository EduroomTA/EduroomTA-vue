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
												<i class="material-icons icon">book</i>
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
										<router-link tag="li" :to="{ name: 'guru.kelas.mapel.materi.detail' }">
											<a class="primary-text" href="">Detail</a>
											<div class="nav-actives"></div>
										</router-link>
										<router-link tag="li" :to="{ name: 'guru.kelas.mapel.materi.rekap' }">
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
						<i class="material-icons icon">book</i>
					</div>
					<div class="title">
						<div class="left-align-res">
							<h5 class="semibold primary-text">Sprint Retrospective I</h5>
							<p class="normal primary-text">KD1 | Nama BAB</p>
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
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.materi.detail' }">
									<a class="primary-text" href="">Detail</a>
									<div class="nav-actives"></div>
								</router-link>
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.materi.rekap' }">
									<a class="primary-text" href="">Rekap</a>
									<div class="nav-actives"></div>
								</router-link>
							</ul>
						</div>
					</nav>
				</div>
			</section>
		</section>

		<section id="tugas" class="container w60 mb6">
			<div class="mt2">
				<p v-dummy="100"></p>
				<p v-dummy="100"></p>
			</div>
		</section>

	</section>
</template>

<script>
	import SlidingHeader from "@vuesence/sliding-header";

	export default {
		mounted() {
			$('.sidenavs').sidenav();
		},
		components: {
			SlidingHeader
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