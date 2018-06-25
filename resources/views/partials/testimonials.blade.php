@if ($testimonials->count() > 0)
	<section class="testimonial-v1">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<!-- Testimonial Carousel Start -->
					<div class="testimonial-carousel">
						@foreach ($testimonials as $testimonial)
							<div class="item">
								<div class="testimonial-wrapper">								
									<div class="content">
										<div class="comment">
											<p>
												{!! $testimonial->description !!}
											</p>
											<div class="icon"></div>
										</div>
										<div class="author">
											<div class="photo">
												<img src="{{ asset($testimonial->image) }}" alt="">
											</div>
											<div class="text">
												<h3>{{ $testimonial->name }}</h3>
												<h4>{{ $testimonial->title  }}</h4>
											</div>
										</div>										
									</div>
								</div>
							</div>
						@endforeach
					</div>
					<!-- Testimonial Carousel End -->

				</div>
			</div>
		</div>
	</section>
@endif
