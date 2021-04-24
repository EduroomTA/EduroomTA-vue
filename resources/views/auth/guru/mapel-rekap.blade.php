@extends('auth.app')

@section('title')
Rekap | Nama Kelas | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header row mb0">
		<div class="col s12 m12 l5">
			<div class="title">
				<h5 class="primary-text">Rekap</h5>
			</div>
		</div>
		<div class="col s12 m12 l7">
			<div class="component right-align-res">
				<div class="ptb05">
					<button class="matter-button-text button-icon dropdown-trigger drop mtb05 primary-text" href="#!" data-target="dropdown-rekap-nilai">
						<i class="material-icons left dark8-text">save_alt</i>Rekap
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container row tab-menu-page">
	<div class="col s12">
		<ul class="tabs indicatorv2 inline">
			<li id="link0" class="tab col s3"><a class="active" href="#single-test0">KKM</a></li>
			<li id="link1" class="tab col s3"><a href="#single-test1">Pengetahuan</a></li>
			<li id="link2" class="tab col s3"><a href="#single-test2">Keterampilan</a></li>
			<li id="link3" class="tab col s3"><a href="#single-test3">Sikap</a></li>
		</ul>
	</div>
</section>

<section id="single-test0" class="container mb3">
	<div class="row mt3">
		<div class="col s12 m12 l8">
			<div class="row">
				<div class="col s12">
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
			</div>
		</div>
		<div class="col s12 m12 l4">
			<div class="card outlined panel">
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
					<div class="col s12 right-align mt1">
						<button class="matter-button-text primary-text">Simpan</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="single-test1" class="container mb3 w100-full">
	<div class="animated fadeIn">
		<div class="table-scroll-x table-scroll-y sticky-left mt3 mb6">
			<table id="table-1" class="highlight border widt-maximum">

				<div id="sis" class="white center hide left-header">
					<b>Siswa</b>
				</div>

				<thead>
					<tr class="white">
						<th class="white center" style="width: 340px !important; z-index: 2" rowspan="2">
							<div>Siswa</div>
						</th>

						<th colspan="2" class="center">KD 1</th>
						<th colspan="2" class="center">KD 2</th>
						<th colspan="2" class="center">KD 3</th>
						<th colspan="2" class="center">KD 4</th>
						<th colspan="2" class="center">KD 5</th>

						<th colspan="2" rowspan="2" class="center fit-content">HPH</th>
						<th colspan="2" rowspan="2" class="center fit-content">HPTS</th>
						<th colspan="2" rowspan="2" class="center fit-content">HPAS</th>
						<th colspan="2" rowspan="2" class="center fit-content">HPA</th>
						<th colspan="2" rowspan="2" class="center fit-content">Predikat</th>
						<th colspan="2" rowspan="2" class="center fit-content">Deskripsi</th>
					</tr>
					<tr class="white">
						<th>Ulangan</th>
						<th>Tugas</th>
						<th>Ulangan</th>
						<th>Tugas</th>
						<th>Ulangan</th>
						<th>Tugas</th>
						<th>Ulangan</th>
						<th>Tugas</th>
						<th>Ulangan</th>
						<th>Tugas</th>
					</tr>
				</thead>

				@include('components.on-blade.table1')

			</table>
		</div>
	</div>
</section>

<section id="single-test2" class="container mb3 w100-full">
	<div class="animated fadeIn">
		<div class="table-scroll-x table-scroll-y sticky-left mt3 mb6">
			<table id="table-2" class="highlight border widt-maximum">

				<div id="sis2" class="white center hide left-header">
					<b>Siswa</b>
				</div>

				<thead>
					<tr class="white">
						<th class="white center" style="width: 340px !important; z-index: 2" rowspan="2">
							<div>Siswa</div>
						</th>

						<th colspan="4" class="center">KD 1</th>
						<th colspan="4" class="center">KD 2</th>
						<th colspan="4" class="center">KD 3</th>
						<th colspan="4" class="center">KD 4</th>
						<th colspan="4" class="center">KD 5</th>

						<th colspan="2" rowspan="2" class="center fit-content" >HPH</th>
						<th colspan="2" rowspan="2" class="center fit-content" >Predikat</th>
						<th colspan="2" rowspan="2" class="center fit-content">Deskripsi</th>
					</tr>
					<tr class="white">
						<th>Proses</th>
						<th>Proyek</th>
						<th>Produ</th>
						<th>Portofolio</th>
						<th>Proses</th>
						<th>Proyek</th>
						<th>Produk</th>
						<th>Portofolio</th>
						<th>Proses</th>
						<th>Proyek</th>
						<th>Produk</th>
						<th>Portofolio</th>
						<th>Proses</th>
						<th>Proyek</th>
						<th>Produk</th>
						<th>Portofolio</th>
						<th>Proses</th>
						<th>Proyek</th>
						<th>Produk</th>
						<th>Portofolio</th>
					</tr>
				</thead>

				@include('components.on-blade.table2')

			</table>
		</div>
	</div>
</section>

<section id="single-test3" class="container mb3 w100-full">
	<div class="animated fadeIn">
		<div class="table-scroll-x table-scroll-y sticky-left mt3 mb6">
			<table id="table-3" class="border widt-maximum">

				<div id="sis3" class="white center hide left-header">
					<b>Siswa</b>
				</div>

				<thead>
					<tr class="white">
						<th class="white center" style="width: 340px !important; z-index: 2" rowspan="2">
							<div>Siswa</div>
						</th>
						<th colspan="2" class="center">Spiritual</th>
						<th colspan="2" class="center">Sosial</th>
						<th colspan="2" rowspan="2" class="center fit-content">Deskripsi Tambahan</th>
					</tr>
					<tr class="white">
						<th class="center">Input</th>
						<th>Deskripsi</th>

						<th class="center">Input</th>
						<th>Deskripsi</th>
					</tr>
				</thead>

				@include('components.on-blade.table3')

			</table>
		</div>
	</div>
