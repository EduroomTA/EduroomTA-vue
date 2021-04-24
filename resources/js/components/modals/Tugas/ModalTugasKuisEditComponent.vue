<template>
	<section>
		
		<div id="modal-edit-tugas-kuis" class="modal modal-full modal-fixed-header">
			<form @submit.prevent="">
				<div class="modal-header row nm">
					<div class="col s7">
						<h5 class="title-modal">Edit Tugas Kuis</h5>
					</div>
					<div class="col s5 right-align">
						<!-- <div style="margin: 0.3rem 4rem 0.3rem 0;">
							<VueLoadingButton
							class="matter-button-contained"
							:loading="isLoading"
							type="submit"
							:disabled="!barang.nama || !barang.jumlah || !barang.deskripsi"
							>Terbitkan</VueLoadingButton>
						</div> -->

						<a 
						class="matter-button-circle modal-close close-button" 
						:disabled="disabled == 1">
						<i class="material-icons">close</i></a>
					</div>
				</div>

				<div class="modal-content">
					<div class="container w40 mb6">
						<div class="row">
							<div class="col s12">
								<label id="xmas" class="matter-textfield-filled" style="width: 100%">
									<input 
									v-model="tugas_kuis.judul"
									type="text"  
									placeholder=" "/>
									<span>Judul Tugas Kuis</span>
								</label>
							</div>
						</div>

						<div class="row mb0">
							<div class="col s12">
								<p class="dark8-text semibold labeling">Tipe Penilaian</p>
								<label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
									<select 
									class="select validate" 
									required="true" 
									aria-required="true" 
									v-model="tugas_kuis.id_penilaian">

									<option value="" disabled selected>Pilih Tipe Penilaian</option>
									<option value="1">Pengetahuan</option>
									<option value="2">Keterampilan</option></select>

									<span></span>
								</label>
							</div>
						</div>

						<div class="row">
							<div class="col s12">
								<label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
									<select 
									class="select validate" 
									required="true" 
									aria-required="true" 
									v-model="tugas_kuis.id_sub_penilaian">

									<option value="" disabled selected>Pilih Tipe Sub Penilaian</option>
									<option value="1">Tugas</option>
									<option value="2">Ulangan</option>
									<option value="3">UTS</option>
									<option value="3">UAS</option></select>

									<span></span>
								</label>
							</div>
						</div>

						<div class="row">
							<div class="col s12 mb05">
								<p class="dark8-text semibold labeling">Tenggat</p>
							</div>
							<div class="col s6">
								<date-picker 
								v-model="tugas_kuis.deadline_tanggal" 
								valueType="format" 
								placeholder="Tanggal">
								<svg slot="icon-calendar"></svg></date-picker>
							</div>

							<div class="col s6">
								<date-picker
								v-model="tugas_kuis.deadline_waktu"
								format="HH:mm"
								value-type="format"
								type="time"
								placeholder="Waktu">
								<svg slot="icon-calendar"></svg></date-picker>
							</div>
						</div>

						<div id="penjadwalan_edit_tugaskuis_layout" class="row hide">
							<div class="col s12 mb05">
								<p class="dark8-text semibold labeling">Penerbitan</p>
							</div>
							<div class="col s6">
								<date-picker 
								v-model="tugas_kuis.jadwal_penerbitan_tanggal" 
								valueType="format" 
								placeholder="Tanggal">
								<svg slot="icon-calendar"></svg></date-picker>
							</div>

							<div class="col s6">
								<date-picker
								v-model="tugas_kuis.jadwal_penerbitan_waktu"
								format="HH:mm"
								value-type="format"
								type="time"
								placeholder="Waktu"
								><svg slot="icon-calendar"></svg></date-picker>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

	</section>
</template>

<script>
	import VueLoadingButton from 'vue-loading-button';
	import DatePicker from 'vue2-datepicker';
	import 'vue2-datepicker/index.css';

	export default {
		data() {
			return {
				isLoading: false,
				isEnd: true,
				disabled: 1,
				tugas_kuis:{},
				plugins: 
				[
				'advlist autolink lists link image charmap print preview hr anchor pagebreak', 
				'searchreplace wordcount visualblocks visualchars code fullscreen', 
				'insertdatetime media nonbreaking save table contextmenu directionality',
				'template paste textcolor colorpicker textpattern imagetools toc help emoticons hr codesample',
				'autoresize'
				],
				toolbar1: '',
				toolbar2: '',
			};
		},
		mounted() {
			$('#penjadwalan_tugaskuis_edit').click(function () {
				$('#penjadwalan_edit_tugaskuis_layout')
				.toggleClass("hide", !$("#penjadwalan_tugaskuis_edit")
					.prop("checked")); 
			});
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
		},
		components: {
			VueLoadingButton,
			DatePicker,
		},
	}
</script>