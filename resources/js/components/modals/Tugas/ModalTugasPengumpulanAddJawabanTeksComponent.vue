<template>
	<section>
		
		<div id="modal-add-jawaban-teks" class="modal modal-full">
			<div class="modal-header row nm">
				<div class="col s11">
					<h5>Tambah Materi Baru</h5>
				</div>
				<div class="col s1 right-align">
					<button 
					type="button" 
					class="matter-button-circle modal-close" 
					:disabled="disabled == 1">
					<i class="material-icons">close</i></button>
				</div>
			</div>
			<div class="modal-content" style="padding-top: 0 !important">
				<div class="container w95">
					<form action="" method="POST" class="row">
						<div class="col s12">
							<tinymce 
							id="d1" 
							v-model="data"
							:plugins="plugins"
							:toolbar1="toolbar1"
							:toolbar2="toolbar2"/>
						</div>

						<div class="col s12 right-align">
							<VueLoadingButton
							class="matter-button-contained"
							@click.native="handleClick"
							:loading="isLoading"
							>Terbitkan</VueLoadingButton>
						</div>
					</form>
				</div>
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
				disabled: 0,
				data : '',
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