@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	<section class="faq">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>FAQ Information Section</h2>
					<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
						@forelse ($faqs as $faq)
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="heading1">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1" aria-expanded="false" aria-controls="collapse1">
											{{ $faq->question }}
										</a>
									</h4>

								</div>
								<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
									<div class="panel-body">
										{!! $faq->answer !!}
									</div>
								</div>
							</div>
						@empty
							<h3>There are no frequently asked questions</h3>
						@endforelse
					</div>



					

				</div>
			</div>
		</div>
	</section>
@endsection