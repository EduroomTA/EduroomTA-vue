<template>
	<section>

		<section class="container w50 mt4">
			<div class="mb5">
				<div class="left-align-res">
					<h5 class="semibold primary-text">Guru</h5>
				</div>
				<table>
					<tbody>
						<tr>
							<td>
								<div class="badge-ed img-text p1">
									<div class="img">
										<img :src="'/asset/img/user/foto/foto.jpg'">
									</div>
									<div class="text">
										<h6 class="semibold">Nama Guru</h6>
										<p>1202170035</p>
									</div>
								</div>
							</td>
							<td>
								<div class="right-align semibold">Guru Mapel PKN</div>
							</td>
						</tr>
						<tr>
							<td>
								<div class="badge-ed img-text p1">
									<div class="img">
										<img :src="'/asset/img/user/foto/foto.jpg'">
									</div>
									<div class="text">
										<h6 class="semibold">Nama Guru</h6>
										<p>1202170035</p>
									</div>
								</div>
							</td>
							<td>
								<div class="right-align semibold">Guru Wali</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="mb5">
				<div class="row">
					<div class="col s12 m12 l6 left-align-res">
						<h5 class="semibold primary-text">Siswa</h5>
					</div>
					<div class="col s12 m12 l6">
					</div>
				</div>

				<table>
					<tbody>
						<tr>
							<td>
								<div class="badge-ed img-text p1">
									<div class="img">
										<img :src="'/asset/img/user/foto/foto.jpg'">
									</div>
									<div class="text">
										<h6 class="semibold">Nama Siswa</h6>
										<p>1202170035</p>
									</div>
								</div>
							</td>
							<td>13:00, 12 Juni 2020</td>
							<td class="right-align">
								<a class="matter-button-circle dropdown-trigger drop" data-target="dropdown-menu-siswa">
									<i class="material-icons">more_vert</i>
								</a>

								<ul id="dropdown-menu-siswa" class="dropdown-content">
									<li><a class="modal-trigger" href="#modal-keluarkan">Keluarkan</a></li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>

		<modal-kick-siswa-component></modal-kick-siswa-component>

	</section>
</template>

<script>
	export default {
		mounted() {
			$('.sidenavs').sidenav();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
			$('.modal').modal();
		}
	}
</script>