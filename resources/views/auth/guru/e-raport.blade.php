@extends('auth.app')

@section('title')
E-Raport Kelas | EduRoom
@endsection

@section('content')
<section class="container">
	<div class="header row mb0">
		<div class="col s12 m12 l6">
			<div class="title">
				<h5 class="primary-text semibold">E-Raport</h5>
			</div>
		</div>
		<div class="col s12 m12 l6">
		</div>
	</div>
</section>

<section class="container row tab-menu-page">
	<div class="col s12">
		<ul class="tabs indicatorv2 inline">
			<li id="link-sikap" class="tab col s2"><a href="#page-sikap">Sikap</a></li>
			<li id="link-nilai" class="tab col s2"><a href="#page-nilai">Nilai</a></li>
			<li id="link-ekstra" class="tab col s2"><a href="#page-ekstra">Ekstrakurikuler</a></li>
			<li id="link-prestasi" class="tab col s2"><a href="#page-prestasi">Prestasi</a></li>
			<li id="link-absen" class="tab col s2"><a href="#page-absen">Ketidakhadiran</a></li>
			<li id="link-catatan" class="tab col s2"><a href="#page-catatan">Catatan Wali Kelas</a></li>
		</ul>
	</div>
</section>

<section id="page-sikap" class="container mb3 w100-full">
	<div class="animated fadeIn">
		<div class="table-scroll-x table-scroll-y sticky-left mt3 mb6">
			<table id="table-sikap" class="border widt-maximum">

				<div id="sis1" class="white center hide left-header">
					<b>Siswa</b>
				</div>

				<thead>
					<tr class="white">
						<th class="white center" style="width: 340px !important; z-index: 2" rowspan="2">
							<div>Siswa</div>
						</th>
						<th colspan="2" class="center">Spiritual</th>
						<th colspan="2" class="center">Sosial</th>
					</tr>
					<tr class="white">
						<th>Pendapat Guru Mapel</th>
						<th>Sikap</th>

						<th class="center">Pendapat Guru Mapel</th>
						<th>Sikap</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td class="ss">
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td>
							<p>
								5 guru menilai bersyukur atas nikmat dan karunia Tuhan Baik.<br>
								1 guru menilai memelihara hubungan baik sesama umat Baik.<br>
								11 guru menilai berdoa Baik. 10 guru menilai menjalankan Ibadah Baik.<br>
								10 guru menilai memberi Salam Baik.<br>
								2 guru menilai Bersyukur sebagai bangsa indonesia Baik.<br>
								2 guru menilai mensyukuri kemampuan manusia dalam mengendalikan diri Baik.<br>
								3 guru menilai bersyukur ketika berhasil mengerjakan sesuatu Baik.<br>
							</p>
						</td>
						<td class="center">
							<label id="ta-normal" class="matter-textfield-standard no-border-top">
								<textarea placeholder=" " cols="50"></textarea>
								<span></span>
							</label>
						</td>

						<td>
							<p>
								5 guru menilai bersyukur atas nikmat dan karunia Tuhan Baik.<br>
								1 guru menilai memelihara hubungan baik sesama umat Baik.<br>
								11 guru menilai berdoa Baik. 10 guru menilai menjalankan Ibadah Baik.<br>
								10 guru menilai memberi Salam Baik.<br>
								2 guru menilai Bersyukur sebagai bangsa indonesia Baik.<br>
								2 guru menilai mensyukuri kemampuan manusia dalam mengendalikan diri Baik.<br>
								3 guru menilai bersyukur ketika berhasil mengerjakan sesuatu Baik.<br>
							</p>
						</td>

						<td class="center">
							<label id="ta-normal" class="matter-textfield-standard no-border-top">
								<textarea placeholder=" " cols="50"></textarea>
								<span></span>
							</label>
						</td>
					</tr>
				</tbody>

			</table>
		</div>
	</div>
</section>

