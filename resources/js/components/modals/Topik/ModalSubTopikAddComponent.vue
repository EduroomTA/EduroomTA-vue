<template>
	<section>
		
		<div id="modal-add-subtopik" class="modal modal-small">
			<form @submit.prevent="">
				<div class="modal-content">
					<h6 class="mb3">Tambah Sub Topik</h6>
					<div class="row nm">
						<div class="col s12">
							<label class="matter-textfield-filled" style="width: 100%">
								<input 
								v-model="sub_topik.judul_sub_topik"
								type="text" 
								placeholder=" " 
								required=""/>
								<span>Nama Sub Topik</span>
							</label>

							<input 
							type="hidden" 
							v-model="sub_topik.id_topik"
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
					>Terbitkan</VueLoadingButton>
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
				sub_topik: {}
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
			}
		},
		components: {
			VueLoadingButton,
		},
	}
</script>