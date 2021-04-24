<template>
	<div>
		<section class="section-img section-hide-small" style="background-image: url('/asset/img/illustrasi/footer_login.png');background-size: 104rem;background-position-y: 101%; height: 130vh">
			<div class="container w30">

				<div class="card noutlined">
					<div class="card-content">
						<div class="row nm valign-wrapper">
							<div class="col s1 valign">
								<router-link :to="{ name: 'register' }" class="matter-button-circle"><i class="material-icons">arrow_back</i></router-link>
							</div>
							<div class="col s11">
								<div class="right-align">
									<h5 class="ptb1 semibold primary-text">Registrasi Admin Sekolah</h5>
								</div>
							</div>
						</div>

						<div class="divider mb2"></div>

						<form action="" method="">
					
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
									<label id="email" class="matter-textfield-filled" style="width: 100%">
										<input class="validate" type="email" placeholder=" " required="" aria-required="true" name="email" />
										<span>Email</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<label id="username" class="matter-textfield-filled" style="width: 100%">
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
									<label id="telp" class="matter-textfield-filled" style="width: 100%">
										<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="telp" />
										<span>Nomor Telepon</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<label id="select_standared" class="matter-textfield-filled" style="width: 100%">
										<select required="" aria-required="true" name="kelamin">
											<option value="" disabled selected>Pilih Jenis Kelamin</option>
											<option value="laki-laki">Laki-laki</option>
											<option value="perempuan">Perempuan</option>
										</select>
										<span>Jenis Kelamin</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<label id="ta-normal" class="matter-textfield-filled" style="width: 100%">
										<textarea placeholder=" " required="" aria-required="true" name="alamat"></textarea>
										<span>Alamat</span>
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