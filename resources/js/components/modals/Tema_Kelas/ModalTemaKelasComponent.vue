<template>
	<section>
		
		<div id="modal-pilih-tema" class="modal modal-large modal-fixed-footer">
			<div class="modal-fixed-header">
				<div class="row nm">
					<div class="col s6">
						<h6>Tema Mata Pelajaran</h6>
					</div>
					<div class="col s6 right-align">
						<label class="matter-textfield-flats icon-input left-icon no-span" style="width: 100%">
							<input type="text" placeholder="Cari Tema" content="Cari Tema"> 
							<span></span> 
							<i class="material-icons">search</i>
						</label>
					</div>
				</div>
			</div>

			<div class="modal-content">
				<div class="cc-selector-2 row nm" style="padding-bottom: 5rem;">
					<div class="col s12 m12 l4 mtb05">
						<input id="cat2" type="radio" name="creditcard" value="cat" />
						<label class="drinkcard-cc" for="cat2" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog2" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog2" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog3" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog3" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="cat2" type="radio" name="creditcard" value="cat" />
						<label class="drinkcard-cc" for="cat2" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog2" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog2" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog3" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog3" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
					</div>
					<div class="col s12 m12 l4 mtb05">
						<input id="dog4" type="radio" name="creditcard" value="dog" />
						<label class="drinkcard-cc" for="dog4" style="background-image: url('/asset/img/tema/math2.png')"></label>
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