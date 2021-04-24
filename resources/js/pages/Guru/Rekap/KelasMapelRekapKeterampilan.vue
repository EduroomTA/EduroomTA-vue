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

										<th colspan="2" class="center dark4">KD 1</th>
										<th colspan="2" class="center dark4">KD 2</th>
										<th colspan="2" class="center dark4">KD 3</th>
										<th colspan="2" class="center dark4">KD 4</th>
										<th colspan="2" class="center dark4">KD 5</th>

										<th colspan="2" rowspan="2" class="center dark4">HPH</th>
										<th colspan="2" rowspan="2" class="center dark4">Predikat</th>
										<th colspan="2" rowspan="2" class="center dark4">Deskripsi</th>
									</tr>

									<tr class="white">
										<th class="white center dark4" style="width: 340px !important; border-top: 0 !important">
											<div>Siswa</div>
										</th>

										<th class="dark4" >Ulangan</th>
										<th class="dark4" >Tugas</th>
										<th class="dark4" >Ulangan</th>
										<th class="dark4" >Tugas</th>
										<th class="dark4" >Ulangan</th>
										<th class="dark4" >Tugas</th>
										<th class="dark4" >Ulangan</th>
										<th class="dark4" >Tugas</th>
										<th class="dark4" >Ulangan</th>
										<th class="dark4" >Tugas</th>
									</tr>
								</thead>

								<tbody>
									<tr v-for="nilai in nilais">
										<td>
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
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>
										<td class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" />
												<span></span>
											</label>
										</td>

										<td colspan="2" class="center">
											<label id="nilai" class="matter-textfield-standard no-border no-span">
												<input class="center" type="number" placeholder=" " value="100" max="100" min="0" disabled="" />
												<span></span>
											</label>
										</td>

										<td colspan="2" class="center">A</td>

										<td class="acuan" colspan="2">
											<div>

											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</section>

			</div>
		</section>

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