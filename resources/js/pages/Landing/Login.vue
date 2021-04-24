<template>
	<div>
		<section class="section-img section-hide-small" style="background-image: url('/asset/img/illustrasi/footer_login.png');background-size: 104rem;background-position-y: 101%; height: 99vh">
			<div class="container w30">

				<div class="card noutlined">
					<div class="card-content">
						<div class="center">
							<router-link :to="{ name: 'home' }">
								<img :src="'/asset/img/logo/asset_erlogo_blue.png'" width="130px" style="padding: 40px 0">
							</router-link>
							<div class="divider mb2"></div>
						</div>

						<form action="#!" method="post">
		
							<div class="row">
								<div class="col s12">
									<label id="xmas" class="matter-textfield-outlined" style="width: 100%">
										<input type="text" placeholder=" " name="username" />
										<span>Username</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<label id="xmas" class="matter-textfield-outlined" style="width: 100%">
										<input type="password" placeholder=" " name="password" />
										<span>Password</span>
									</label>
								</div>

								<div class="col s12">
									<a href="#!" class="matter-button-text mtb1">Lupa Username atau Password ?</a>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<button type="submit" class="btn-full btn-ns matter-button-contained">Login</button>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<router-link :to="{ name: 'register' }" class="btn-full matter-button-outlined">Register</router-link>
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