@extends('auth.app')

@section('title')
Tugas | Nama Kelas | EduRoom
@endsection

@section('content')

<section class="container w50">
	<div class="header row">
		<div class="col s12 m12 l6">
			<div class="title">
				<h5 class="primary-text">Tugas</h5>
				<h6 class="normal">KD1 <i class="material-icons line-icon-p">stop_circle</i> nama bab</h6>
			</div>
		</div>
		<div class="col s12 m12 l6">
			<div class="component right-align">
				<div class="ptb05 hide-on-small-only">
					<a class="matter-button-contained button-icon modal-trigger" href="#modal-add-pilgan">
						<i class="material-icons left">add</i>Tugas
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container w50 mb5">
	<div class="row">

{{-- 		<div class="col s12">
			<a href="{{route('guru.tugas.detail')}}">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 1rem;">assignment</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m11">
									<h6 class="semibold">Nama Tugas Esay</h6>
									<p class="normal dark7-text">Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> UTS <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
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
		</div> --}}

		<div class="col s12">
			<a href="{{route('guru.tugas.pilgan.detail')}}">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 1rem;">assignment</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m11">
									<h6 class="semibold">Nama Tugas</h6>
									<p class="normal dark7-text">Pengetahuan <i class="material-icons line-icon-p dark3-text">stop_circle</i> Ulangan <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
								</div>
								<div class="link-card col s2 m1">
									<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-pilgan">
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

@include('components.modals.guru.tugas')

<ul id="dropdown-menu" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete">Hapus</a></li>
</ul>

<ul id="dropdown-menu-pilgan" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit-pilgan">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete">Hapus</a></li>
</ul>
@endsection

@section('js-plus')
@include('components.initialize-tyni')
@include('components.initialize-upload-multiple-js')

<script type="text/javascript">
	$(document).ready(function(){
		$('.fixed-action-btn').floatingActionButton();
	});

	$(document).ready(function () {
		$('#penjadwalan_pilgan_add').click(function () {
			$('#penjadwalan_add_pilgan_layout').toggleClass("hide", !$("#penjadwalan_pilgan_add").prop("checked")); 
		});

		$('#penjadwalan_esay_add').click(function () {
			$('#penjadwalan_add_esay_layout').toggleClass("hide", !$("#penjadwalan_esay_add").prop("checked")); 
		});	
		
		$('#penjadwalan_esay_edit').click(function () {
			$('#penjadwalan_edit_esay_layout').toggleClass("hide", !$("#penjadwalan_esay_edit").prop("checked")); 
		});	

		$('#penjadwalan_pilgan_edit').click(function () {
			$('#penjadwalan_edit_pilgan_layout').toggleClass("hide", !$("#penjadwalan_pilgan_edit").prop("checked")); 
		});	
	});
</script>
@endsection