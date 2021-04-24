@extends('auth.app')

@section('title')
Materi | Nama Kelas | EduRoom
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
				<h5 class="primary-text">Materi</h5>
				<h6 class="normal">KD1 <i class="material-icons line-icon-p">stop_circle</i> nama bab</h6>
			</div>
		</div>
		<div class="col s12 m12 l6">
			<div class="component right-align">
				<div class="ptb05 hide-on-small-only">
					<button class="matter-button-contained button-icon modal-trigger" href="#modal-add">
						<i class="material-icons left">add</i>Materi
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container w50 mb5">
	<div class="row">

		<div class="col s12">
			<a href="{{route('guru.materi.detail')}}">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 1rem;">book</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m11">
									<h6 class="semibold">Nama Materi</h6>
									<p class="normal dark-text">Terbit 12 Juni 2020</p>
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

<ul id="dropdown-menu" class="dropdown-content">
	<li><a class="modal-trigger" href="#modal-edit">Edit</a></li>
	<li><a class="modal-trigger" href="#modal-delete">Hapus</a></li>
</ul>

@include('components.modals.guru.komponen-materi')
@endsection

@section('js-plus')
@include('components.initialize-tyni')
@include('components.initialize-upload-multiple-js')
@endsection