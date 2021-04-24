<template>
	<section>
		
		<div id="modal-edit-bab" class="modal modal-small">
			<form @submit.prevent="">
				<div class="modal-content">
					<div class="mb3">
						<h6>Edit Topik</h6>
					</div>

					<div class="row">
						<div class="col s12">
							<label class="matter-textfield-filled" style="width: 100%">
								<input
								v-model="topik.judul_topik" 
								type="text"
								placeholder=" "
								required/>
								<span>Nama Topik</span>
							</label>

							<input 
							type="hidden"
							v-model="topik.id_pelajaran"
							value="">
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
			</form>
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
				topik: {}
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