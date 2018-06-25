@extends('layouts.app')
@section('title', $article->title)
@section('pageTitle', $article->title)
@section('content')
	<div class="container blog-side">
		<div class="row inner inner-single">
			<div class="col-md-9 top">
					<div class="bg">			
						<div class="img">
							<img src="{{ asset($article->image) }}" alt="">
						</div>				
						<div class="icon">
							<ul>
								<li><i class="fa fa-calendar"></i >{{ $article->date->toFormattedDateString() }}</li>
								<li><i class="fa fa-user"></i>admin</li>
							</ul>
						</div>
					</div>
				<div class="text">
					<h2>{{ $article->title }}</h2>
					{!! $article->content !!}
				</div>	

			</div>
			<div class="col-md-3">
				<div class="right-col">
					
					<div class="widget">
						<h3>Recent Posts</h3>
						<ul>
							@php $i = 0; @endphp
							@foreach ($articles as $artico)
								@php $i++ @endphp
								<li><a href="{{ route('article.show', $artico->slug) }}"><i class="fa fa-hand-o-right"></i>{{ $artico->title }}</a></li>
								@if ($i == 5)
									@break
								@endif
							@endforeach
						</ul>
					</div>
					<div class="widget">
						<h3>Categories</h3>
						<ul>
							@foreach ($categories as $cat)
								<li><a href="#"><i class="fa fa-hand-o-right"></i>{{ $cat->name }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="widget tag">
						<h3>Tags</h3>
						@forelse ($tags as $tag)
							<span><a href="#">{{ $tag->name }}</a></span>
						@empty
							<span><a href="#">No Tags</a></span>
						@endforelse
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection