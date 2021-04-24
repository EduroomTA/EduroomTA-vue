<template>
	<section>
		
		<div id="modal-add-new-soal" class="modal modal-full modal-fixed-header">
			<form @submit.prevent="">
				<div class="modal-header row nm">
					<div class="col s7">
						<h5 class="title-modal">Tambah Soal Baru</h5>
					</div>
					<div class="col s5 right-align">
						<div style="margin: 0.3rem 4rem 0.3rem 0;">
							<VueLoadingButton
							class="matter-button-contained"
							@click.native="handleClick"
							:loading="isLoading"
							type="submit"
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
					<div class="container">

						<div class="row mb3 nm">
							<div class="col s12">
								<h6 class="normal line-icon-text mb2">
									<i class="material-icons primary-text line-icon-p" style="font-size: 32px">help</i>Pertanyaan
								</h6>
							</div>
							<div class="col s12">
								<tinymce 
								id="d1" 
								v-model="soal_kuis.pertanyaan"
								:plugins="plugins"
								:toolbar1="toolbar1"
								:toolbar2="toolbar2"/>
							</div>
						</div>

						<div class="card panel-05-tb outlined">
							<div class="row mtb2">
								<div class="col s12 m12 l6">

									<div class="row nm">
										<div class="col s12 m12 l6">
											<h6 class="normal line-icon-text nm mtb1">
												<i class="material-icons primary-text line-icon-p" style="font-size: 30px">grading</i>Poin
											</h6>
										</div>
										<div class="col s12 m12 l6">
											<label class="matter-textfield-filled" style="width: 100%">
												<input 
												v-model="soal_kuis.poin"
												type="number" 
												placeholder=" " 
												min="0"/>
												<span>Poin</span>
											</label>
										</div>
									</div>
								</div>

								<div class="col s12 m12 l6">
									<div class="row nm">
										<div class="col s12 m12 l6">
											<h6 class="normal line-icon-text nm mtb1">
												<i class="material-icons primary-text line-icon-p" style="font-size: 30px">history_edu</i>Tipe Jawaban
											</h6>
										</div>
										<div class="col s12 m12 l6">
											<label id="select_standared" class="matter-textfield-flat center-select select-flat" style="width: 100%">
												<select 
												class="validate select" 
												required="true" 
												aria-required="true" 
												@change="ganti_type_soal($event)" 
												v-model="soal_kuis.type">

												<option value="1" selected>Pilihan Ganda</option>
												<option value="2">Benar/Salah</option>
												<option value="3">Jawaban Singkat</option></select>
												<span></span>
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<section v-if="soal_kuis.type === '1'">
							<div class="row mtb2">
								<div class="col s12">
									<ul class="collapsible border right-icon popup expandable add-pilgan-collapsible">

										<li v-for="(jawaban_kuis_pilgans, index) in jawaban_kuis_pilgan" class="list_soal">
											<div class="collapsible-header">
												<div class="row nm valign-wrapper">
													<div class="col s6">
														<label 
														class="matter-radio" 
														content="Pilih sebagai kunci jawaban" 
														v-tippy='{ placement : "left" }'>

														<input 
														type="radio"
														v-model="soal_kuis.benar" 
														value="true">
														<span>Jawaban {{ index+1 }}</span></label>
													</div>

													<div class="col s6 valign right-align">
														<a 
														v-on:click="delete_pilihan_soal(indexs=index)" 
														class="matter-button-circle modal-trigger" 
														content="Hapus jawaban" 
														v-tippy='{ placement : "left" }'>
														<i class="material-icons" style="font-size: 1.5rem;">clear</i></a>
													</div>
												</div>
											</div>
											<div class="collapsible-body p0 pb1 dark4">
												<tinymce 
												:id="'aa'+index" 
												:plugins="plugins"
												:toolbar1="toolbar1"
												:toolbar2="toolbar2"
												v-model="jawaban_kuis_pilgans.jawaban"/>

												<input 
												type="hidden"
												v-model="jawaban_kuis_pilgans.id_soal_kuis">
											</div>
										</li>

									</ul>
								</div>
								<div class="col s12 right-align">
									<a 
									class="matter-button-text button-icon primary-text" 
									@click="add_pilihan_soal()">
									<i class="material-icons left">add</i>Tambah Pilihan</a>
								</div>
							</div>
						</section>

						<section v-else-if="soal_kuis.type === '2'">
							<div class="row mtb2">
								<div class="col s12 m12 l6">
									<div class="card panel outlined">
										<div class="row nm">
											<div class="col s12 m12 l6">
												<label 
												class="matter-radio" 
												content="Pilih sebagai kunci jawaban" 
												v-tippy='{ placement : "left" }'>

												<input 
												type="radio" 
												v-model="soal_kuis.benar"
												value="true">
												<span>Benar</span></label>
											</div>
											<div class="col s12 m12 l6">
											</div>
										</div>
									</div>
								</div>

								<div class="col s12 m12 l6">
									<div class="card panel outlined">
										<div class="row nm">
											<div class="col s12 m12 l6">
												<label 
												class="matter-radio" 
												content="Pilih sebagai kunci jawaban" 
												v-tippy='{ placement : "left" }'>

												<input 
												type="radio" 
												v-model="soal_kuis.benar"
												value="false">
												<span>Salah</span></label>
											</div>
											<div class="col s12 m12 l6">
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>

						<section v-else>
						</section>

					</div>
				</div>
			</form>
		</div>

		<div id="modal-delete-pilihan" class="modal modal-small">
			<div class="modal-content">
				<h6 class="bold">Hapus Jawaban {{ indexs+1 }}?</h6>
				<p>Semua data dari Jawaban ini akan terhapus.</p>
			</div>
			<div class="modal-footer">
				<button 
				type="button" 
				class="matter-button-text modal-close" 
				:disabled="disabled_delete == 1">Batal</button>

				<VueLoadingButton
				class="matter-button-text primary-text"
				:loading="isLoading_delete"
				@click.native="delete_pilihan_soal_Click()"
				>Hapus</VueLoadingButton>
			</div>
		</div>

	</section>
