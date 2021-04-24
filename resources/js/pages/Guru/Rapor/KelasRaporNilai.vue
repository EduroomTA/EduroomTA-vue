<template>
	<section>

		<div class="row">
			<div class="col s12 m12 l3">

			</div>
			<div class="col s12 m12 l9">

				<navbar-rapor-kelas-component></navbar-rapor-kelas-component>

				<section v-if="errored">
					<p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
				</section>

				<section style="margin-right: 3rem" v-else>
					<div v-if="loading" class="mt2">
						<vcl-table></vcl-table>
					</div>

					<div v-else>
						<div class="row mtb2">
							<div class="col s12">
								<table class="border">

									<thead>
										<tr class="white">
											<th class="dark4 center" style="width: 160px !important;">
												<div>
													<label class="matter-textfield-flat center-select select-flat select-on-thead" style="width: 100%">
														<select class="select">
															<option class="light" value="xxxxx">Matpel A-Z</option>
															<option class="light" value="xxxxx">Matpel Z-A</option>
														</select>
														<span></span>
													</label>
												</div>
											</th>

											<th colspan="3" class="center dark4">Pengetahuan</th>
											<th colspan="3" class="center dark4">Keterampilan</th>
										</tr>

										<tr class="white">
											<th class="white center dark4" style="width: 160px !important;">
												<div>Mata Pelajaran</div>
											</th>

											<th class="dark4" style="width: 30px !important">Nilai</th>
											<th class="dark4" style="width: 30px !important">Predikat</th>
											<th class="dark4" style="width: 250px !important">Deskripsi</th>

											<th class="dark4" style="width: 30px !important">Nilai</th>
											<th class="dark4" style="width: 30px !important">Predikat</th>
											<th class="dark4" style="width: 250px !important">Deskripsi</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>Bahasa Indonesia</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
										</tr>
										<tr>
											<td>Bahasa Indonesia</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
										</tr>
										<tr>
											<td>Bahasa Indonesia</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
										</tr>
										<tr>
											<td>Bahasa Indonesia</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
										</tr>
										<tr>
											<td>Bahasa Indonesia</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
										</tr>
										<tr>
											<td>Bahasa Indonesia</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
										</tr>
										<tr>
											<td>Bahasa Indonesia</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
										</tr>
										<tr>
											<td>Bahasa Indonesia</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
											<td class="center">100</td>
											<td class="center">A</td>
											<td>
												Memiliki penguasaan keterampilan cukup baik, terutama dalam menyajikan data, gagasan, kesan dalam bentuk teks deskripsi 
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>

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
			this.getNilai(this.$route.params.id);
		},
		watch: {
			'$route.params.id'(newId, oldId) {
				this.getNilai(newId)
				this.loading = true;
			}
		},
		components: {
			VclTable,
		},
		methods: {
			getNilai(id) {
				let uri =`http://127.0.0.1:8002/api/barang/${id}`;

				axios.get(uri).then(response => {
					this.nilais = response.data

				}).catch(error => {
					this.errored = true
				}).finally(() => {
					this.loading = false
					this.$nextTick(() => {
						$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
						$('.select-search').formSelect2({closeOnClick: false});
						$('.select').formSelect({closeOnClick: true});
					});
				});
			},
		}
	}
</script>