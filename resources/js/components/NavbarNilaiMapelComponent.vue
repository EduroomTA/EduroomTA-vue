<template>
	<section>

		<section class="sect-sticky-sec-nav" style="top: 0 !important;">
			<div class="navbar sticky-sec-nav navbar-fixed">
				<nav class="nav-dash in-scroll-page">
					<div class="container w95">
						<div class="nav-wrapper">

							<div class="left">
								<div class="text-nowarp second-nav long">
									<button class="matter-button-outlined button-icon dropdown-trigger drop no-border" data-target="dropdown-rekap">
										<i class="material-icons right">arrow_drop_down</i>Rekap Nilai
									</button>

									<ul id="dropdown-rekap" class="dropdown-content fit">
										<li>
											<a class="modal-trigger" href="#modal-kkm"><i class="material-icons primary-text">straighten</i>KKM 75</a>
										</li>
										<li>
											<a class="modal-trigger" href="#modal-unduh"><i class="material-icons primary-text">assignment_returned</i>Unduh Rekap</a>
										</li>
									</ul>
								</div>
							</div>

							<ul class="nav-right">
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.rekap.pengetahuan' }">
									<a class="primary-text" href="">Pengetahuan</a>
									<div class="nav-actives"></div>
								</router-link>
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.rekap.keterampilan' }">
									<a class="primary-text" href="">Keterampilan</a>
									<div class="nav-actives"></div>
								</router-link>
								<router-link tag="li" :to="{ name: 'guru.kelas.mapel.rekap.sikap' }">
									<a class="primary-text" href="">Sikap</a>
									<div class="nav-actives"></div>
								</router-link>
							</ul>

						</div>
					</div>
				</nav>
			</div>
		</section>

		<modal-kkm-component></modal-kkm-component>
		<modal-unduh-rekap-kelas-component></modal-unduh-rekap-kelas-component>

	</section>
</template>

<script>
	export default {
		mounted() {
			$('.modal').modal();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
		}
	}
</script>