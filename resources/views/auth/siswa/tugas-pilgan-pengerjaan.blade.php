@extends('auth.app')

@section('title')
Tugas Pilgan Detail | Nama Kelas | EduRoom
@endsection

@section('content')

<div id="mobile-indi" class="show-on-small hide-on-med-and-up"></div>

<div id="sidenav-2" class="sidenav sidenav-show sidenav-no-shadow back" style="border-left: 1px solid var(--color-dark3); overflow: inherit;">
	<div class="mt4">
		<div class="primary" style="padding: 4rem 0;">
			<div class="center" id="timer">
				<h4 class="nm bold white-text" id="divCounter"></h4>
			</div>

			<div class="center mt05">
				<a class="matter-button-text button-icon white-text modal-trigger" href="#modal-selesai">
					<i class="material-icons right">send</i>Selesai
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 mtb1">
			<a id="btn-show" href="#!" class="matter-button-circle primary white-text hide" style="position: absolute; left: -4.5rem;z-index: 2">
				<i class="material-icons">view_comfy</i>
			</a> 
			<a id="btn-hide" href="#!" class="sidenav-close matter-button-circle primary white-text" style="position: absolute; left: -1.5rem;z-index: 2">
				<i class="material-icons">chevron_right</i>
			</a> 
		</div>
		<div class="col s12">
			<div class="card noutlined panel">
				<div class="row nm">
					<div class="col s4 m3 l2" style="padding: 0">
						<a class="active" href="">
							<div class="btn-exam-menu">1</div>
						</a>
					</div>
					<div class="col s4 m3 l2" style="padding: 0">
						<a href="">
							<div class="btn-exam-menu">2</div>
						</a>
					</div>
					<div class="col s4 m3 l2" style="padding: 0">
						<a href="">
							<div class="btn-exam-menu">3</div>
						</a>
					</div>
					<div class="col s4 m3 l2" style="padding: 0">
						<a href="">
							<div class="btn-exam-menu">4</div>
						</a>
					</div>
					<div class="col s4 m3 l2" style="padding: 0">
						<a href="">
							<div class="btn-exam-menu">5</div>
						</a>
					</div>
					<div class="col s4 m3 l2" style="padding: 0">
						<a href="">
							<div class="btn-exam-menu">6</div>
						</a>
					</div>
					<div class="col s4 m3 l2" style="padding: 0">
						<a href="">
							<div class="btn-exam-menu">7</div>
						</a>
					</div>
					<div class="col s4 m3 l2" style="padding: 0">
						<a href="">
							<div class="btn-exam-menu">8</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="main-exam" class="main-exam-expand">
	
	<section class="container w60">
		<div class="header-detail">
			<div id="icon-page" class="center-content icon-page expand">
				<i class="material-icons icon">assignment</i>
			</div>
			<div class="title">
				<div class="left-align-res">
					<h5 class="semibold primary-text">Sprint Retrospective I</h5>
					<p class="normal primary-text">8C | Pendidikan Pancasila dan Kewarganegaraan</p>
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

	<section class="container w60">
		<div class="divider h05 mb2"></div>
		<div class="row">
			<div class="col s12 mb3">
				<div id="number-exam" class="number-exam expand">
					<div class="number-exam-num">
						<div class="white-text primary bold num">
							1
						</div>
					</div>
				</div>
				<p class="ltext nm">
					Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
				</p>
			</div>

			<div id="jws" class="col s12">
				<div class="row">

					<div class="col s12">
						<div id="jw_A" class="card outlined panel hoverable-shadow-nb">
							<div class="row nm">
								<div class="col s12 m12 l1 center mb1">
									<label class="matter-radio">
										<input id="jawaban" type="radio" name="group" value="A">
										<span class="bold"></span>
									</label>
								</div>
								<div class="col s12 m12 l11">
									<p class="ltext nm" oncopy="return false" oncut="return false" onpaste="return false">
										Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12">
						<div id="jw_B" class="card outlined panel hoverable-shadow-nb">
							<div class="row nm">
								<div class="col s12 m12 l1 center mb1">
									<label class="matter-radio">
										<input id="jawaban" type="radio" name="group" value="B">
										<span class="bold"></span>
									</label>
								</div>
								<div class="col s12 m12 l11">
									<p class="ltext nm">
										Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12">
						<div id="jw_C" class="card outlined panel hoverable-shadow-nb">
							<div class="row nm">
								<div class="col s12 m12 l1 center mb1">
									<label class="matter-radio">
										<input id="jawaban" type="radio" name="group" value="C">
										<span class="bold"></span>
									</label>
								</div>
								<div class="col s12 m12 l11">
									<p class="ltext nm">
										Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col s12">
						<div id="jw_D" class="card outlined panel hoverable-shadow-nb">
							<div class="row nm">
								<div class="col s12 m12 l1 center mb1">
									<label class="matter-radio">
										<input id="jawaban" type="radio" name="group" value="D">
										<span class="bold"></span>
									</label>
								</div>
								<div class="col s12 m12 l11">
									<p class="ltext nm">
										Buatlah program android sederhana yang terdiri dari 2 activity (bebas nama activity) yang activity 1 dapat berpindah ke activity 2. Kirim file Java dan XML serta video capture hasil aplikasi (bisa dari emulator/HP). Dan tambahkan file TXT dengan format NIM_NAMA
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<section class="container w60 mtb4">
		<div class="row">
			<div class="col s5 left-align">
			{{-- <a class="matter-button-text button-icon primary-text" href="#!">
				<i class="material-icons left">arrow_back</i>Kembali
			</a> --}}
		</div>
		<div class="col s2"></div>
		<div class="col s5 right-align">
			<a class="matter-button-text button-icon primary-text" href="#!">
				<i class="material-icons right">arrow_forward</i>Selanjutnya
			</a>
		</div>
	</div>
