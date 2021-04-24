<template>
	<div>
		<section class="section-img section-hide-small" style="background-image: url('/asset/img/illustrasi/footer_login.png');background-size: 104rem;background-position-y: 101%; height: 99vh">
			<div class="container w30">

				<div class="card noutlined">
					<div class="card-content">

						<div class="row nm valign-wrapper">
							<div class="col s1 valign">
								<router-link :to="{ name: 'register' }" class="matter-button-circle">
									<i class="material-icons">arrow_back</i>
								</router-link>
							</div>
							<div class="col s11">
								<div class="right-align">
									<h5 class="ptb1 semibold primary-text">Registrasi Siswa</h5>
								</div>
							</div>
						</div>

						<div class="divider mb2"></div>

						<form action="" method="post">
							<div class="row">
								<div class="col s12">
									<label id="nama" class="matter-textfield-filled" style="width: 100%">
										<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama" />
										<span>Nama</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<label id="nis" class="matter-textfield-filled" style="width: 100%">
										<input class="validate" type="number" placeholder=" " required="" aria-required="true" name="nis" />
										<span>NIS</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<label id="nis" class="matter-textfield-filled" style="width: 100%">
										<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="username" />
										<span>Username</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<label id="password" class="matter-textfield-filled" style="width: 100%">
										<input class="validate" type="password" placeholder=" " required="" aria-required="true" name="password" />
										<span>Password</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<label id="select_standared" class="matter-textfield-filled" style="width: 100%">
										<select name="kelamin" required="" aria-required="true">
											<option value="" disabled selected>Pilih Jenis Kelamin</option>
											<option value="L">Laki-laki</option>
											<option value="P">Perempuan</option>
										</select>
										<span>Jenis Kelamin</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<button type="submit" class="matter-button-contained btn-full">SUBMIT</button>
								</div>
							</div>
						</form>

						<div class="center">
							<div class="divider mt2 mb3"></div>
							&copy; Copyright 2020 <router-link class="primary-text" :to="{ name: 'home' }">EduRoom</router-link>
						</div>
					</div>
				</div>

			</div>
		</section>
	</div>
</template>