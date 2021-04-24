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
							<div class="col s12">
								<div class="card outlined">
									<div class="card-header mtb1">
										<div class="title">
											<h6 class="semibold">Spiritual</h6>
										</div>
									</div>
									<div class="dark4">
										<ul class="collection stripped">
											<li class="collection-item">5 guru menilai bersyukur atas nikmat dan karunia Tuhan Baik.</li>
											<li class="collection-item">1 guru menilai memelihara hubungan baik sesama umat Baik.</li>
											<li class="collection-item">11 guru menilai berdoa Baik.</li>
											<li class="collection-item">10 guru menilai menjalankan Ibadah Baik.</li>
											<li class="collection-item">10 guru menilai memberi Salam Baik.</li>
											<li class="collection-item">2 guru menilai Bersyukur sebagai bangsa indonesia Baik.</li>
											<li class="collection-item">2 guru menilai mensyukuri kemampuan manusia dalam mengendalikan diri Baik.</li>
											<li class="collection-item">3 guru menilai bersyukur ketika berhasil mengerjakan sesuatu Baik.</li>
										</ul>
									</div>
									<div class="panel mtb1">
										<label id="ta-normal" class="matter-textfield-outlined" style="width: 100%">
											<textarea placeholder=" "></textarea>
											<span>Sikap Siswa</span>
										</label>
									</div>
								</div>
							</div>

							<div class="col s12">
								<div class="card outlined">
									<div class="card-header mtb1">
										<div class="title">
											<h6 class="semibold">Sosial</h6>
										</div>
									</div>
									<div class="dark4">
										<ul class="collection stripped">
											<li class="collection-item">5 guru menilai bersyukur atas nikmat dan karunia Tuhan Baik.</li>
											<li class="collection-item">1 guru menilai memelihara hubungan baik sesama umat Baik.</li>
											<li class="collection-item">11 guru menilai berdoa Baik.</li>
											<li class="collection-item">10 guru menilai menjalankan Ibadah Baik.</li>
											<li class="collection-item">10 guru menilai memberi Salam Baik.</li>
											<li class="collection-item">2 guru menilai Bersyukur sebagai bangsa indonesia Baik.</li>
											<li class="collection-item">2 guru menilai mensyukuri kemampuan manusia dalam mengendalikan diri Baik.</li>
											<li class="collection-item">3 guru menilai bersyukur ketika berhasil mengerjakan sesuatu Baik.</li>
										</ul>
									</div>
									<div class="panel mtb1">
										<label id="ta-normal" class="matter-textfield-outlined" style="width: 100%">
											<textarea placeholder=" "></textarea>
											<span>Sikap Siswa</span>
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