<section id="page-nilai" class="container mb3">
	<div class="animated fadeIn">
		<div class="table-scroll-x table-scroll-y sticky-left mt3 mb6">
			<table id="table-nilai">

				<div id="sis2" class="white center hide left-header">
					<b>Siswa</b>
				</div>

				<tbody>
					<tr>
						<td>
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td>
							<span class="badge-text1 res-enter success white-text">Nilai lengkap</span>
						</td>
						<td class="right-align">
							<a class="matter-button-text primary-text modal-trigger" href="#modal-view-nilai">Lihat Nilai</a>
						</td>
					</tr>
					<tr>
						<td>
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td>
							<span class="badge-text1 res-enter success white-text">Nilai lengkap</span>
						</td>
						<td class="right-align">
							<a class="matter-button-text primary-text modal-trigger" href="#modal-view-nilai">Lihat Nilai</a>
						</td>
					</tr>
					<tr>
						<td>
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td>
							<span class="badge-text1 res-enter danger white-text">Nilai belum lengkap</span>
						</td>
						<td class="right-align">
							<a class="matter-button-text primary-text modal-trigger" href="#modal-view-nilai">Lihat Nilai</a>
						</td>
					</tr>
				</tbody>

			</table>
		</div>
	</div>
</section>

<section id="page-ekstra" class="container mb3">
	<div class="animated fadeIn">
		<div class="table-scroll-x table-scroll-y sticky-left mt3 mb6">
			<table id="table-ekstra" class="border">

				<div id="sis3" class="white center hide left-header">
					<b>Siswa</b>
				</div>

				<thead>
					<tr class="white">
						<th class="white center" style="width: 340px !important; z-index: 2" rowspan="2">
							<div>Siswa</div>
						</th>
						<th class="center">Ekstrakurikuler</th>
						<th class="center">Predikat</th>
						<th class="center">Deskripsi</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td rowspan="2">
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td class="center">
							Pramuka
						</td>
						<td class="center">
							<a class="text-link primary-text dropdown-trigger drop" data-target="dropdown-predikat">A</a>
						</td>
						<td>
							<label id="ta-normal" class="matter-textfield-standard no-border-top" style="width: 100%">
								<textarea placeholder=" " rows="1" cols="20"></textarea>
								<span></span>
							</label>
						</td>
					</tr>
					<tr>
						<td class="center">
							Sepak Bola
							<a class="matter-button-circle modal-trigger primary-text" href="#modal-add-ekstra"><i class="material-icons">add</i></a>
						</td>
						<td class="center">
							<a class="text-link primary-text dropdown-trigger drop" data-target="dropdown-predikat">Belum ada predikat</a>
						</td>
						<td>
							<label id="ta-normal" class="matter-textfield-standard no-border-top" style="width: 100%">
								<textarea placeholder=" " rows="1" cols="20"></textarea>
								<span></span>
							</label>
						</td>
					</tr>
				</tbody>

			</table>
		</div>
	</div>
</section>

<section id="page-prestasi" class="container mb3">
</section>

<section id="page-absen" class="container mb3">
	<div class="animated fadeIn">
		<div class="table-scroll-x table-scroll-y sticky-left mt3 mb6">
			<table id="table-absen" class="border">

				<thead>
					<tr class="white">
						<th class="white center" style="width: 340px !important; z-index: 2" rowspan="2">
							<div>Siswa</div>
						</th>
						<th class="center">Sakit</th>
						<th class="center">Izin</th>
						<th class="center">Tanpa Keterangan</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td class="center">
							<label id="sakit" class="matter-textfield-standard no-border no-span">
								<input class="center" type="number" placeholder=" " min="0" value="0" />
								<span></span>
							</label>
						</td>
						<td class="center">
							<label id="izin" class="matter-textfield-standard no-border no-span">
								<input class="center" type="number" placeholder=" " min="0" value="0" />
								<span></span>
							</label>
						</td>
						<td class="center">
							<label id="tanpa_keterangan" class="matter-textfield-standard no-border no-span">
								<input class="center" type="number" placeholder=" " min="0" value="0" />
								<span></span>
							</label>
						</td>
					</tr>
				</tbody>

			</table>
		</div>
	</div>
</section>

<section id="page-catatan" class="container mb3">
	<div class="animated fadeIn">
		<div class="table-scroll-x table-scroll-y sticky-left mt3 mb6">
			<table id="table-catatan" class="border">

				<thead>
					<tr class="white">
						<th class="white center" style="width: 340px !important; z-index: 2" rowspan="2">
							<div>Siswa</div>
						</th>
						<th class="center">Catatan Wali Kelas</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>
							<div class="badge-ed img-text p1">
								<div class="img">
									<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
								</div>
								<div class="text">
									<h6 class="semibold">Nama Siswa</h6>
									<p>1202170035</p>
								</div>
							</div>
						</td>
						<td class="center">
							<label id="ta-normal" class="matter-textfield-standard no-border-top" style="width: 100%">
								<textarea placeholder=" " cols="50"></textarea>
								<span></span>
							</label>
						</td>
					</tr>
				</tbody>

			</table>
		</div>
	</div>
