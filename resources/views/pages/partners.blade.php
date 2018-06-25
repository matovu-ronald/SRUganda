@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	<!-- Blog Section Start-->
	<div class="blog blo-page">
		<div class="container">
			<div class="row">
				@forelse ($partners as $partner)
					<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      	<img src="{{ asset($partner->logo) }}" alt="">
					      	<div class="caption">
						        <h4><a href="#">{{ $partner->name }}</a></h4>
						        
							    <p class="all">{!! str_limit($partner->description, $limit = 100, $end = '...') !!}</p>
							    {{-- <p class="submit"><a href="#" class="btn btn-primary">Read More</a></p> --}}
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
@stop