</section>
</div>

@include('components.modals.siswa.tugas-pilgan-pengerjaan')

@endsection

@section('js-plus')
<script type="text/javascript" src="{{asset('asset/js/flipclock.min.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#sidenav-2').sidenav({ 
			edge: 'right',
		});
	});

	$(document).ready(function(){
		if (true) {}
	});

	$(document).ready(function(){
		$('#btn-show').click(function(){
			$('#sidenav-2').addClass('sidenav-show');
			$('#sidenav-2').removeClass('sidenav-hide');

			$('#main-exam').addClass('main-exam-expand');
			$('#main-exam').removeClass('main-exam');

			$('#btn-show').addClass('hide');
			$('#btn-hide').removeClass('hide');

			$('#number-exam').addClass('expand');
			$('#number-exam').removeClass('no-expand');

			$('#icon-page').addClass('expand');
			$('#icon-page').removeClass('no-expand');
		});

		$('#btn-hide').click(function(){
			$('#sidenav-2').removeClass('sidenav-show');
			$('#sidenav-2').addClass('sidenav-hide');
			
			$('#main-exam').removeClass('main-exam-expand');
			$('#main-exam').addClass('main-exam');

			$('#btn-show').removeClass('hide');
			$('#btn-hide').addClass('hide');

			$('#number-exam').removeClass('expand');
			$('#number-exam').addClass('no-expand');

			$('#icon-page').removeClass('expand');
			$('#icon-page').addClass('no-expand');
		});
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#jws input:radio').change(function(){
			var kunci_jw = $(this).val();
			var kunci = "jw_"+kunci_jw;

			var kunci_A = $('#jw_A').attr('id');
			var kunci_B = $('#jw_B').attr('id');
			var kunci_C = $('#jw_C').attr('id');
			var kunci_D = $('#jw_D').attr('id');

			var kuncis = [kunci_A, kunci_B, kunci_C, kunci_D];

			for (var i = 0; i < kuncis.length; i++) {
				if (kunci == kuncis[i]) {
					$('#'+kuncis[i]).addClass("active-border-prim");
				} else {
					$('#'+kuncis[i]).removeClass("active-border-prim");
				}
			}
		});
	});
