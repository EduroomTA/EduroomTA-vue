<template>
	<section>
		
		<div id="modal-add-tugas-pengumpulan" class="modal modal-full modal-fixed-header">
			<form @submit.prevent="">
				<div class="modal-header row nm">
					<div class="col s7">
						<h5 class="title-modal">Tugas Pengumpulan Baru</h5>
					</div>
					<div class="col s5 right-align">
						<div style="margin: 0.3rem 4rem 0.3rem 0;">
							<VueLoadingButton
							class="matter-button-contained"
							@click.native="handleClick"
							:loading="isLoading"
							:disabled="disabled == 1"
							>Terbitkan</VueLoadingButton>
						</div>

						<button 
						type="button" 
						class="matter-button-circle modal-close close-button" 
						:disabled="disabled == 1">
						<i class="material-icons">close</i></button>
					</div>
				</div>

				<div class="modal-content">
					<div class="row">
						<div class="col s12 m12 l9 mb1-res">

							<div class="row">
								<div class="col s12">
									<label id="xmas" class="matter-textfield-filled" style="width: 100%">
										<input 
										type="text" 
										v-model="tugas_pengumpulan.judul" 
										placeholder=" "/>

										<span>Judul Tugas Pengumpulan</span>
									</label>
								</div>
							</div>

							<div class="row">
								<div class="col s12">
									<tinymce 
									id="d2" 
									v-model="tugas_pengumpulan.isi_tugas"
									:plugins="plugins"
									:toolbar1="toolbar1"
									:toolbar2="toolbar2"/>
								</div>
							</div>

							<div class="row">
								<div class="col s12 m12 l4">
								</div>
							</div>
						</div>

						<div class="col s12 m12 l3">
							<div class="row mb0">
								<div class="col s12">
									<p class="dark8-text semibold labeling">Tipe Penilaian</p>
									<label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
										<select 
										class="select validate" 
										required="true" 
										aria-required="true" 
										v-model="tugas_pengumpulan.id_penilaian">

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
										v-model="tugas_pengumpulan.id_sub_penilaian">

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
									v-model="tugas_pengumpulan.deadline_tanggal" 
									valueType="format" 
									placeholder="Tanggal">
									<svg slot="icon-calendar"></svg></date-picker>
								</div>

								<div class="col s6">
									<date-picker
									v-model="tugas_pengumpulan.deadline_waktu"
									format="HH:mm"
									value-type="format"
									type="time"
									placeholder="Waktu">
									<svg slot="icon-calendar"></svg></date-picker>
								</div>
							</div>

							<div id="penjadwalan_add_tugaspengumpulan_layout" class="row hide">
								<div class="col s12 mb05">
									<p class="dark8-text semibold labeling">Penerbitan</p>
								</div>
								<div class="col s6">
									<date-picker 
									v-model="tugas_pengumpulan.jadwal_penerbitan_tanggal" 
									valueType="format" 
									placeholder="Tanggal">
									<svg slot="icon-calendar"></svg></date-picker>
								</div>
								
								<div class="col s6">
									<date-picker
									v-model="tugas_pengumpulan.jadwal_penerbitan_waktu"
									format="HH:mm"
									value-type="format"
									type="time"
									placeholder="Waktu"
									><svg slot="icon-calendar"></svg></date-picker>
								</div>
							</div>

							<div class="row nm mtb2">
								<div class="col s12">
									<label class="matter-checkbox">
										<input id="penjadwalan_tugaspengumpulan_add" type="checkbox">
										<span>Jadwalkan Penerbitan</span>
									</label>
								</div>
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
				disabled: 0,
				tugas_pengumpulan:{},
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
			$('#penjadwalan_tugaspengumpulan_add').click(function () {
				$('#penjadwalan_add_tugaspengumpulan_layout')
				.toggleClass("hide", !$("#penjadwalan_tugaspengumpulan_add")
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

<style>
.mx-datepicker {
	width: 100% !important
}

.mx-datepicker input {
	background-color: var(--color-dark4);
	border: 0;
	box-shadow: none;
	font-size: 16px;
	padding: 1.5rem 1rem;
}

.mx-calendar-content .cell {
	cursor: pointer;
	text-align: center;
}

.mx-calendar-content .cell.active {
	color: #fff;
	background-color: var(--color-primary);
}

.mx-table-date .today {
	color: var(--color-primary);
}

.mx-time-column .mx-time-item.active {
	color: var(--color-primary);
	background-color: transparent;
	font-weight: 700;
}

.mx-time-column .mx-time-item {
	font-size: 14px;
}
</style>