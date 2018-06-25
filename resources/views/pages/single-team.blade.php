@extends('layouts.app')
@section('title')
	{{ $team->name }}
@endsection
@section('pageTitle')
	{{ $team->name }}
@endsection
@section('content')
	<!--Doctor Details Start-->
		<section class="doctor-detail">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="chefs-single">
							<div class="thumb">
								<img src="{{ asset($team->image) }}" alt="">
							</div>
							<div class="text">
								<h2>{{ $team->name }}</h2>
								<h3>{{ $team->designation }}</h3>
								<p>
									({{ $team->speciality }})
								</p>
							</div>
							<div class="social">
								<div class="title">
									Social Media Activities
								</div>
								<ul>
									@foreach ($team->social as $social)
										<li><a href="www.facebook.com/{{ $social['facebook'] }}"><i class="fa fa-facebook"></i></a></li>
										<li><a href="www.twitter.com/{{ $social['twitter'] }}"><i class="fa fa-twitter"></i></a></li>
										<li><a href="{{ $social['linkedIn'] }}"><i class="fa fa-linkedin"></i></a></li>
									@endforeach
									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						
						<!-- Team Detail Tab Start -->
						<div class="doctor-detail-tab">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="true">About</a></li>
								
							</ul>
							
							<!-- Tab Content Start -->
							<div class="tab-content">
								<div class="tab-pane fade active in" id="tab1">
									<div class="row">										
										<div class="col-md-12 content-col">
											<div class="content">
												<h2>About</h2>
												<p>
													{!! $team->description !!}
												</p>
											</div>
										</div>
									</div>
								</div>
								

								
							</div>
							<!-- Tab Content End -->
						</div>
						<!-- Chefs Detail Tab End -->

					</div>
				</div>
			</div>
		</section>
		<!-- Chefs End -->
@endsection