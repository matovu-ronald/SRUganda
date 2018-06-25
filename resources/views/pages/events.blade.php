@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	<!-- Blog Section Start-->
	<div class="blog blo-page">
		<div class="container">
			<div class="row">
				@forelse ($events as $event)
					<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      	<img src="{{ asset($event->image) }}" alt="">
					      	<div class="caption">
						        <h4><a href="{{ route('event.show', $event->slug) }}">{{ $event->title }}</a></h4>
						        <div class="comment">
						        	<ul>
						        		<li>
						        			<i class="fa fa-calendar"></i ><span>{{ $event->date->toFormattedDateString() }}</span>
						        		</li>
						        		<li>
						        			<i class="fa fa-map-marker"></i ><span>{{ $event->venue }}</span>
						        		</li>
						        		
						        	</ul>
						        </div>
							    <p class="all">{!! str_limit($event->description, $limit = 100, $end = '...') !!}</p>
							    <p class="submit"><a href="{{ route('event.show', $event->slug) }}" class="btn btn-primary">Read More</a></p>
					      	</div>
					   	</div>
					</div>
				@empty
					{{-- empty expr --}}
				@endforelse
			</div>
		</div>
	</div>
	<!-- Blog Section End-->
@endsection