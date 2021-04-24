<template>
	<section>
		
		<div id="modal-edit-materi" class="modal modal-full modal-fixed-header">
			<form @submit.prevent="">
				<div class="modal-header row nm">
					<div class="col s7">
						<h5 class="title-modal">Edit Materi</h5>
					</div>
					<div class="col s5 right-align">
						<div style="margin: 0.3rem 4rem 0.3rem 0;">
							<VueLoadingButton
							class="matter-button-contained"
							@click.native="handleClick"
							:loading="isLoading"
							:disabled="disabled == 1"
							>Simpan</VueLoadingButton>
						</div>

						<button 
						type="button" 
						class="matter-button-circle modal-close close-button" 
						:disabled="disabled == 1">
						<i class="material-icons">close</i></button>
					</div>
				</div>

				<div class="modal-content">
					<div class="container w95">
						<div class="col s12 m12 l9 mb1-res">
							<div class="row">
								<div class="col s12">
									<label id="materi" class="matter-textfield-filled" style="width: 100%">
										<input
										v-model="materi.nama_materi" 
										type="text" 
										class="validate" 
										placeholder=" " 
										required=""/>
										
										<span>Nama Materi</span>
									</label>
								</div>
							</div>

							<div class="row">
								<div class="col s12">
									<tinymce 
									id="d1-edit" 
									v-model="materi.isi_materi"
									:plugins="plugins"
									:toolbar1="toolbar1"
									:toolbar2="toolbar2"/>
								</div>
							</div>
						</div>

						<div class="col s12 m12 l3">
						</div>
					</div>
				</div>
			</form>
		</div>

	</section>
</template>

<script>
	import VueLoadingButton from 'vue-loading-button'

	export default {
		data() {
			return {
				materi:{},
				isLoading: false,
				isEnd: true,
				disabled: 0,
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
		},
	}
</script>