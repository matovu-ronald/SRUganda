@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	<!-- Blog Section Start-->
	<div class="blog blo-page">
		<div class="container">
			<div class="row">
				@forelse ($resources as $resource)
					<div class="col-sm-6 col-md-4">
					    <div class="thumbnail">
					      	<div class="caption">
						        <h4 class="text-capitalize"><a href="#">{{ $resource->title }}</a></h4>
						        <div class="comment">
						        	<ul>
						        		
						        		<li>
						        			<i class="fa fa-download"></i ><span>{{ $resource->downloads }}</span>
						        		</li>
						        		
						        	</ul>
						        </div>
							    <p class="all">{!! str_limit($resource->description, $limit = 100, $end = '...') !!}</p>
							    <p class="submit"><a href="{{ url('download') }}/{{ $resource->id }}" class="btn btn-primary"> <i class="fa fa-download"></i> Download</a></p>
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