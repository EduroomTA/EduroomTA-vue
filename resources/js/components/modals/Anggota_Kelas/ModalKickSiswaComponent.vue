<template>
	<section>
		
		<div id="modal-keluarkan" class="modal modal-small">
			<div class="modal-content">
				<h6 class="bold">Keluarkan Siswa?</h6>
				<p>Data Siswa di Kelas ini akan terhapus</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="matter-button-text modal-close" :disabled="disabled == 1">Batal</button>

				<VueLoadingButton
				class="matter-button-text primary-text"
				@click.native="handleClick"
				:loading="isLoading"
				>Keluarkan</VueLoadingButton>
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