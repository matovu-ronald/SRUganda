@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	<div class="container-fluid contact" id="register">
        <div class="container inner">
        	<div class="row">
        		<div class="col-sm-12 col-md-12 col-lg-12">
        		    <div class="msg">
        		        
						@if (session('results'))
							@if(session()->get('results')->isEmpty())
								<div class="bg-danger text-center" style="margin-bottom: 10px;">
									<h3>Sorry, You have not registered yet, <a style="text-decoration: underline; color: #7080f5;" href="{{ url('membership') }}"> Click Here to Register</a> </h3>
								</div>
							@else 
							<div class="text-center bg-success" style="margin-bottom: 10px;">
								<h3>Please, Check Through the names returned to confirm your registration status</h3>
							</div>
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Registration Date</th>
											<th>Registration Status</th>
										</tr>
									</thead>
									<tbody>
										@foreach(session()->get('results') as $result)
											<tr>
												<td> {{ $result->name }} </td>
												<td> {{ $result->created_at->toFormattedDateString() }} </td>
												<td> {{ $result->confirmed == 1 ? 'Verified (Fully Registered) ' : 'Not Verified' }} </td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							@endif
						@endif
						
						
						<div id="message-contact"></div>
						<h3>Check Membership</h3>
						<p>Enter your registration name to check your mebership:</p>
        		        <form action="{{ route('check') }}" enctype="multipart/form-data" method="post">
        		        	@csrf
        		        	<div class="row">
        		        		<div class="col-md-6">
    		        				<div class="form-group">
    		        				    <input type="text" class="form-control" placeholder="Registration Name" required="required" id="visitor_email" name="name">
    		        				</div>
    		        				@if ($errors->has('name'))
    		        				    <span class="invalid-feedback">
    		        				        <strong>{{ $errors->first('name') }}</strong>
    		        				    </span>
    		        				@endif
        		        		</div>
        		        	</div>
        		            <input type="submit" value="CHECK" class="btn btn-success" id="submit-contact">
        		        </form>
        		    </div>
        		</div>
        	</div>
        </div>
	</div>
@stop