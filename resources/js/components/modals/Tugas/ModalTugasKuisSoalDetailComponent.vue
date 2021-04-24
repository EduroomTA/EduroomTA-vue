<template>
	<section>
		
		<div id="modal-detail-soal" class="modal modal-full modal-fixed-header">
			<div class="modal-header row nm">
				<div class="col s7">
					<h5 class="title-modal">Detail Soal</h5>
				</div>
				<div class="col s5 right-align">
					<button type="button" class="matter-button-circle modal-close close-button" :disabled="disabled == 1">
						<i class="material-icons">close</i>
					</button>
				</div>
			</div>

			<div class="modal-content">
				<div class="container">
					<div class="row nm">
						<div class="col s12">
							<h6 class="normal line-icon-text">
								<i class="material-icons primary-text line-icon-p" style="font-size: 32px">help</i>Pertanyaan
							</h6>
						</div>
						<div class="col s12 pl4-res">
							<p v-dummy="100" class="normal dark-text"></p>
						</div>
					</div>

					<div class="divider mt2 mb1"></div>

					<div class="row nm">
						<div class="col s12 m12 l5">
							<h6 class="normal line-icon-text nm mtb1">
								Jawaban
							</h6>
						</div>
						<div class="col s12 m12 l7">
							<div class="row nm">
								<div class="col s12 m12 l5 border-right-res">
									<h6 class="line-icon-text"><i class="material-icons primary-text line-icon-p" style="font-size: 32px">grading</i>Poin <span class="chip nm ml1">30</span></h6>
								</div>
								<div class="col s12 m12 l7 right-align">
									<h6 class="line-icon-text right-inline"><i class="material-icons primary-text line-icon-p" style="font-size: 32px">history_edu</i>Tipe Jawaban <span class="chip nm ml1">Pilihan Ganda</span></h6>
								</div>
							</div>
						</div>
					</div>

					<div class="divider mt1 mb2"></div>
				</div>

				<div class="container w60">
					<!-- <div class="row nm">

						<div class="col s12">
							<div class="card outlined border-success success-smoth2">
								<div class="row nm valign-wrapper panel-05">
									<div class="col s2 valign">
										<label class="matter-radio success-init">
											<input type="radio" name="benar_salah" disabled checked="">
											<span>Jawaban 1</span>
										</label>
									</div>
									<div class="col s10">
										<p v-dummy="50" class="normal dark-text"></p>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12">
							<div class="card outlined">
								<div class="row nm valign-wrapper panel-05">
									<div class="col s2 valign">
										<label class="matter-radio">
											<input type="radio" name="benar_salah" disabled>
											<span>Jawaban 2</span>
										</label>
									</div>
									<div class="col s10">
										<p v-dummy="50" class="normal dark-text"></p>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12">
							<div class="card outlined">
								<div class="row nm valign-wrapper panel-05">
									<div class="col s2 valign">
										<label class="matter-radio">
											<input type="radio" name="benar_salah" disabled>
											<span>Jawaban 3</span>
										</label>
									</div>
									<div class="col s10">
										<p v-dummy="50" class="normal dark-text"></p>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12">
							<div class="card outlined">
								<div class="row nm valign-wrapper panel-05">
									<div class="col s2 valign">
										<label class="matter-radio">
											<input type="radio" name="benar_salah" disabled>
											<span>Jawaban 4</span>
										</label>
									</div>
									<div class="col s10">
										<p v-dummy="50" class="normal dark-text"></p>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<div class="row nm">

						<div class="col s12">
							<div class="card outlined border-success success-smoth2">
								<div class="row nm valign-wrapper panel-05">
									<div class="col s2 valign">
										<label class="matter-radio success-init">
											<input type="radio" name="benar_salah" disabled checked="">
											<span>Benar</span>
										</label>
									</div>
									<div class="col s10">
										<p v-dummy="50" class="normal dark-text"></p>
									</div>
								</div>
							</div>
						</div>

						<div class="col s12">
							<div class="card outlined">
								<div class="row nm valign-wrapper panel-05">
									<div class="col s2 valign">
										<label class="matter-radio">
											<input type="radio" name="benar_salah" disabled>
											<span>Salah</span>
										</label>
									</div>
									<div class="col s10">
										<p v-dummy="50" class="normal dark-text"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
			};
		},
		
		mounted() {

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
			SlidingHeader,
		},
	}
</script>