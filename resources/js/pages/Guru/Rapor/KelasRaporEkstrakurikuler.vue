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
								<a class="matter-button-text button-icon modal-trigger primary-text" href="#modal-add-ekstra">
									<i class="material-icons left">add</i>Ekstrakurikuler Baru
								</a>
							</div>

							<div class="col s12">
								<div class="card outlined">
									<div class="panel">
										<table>
											<thead>
												<tr>
													<th>Ekstrakurikuler</th>
													<th class="center">Predikat</th>
													<th>Deskripsi</th>
													<th style="width: 50px"></th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>Pramuka</td>
													<td class="center">A</td>
													<td>
														<label id="ta-normal" class="matter-textfield-outlined" style="width: 100%">
															<textarea placeholder=" "></textarea>
															<span>Deskripsi</span>
														</label>
													</td>
													<td class="right-align">
														<a 
														class="matter-button-circle dropdown-trigger drop" 
														data-target="dropdown-menu">
														<i class="material-icons">more_vert</i></a>
													</td>
												</tr>
												<tr>
													<td>Sepak Bola</td>
													<td class="center">A</td>
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
													<td class="center">A</td>
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

		<modal-rapor-ekstrakurikuler-add-component></modal-rapor-ekstrakurikuler-add-component>
		<modal-rapor-ekstrakurikuler-edit-component></modal-rapor-ekstrakurikuler-edit-component>
		<modal-rapor-ekstrakurikuler-delete-component></modal-rapor-ekstrakurikuler-delete-component>

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
						$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
						$('.select-search').formSelect2({closeOnClick: false});
						$('.select').formSelect({closeOnClick: true});
						$('.modal').modal();
					});
				});
			},
			modalDeleteEkstraClick() {
				$('#modal-delete-ekstra').modal('open');
			},
			modalEditEkstraClick() {
				$('#modal-edit-ekstra').modal('open');
			},
		}
	}
</script>