@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	<!--Our Doctor Section Start-->
	<section class="doctor size">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<!-- doctors Container Start -->
					<div class="doctor-inner">

						@foreach ($team as $team)
							<div class="col-sm-6 col-md-4 item">
								<div class="inner">
									<div class="thumb">
										<img src="{{ asset($team->image) }}" alt="">
										<div class="overlay"></div>
										<div class="social-icons">
											<ul>
												@foreach ($team->social as $social)
													{{-- expr --}}
												
												<li><a href="www.facebook.com/{{ $social['facebook'] }}"><i class="fa fa-facebook"></i></a></li>
												<li><a href="www.twitter.com/{{ $social['twitter'] }}"><i class="fa fa-twitter"></i></a></li>
												<li><a href="{{ $social['linkedIn'] }}"><i class="fa fa-linkedin"></i></a></li>
												@endforeach
												
											</ul>
										</div>
									</div>
									<div class="text">
										<h3><a href="{{ route('team.show', $team->slug) }}">{{ $team->name }}</a></h3>
										<h4>{{ $team->designation }}</h4>
										<p class="button">
											<a href="{{ route('team.show', $team->slug) }}">Read More</a>
										</p>
									</div>
								</div>
							</div>
						@endforeach
					</div>

				</div>
			</div>
			<div class="row">
				<center>{!! $team->links !!}</center>
			</div>
		</div>
	</section>
	<!--Our Doctor Section Start-->
@endsection