</template>

<script>
	import VueLoadingButton from 'vue-loading-button'
	import SlidingHeader from "@vuesence/sliding-header"

	export default {
		data() {
			return {
				isLoading: false,
				isEnd: true,
				disabled: 0,

				isLoading_delete: false,
				isEnd_delete: true,
				disabled_delete: 0,

				soal_kuis: {
					type: '1',
				},

				plugins: [
				'advlist autolink lists link image charmap print preview hr anchor pagebreak', 
				'searchreplace wordcount visualblocks visualchars code fullscreen', 
				'insertdatetime media nonbreaking save table contextmenu directionality',
				'template paste textcolor colorpicker textpattern imagetools toc help emoticons hr codesample',
				'autoresize'
				],

				toolbar1: '',
				toolbar2: '',

				
				indexs: null,

				jawaban_kuis_pilgan: [{
					id_soal_kuis:'',
					jawaban:'',
					benar:'',
				},{
					id_soal_kuis:'',
					jawaban:'',
					benar:'',
				},{
					id_soal_kuis:'',
					jawaban:'',
					benar:'',
				},{
					id_soal_kuis:'',
					jawaban:'',
					benar:'',
				}]
			};
		},
		
		mounted() {
			var elem = document.querySelector('.collapsible.expandable');
			var instance = M.Collapsible.init(elem, {
				accordion: false
			});
		},
		methods: {
			ganti_type_soal(event) {
				this.$nextTick(() => {
					var elem = document.querySelector('.collapsible.expandable');
					var instance = M.Collapsible.init(elem, {
						accordion: false
					});
				});
			},

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

			delete_pilihan_soal_Click() {
				this.isLoading_delete = true;
				this.disabled_delete= 1;
				const v = this;
				const c = this.indexs;
				
				setTimeout(() => {
					this.isLoading_delete = false;
					v.isEnd_delete = false;

					if(v.isEnd_delete == false) {
						this.disabled_delete= 0;
						this.jawaban_kuis_pilgan.splice(c, 1);
						$('#modal-delete-pilihan').modal('close');
					}
				}, 2000);
			},

			add_pilihan_soal: function() {
				var elem = document.createElement('li.list_soal');
				this.jawaban_kuis_pilgan.push({
					id_soal_kuis:"",
					jawaban:"",
					benar:"",

				});
			},

			delete_pilihan_soal: function() {
				$('#modal-delete-pilihan').modal('open');
			},
		},

		components: {
			VueLoadingButton,
			SlidingHeader,
		},
	}
</script>