@extends('auth.app')

@section('title')
Detail Kelas | Admin Sekolah | EduRoom
@endsection

@section('content')

<section class="container">
	<div class="header-detail" style="padding-bottom: 0">
		<div class="center-content icon-page" style="left: 10%;">
			{{-- <a href="{{ route('admin-sekolah.kelas.detail') }}" class="matter-button-circle dark-text">
				<i class="material-icons">arrow_back</i>
			</a> --}}
		</div>
		<div class="title">
			<div class="row">
				<div class="col s12 m12 l6">
					<div class="left-align-res">
						<h4 class="semibold primary-text">8C Fisika</h4>
						<p class="normal primary-text">12 Juni 2020</p>
					</div>
				</div>
				<div class="col s12 m12 l6">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
		
		<div class="col s12">
			<a href="#!">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 1rem;">chrome_reader_mode</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m11">
									<h6 class="semibold"><span class="primary-text">KD1.</span> Nama BAB</h6>
									<p class="normal dark-text"><br class="hide-on-med-and-up"><br class="hide-on-med-and-up">12 Juni 2020</p>
								</div>
								<div class="link-card col s2 m1">
									<button class="matter-button-circle dropdown-trigger drop dark-text" data-target="dropdown-menu-bab">
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

@endsection

@section('js-plus')
@endsection