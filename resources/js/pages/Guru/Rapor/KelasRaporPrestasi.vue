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

				<section style="margin-right: 8rem" v-else>
					<div v-if="loading" class="mt2">
						<vcl-table></vcl-table>
					</div>

					<div v-else>
						<div class="row mtb2">
							<div class="col s12 mb2">
								<a class="matter-button-text button-icon modal-trigger primary-text" href="#modal-add-bab">
									<i class="material-icons left">add</i>Prestasi Baru
								</a>
							</div>

							<div class="col s12">
								<div class="card outlined">
									<div class="panel">
										<table>
											<thead>
												<tr>
													<th>Prestasi</th>
													<th>Predikat</th>
													<th>Deskripsi</th>
													<th style="width: 50px"></th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>Pramuka</td>
													<td><a class="text-link primary-text dropdown-trigger drop" data-target="dropdown-predikat">A</a></td>
													<td>
														<label id="ta-normal" class="matter-textfield-outlined" style="width: 100%">
															<textarea placeholder=" "></textarea>
															<span>Deskripsi</span>
														</label>
													</td>
													<td>
														<a 
														class="matter-button-circle dropdown-trigger drop" 
														data-target="dropdown-menu">
														<i class="material-icons">more_vert</i></a>
													</td>
												</tr>
												<tr>
													<td>Sepak Bola</td>
													<td><a class="text-link primary-text dropdown-trigger drop" data-target="dropdown-predikat">A</a></td>
													<td>
														<label id="ta-normal" class="matter-textfield-outlined" style="width: 100%">
															<textarea placeholder=" "></textarea>
															<span>Deskripsi</span>
														</label>
													</td>
													<td>
														<a 
														class="matter-button-circle dropdown-trigger drop" 
														data-target="dropdown-menu">
														<i class="material-icons">more_vert</i></a>
													</td>
												</tr>
												<tr>
													<td>Jonathan</td>
													<td><a class="text-link primary-text dropdown-trigger drop" data-target="dropdown-predikat">A</a></td>
													<td>
														<label id="ta-normal" class="matter-textfield-outlined" style="width: 100%">
															<textarea placeholder=" "></textarea>
															<span>Deskripsi</span>
														</label>
													</td>
													<td>
														<a 
														class="matter-button-circle dropdown-trigger drop" 
														data-target="dropdown-menu">
														<i class="material-icons">more_vert</i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>

		<ul id="dropdown-menu" class="dropdown-content">
			<li><a class="modal-trigger" @click.prevent="modalEditEkstraClick()">Edit</a></li>
			<li><a class="modal-trigger" @click.prevent="modalDeleteEkstraClick()">Hapus</a></li>
		</ul>

		<ul id="dropdown-predikat" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;height: auto !important;padding: 1rem 2rem 2rem 2rem">
			<li class="no-cursor mb1">
				<p class="normal dark-text">Pramuka</p>
				<div class="divider"></div>
			</li>
			<li style="min-height: auto;padding: 0.5rem 0">
				<div class="row">
					<div class="col s1">
					</div>
					<div class="col s2">
						<div class="mb05" style="padding: 0 0.3rem">E</div>
						<label class="matter-radio bottom-text">
							<input type="radio" name="group">
							<span></span>
						</label>
					</div>
					<div class="col s2">
						<div class="mb05" style="padding: 0 0.3rem">D</div>
						<label class="matter-radio bottom-text">
							<input type="radio" name="group">
							<span></span>
						</label>
					</div>
					<div class="col s2">
						<div class="mb05" style="padding: 0 0.3rem">C</div>
						<label class="matter-radio bottom-text">
							<input type="radio" name="group">
							<span></span>
						</label>
					</div>
					<div class="col s2">
						<div class="mb05" style="padding: 0 0.3rem">B</div>
						<label class="matter-radio bottom-text">
							<input type="radio" name="group">
							<span></span>
						</label>
					</div>
					<div class="col s2">
						<div class="mb05" style="padding: 0 0.3rem">A</div>
						<label class="matter-radio bottom-text">
							<input type="radio" name="group">
							<span></span>
						</label>
					</div>
					<div class="col s1">
					</div>
				</div>
			</li>
		</ul>

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
				cari_nama: '',
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
						$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
						$('.select-search').formSelect2({closeOnClick: false});
						$('.select').formSelect({closeOnClick: true});
					});
				});
			},
		}
	}
</script>