</script>

{{-- <script type="text/javascript">
	if (sessionStorage.getItem("counter")) {
		if (sessionStorage.getItem("counter") >= 2000) {
			var value = 0;
		} else {
			var value = sessionStorage.getItem("counter");
		}
	} else {
		var value = 0;
	}
	document.getElementById('divCounter').innerHTML = value;

	var counter = function () {
		if (value >= 2000) {
			// sessionStorage.setItem("counter", 0);
			// value = 0;

			window.location.href = "{{route('siswa.tugas.pilgan.detail')}}";
		} else {
			value = parseInt(value) + 1;
			sessionStorage.setItem("counter", value);
		}
		document.getElementById('divCounter').innerHTML = value;
	};

	var interval = setInterval(counter, 1000);
</script> --}}

{{-- <script type="text/javascript">
	(function () {
		const d = new Date();

		const mountd = d.getMonth()+1;
		const dated = d.getDate();
		const yeard = d.getFullYear();
		const hourd = d.getHours();
		const minuted = d.getMinutes();
		const secondd = d.getSeconds();

		const time_duration = 90;
		const hrs = Math.floor(time_duration / 60); 
		const min = time_duration % 60; 

		const hours = hourd+hrs;
		const minutes = minuted+min;
		const seconds = 0;

		const time = hours+":"+minutes+":"+seconds;

		console.log(minutes);

		const second = 1000,
		minute = second * 60,
		hour = minute * 60,
		day = hour * 24;

		let birthday = mountd+" "+dated+", "+yeard+" "+time,

		countDown = new Date(birthday).getTime(),
		x = setInterval(function() {    

			let now = new Date().getTime(),
			distance = countDown - now;

			// document.getElementById("days").innerText = Math.floor(distance / (day)),
			document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
			document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
			document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
        	window.location.href = "{{route('siswa.tugas.pilgan.detail')}}";

        	clearInterval(x);
        }
        //seconds
    }, 0)
	}());
</script> --}}

<script>
	function myFunction() {
		var element, name, arr;
		element = document.getElementById("timer");
		name = "double-flash";
		arr = element.className.split(" ");
		if (arr.indexOf(name) == -1) {
			element.className += " " + name;
		}
	}
	var minutesleft = 0;
	var secondsleft = 10;
	var finishedtext = "finished!";
	var end1;
	if(localStorage.getItem("end1")) {
		end1 = new Date(localStorage.getItem("end1"));
	} else {
		end1 = new Date();
		end1.setMinutes(end1.getMinutes()+minutesleft);
		end1.setSeconds(end1.getSeconds()+secondsleft);
	}
	var counter = function () {
		var now = new Date();
		var diff = end1 - now;
		diff = new Date(diff);

		var milliseconds = parseInt((diff%1000)/100)
		var sec = parseInt((diff/1000)%60)
		var mins = parseInt((diff/(1000*60))%60)

		if (mins < 10) {
			mins = "0" + mins;
		}
		if (sec < 10) { 
			sec = "0" + sec;
		}
		if (mins < 1) { 
			myFunction();
		}     
		if(now >= end1) {     
			clearTimeout(interval);
			localStorage.removeItem("end1");
			localStorage.clear();
			document.getElementById('divCounter').innerHTML = finishedtext;

			$('#modal-gg').modal({
				onCloseStart : function() {
					$('#modal-selesai').modal('open');
					$('#kembali-mengerjakan').addClass('hide');
				},
			});

			$('#modal-gg').modal('open');

		} else {
			var value = mins + " : " + sec;
			localStorage.setItem("end1", end1);
			document.getElementById('divCounter').innerHTML = value;
		}
	}
	var interval = setInterval(counter, 1000);
</script>
@endsection