</section>

@include('components.modals.guru.e-raport')

<ul id="dropdown-predikat" class="dropdown-content no-hover shadow-21" style="position: fixed;max-width: 480px !important;height: auto !important;padding: 1rem 2rem 2rem 2rem">
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
		<p class="normal dark-text">Esktrakurikuler <i class="material-icons line-icon-p">stop_circle</i> Pramuka</p>
		<div class="divider"></div>
	</li>
	<li style="min-height: auto;padding: 0.5rem 0">
		<div class="row">
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
	</li>
</ul>
@endsection

@section('js-plus')
<script type="text/javascript" src="{{ asset('asset/js/jquery.floatThead.js') }}"></script>

<script type="text/javascript">
	var height1 = $("#table-sikap").height();
	document.documentElement.style.setProperty('--heghtnya', height1+'px');

	var $table1 = $('#table-sikap');
	$table1.on("floatThead", function(e, isFloated, $floatContainer){
		if(isFloated){
			$floatContainer.addClass("floated");
			$(this).addClass("floated");
			$("#sis1").removeClass("hide");

			$('#link-sikap').on("click",function(){
				$floatContainer.removeClass("floated");
				$('#table-sikap').removeClass("floated");
				$("#sis1").addClass("hide");
				$('.floatThead-container').css("transform", "translateX(0px) translateY(0px)");
			});

		} else {
			$floatContainer.removeClass("floated");
			$(this).removeClass("floated");
			$("#sis1").addClass("hide");
		}
	});

	$table1.floatThead({
		position: 'absolute'
	});
</script>

<script type="text/javascript">
	var $table2 = $('#table-nilai');
	$table2.on("floatThead", function(e, isFloated, $floatContainer){
		if(isFloated){
			$floatContainer.addClass("floated");
			$(this).addClass("floated");
			$("#sis2").removeClass("hide");

			$('#link-nilai').on("click",function(){
				$floatContainer.removeClass("floated");
				$('#table-nilai').removeClass("floated");
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
	var $table3 = $('#table-ekstra');
	$table3.on("floatThead", function(e, isFloated, $floatContainer){
		if(isFloated){
			$floatContainer.addClass("floated");
			$(this).addClass("floated");
			$("#sis3").removeClass("hide");

			$('#link-ekstra').on("click",function(){
				$floatContainer.removeClass("floated");
				$('#table-ekstra').removeClass("floated");
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
	var $table5 = $('#table-absen');
	$table5.on("floatThead", function(e, isFloated, $floatContainer){
		if(isFloated){
			$floatContainer.addClass("floated");
			$(this).addClass("floated");

			$('#link-absen').on("click",function(){
				$floatContainer.removeClass("floated");
				$('#table-absen').removeClass("floated");
				$('.floatThead-container').css("transform", "translateX(0px) translateY(0px)");
			});

		} else {
			$floatContainer.removeClass("floated");
			$(this).removeClass("floated");
		}
	});

	$table5.floatThead({
		position: 'absolute'
	});
</script>

<script type="text/javascript">
	var $table6 = $('#table-catatan');
	$table6.on("floatThead", function(e, isFloated, $floatContainer){
		if(isFloated){
			$floatContainer.addClass("floated");
			$(this).addClass("floated");

			$('#link-catatan').on("click",function(){
				$floatContainer.removeClass("floated");
				$('#table-catatan').removeClass("floated");
				$('.floatThead-container').css("transform", "translateX(0px) translateY(0px)");
			});

		} else {
			$floatContainer.removeClass("floated");
		}
	});

	$table6.floatThead({
		position: 'absolute'
	});
</script>

<script type="text/javascript">
	var $table7 = $('#table-pengetahuan');
	$table7.on("floatThead", function(e, isFloated, $floatContainer){
		if(isFloated){
			$floatContainer.addClass("floated");
			$(this).addClass("floated");

		} else {
			$floatContainer.removeClass("floated");
			$(this).removeClass("floated");
		}
	});

	$table7.floatThead({
		position: 'fixed'
	});
</script>
@endsection