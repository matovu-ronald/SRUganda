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
	<div class="choose">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-col">
                        <h2>Society of Radiography Uganda</h2>
                        <div class="border"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="box-col">
                        <div class="overlay"></div>
                        <div class="icon">
                            <p><i class="fa fa-bolt"></i></p>
                        </div>
                        <div class="text">
                            <h3>Mission</h3>
                            <p>
                                The Mission of the Society of Radiography of Uganda is to Advance
								and Elevate the Profession of Medical Imaging and Radiation
								Therapy ensuring the Safest and Highest Quality Services in
								Diagnostic Imaging and Radiotherapy.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="box-col">
                        <div class="overlay"></div>
                        <div class="icon">
                            <p><i class="fa fa-clock-o"></i></p>
                        </div>
                        <div class="text">
                            <h3>Vision</h3>
                            <p>
                                The Society of Radiography of Uganda will be the Premier
								Professional Association for the Medical Imaging and Radiation
								Therapy community in Uganda with Financial Independency
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
	<!-- Testimonial Start -->
		@include('partials.testimonials', ['some' => 'data'])
	<!-- Testimonial End -->
@endsection