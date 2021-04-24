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

				<section style="margin-right: 20rem" v-else>
					<div v-if="loading" class="mt2">
						<vcl-table></vcl-table>
					</div>

					<div v-else>
						<div class="row mtb2">
							<div class="col s12">
								<div class="card outlined">
									<div class="panel mt1">
										<h6 class="semibold">Catatan Wali Kelas</h6>
										<p>Pada form ini anda diminta untuk memberi catatan yang bersifat membangun pada siswa anda.</p>
									</div>
									<div class="panel mtb2">
										<label id="ta-normal" class="matter-textfield-outlined" style="width: 100%">
											<textarea placeholder=" "></textarea>
											<span>Catatan</span>
										</label>
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
				siswas: [],
				loading: true,
				errored: false,
			}
		},
		mounted() {
			$('.sidenavs').sidenav();
			this.getDataSiswa(this.$route.params.id);
		},
		watch: {
			'$route.params.id'(newId, oldId) {
				this.getDataSiswa(newId)
				this.loading = true;
			}
		},
		components: {
			VclTable
		},
		methods: {
			getDataSiswa(id) {
				let uri =`http://127.0.0.1:8002/api/barang/${id}`;

				axios.get(uri).then(response => {
					this.siswas = response.data

				}).catch(error => {
					this.errored = true

				}).finally(() => {
					this.loading = false
					this.$nextTick(() => {
					});
				});
			},
		}
	}
</script>