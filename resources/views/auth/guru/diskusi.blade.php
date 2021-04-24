@extends('auth.app')

@section('title')
Diskusi | Nama Kelas | EduRoom
@endsection

@section('content')
<div class="fixed-action-btn hide-on-med-and-up show-on-small">
	<a class="btn-floating btn-large primary modal-trigger" href="#modal-add">
		<i class="large material-icons">add</i>
	</a>
</div>

<section class="container w50">
	<div class="header row">
		<div class="col s12 m12 l6">
			<div class="title">
				<h5 class="primary-text">Diskusi</h5>
				<h6 class="normal">KD1 <i class="material-icons line-icon-p">stop_circle</i> nama bab</h6>
			</div>
		</div>
		<div class="col s12 m12 l6">
			<div class="component right-align">
				<div class="ptb05 hide-on-small-only">
					<button class="matter-button-contained button-icon modal-trigger" href="#modal-add">
						<i class="material-icons left">add</i>Diskusi
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container w50 mb5">
	<div class="row">

		<div class="col s12">
			<a href="{{route('guru.diskusi.detail')}}">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 1rem;">forum</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m11">
									<h6 class="semibold">Nama Diskusi</h6>
									<p class="normal dark7-text">Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Harian <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
								</div>
								<div class="link-card col s2 m1">
									<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu">
										<i class="material-icons">more_vert</i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

	</div>
</section>

@include('components.modals.guru.diskusi')

<ul id="dropdown-menu" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete">Hapus</a></li>
</ul>
@endsection

@section('js-plus')
@include('components.initialize-tyni')
@include('components.initialize-upload-multiple-js')

<script type="text/javascript">
	$(document).ready(function () {
		$('#penjadwalan_diskusi_add').click(function () {
			$('#penjadwalan_add_diskusi_layout').toggleClass("hide", !$("#penjadwalan_diskusi_add").prop("checked")); 
		});

		$('#penjadwalan_diskusi_edit').click(function () {
			$('#penjadwalan_edit_diskusi_layout').toggleClass("hide", !$("#penjadwalan_diskusi_edit").prop("checked")); 
		});
	});
</script>
@endsection