</section>

<ul id="dropdown-rekap-nilai" class="dropdown-content">
	<li><a href="#!">PDF</a></li>
	<li><a href="#!">Excel</a></li>
</ul>

<ul id="dropdown-input-sp" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;height: auto !important;padding: 1rem 2rem 2rem 2rem">
	<li class="no-cursor mb1">
		<div class="badge-ed img-text p1">
			<div class="img">
				<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
			</div>
			<div class="text">
				<h6 class="semibold">Nama Siswa</h6>
				<p>1202170035</p>
			</div>
		</div>
		<div class="divider"></div>
		<h6 class="normal dark-text">Sikap <i class="material-icons line-icon-p">stop_circle</i> Spiritual</h6>
		<div class="divider"></div>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>berdoa sebelum dan sesudah melakukan kegiatan</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>memberi salam pada saat awal dan akhir kegiatan</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>menjalankan ibadah sesuai dengan agamanya</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>bersyukur atas nikmat dan karunia Tuhan Yang Maha Esa</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>mensyukuri kemampuan manusia dalam mengendalikan diri</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>bersyukur ketika berhasil mengerjakan sesuatu</span>
		</label>
	</li>
</ul>

<ul id="dropdown-input-so" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;height: auto !important;padding: 1rem 2rem 2rem 2rem">
	<li class="no-cursor mb1">
		<div class="badge-ed img-text p1">
			<div class="img">
				<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
			</div>
			<div class="text">
				<h6 class="semibold">Nama Siswa</h6>
				<p>1202170035</p>
			</div>
		</div>
		<div class="divider"></div>
		<h6 class="normal dark-text">Sikap <i class="material-icons line-icon-p">stop_circle</i> Sosial</h6>
		<div class="divider"></div>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>Jujur</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>Disiplin</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>Tanggung Jawab</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>Toleransi</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>Gotong Royong</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>Santun</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>Percaya Diri</span>
		</label>
	</li>
</ul>

<ul id="dropdown-input2" class="dropdown-content" style="position: fixed;max-width: max-content !important;height: auto !important;padding: 1rem 2rem">
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>berdoa sebelum dan sesudah melakukan kegiatan</span>
		</label>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<label class="matter-checkbox">
			<input type="checkbox">
			<span>berdoa sebelum dan sesudah melakukan kegiatan</span>
		</label>
	</li>
</ul>
@endsection

@section('js-plus')
<script type="text/javascript" src="{{ asset('asset/js/jquery.floatThead.js') }}"></script>

<script type="text/javascript">
	var kk = $("#table-1").height();
	document.documentElement.style.setProperty('--heghtnya', kk+'px');

	var $table = $('#table-1');
	$table.on("floatThead", function(e, isFloated, $floatContainer){
		if(isFloated){
			$floatContainer.addClass("floated");
			$(this).addClass("floated");
			$("#sis").removeClass("hide");

			$('#link1').on("click",function(){
				$floatContainer.removeClass("floated");
				$('#table-1').removeClass("floated");
				$("#sis").addClass("hide");
				$('.floatThead-container').css("transform", "translateX(0px) translateY(0px)");
			});

		} else {
			$floatContainer.removeClass("floated");
			$(this).removeClass("floated");
			$("#sis").addClass("hide");
		}
	});

	$table.floatThead({
		position: 'absolute'
	});
</script>

<script type="text/javascript">
	var height2 = $("#table-2").height();
	document.documentElement.style.setProperty('--heghtnya', height2+'px');

	var $table2 = $('#table-2');
	$table2.on("floatThead", function(e, isFloated, $floatContainer){
		if(isFloated){
			$floatContainer.addClass("floated");
			$(this).addClass("floated");
			$("#sis2").removeClass("hide");

			$('#link2').on("click",function(){
				$floatContainer.removeClass("floated");
				$('#table-2').removeClass("floated");
				$("#sis2").addClass("hide");
				$('.floatThead-container').css("transform", "translateX(0px) translateY(0px)");
			});

		} else {
			$floatContainer.removeClass("floated");
			$(this).removeClass("floated");
			$("#sis2").addClass("hide");
		}
	});

	$table2.floatThead({
		position: 'absolute'
	});
</script>

<script type="text/javascript">
	var height3 = $("#table-3").height();
	document.documentElement.style.setProperty('--heghtnya', height3+'px');

	var $table3 = $('#table-3');
	$table3.on("floatThead", function(e, isFloated, $floatContainer){
		if(isFloated){
			$floatContainer.addClass("floated");
			$(this).addClass("floated");
			$("#sis3").removeClass("hide");

			$('#link3').on("click",function(){
				$floatContainer.removeClass("floated");
				$('#table-3').removeClass("floated");
				$("#sis3").addClass("hide");
				$('.floatThead-container').css("transform", "translateX(0px) translateY(0px)");
			});

		} else {
			$floatContainer.removeClass("floated");
			$(this).removeClass("floated");
			$("#sis3").addClass("hide");
		}
	});

	$table3.floatThead({
		position: 'absolute'
	});
</script>

<script type="text/javascript">
	$('#link1').on("click",function(){
		jQuery('html,body').animate({scrollTop:1});
		jQuery('html,body').animate({scrollTop:-1});
	});

	$('#link2').on("click",function(){
		jQuery('html,body').animate({scrollTop:1});
		jQuery('html,body').animate({scrollTop:-1});
	});

	$('#link3').on("click",function(){
		jQuery('html,body').animate({scrollTop:1});
		jQuery('html,body').animate({scrollTop:-1});
	});
</script>
@endsection