<template>
	<section>

		<sliding-header :threshold-hide="100" :threshold-open="200">
			<template v-slot:first-header>
				
			</template>

			<template v-slot:second-header>
				<section class="sect-sticky-sec-nav">
					<div class="navbar sticky-sec-nav">
						<nav class="nav-dash in-scroll-page">
							<div class="container w60">
								<div class="nav-wrapper">

									<div class="left">
										<div class="hide-on-med-and-down icon-sec-nav">
											<div class="icon-sec-container center-content primary">
												<i class="material-icons icon">assignment</i>
											</div>
										</div>
										<div class="titles">
											<span class="title">Sprint Retrospective I</span>
											<span class="desc">
												KD1 | Nama BAB
											</span>
										</div>
									</div>

								</div>
							</div>
						</nav>
					</div>
				</section>
			</template>
		</sliding-header>

		<section class="dark4">
			<section class="container w60">
				<div class="header-detail">
					<div class="center-content icon-page">
						<i class="material-icons icon">assignment</i>
					</div>
					<div class="title">
						<div class="left-align-res">
							<h5 class="semibold primary-text">Sprint Retrospective I</h5>
							<p class="normal primary-text">KD1 | Nama BAB</p>
						</div>
						<div class="row nm">
							<div class="col s12 m12 l6 left-align-res">
								<p class="normal dark7-text">Pengetahuan<i class="material-icons line-icon-p">stop_circle</i>UTS<i class="material-icons line-icon-p">stop_circle</i>12 Juni 2020</p>
							</div>
							<div class="col s12 m12 l6 right-align-res">
								<p class="normal dark7-text"><span class="badge-text1 primary white-text">Tenggat 12 Juni, 13:00</span></p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>

		<section class="container w60 mb6">
			<div class="mt2">
				<h6 class="title-segmen primary-text">Soal</h6>
				<p class="ltext">
					Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
					berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). 
					Dan tambahkan file TXT dengan format NIM_NAMA
				</p>
			</div>

			<div v-show="content" class="row nm mtb2">

				<div class="col s12">
					<div class="card shadow-8 panel-selection white mb4">
						<div class="panel">
							<div class="row nm">
								<div class="col s12 m12 l4">
									<div class="center">
										<h3 class="nm mtb3">90<span style="font-size: 1.5rem">/100</span></h3>
									</div>
								</div>
								<div class="col s12 m12 l8">
									<blockquote>
										<p class="normal dark7-text nm">Catatan</p>
										<p class="ltext">
											Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat 
											berpindah ke activity 2. Kirim file Java dan XML
										</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col s12">
					<div class="row">
						<div class="col s12 p0">
							<h6 class="title-segmen primary-text">Pengerjaan Anda</h6>
						</div>
					</div>

					<div class="row">
						<div class="col s12 mb2">
							<div class="normal line-icon-text primary-text nm mtb05 semibold">
								<i class="material-icons primary-text line-icon-p" style="font-size: 20px;">subject</i>
								Jawaban Berupa Teks
							</div>
							<div class="divider h05"></div>

							<div class="mtb2">
								<div class="center">
									<p>Belum ada jawaban ditambahkan</p>
									<a @click.prevent="clickShowJwbText()" class="matter-button-text primary-text">Tambahkan Jawaban Teks</a>
								</div>
							</div>
						</div>

						<div class="col s12 mb2">
							<div class="normal line-icon-text primary-text nm mtb05 semibold">
								<i class="material-icons primary-text line-icon-p" style="font-size: 20px;">attach_file</i>
								Jawaban Berupa Sisipan File
							</div>
							<div class="divider h05"></div>

							<div class="mtb2">
								<div class="center">
									<p>Belum ada jawaban ditambahkan</p>
									<a @click.prevent="clickShowJwbFile()" class="matter-button-text primary-text">Tambahkan Jawaban File</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div v-show="jwb_teks_click" class="animated fadeInUp faster mt4">
				<div class="mb2">
					<a class="matter-button-circle" @click.prevent="clickBack()"><i class="material-icons">arrow_back</i></a>
					<h6 style="display: inline; top: 0.7rem; position: absolute;" class="nm ml1">Tambah jawaban berupa teks</h6>
				</div>

				<tinymce 
				id="d1" 
				v-model="data"
				:plugins="plugins"
				:toolbar1="toolbar1"
				:toolbar2="toolbar2"
				/>
			</div>

			<div v-show="jwb_file_click" class="animated fadeInUp faster mt4">
				<div class="mb2">
					<a class="matter-button-circle" @click.prevent="clickBack()"><i class="material-icons">arrow_back</i></a>
					<h6 style="display: inline; top: 0.7rem; position: absolute;" class="nm ml1">Tambah jawaban berupa file</h6>
				</div>

				aa
			</div>
		</section>

	</section>
</template>

<script>
	import SlidingHeader from "@vuesence/sliding-header";

	export default {
		data() {
			return {
				data : '',
				plugins: 
				[
				'advlist autolink lists link image charmap print preview hr anchor pagebreak', 
				'searchreplace wordcount visualblocks visualchars code fullscreen', 
				'insertdatetime media nonbreaking save table contextmenu directionality',
				'template paste textcolor colorpicker textpattern imagetools toc help emoticons hr codesample',
				'autoresize'
				],
				toolbar1: '',
				toolbar2: '',

				jwb_teks_click: false,
				jwb_file_click: false,
				content: true,
			};
		},
		mounted() {
			$('.sidenavs').sidenav();
			$('.dropdown-trigger.drop').dropdown({closeOnClick: true});
			$('.modal').modal();
		},
		methods: {
			clickBack() {
				this.content = true
				this.jwb_teks_click = false
				this.jwb_file_click = false
			},
			clickShowJwbText() {
				this.jwb_teks_click = true
				this.content = false
			},
			clickShowJwbFile() {
				this.jwb_file_click = true
				this.content = false
			}
		},
		components: {
			SlidingHeader,
		}    
	};
</script>

<style>
.sliding-header {
	transition: 0.3s;
}
.sliding-header.hidden {
	top: -100px;
}
</style>