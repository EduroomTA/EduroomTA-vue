<template>
	
	<section>
		
		<div id="modal-setting-kuis" class="modal modal-small initial">
			<div class="modal-content pb0">
				<h6 class="mb3">Tambah Topik</h6>

				<div class="row">
					<div class="col s12 m12 l4"><h6>Durasi</h6></div>
					<div class="col s12 m12 l8">
						<div v-show="custom_durasi" class="row nm valign-wrapper">
							<div class="col s6 p0">
								<label id="durasi" class="matter-textfield-filled">
									<input class="center" type="number" min="1" placeholder=" " v-model="setting.durasi"/>
									<span></span>
								</label>
							</div>
							<div class="col s6 valign">
								<a @click.prevent="rekomendasi_durasiClick" class="matter-button-text primary-text">Rekomendasi</a>
							</div>
						</div>

						<label v-show="rekomendasi_durasi" class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select @change="custom_durasiClick" class="select" v-model="setting.durasi">
								<option value="" selected>Tak Terbatas</option>
								<option value="30">30 Menit</option>
								<option value="45">45 Menit</option>
								<option value="60">60 Menit</option>
								<option value="90">90 Menit</option>
								<option value="120">120 Menit</option>
								<option value="custom">Isi Sendiri</option>
							</select>
							<span></span>
						</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m12 l4"><h6>Urutan</h6></div>
					<div class="col s12 m12 l8">
						<label class="matter-textfield-flat center-select select-flat" style="width: 100%">
							<select class="select">
								<option value="xxxxx" selected>Urut</option>
								<option value="cccdd">Acak Soal</option>
								<option value="asdas">Acak Jawaban</option>
								<option value="asdas">Acak Soal & Jawaban</option>
							</select>
							<span></span>
						</label>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button 
				type="button" 
				class="matter-button-text modal-close" 
				:disabled="disabled == 1">Batal</button>
				
				<VueLoadingButton
				class="matter-button-text primary-text"
				@click.native="handleClick"
				:loading="isLoading"
				>Simpan</VueLoadingButton>
			</div>
		</div>

	</section>

</template>

<script>
	import VueLoadingButton from 'vue-loading-button'

	export default {
		data() {
			return {
				isLoading: false,
				isEnd: true,
				custom_durasi: false,
				rekomendasi_durasi: true,
				disabled: 0,
				setting:{
					durasi: ""
				},
			};
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
			custom_durasiClick(){
				if (this.setting.durasi === "custom") {
					this.custom_durasi = true
					this.rekomendasi_durasi = false
				} else {
					this.custom_durasi = false
					this.rekomendasi_durasi = true
				}
			},
			rekomendasi_durasiClick(){
				this.custom_durasi = false
				this.rekomendasi_durasi = true
				this.setting.durasi = ""
			}
		},
		components: {
			VueLoadingButton,
		},
	}
</script>