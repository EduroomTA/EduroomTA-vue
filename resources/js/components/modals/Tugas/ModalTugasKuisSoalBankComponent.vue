<template>
	<section>
		
		<div id="modal-add-bank-soal" class="modal modal-full modal-fixed-header">
			<div class="modal-header row nm">
				<div class="col s7">
					<h5 class="title-modal">Bank Soal</h5>
				</div>
				<div class="col s5 right-align">
					<div style="margin: 0.3rem 4rem 0.3rem 0;">
						<VueLoadingButton
						class="matter-button-contained"
						@click.native="handleClick"
						:loading="isLoading"
						:disabled="disabled2 == 1"
						>Terbitkan</VueLoadingButton>
					</div>
					<button type="button" class="matter-button-circle modal-close close-button" :disabled="disabled == 1">
						<i class="material-icons">close</i>
					</button>
				</div>
			</div>

			<div class="modal-content">

				<div v-if="init == false" class="container">
					<section v-if="errored">
						<p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
					</section>

					<section v-else>
						<div v-if="loading" class="mt2">
							<vcl-table></vcl-table>
						</div>

						<div v-else>
							<div class="row nm mtb2">
								<div class="col s3">
									<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
										<select v-model="fil_kelas" class="select-search" searchable='List of options'>
											<option value="" selected>Semua Kelas</option>
											<option v-for="bank in banks" :value="bank.deskripsi">10 Mipa {{bank.deskripsi}}</option>
										</select>
										<span></span>
									</label>
								</div>
								<div class="col s3">
									<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
										<select v-model="fil_matpel" class="select-search" searchable='List of options'>
											<option value="" selected>Semua Matpel</option>
											<option v-for="bank in banks" :value="bank.nama">{{bank.nama}} Kewarganegaraan</option>
										</select>
										<span></span>
									</label>
								</div>
							</div>

							<div class="divider h05"></div>

							<table class="highlight primary-highlight clickable">
								<thead>
									<tr>
										<th>
											<a @click="sortBanks('deskripsi')" class="matter-button-text button-icon" content="Urutkan Berdasarkan Kelas" v-tippy='{ placement : "bottom" }'>
												<i 
												v-show="currentSortBanks === 'deskripsi' && currentSortDirBanks === 'asc'" 
												class="material-icons left">expand_less</i>
												<i 
												v-show="currentSortBanks === 'deskripsi' && currentSortDirBanks === 'desc'" 
												class="material-icons left">expand_more</i>

												Kelas
											</a>
										</th>
										<th>
											<a @click="sortBanks('nama')" class="matter-button-text button-icon" content="Urutkan Berdasarkan Matpel" v-tippy='{ placement : "bottom" }'>
												<i 
												v-show="currentSortBanks === 'nama' && currentSortDirBanks === 'asc'" 
												class="material-icons left">expand_less</i>
												<i 
												v-show="currentSortBanks === 'nama' && currentSortDirBanks === 'desc'" 
												class="material-icons left">expand_more</i>
												Matpel
											</a>
										</th>
										<th>Tugas Kuis</th>
										<th></th>
									</tr>
								</thead>

								<tbody>
									<tr v-for="bank in filterBank" @click.prevent="getDetailBank(bank.id)" class="content">
										<td>10 Mipa {{bank.deskripsi}}</td>
										<td>{{bank.nama}} Kewarganegaraan</td>
										<td>Nama tugasnya nih</td>
										<td>{{bank.id}} Soal</td>
									</tr>
								</tbody>
							</table>
						</div>
					</section>
				</div>

				<div v-else class="container w60">
					<section v-if="errored2">
						<p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
					</section>

					<section v-else>
						<div v-if="loading2" class="mt2">
							<vcl-table></vcl-table>
						</div>
						<div v-else>
							<div class="header-detail">
								<div class="center-content icon-page">
									<a class="matter-button-circle" @click.prevent="backDetailBank()">
										<i class="material-icons">arrow_back</i>
									</a>
								</div>
								<div class="title">
									<div class="left-align-res">
										<h5 class="semibold primary-text">{{ bankss.nama }}</h5>
										<p class="normal primary-text">KD1 | Nama BAB</p>
									</div>
									<div class="row nm">
										<div class="col s12 m12 l6 left-align-res">
											<p class="normal dark7-text">Pengetahuan
												<i class="material-icons line-icon-p">stop_circle</i>UTS
												<i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020
											</p>
										</div>
										<div class="col s12 m12 l6 right-align-res">
										</div>
									</div>
								</div>
							</div>

							<div class="row nm mb2">
								<div class="col s3">
									<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
										<select v-model="fil_tipejawaban" class="select-search" searchable='List of options'>
											<option value="" selected>Semua Tipe Jawaban</option>
											<option value="Pilihan Ganda">Pilihan Ganda</option>
											<option value="Benar/Salah">Benar/Salah</option>
											<option value="Jawaban Singkat">Jawaban Singkat</option>
										</select>
										<span></span>
									</label>
								</div>
							</div>

							<div class="divider"></div>

							<table class="highlight primary-highlight">
								<thead>
									<tr>
										<th>
											<label 
											class="matter-checkbox" 
											content="Tambahkan semua soal" 
											v-tippy='{ placement : "left" }'>
											<input type="checkbox" v-model="selectAll">
											<span></span></label>
										</th>
										<th>
											<a @click="sortDetailBank('id')" class="matter-button-text button-icon" content="Urutkan Berdasarkan Nomor" v-tippy='{ placement : "bottom" }'>
												<i 
												v-show="currentSortBanks === 'id' && currentSortDirBanks === 'asc'" 
												class="material-icons left">expand_less</i>
												<i 
												v-show="currentSortBanks === 'id' && currentSortDirBanks === 'desc'" 
												class="material-icons left">expand_more</i>

												No
											</a>
										</th>
										<th style="width: 700px">Soal</th>
										<th>Tipe Jawaban</th>
										<th>
											<a @click="sortDetailBank('jumlah')" class="matter-button-text button-icon" content="Urutkan Berdasarkan Poin" v-tippy='{ placement : "bottom" }'>
												<i 
												v-show="currentSortBanks === 'jumlah' && currentSortDirBanks === 'asc'" 
												class="material-icons left">expand_less</i>
												<i 
												v-show="currentSortBanks === 'jumlah' && currentSortDirBanks === 'desc'" 
												class="material-icons left">expand_more</i>

												Poin
											</a>
										</th>
									</tr>
								</thead>
								<tbody>
									<tr v-for="bankst in filterDetailBank">
										<td>
											<label class="matter-checkbox" content="Tambahkan soal ini" v-tippy='{ placement : "left" }'>
												<input type="checkbox" v-model="selected" :value="bankst.id" number>
												<span></span>
											</label>
										</td>
										<td>{{ bankst.id }}</td>
										<td><p v-dummy="30"></p></td>
										<td>Pilihan Ganda</td>
										<td>{{ bankst.jumlah }}</td>
									</tr>
								</tbody>
							</table>

						</div>
					</section>
				</div>

			</div>
		</div>

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

				banks: [],
				bankss: [],
				banksst: [],
				selected: [],
				init: false,

				loading: true,
				errored: false,

				loading2: true,
				errored2: false,

				fil_kelas:'',
				fil_matpel:'',
				currentSortBanks:'deskripsi',
				currentSortDirBanks:'asc',

				fil_tipejawaban:'',
				fil_poin:'',
				currentSortBank:'id',
				currentSortDirBank:'asc'
			};
		},
		mounted() {
			this.getDataSiswa();
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
			},
			filterBank: function(){
				return this.filterBanksByKelas(this.filterBanksByMatpel(this.sortBanksAction(this.banks)))
			},

			filterDetailBank: function(){
				return this.filterBankssByTipeJawaban(this.sortBankssAction(this.banksst))
			},
		},
		methods: {
			handleClick() {
				this.isLoading = true;
				this.disabled= 1;
				const v = this;
				
				setTimeout(() => {
					this.isLoading = false;
					v.isEnd = false;

					if(v.isEnd == false) {
						this.disabled= 0;
						$('.modal').modal('close');
					}
				}, 2000);
			},
			getDataSiswa() {
				let uri =`http://127.0.0.1:8002/api/barang`;

				axios.get(uri).then(response => {
					this.banks = response.data

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
			filterBanksByKelas: function(banks){
				return banks.filter(bank => !bank.deskripsi.indexOf(this.fil_kelas))
			},
			filterBanksByMatpel: function(banks){
				return banks.filter(bank => !bank.nama.indexOf(this.fil_matpel))
			},
			sortBanks: function(s) {
				if(s === this.currentSortBanks) {this.currentSortDirBanks = this.currentSortDirBanks==='asc'?'desc':'asc';}
				this.currentSortBanks = s;
			},
			sortBanksAction: function() {
				return this.banks.sort((a,b) => {
					let modifier = 1;
					if(this.currentSortDirBanks === 'desc') modifier = -1;
					if(a[this.currentSortBanks] < b[this.currentSortBanks]) return -1 * modifier;
					if(a[this.currentSortBanks] > b[this.currentSortBanks]) return 1 * modifier;
					return 0;
				});
			},


			//////////////////////////////////////////////////////////////////////////////////////


			getDetailBank(id) {
				this.init = true;
				let uri =`http://127.0.0.1:8002/api/barang/${id}`;

				axios.get(uri).then(response => {
					this.bankss = response.data
					this.getDetailBankss()

				}).catch(error => {
					this.errored2 = true

				}).finally(() => {
					this.loading2 = false
				});
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
						$('.select-search').formSelect2({closeOnClick: false});
						$('.select').formSelect({closeOnClick: true});
					});
				});
			},
			backDetailBank() {
				this.init = false
				this.loading2= true
				this.errored2= false

				this.$nextTick(() => {
					$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
					$('.select-search').formSelect2({closeOnClick: false});
					$('.select').formSelect({closeOnClick: true});
				});
			},
			filterBankssByTipeJawaban: function(banksst){
				return banksst.filter(bankss => !bankss.nama.indexOf(this.fil_tipejawaban))
			},
			sortDetailBank: function(s) {
				if(s === this.currentSortBank) {this.currentSortDirBank = this.currentSortDirBank==='asc'?'desc':'asc';}
				this.currentSortBank = s;
			},
			sortBankssAction: function() {
				return this.banksst.sort((a,b) => {
					let modifier = 1;
					if(this.currentSortDirBank === 'desc') modifier = -1;
					if(a[this.currentSortBank] < b[this.currentSortBank]) return -1 * modifier;
					if(a[this.currentSortBank] > b[this.currentSortBank]) return 1 * modifier;
					return 0;
				});
			},
		},
		components: {
			VueLoadingButton,
			VclTable
		},
	}
</script>