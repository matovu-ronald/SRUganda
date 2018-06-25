@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	    <!---Gallery Section Start-->
	    <div class="gallery-col gall-page">
	        <div class="container no-padding">
	            <div class="col-md-12 bottom">
	                <div id="miu_container">
	                    <div class="row">
	                    	@foreach ($gallery as $galler)
		                        <div class="col-md-4 col-sm-6">
		                            <div class="inner">
		                                <a class="test-popup-link" href="{{ asset($galler->image) }}">
												<img src="{{ asset($galler->image) }}" alt="">
												<div class="overlay"></div>
												<div class="plus"><i class="fa fa-search-plus"></i></div>
											</a>
		                            </div>
		                        </div>
	                    	@endforeach
	                    </div>
	                    <div class="row">
	                    	<center>{!! $gallery->links() !!}</center>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!---Gallery Section End-->
@endsection