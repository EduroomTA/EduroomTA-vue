<template>
	<section>

		<navbar-nilai-mapel-component></navbar-nilai-mapel-component>

		<section v-if="errored">
			<p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
		</section>

		<section v-else>
			<div v-if="loading" class="mt2">
				<vcl-table></vcl-table>
			</div>

			<div v-else>

				<section>
					<div style="width: 100%;">
						<div class="table-container">
							<table class="table table-bordered border">
								<thead>
									<tr class="white">
										<th class="dark4 center" style="width: 340px !important; border-bottom: 0 !important; border-top: 0 !important">
											<div style="margin: 0 4rem">
												<label class="matter-textfield-flat center-select select-flat select-on-thead" style="width: 100%">
													<select class="select">
														<option class="light" value="xxxxx">Nama A-Z</option>
														<option class="light" value="xxxxx">Nama Z-A</option>
													</select>
													<span></span>
												</label>
											</div>
										</th>

										<th colspan="2" class="center dark4" style="width: 800px;">Spiritual</th>
										<th colspan="2" class="center dark4" style="width: 800px;">Sosial</th>
										<th rowspan="2" class="center dark4" style="width: 500px;">Deskripsi Tambahan</th>
									</tr>

									<tr class="white">
										<th class="white center dark4" style="width: 340px !important; border-top: 0 !important">
											<div>Siswa</div>
										</th>

										<th class="dark4" style="width: 200px;">Input</th>
										<th class="dark4" style="width: 200px;">Deskripsi</th>
										<th class="dark4" style="width: 200px;">Input</th>
										<th class="dark4" style="width: 200px;">Deskripsi</th>
									</tr>
								</thead>

								<tbody>
									<tr v-for="nilai in nilais">
										<td class="user-name">
											<div class="badge-ed img-text">
												<div class="img">
													<img :src="'/asset/img/user/foto/foto.jpg'">
												</div>
												<div class="text">
													<h6 class="semibold">Nama Siswa</h6>
													<p>1202170035</p>
												</div>
											</div>
										</td>
										<td class="center">
											<button class="matter-button-text dropdown-trigger no-drop primary-text" data-target="dropdown-input-sp">
												Input Data
											</button>
										</td>
										<td class="center">
											<label id="ta-normal" class="matter-textfield-standard no-border-top">
												<textarea placeholder=" " rows="4" cols="50"></textarea>
												<span></span>
											</label>
										</td>
										<td class="center">
											<button class="matter-button-text dropdown-trigger no-drop primary-text" data-target="dropdown-input-so">
												Input Data
											</button>
										</td>
										<td class="center">
											<label id="ta-normal" class="matter-textfield-standard no-border-top">
												<textarea placeholder=" " rows="4" cols="50"></textarea>
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="ta-normal" class="matter-textfield-standard no-border-top">
												<textarea placeholder=" " rows="4" cols="50"></textarea>
												<span></span>
											</label>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>

			</div>
		</section>

		<ul id="dropdown-input-sp" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;height: auto !important;padding: 1rem 2rem 2rem 2rem">
			<li class="no-cursor mb1">
				<div class="badge-ed img-text p1">
					<div class="img">
						<img :src="'/asset/img/user/foto/foto.jpg'">
					</div>
					<div class="text">
						<h6 class="semibold">Nama Siswa</h6>
						<p>1202170035</p>
					</div>
				</div>
				<div class="divider"></div>
				<h6 class="normal dark-text">Sikap <i class="material-icons line-icon-p">stop_circle</i> Spiritual</h6>
				<div class="divider"></div>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>berdoa sebelum dan sesudah melakukan kegiatan</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>memberi salam pada saat awal dan akhir kegiatan</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>menjalankan ibadah sesuai dengan agamanya</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>bersyukur atas nikmat dan karunia Tuhan Yang Maha Esa</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>mensyukuri kemampuan manusia dalam mengendalikan diri</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>bersyukur ketika berhasil mengerjakan sesuatu</span>
				</label>
			</li>
		</ul>

		<ul id="dropdown-input-so" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;height: auto !important;padding: 1rem 2rem 2rem 2rem">
			<li class="no-cursor mb1">
				<div class="badge-ed img-text p1">
					<div class="img">
						<img :src="'/asset/img/user/foto/foto.jpg'">
					</div>
					<div class="text">
						<h6 class="semibold">Nama Siswa</h6>
						<p>1202170035</p>
					</div>
				</div>
				<div class="divider"></div>
				<h6 class="normal dark-text">Sikap <i class="material-icons line-icon-p">stop_circle</i> Sosial</h6>
				<div class="divider"></div>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>Jujur</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>Disiplin</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>Tanggung Jawab</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>Toleransi</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>Gotong Royong</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>Santun</span>
				</label>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<label class="matter-checkbox">
					<input type="checkbox">
					<span>Percaya Diri</span>
				</label>
			</li>
		</ul>

	</section>
</template>

<script>
	import { VclTable } from 'vue-content-loading'

	export default {
		data() {
			return {
				nilais:{},
				loading: true,
				errored: false,
			}
		},
		mounted() {
			$('.sidenavs').sidenav();
			this.getDataNilai();
		},
		components: {

			VclTable,

		},
		methods: {
			getDataNilai() {
				let uri =`http://127.0.0.1:8002/api/barang`;

				axios.get(uri).then(response => {
					this.nilais = response.data

				}).catch(error => {
					this.errored = true

				}).finally(() => {
					this.loading = false
					this.$nextTick(() => {
						$('.table-container table').sticky({
							cellWidth: 150,
							columnCount: 1
						});
						$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
						$('.select-search').formSelect2({closeOnClick: false});
						$('.dropdown-trigger.no-drop').dropdown({closeOnClick: false});
						$('.select').formSelect({closeOnClick: true});
					});
				});
			},
		}
	}
</script>

<style>
.table-corner-cell {
	border-top: 1px solid white !important;
}

.sticky-corner {
	-webkit-border-radius:  0 !important;
	-moz-border-radius:  0 !important;
	border-radius: 0 !important;
	top: 8.51rem;
}

.sticky-column td.user-name {
	height: 139.5px
}

.sticky-corner tr,
.sticky-header tr,
.table-non-sticky tr{
	border-bottom: 0 !important;
	border-top: 0 !important;
}

.sticky-column tr{
	border-bottom: 0 !important;
}

.sticky-header,
.sticky-column,
.sticky-header td,
.sticky-header th,
.sticky-column td,
.sticky-column th {
	-webkit-border-radius:  0 !important;
	-moz-border-radius:  0 !important;
	border-radius: 0 !important;
	z-index: 2
}

.sticky-column {
	box-shadow: var(--elevation-z21);
	z-index: 3;
}

.sticky-header {
	top: 8.51rem;
}

thead th {
	border-top: 0 !important
}
</style>