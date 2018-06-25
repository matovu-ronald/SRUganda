@extends('layouts.app')
@section('title', $event->title)
@section('pageTitle', $event->title)
@section('content')
	<div class="container blog-side">
		<div class="row inner inner-single">
			<div class="col-md-5 top">
					<div class="bg">			
						<div class="img">
							<img src="{{ asset($event->image) }}" alt="">
						</div>				
						<div class="icon">
							<ul>
								<li><i class="fa fa-calendar"></i >{{ $event->date->toFormattedDateString() }}</li>
								<li><i class="fa fa-map-marker"></i>{{ $event->venue }}</li>
							</ul>
						</div>
					</div>

			</div>
			<div class="col-md-7">
				<div class="text">
					<h2 class="text-capitalize">{{ $event->title }}</h2>
					{!! $event->description !!}
				</div>	
			</div>
			
		</div>
	</div>
@endsection