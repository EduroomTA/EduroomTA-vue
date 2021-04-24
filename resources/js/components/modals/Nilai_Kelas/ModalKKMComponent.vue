<template>
	
	<section>
		
		<div id="modal-kkm" class="modal">
			<div class="modal-content pb0">

				<div class="row nm">
					<div class="col s12 m12 l8">
						<table>
							<thead>
								<tr>
									<th>Rentang Nilai</th>
									<th class="center">Predikat Capaian Kompetensi</th>
									<th class="center">Predikat Nilai</th>
								</tr>
							</thead>

							<tbody>
								<tr>
									<td>86 - 100</td>
									<td class="center">Sangat Baik</td>
									<td class="center">A</td>
								</tr>
								<tr>
									<td>71 - 85</td>
									<td class="center">Baik</td>
									<td class="center">B</td>
								</tr>
								<tr>
									<td>56 - 70</td>
									<td class="center">Cukup</td>
									<td class="center">C</td>
								</tr>
								<tr>
									<td>0 - 55</td>
									<td class="center">Kurang</td>
									<td class="center">D</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col s12 m12 l4">
						<div class="card outlined panel mt3">
							<div class="row">
								<div class="col s12 mb1">
									<p>KKM (Kriteria Ketuntasan Minimal)</p>
								</div>
								<div class="col s12">
									<label id="nama_sekolah" class="matter-textfield-filled" style="width: 100%">
										<input class="validate" type="text" placeholder=" " required="" aria-required="true" name="nama_sekolah" value="75" />
										<span>KKM</span>
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="matter-button-text modal-close" :disabled="disabled == 1">Batal</button>
				
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