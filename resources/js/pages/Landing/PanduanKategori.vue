<template>
	<div>
		<section class="header-other-blok">
			<div class="container w85">
				<div class="row">
					<div class="col s12">
						<div class="content center">
							<h4 class="white-text">Panduan EduRoom</h4>
							<p class="white-text large">
								Temukan solusi untuk semua kebutuhan tutorial dan troubleshoot tentang <br> EduRoom. Mulai pencarian dari kolom di bawah ini. 
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m3"></div>
					<div class="col s12 m6 center">
						<div class="content">
							<form action="" method="GET">
				
								<div class="search">
									<label id="search" class="matter-textfield-outlined icon-input left-icon no-span bg-input" style="width: 100%">
										<input id="search-input" type="text" placeholder="Cari di sini">
										<i class="material-icons">search</i>
									</label>
								</div>
							</form>
						</div>
					</div>
					<div class="col s12 m3"></div>
				</div>
				<div class="row">
					<div class="col s12 center">
						<p class="white-text large">Hasil pencarian: <span class="bold">"Pencarian bla bla bla bla bla bla"</span></p>
					</div>
					<div class="col s12 center">
						<div style="margin: auto; display: inline-block;">
							<ul class="horizontal">
								<li>
									<div class="badge-text">
										<p class="white-text">Siswa</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section-landing-first">
			<div class="container w60">
				<div class="content">

					<div class="row">

						<div class="col s12 m12 l12">
							<div class="content">
								<div class="row">

									<div class="col s12">
										<div class="card noutlined">
											<div class="row">
												<div class="col s12">
													<div class="mt1">
														<router-link :to="{ name: 'panduan.detail' }">
															<h5 class="semibold primary-text">Judul Dokumentasi</h5>
														</router-link>
													</div>
													<div class="mtb1">
														<p class="normal">By Admin <i class="material-icons line-icon-p">stop_circle</i> 12 Juni 2020 <span class="badge primary white-text rounded">Panduan Siswa</span></p>
													</div>
													<div class="divider mtb1"></div>
													<p>
														I am a very simple card. I am good at containing small bits of information.
														I am convenient because I require little ...
													</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col s12">
										<div class="card noutlined">
											<div class="row">
												<div class="col s12">
													<div class="mt1">
														<router-link :to="{ name: 'panduan.detail' }">
															<h5 class="semibold primary-text">Judul Dokumentasi</h5>
														</router-link>
													</div>
													<div class="mtb1">
														<p class="normal">By Admin <i class="material-icons line-icon-p">stop_circle</i> 12 Juni 2020 <span class="badge primary white-text rounded">Panduan Guru</span></p>
													</div>
													<div class="divider mtb1"></div>
													<p>
														I am a very simple card. I am good at containing small bits of information.
														I am convenient because I require little ...
													</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col s12">
										<div class="card noutlined">
											<div class="row">
												<div class="col s12">
													<div class="mt1">
														<router-link :to="{ name: 'panduan.detail' }">
															<h5 class="semibold primary-text">Judul Dokumentasi</h5>
														</router-link>
													</div>
													<div class="mtb1">
														<p class="normal">By Admin <i class="material-icons line-icon-p">stop_circle</i> 12 Juni 2020 <span class="badge primary white-text rounded">Panduan Admin Sekolah</span></p>
													</div>
													<div class="divider mtb1"></div>
													<p>
														I am a very simple card. I am good at containing small bits of information.
														I am convenient because I require little ...
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col s12 center">
										<ul class="pagination">
											<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
											<li class="number active"><a href="#!">1</a></li>
											<li class="number waves-effect"><a href="#!">2</a></li>
											<li class="number waves-effect"><a href="#!">3</a></li>
											<li class="number waves-effect"><a href="#!">4</a></li>
											<li class="number waves-effect"><a href="#!">5</a></li>
											<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12 m12 l3 offset-s0 offset-m0 offset-l1">
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</template>