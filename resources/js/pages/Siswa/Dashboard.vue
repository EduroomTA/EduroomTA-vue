<template>
	<section>
		<section class="container">
			<div class="header row">
				<div class="col s12 m12 l9">
					<div class="title">
						<h5 class="semibold primary-text">Dashboard</h5>
					</div>
				</div>
				<div class="col s12 m12 l3">
					<div class="component right-align">
						<label id="select_search" class="matter-textfield-flat center-select select-flat" style="width: 100%; border: 0">
							<select class="select-search" searchable='List of options'>
								<option value="" disabled selected>Tahun Ajaran</option>
								<option value="1">2020/2021</option>
								<option value="2">2021/2022</option>
								<option value="3">2022/2023</option>
							</select>
							<span></span>
						</label>
					</div>
				</div>
			</div>
		</section>

		<section class="container">
			<div class="row">
				
				<div class="col s12 m6 l4">
					<router-link :to="{ name: 'siswa.kelas.mapels' }">
						<div class="primary white-text box-properti">
							<h6 class="nm">8C</h6>
						</div>
					</router-link>
					<div class="card outlined hoverable-shadow link">
						<div class="card-header row dark3">
							<div class="title col s10">
							</div>
							<div class="link-card col s2">
							</div>
						</div>
						<router-link :to="{ name: 'siswa.kelas.mapels' }">
							<div class="card-content">
								<br>
								<br>
							</div>
						</router-link>
					</div>
				</div>

			</div>
		</section>
	</section>
</template>

<script type="text/javascript" :src="'/asset/js/materialize.js'"></script>

<script>
	export default {
		mounted() {
			this.init()
		},
		methods: {
			init() {
				$('.select').formSelect({closeOnClick: true});
				$('.select-search').formSelect2({closeOnClick: false});
			}
		}
	}

</script>