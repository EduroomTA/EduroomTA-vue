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

				<section v-else>
					<div v-if="loading" class="mt2">
						<vcl-table></vcl-table>
					</div>

					<div v-else>
						<div class="row mtb2">
							<div class="col s12 m12 l5">
								<div class="card outlined">
									<div class="panel mtb2">
										<div class="row nm mtb1">
											<div class="col s12 m12 l9">
												<h6 class="semibold">Sakit</h6>
											</div>
											<div class="col s12 m12 l3">
												<label class="matter-textfield-outlined no-span right">
													<input id="formnilai" type="number" min="0" placeholder=" "> 
													<span></span>
												</label>
											</div>
										</div>
										<div class="divider"></div>
										<div class="row nm mtb1">
											<div class="col s12 m12 l9">
												<h6 class="semibold">Izin</h6>
											</div>
											<div class="col s12 m12 l3">
												<label class="matter-textfield-outlined no-span right">
													<input id="formnilai" type="number" min="0" placeholder=" "> 
													<span></span>
												</label>
											</div>
										</div>
										<div class="divider"></div>
										<div class="row nm mtb1">
											<div class="col s12 m12 l9">
												<h6 class="semibold">Tanpa Keterangan</h6>
											</div>
											<div class="col s12 m12 l3">
												<label class="matter-textfield-outlined no-span right">
													<input id="formnilai" type="number" min="0" placeholder=" "> 
													<span></span>
												</label>
											</div>
										</div>
									</div>
								</div>
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
				}).finally(() => this.loading = false);
			},
		}
	}
</script>