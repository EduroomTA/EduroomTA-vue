<template>
	<section>
		
		<div id="modal-unduh" class="modal modal-full modal-fixed-header">
			<div class="modal-header row nm">
				<div class="col s7">
					<h5 class="title-modal">Unduh Rekap Nilai</h5>
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
				<div class="container w60">
					<table class="highlight primary-highlight">
						<thead>
							<tr>
								<th style="width: 30px">
									<label class="matter-checkbox" content="Tambahkan semua soal" v-tippy='{ placement : "left" }'>
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
									<label class="matter-checkbox" content="Tambahkan soal ini" v-tippy='{ placement : "left" }'>
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
									<span class="chip success-smoth1 dropdown-trigger no-drop" data-target="dropdown-pengetahuan">Pengetahuan</span>
									<span class="chip success-smoth1 dropdown-trigger no-drop" data-target="dropdown-keterampilan">Keterampilan</span>
									<span class="chip danger-smoth1 dropdown-trigger no-drop" data-target="dropdown-sikap">Sikap</span>
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

		<ul id="dropdown-pengetahuan" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
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
					<div class="chip success-smoth1">Pengetahuan</div>
				</div>
				<div class="divider mtb05"></div>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 1
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 2
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 3
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 4
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 5
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					HPTS
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					HPAS
				</p>
			</li>
		</ul>

		<ul id="dropdown-keterampilan" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;max-height: 300px !important;padding: 1rem">
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
					<div class="chip success-smoth1">Keterampilan</div>
				</div>
				<div class="divider mtb05"></div>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 1
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 2
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 3
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 4
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					KD 5
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					HPTS
				</p>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm success-text">
					<i class="material-icons success-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
					HPAS
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
					<div class="chip danger-smoth1">Sikap</div>
				</div>
				<div class="divider mtb05"></div>
			</li>
			<li class="ptb05" style="min-height: auto;">
				<p class="normal line-icon-text nm dark2-text">
					<i class="material-icons dark2-text line-icon-p-nl" style="font-size: 20px;">check_circle_outline</i>
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