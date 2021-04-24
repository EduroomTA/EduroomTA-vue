@extends('auth.app')

@section('title')
Kelas | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header single-text row nm">
		<div class="col s12 m12 l8 row nm">
			<div class="col s12 m1 l1">
				<div class="center-content">
					<i class="material-icons icon">home_work</i>
				</div>
			</div>
			<div class="col s12 m11 l11">
				<div class="title">
					<h5 class="semibold">Kelas</h5>
				</div>
			</div>
		</div>
		<div class="col s12 m12 l4">

			<div class="search">
				<label id="search" class="matter-textfield-outlined icon-input left-icon no-span" style="width: 100%">
					<input id="search-input" type="text" placeholder="Search...">
					<span></span>
					<i class="material-icons">search</i>
				</label>
			</div>

		</div>
	</div>
</section>

<section class="container">
	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Guru Wali</th>
				<th>Kode</th>
				<th>Tahun Ajaran</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<a class="text-link dark-text" href="{{route('admin-sekolah.kelas.detail')}}">8C</a>
				</td>
				<td>
					<a class="text-link dark-text" href="{{ route('admin-sekolah.guru.detail') }}" target="_blank">
						<div class="badge-ed img-text small">
							<div class="img">
								<img src="{{asset('asset/img/user/foto/foto.jpg')}}">
							</div>
							<div class="text">
								<p class="semibold">Nama Guru</p>
								<p>1202170035</p>
							</div>
						</div>
					</a>
				</td>
				<td>
					<input type="text" id="copy-me" class="hide" value="1232131231"/>
					<button class="matter-button-outlined button-icon" id="copy-btn" href="#!">
						<i class="material-icons left">content_copy</i>1232131231
					</button>
				</td>
				<td>2020/2021</td>
				<td class="right-align">
					<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-kelas">
						<i class="material-icons">more_vert</i>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</section>

@include('components.modals.admin-sekolah.kelas')

<ul id="dropdown-menu-kelas" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-kelas">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete-kelas">Hapus</a></li>
</ul>

<ul id="dropdown-menu-anggota-kelas" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-kelas">Rekap</a></li>
	<li><a class="modal-trigger" href="#modal-keluarkan">Keluarkan</a></li>
</ul>
@endsection

@section('js-plus')
<script type="text/javascript">
	$(document).ready(function(){
		var kelas 		= $("#nama_kelasz").text();
		var copyBtn   	= $("#copy-btn"),
		input     		= $("#copy-me");

		function copyToClipboardFF(text) {
			window.prompt ("Copy to clipboard: Ctrl C, Enter", text);
		}

		function copyToClipboard() {
			var success   = true,
			range     = document.createRange(),
			selection;


			if (window.clipboardData) {
				window.clipboardData.setData("Text", input.val());        
			} else {

				var tmpElem = $('<div>');
				tmpElem.css({
					position: "absolute",
					left:     "-1000px",
					top:      "-1000px",
				});

				tmpElem.text(input.val());
				$("body").append(tmpElem);

				range.selectNodeContents(tmpElem.get(0));
				selection = window.getSelection ();
				selection.removeAllRanges ();
				selection.addRange (range);

				try { 
					success = document.execCommand ("copy", false, null);
				}
				catch (e) {
					copyToClipboardFF(input.val());
				}
				if (success) {

					M.toast({html: 'Berhasil menyalin Kode Kelas ' + kelas})
					tmpElem.remove();
				}
			}
		}

		copyBtn.on('click', copyToClipboard);
	});
</script>
@endsection