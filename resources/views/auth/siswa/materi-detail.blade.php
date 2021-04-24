@extends('auth.app')

@section('title')
Materi Detail | Nama Kelas | EduRoom
@endsection

@section('content')

<section class="container w60">
	<div class="header-detail">
		<div class="center-content icon-page">
			<i class="material-icons icon">book</i>
		</div>
		<div class="title">
			<div class="left-align-res">
				<h5 class="semibold primary-text">Sprint Retrospective I</h5>
				<p class="normal primary-text">8C | Pendidikan Pancasila dan Kewarganegaraan</p>
			</div>
			<p class="normal dark7-text">12 Juni 2020</p>
		</div>
	</div>
</section>

<section class="container w60 mb5">
	<ul class="collapsible border right-icon popup expandable">
		<li class="active">
			<div class="collapsible-header">
				<i class="material-icons primary-text">book</i>
				<i class="right material-icons">keyboard_arrow_down</i>
				<span>First</span>
			</div>
			<div class="collapsible-body">
				<div class="mb2">
					<span>Lorem ipsum dolor sit amet.</span>
				</div>

				<a href="#!" class="matter-button-outlined button-icon modal-trigger" href="#modal-add">
					<i class="material-icons left">description</i>Nama File
				</a>
			</div>
		</li>
		<li class="active">
			<div class="collapsible-header">
				<i class="material-icons primary-text">book</i>
				<i class="right material-icons">keyboard_arrow_down</i>
				<span>Second</span>
			</div>
			<div class="collapsible-body">
				<div class="mb2">
					<span>Lorem ipsum dolor sit amet.</span>
				</div>

				<a href="#!" class="matter-button-outlined button-icon modal-trigger" href="#modal-add">
					<i class="material-icons left">description</i>Nama File
				</a>
			</div>
		</li>
		<li class="active">
			<div class="collapsible-header">
				<i class="material-icons primary-text">book</i>
				<i class="right material-icons">keyboard_arrow_down</i>
				<span>Second</span>
			</div>
			<div class="collapsible-body">
				<div class="mb2">
					<span>Lorem ipsum dolor sit amet.</span>
				</div>

				<a href="#!" class="matter-button-outlined button-icon modal-trigger" href="#modal-add">
					<i class="material-icons left">description</i>Nama File
				</a>
			</div>
		</li>
	</ul>
</section>

@endsection
