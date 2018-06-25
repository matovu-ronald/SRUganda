@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	<!-- About Start -->
	<section class="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="item">
						<h2>Who we are</h2>
						{!! $page->content ? $page->content : '<p>
							Lorem ipsum dolor sit amet, mea nominavi instructior ex, has cu exerci temporibus. Mei no vero sensibus. Vix at dico expetendis vituperata, te senserit suavitate ius. Ut quo utamur feugiat labores, offendit intellegat vituperata nec ut, sed minimum insolens persequeris ad. Vel facilisi qualisque at.
						</p>
						<p>
							Ne mundi civibus scriptorem his, nullam gloriatur delicatissimi in vim. Eu nec paulo molestiae incorrupte, ex est esse brute altera. Ut dicunt iriure has. Sea facete delenit eloquentiam et. 
						</p>
						<p>
							Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.
						</p>	' !!}
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="item">
						<img src="{{ $page->withFakes()->pic ? asset($page->withFakes()->pic) : asset('img/blog1.jpg') }}" alt="about image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About End -->
	<!-- Testimonial Start -->
		@include('partials.testimonials', ['some' => 'data'])
	<!-- Testimonial End -->
@endsection