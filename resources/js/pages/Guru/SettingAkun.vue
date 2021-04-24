<template>
	<section>
		
		<section class="container">
			<div class="header row">
				<div class="col s12 m12 l8">
					<div class="title">
						<h5 class="semibold primary-text">Setting Akun</h5>
					</div>
				</div>
				<div class="col s12 m12 l4">
				</div>
			</div>
		</section>

		<section class="container w50">
			<div class="mb5">
				<div class="row">
					<div class="col s12">
						<h5 class="semibold primary-text">Data Personal</h5>
					</div>
				</div>
				<table class="highlight">
					<tbody>
						<tr>
							<td>
								<div class="row nm">
									<div class="col s12 m12 l6">
										<div class="img-bullet" style="width: 60px; height: 60px">
											<img src="https://ui-avatars.com/api/?background=0D8ABC&amp;color=fff&amp;name=Bima+Susila">
										</div>
									</div>
									<div class="col s12 m12 l6">
									</div>
								</div>
							</td>
							<td>
								<div class="right-align">
									<a id="btn_foto" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="row nm">
									<div class="col s12 m12 l6">
										<div class="bold">
											Nama
										</div>
									</div>
									<div class="col s12 m12 l6">
										<div class="semibold">
											Nama nya gurunya
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="right-align">
									<a id="btn_nama" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="row nm">
									<div class="col s12 m12 l6">
										<div class="bold">
											NIP
										</div>
									</div>
									<div class="col s12 m12 l6">
										<div class="semibold">
											1202170035
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="right-align">
									<a id="btn_nip" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="row nm">
									<div class="col s12 m12 l6">
										<div class="bold">
											Jenis Kelamin
										</div>
									</div>
									<div class="col s12 m12 l6">
										<div class="semibold">
											Laki-laki
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="right-align">
									<a id="btn_kelamin" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="mb5">
				<div class="row">
					<div class="col s12">
						<h5 class="semibold primary-text">Data Akun</h5>
					</div>
				</div>
				<table class="highlight">
					<tbody>
						<tr>
							<td>
								<div class="row nm">
									<div class="col s12 m12 l6">
										<div class="bold">
											Username
										</div>
									</div>
									<div class="col s12 m12 l6">
										<div class="semibold">
											nama username
										</div>
									</div>
								</div>
							</td>
							<td>
								<div class="right-align">
									<a id="btn_username" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="row nm">
									<div class="col s12 m12 l6">
										<div class="bold">
											Password
										</div>
									</div>
									<div class="col s12 m12 l6">

									</div>
								</div>
							</td>
							<td>
								<div class="right-align">
									<a id="btn_password" class="matter-button-text modal-trigger" href="#modal-edit">Edit</a>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="mb5">
				<div class="row">
					<div class="col s12">
						<h5 class="semibold primary-text">Tampilan</h5>
					</div>
				</div>
				<table class="highlight">
					<tbody>
						<tr>
							<td>
								<div class="row nm">
									<div class="col s12 m12 l8">
										<div class="bold">
											Mode Gelap
										</div>
									</div>
									<div class="col s12 m12 l4 right-align">
										<label class="matter-switch">
											<input type="checkbox" role="switch">
											<span>Aktifkan</span>
										</label>
									</div>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>

		<modal-setting-akun-component></modal-setting-akun-component>

	</section>
</template>

<script>
	export default {
		mounted() {
			$('.sidenavs').sidenav();
			$(document).ready(function() {

				$( "#btn_nama" ).click(function() {
					$('.modal').modal({
						onOpenStart : function() {
							$('#row_nama').removeClass('hide');
						},

						onCloseStart : function() {
							$('#row_nama').addClass('hide');
						},
					});
				});

				$( "#btn_nip" ).click(function() {
					$('.modal').modal({
						onOpenStart : function() {
							$('#row_nip').removeClass('hide');
						},

						onCloseStart : function() {
							$('#row_nip').addClass('hide');
						},
					});
				});

				$( "#btn_kelamin" ).click(function() {
					$('.modal').modal({
						onOpenStart : function() {
							$('#row_kelamin').removeClass('hide');
						},

						onCloseStart : function() {
							$('#row_kelamin').addClass('hide');
						},
					});
				});

				$( "#btn_username" ).click(function() {
					$('.modal').modal({
						onOpenStart : function() {
							$('#row_username').removeClass('hide');
						},

						onCloseStart : function() {
							$('#row_username').addClass('hide');
						},
					});
				});

				$( "#btn_password" ).click(function() {
					$('.modal').modal({
						onOpenStart : function() {
							$('#row_password').removeClass('hide');
						},

						onCloseStart : function() {
							$('#row_password').addClass('hide');
						},
					});
				});

				$( "#btn_foto" ).click(function() {
					$('.modal').modal({
						onOpenStart : function() {
							$('#row_foto').removeClass('hide');
							$('#modal-edit').removeClass('modal-small');
						},

						onCloseStart : function() {
							$('#row_foto').addClass('hide');
							$('#modal-edit').addClass('modal-small');
						},
					});
				});
			});
		}
	}
</script>