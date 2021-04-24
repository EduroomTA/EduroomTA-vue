@extends('auth.app')

@section('title')
Ujian | EduRoom
@endsection

@section('content')
<section class="container">
	<div class="header row">
		<div class="col s12 m12 l9">
			<div class="title">
				<h5 class="semibold primary-text">Ujian</h5>
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
			<a href="{{route('guru.ujian.detail')}}">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard" style="margin: 0 0.5rem;">content_paste</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m6">
									<h6 class="semibold">UAS<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h6>
									<p class="normal dark7-text">Matematika <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
								</div>
								<div class="link-card col s2 m6">
									<div class="mtb1">
										<span class="badge-text1 res-enter primary-smoth2 primary-text">8 A</span>
										<span class="badge-text1 res-enter primary-smoth2 primary-text">8 B</span>
										<span class="badge-text1 res-enter primary-smoth2 primary-text">8 C</span>
										<span class="badge-text1 res-enter primary-smoth2 primary-text">+4</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="col s12">
			<a href="{{route('guru.ujian.detail')}}">
				<div class="card outlined hoverable-shadow-nb link">
					<div class="row nm valign-wrapper">
						<div class="col s2 m2 l1 valign">
							<i class="material-icons icon-large-incard dark3" style="margin: 0 0.5rem;">content_paste</i>
						</div>
						<div class="col s10 m10 l11">
							<div class="card-header just-head row">
								<div class="title col s10 m6">
									<h6 class="semibold">UTS<i class="material-icons line-icon-p">stop_circle</i><span style="font-size: 1rem">2020/2021</span></h6>
									<p class="normal dark7-text">Matematika <i class="material-icons line-icon-p dark3-text hide-on-small-only">stop_circle</i> <br class="hide-on-med-and-up"><br class="hide-on-med-and-up"><span>Terbit 12 Juni 2020</span></p>
								</div>
								<div class="link-card col s2 m6">
									<div class="mtb1">
										<span class="badge-text1 res-enter primary-smoth2 primary-text">8 A</span>
										<span class="badge-text1 res-enter primary-smoth2 primary-text">8 B</span>
										<span class="badge-text1 res-enter primary-smoth2 primary-text">8 C</span>
										<span class="badge-text1 res-enter primary-smoth2 primary-text">+4</span>
									</div>
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