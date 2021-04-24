<template>
	<section>

		<section class="container">
			<div class="header row">
				<div class="col s12 m12 l9">
					<div class="title">
						<h5 class="semibold primary-text">Mata Pelajaran</h5>
					</div>
				</div>
				<div class="col s12 m12 l3 right-align-res">
				</div>
			</div>
		</section>

		<section class="container">
			<div class="row">
				<div class="col s12 m6 l4">
					<div class="card outlined hoverable-shadow link">
						<div class="card-header row primary image-bg" style="background-image: url('/asset/img/tema/math2.png')">
							<div class="title col s10">
							</div>
							<div class="link-card col s2">
								<a class="matter-button-circle dropdown-trigger drop white-text" href='#' data-target='dropdown-kelas'>
									<i class="material-icons">more_vert</i>
								</a>
							</div>
						</div>
						<router-link :to="{ name: 'guru.kelas.mapel' }">
							<div class="card-content">
								<h6>Matematika</h6>
								<div class="divider mtb05"></div>
								<p class="normal dark7-text">Guru Wali <i class="material-icons line-icon-p">stop_circle</i> Nama Guru</p>
							</div>
						</router-link>
					</div>

					<ul id='dropdown-kelas' class='dropdown-content medium'>
						<li><router-link :to="{ name: 'guru.kelas.mapel.rekap.parents' }">Nilai</router-link></li>
						<li><a class="modal-trigger" href="#modal-pilih-tema">Edit Tema</a></li>
					</ul>
				</div>

				<div class="col s12 m6 l4">
					<div class="card outlined hoverable-shadow link">
						<div class="card-header row primary image-bg" style="background-image: url('/asset/img/tema/biology.png')">
							<div class="title col s10">
							</div>
							<div class="link-card col s2">
								<a class="matter-button-circle dropdown-trigger drop white-text" href='#' data-target='dropdown-kelas'>
									<i class="material-icons">more_vert</i>
								</a>
							</div>
						</div>
						<a href="#!">
							<div class="card-content">
								<h6>Biology</h6>
								<div class="divider mtb05"></div>
								<p class="normal dark7-text">Guru Wali <i class="material-icons line-icon-p">stop_circle</i> Nama Guru</p>
							</div>
						</a>
					</div>
				</div>

				<div class="col s12 m6 l4">
					<div class="card outlined hoverable-shadow link">
						<div class="card-header row primary image-bg" style="background-image: url('/asset/img/tema/fisika.png')">
							<div class="title col s10">
							</div>
							<div class="link-card col s2">
								<a class="matter-button-circle dropdown-trigger drop white-text" href='#' data-target='dropdown-kelas'>
									<i class="material-icons">more_vert</i>
								</a>
							</div>
						</div>
						<a href="#!">
							<div class="card-content">
								<h6>Fisika</h6>
								<div class="divider mtb05"></div>
								<p class="normal dark7-text">Guru Wali <i class="material-icons line-icon-p">stop_circle</i> Nama Guru</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>

		<modal-temakelas-component></modal-temakelas-component>

	</section>
</template>

<script>
	export default {
		mounted() {
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
			$('.modal').modal();
		}
	}
</script>