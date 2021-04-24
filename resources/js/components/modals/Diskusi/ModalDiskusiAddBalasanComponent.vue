<template>

	<section>
		<div id="modal-add-balasan" :class="'modal '+addClassResponsive">

			<mq-layout mq="sm">
				<div class="modal-header row nm">
					<div class="col s11">
						<h6>Balas Kontribusi</h6>
					</div>
					<div class="col s1 right-align">
						<button type="button" class="matter-button-circle modal-close" :disabled="disabled == 1">
							<i class="material-icons">close</i>
						</button>
					</div>
				</div>
			</mq-layout>

			<div class="modal-content">

				<mq-layout :mq="['md','lg']">
					<div class="row">
						<div class="col s12">
							<h6 class="semibold primary-text">Balas Kontribusi</h6>
						</div>
					</div>
				</mq-layout>

				<div class="row">
					<div class="col s12">
						<tinymce 
						id="d2" 
						v-model="data"
						:plugins="plugins"
						:toolbar1="toolbar1"
						:toolbar2="toolbar2"
						:other_options="tinyOptions"
						/>
					</div>
				</div>

				<div class="row nm">
					<mq-layout :mq="['md','lg']" class="col s12 right-align">
						<button type="button" class="matter-button-text modal-close" :disabled="disabled == 1">Batal</button>
						<VueLoadingButton
						class="matter-button-contained"
						@click.native="handleClick"
						:loading="isLoading"
						>Terbitkan</VueLoadingButton>
					</mq-layout>

					<mq-layout mq="sm" class="col s12 right-align">
						<VueLoadingButton
						class="matter-button-contained"
						@click.native="handleClick"
						:loading="isLoading"
						>Terbitkan</VueLoadingButton>
					</mq-layout>
				</div>

			</div>
		</div>
	</section>

</template>

<script>
	import VueLoadingButton from 'vue-loading-button'

	export default {
		computed: {
			addClassResponsive() {
				return this.$mq === 'sm' ? 'modal-full' : ' '
			}
		},
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
				''
				],
				tinyOptions: {
					'height': 250
				},
				toolbar1: '',
				toolbar2: '',
			};
		},
		mounted() {
			$('#penjadwalan_diskusi_add').click(function () {
				$('#penjadwalan_add_diskusi_layout').toggleClass("hide", !$("#penjadwalan_diskusi_add").prop("checked")); 
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
		},
	}
</script>