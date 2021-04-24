@extends('auth.app')

@section('title')
KKM | EduRoom
@endsection

@section('content')
<section class="container">
	<div class="header row">
		<div class="col s12 m12 l9">
			<div class="title">
				<h5 class="semibold primary-text">KKM</h5>
			</div>
		</div>
		<div class="col s12 m12 l3">
			<div class="component right-align">

			</div>
		</div>
	</div>
</section>

<section class="container w50 mb5">
	<div class="row">
		
		<div class="col s12">
			<a class="modal-trigger" href="#modal-add">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 1rem;">corporate_fare</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m11">
									<h6 class="semibold">Matematika<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h6>
									<p class="normal dark7-text">Kelas 10 Mipa</p>
								</div>
								<div class="link-card col s2 m1">
									<h6 class="semibold">75</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

	</div>
</section>

@include('components.modals.guru.kkm')

@endsection

@section('js-plus')

@endsection