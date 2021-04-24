<template>
	<section>

		<section class="dark4">
			<section class="container w60">
				<div class="header-detail">
					<div class="center-content icon-page">
						<i class="material-icons icon">book</i>
					</div>
					<div class="title">
						<div class="left-align-res">
							<h5 class="semibold primary-text">Sprint Retrospective I</h5>
							<p class="normal primary-text">KD1 | Nama BAB</p>
						</div>
					</div>
				</div>
			</section>
		</section>

		<section id="tugas" class="container w60 mb6">
			<div class="mt2">
				<p v-dummy="100"></p>
				<p v-dummy="100"></p>
			</div>
		</section>

	</section>
</template>

<script>
	export default {
		mounted() {
			$('.sidenavs').sidenav();
		},  
	};
</script>