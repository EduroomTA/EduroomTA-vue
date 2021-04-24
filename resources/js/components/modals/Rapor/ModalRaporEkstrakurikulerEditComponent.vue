<template>
	<section>
		
		<div id="modal-edit-ekstra" class="modal modal-small initial">
			<form action="" method="POST">
				<div class="modal-content">
					<h6 class="mb3">Edit Ektrakurikuler</h6>
					<div class="row nm">

						<div class="col s12 mb1">
							<p class="dark8-text semibold labeling">Ekstrakurikuler</p>
							<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%">
								<select class="select-search validate" searchable='List of options' name="kelas">
									<option value="1" selected="">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
								<span></span>
							</label>
						</div>

						<div class="col s12">
							<p class="dark8-text semibold labeling">Predikat</p>
							<div class="divider"></div>
							<div class="row mtb1">
								<div class="col s1">
								</div>
								<div class="col s2">
									<div class="mb05" style="padding: 0 0.3rem">E</div>
									<label class="matter-radio bottom-text">
										<input type="radio" name="group">
										<span></span>
									</label>
								</div>
								<div class="col s2">
									<div class="mb05" style="padding: 0 0.3rem">D</div>
									<label class="matter-radio bottom-text">
										<input type="radio" name="group">
										<span></span>
									</label>
								</div>
								<div class="col s2">
									<div class="mb05" style="padding: 0 0.3rem">C</div>
									<label class="matter-radio bottom-text">
										<input type="radio" name="group">
										<span></span>
									</label>
								</div>
								<div class="col s2">
									<div class="mb05" style="padding: 0 0.3rem">B</div>
									<label class="matter-radio bottom-text">
										<input type="radio" name="group">
										<span></span>
									</label>
								</div>
								<div class="col s2">
									<div class="mb05" style="padding: 0 0.3rem">A</div>
									<label class="matter-radio bottom-text">
										<input type="radio" name="group">
										<span></span>
									</label>
								</div>
								<div class="col s1">
								</div>
							</div>
							<div class="divider"></div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="matter-button-text modal-close" :disabled="disabled == 1">Batal</button>

					<VueLoadingButton
					class="matter-button-text primary-text"
					@click.native="handleClick"
					:loading="isLoading"
					>Simpan Perubahan</VueLoadingButton>
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