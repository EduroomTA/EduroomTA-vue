<template>
	
	<div id="sidenav-list" class="sidenavs sidenav with-header sidenav-fixed sidenav-dash-t" style="width: 22rem; padding-bottom: 0 !important; margin-top: 4.4rem;">
		<div class="header row valign-wrapper">
			<div class="col s9">
				<label class="matter-textfield-outlined icon-input left-icon no-span" style="width: 100%;">
					<input type="text" placeholder="Cari Siswa" content="Cari Nama Siswa"> 
					<span></span> 
					<i class="material-icons">search</i>
				</label>
			</div>
			<div class="col s3 right-align valign center">
				<a class="matter-button-circle dropdown-trigger no-drop" data-target="dropdown-filter"><i class="material-icons">filter_list</i></a>

				<ul id="dropdown-filter" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
					<li class="ptb05" style="min-height: auto;">
						<label class="matter-radio">
							<input type="radio" value="">
							<span>Nilai Lengkap</span>
						</label>
					</li>
					<li class="ptb05" style="min-height: auto;">
						<label class="matter-radio">
							<input type="radio" value="asdas">
							<span>Nilai Belum Lengkap</span>
						</label>
					</li>
				</ul>
			</div>
		</div>
		<div class="content with-border-bottom" style="height: 574px !important;">
			<ul>
				<li v-for="siswa in siswas">
					<a href="#!">
						<div class="row nm valign-wrapper">
							<div class="col s6">
								<div class="badge-ed img-text">
									<div class="img">
										<img :src="'/asset/img/user/foto/foto.jpg'">
									</div>
									<div class="text">
										<div class="text-nowarp" style="width: 11rem;">
											<h6 class="semibold">{{ siswa.nama }}</h6>
											<p>1202170035</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col s6 right-align valign">
								<span v-if="siswa.deskripsi === 'cccdd'" class="material-icons success-text" style="font-size: 12px;">circle</span>
								<span v-else-if="siswa.deskripsi === 'asdas'" class="material-icons danger-text" style="font-size: 12px;">circle</span>
								<span v-else class="material-icons danger-text" style="font-size: 12px;">circle</span>
							</div>
						</div>
					</a>
				</li> 
			</ul>
		</div>
	</div>

</template>

<script>
	export default {
		data() {
			return {

				siswas:{},
				route_id: 0,

			}
		},
		mounted() {
			this.getSiswa();
		},
		methods: {
			getSiswa() {
				let uri =`http://127.0.0.1:8002/api/barang`;

				axios.get(uri).then(response => {
					this.siswas = response.data
				});

				this.$nextTick(() => {
					$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
					$('.select-search').formSelect2({closeOnClick: false});
					$('.select').formSelect({closeOnClick: true});
				});
			},
			
		},
	}
</script>