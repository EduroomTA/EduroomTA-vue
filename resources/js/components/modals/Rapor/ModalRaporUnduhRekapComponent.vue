<template>
	<section>
		
		<div id="modal-unduh" class="modal modal-full modal-fixed-header">
			<div class="modal-header row nm">
				<div class="col s7">
					<h5 class="title-modal">Unduh E-Rapor</h5>
				</div>
				<div class="col s5 right-align">
					<div style="margin: 0.3rem 4rem 0.3rem 0;">
						<button class="matter-button-contained dropdown-trigger drop" data-target="dropdown-unduh" :disabled="disabled2 == 1">Unduh</button>
					</div>

					<button type="button" class="matter-button-circle modal-close close-button" :disabled="disabled == 1">
						<i class="material-icons">close</i>
					</button>
				</div>
			</div>

			<div class="modal-content">
				<div class="container">
					<table class="highlight primary-highlight">
						<thead>
							<tr>
								<th style="width: 30px">
									<label class="matter-checkbox" content="Tambahkan semua siswa" v-tippy='{ placement : "left" }'>
										<input type="checkbox" v-model="selectAll">
										<span></span>
									</label>
								</th>
								<th>Siswa</th>
								<th class="right-align">Komponen Nilai</th>
							</tr>
						</thead>
						<tbody>
							<tr v-for="bankst in banksst">
								<td style="width: 30px;">
									<label class="matter-checkbox" content="Tambahkan siswa ini" v-tippy='{ placement : "left" }'>
										<input type="checkbox" v-model="selected" :value="bankst.id" number>
										<span></span>
									</label>
								</td>
								<td style="display: block">
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
								<td class="right-align">
									<span class="chip success-smoth1 dropdown-trigger no-drop" data-target="dropdown-akademis">Nilai Akademis</span>
									<span class="chip success-smoth1 dropdown-trigger no-drop" data-target="dropdown-sikap">Nilai Sikap</span>
									<span class="chip success-smoth1 dropdown-trigger no-drop" data-target="dropdown-kehadiran">Kehadiran</span>

									<span class="chip success-smoth1 dropdown-trigger no-drop" data-target="dropdown-ekstra">Ekstrakurikuler</span>
									<span class="chip success-smoth1 dropdown-trigger no-drop" data-target="dropdown-prestasi">Prestasi</span>
									<span class="chip danger-smoth1 dropdown-trigger no-drop" data-target="dropdown-catatan">Catatan</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<ul id="dropdown-unduh" class="dropdown-content fit">
			<li><a href="#!">PDF</a></li>
			<li><a href="#!">Excel</a></li>
			<li><a href="#!">PDF & Excel</a></li>
		</ul>

		<ul id="dropdown-akademis" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
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
				<div class="divider mtb05"></div>
				<div class="center">
					<div class="chip success-smoth1">Nilai Akademis</div>
				</div>
				<div class="divider mtb05"></div>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Bahasa Indonesia
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Matematika
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Pendidikan Kewarganegaraan
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Pendidikan Agama
				</p>
			</li>
		</ul>

		<ul id="dropdown-sikap" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
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
				<div class="divider mtb05"></div>
				<div class="center">
					<div class="chip success-smoth1">Nilai Sikap</div>
				</div>
				<div class="divider mtb05"></div>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Spiritual
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Sosial
				</p>
			</li>
		</ul>

		<ul id="dropdown-kehadiran" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
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
				<div class="divider mtb05"></div>
				<div class="center">
					<div class="chip success-smoth1">Kehadiran</div>
				</div>
				<div class="divider mtb05"></div>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm dark-text">0 Sakit</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm">0 Izin</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm">0 Tanpa Keterangan</p>
			</li>
		</ul>

		<ul id="dropdown-ekstra" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
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
				<div class="divider mtb05"></div>
				<div class="center">
					<div class="chip success-smoth1">Ekstrakurikuler</div>
				</div>
				<div class="divider mtb05"></div>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Sepak Bola
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Pramuka
				</p>
			</li>
		</ul>

		<ul id="dropdown-prestasi" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
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
				<div class="divider mtb05"></div>
				<div class="center">
					<div class="chip success-smoth1">Prestasi</div>
				</div>
				<div class="divider mtb05"></div>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Sepak Bola
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					Pramuka
				</p>
			</li>
		</ul>

		<ul id="dropdown-catatan" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
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
				<div class="divider mtb05"></div>
				<div class="center">
					<div class="chip danger-smoth1">Catatan</div>
				</div>
				<div class="divider mtb05"></div>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm dark2-text">Catatan belum ditambahkan</p>
			</li>
		</ul>

	</section>
</template>

<script>
	import VueLoadingButton from 'vue-loading-button'
	import { VclTable } from 'vue-content-loading'

	export default {
		data() {
			return {
				isLoading: false,
				isEnd: true,
				disabled: 0,
				disabled2: 1,

				banksst: [],
				selected: [],
				init: false,

				loading: true,
				errored: false,

				loading2: true,
				errored2: false,
			};
		},

		mounted() {
			this.getDetailBankss();
		},

		methods: {
			handleClick() {
				this.isLoading = true;
				const v = this;
				this.disabled= 1;
				
				setTimeout(() => {
					this.isLoading = false;
					v.isEnd = false;

					if(v.isEnd == false) {
						this.disabled= 0;
						$('.modal').modal('close');
					}
				}, 2000);
			},
			getDetailBankss() {
				let uri =`http://127.0.0.1:8002/api/barang`;

				axios.get(uri).then(response => {
					this.banksst = response.data

				}).catch(error => {
					this.errored2 = true

				}).finally(() => {
					this.loading2 = false
					this.$nextTick(() => {

						$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
						$('.dropdown-trigger.no-drop').dropdown({closeOnClick: false});
					});
				});
			},
		},

		computed: {
			selectAll: {
				get: function () {
					if(this.selected.length === 0) {
						this.disabled2= 1;
					} else {
						this.disabled2= 0;
					}
					return this.banksst ? this.selected.length == this.banksst.length : false;
				},
				set: function (value) {
					var selected = [];
					if (value) {
						this.banksst.forEach(function (banksst) {
							selected.push(banksst.id);
						});
					}
					this.selected = selected;
				}
			}
		},

		components: {
			VueLoadingButton,
			VclTable
		},
	}
</script>