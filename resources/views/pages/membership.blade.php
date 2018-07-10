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
						<h2>SRU Registration Procedures</h2>
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
					<a href="{{ url('registration-check') }}" class="btn btn-primary">Check Membership</a>
				</div>
			</div>
			
		</div>


	</section>

	<div class="container-fluid contact" id="register">
	    <div class="container inner">
	    	<div class="row">
	    		<div class="col-sm-12 col-md-12 col-lg-12">
	    		    <div class="msg">
	    		        <h3>Membership Registration Form</h3>
	    		        <p>Please fill in the fields below to apply for membership:</p>
	    		        <div id="message-contact"></div>
	    		        <form action="{{ url('members') }}" enctype="multipart/form-data" method="post">
	    		        	@csrf
	    		        	<div class="row">
	    		        		<div class="col-md-6">
	    		        			<div class="form-group">
	    		        			    <input type="text" class="form-control" placeholder="Enter Full Name" required="required" id="visitor_name" name="name">
	    		        			</div>
	    		        			@if ($errors->has('name'))
	    		        			    <span class="invalid-feedback">
	    		        			        <strong>{{ $errors->first('name') }}</strong>
	    		        			    </span>
	    		        			@endif
	    		        		</div>
	    		        		<div class="col-md-6">
			        				<div class="form-group">
			        				    <input type="email" class="form-control" placeholder="Enter Email Address" required="required" id="visitor_email" name="email">
			        				</div>
			        				@if ($errors->has('email'))
			        				    <span class="invalid-feedback">
			        				        <strong>{{ $errors->first('email') }}</strong>
			        				    </span>
			        				@endif
	    		        		</div>
	    		        	</div>
	    		        	<div class="row">
	    		        		<div class="col-md-6">
	    		        			<div class="form-group">
	    		        			    <input type="text" class="form-control" placeholder="Institute of completion of the radiography course" required="required" id="visitor_name" name="institute">
	    		        			</div>
	    		        			@if ($errors->has('institute'))
	    		        			    <span class="invalid-feedback">
	    		        			        <strong>{{ $errors->first('institute') }}</strong>
	    		        			    </span>
	    		        			@endif
	    		        		</div>
	    		        		<div class="col-md-6">
			        				<div class="form-group">
			        				    <input type="text" class="form-control" placeholder="Work Station" required="required" id="visitor_email" name="workstation">
			        				</div>
			        				@if ($errors->has('workstation'))
			        				    <span class="invalid-feedback">
			        				        <strong>{{ $errors->first('workstation') }}</strong>
			        				    </span>
			        				@endif
	    		        		</div>
	    		        	</div>
	    		        	

	    		        	<div class="row">
	    		        		<div class="col-md-4">
	    		        			<div class="form-group">
	    		        			    <input type="text" class="form-control" placeholder="Enter Phone Number" required="required" id="visitor_phone" name="phone">
	    		        			</div>
	    		        			@if ($errors->has('phone'))
	    		        			    <span class="invalid-feedback">
	    		        			        <strong>{{ $errors->first('phone') }}</strong>
	    		        			    </span>
	    		        			@endif
	    		        		</div>
	    		        		<div class="col-md-4">
	    		        			<div class="form-group">
	    		        			    <select name="gender" id="input" class="form-control" required="required">
	    		        			    	<option value="" selected>Gender</option>
	    		        			    	<option value="female">Female</option>
	    		        			    	<option value="male">Male</option>
	    		        			    </select>
	    		        			</div>
	    		        			@if ($errors->has('gender'))
	    		        			    <span class="invalid-feedback">
	    		        			        <strong>{{ $errors->first('gender') }}</strong>
	    		        			    </span>
	    		        			@endif
	    		        		</div>
	    		        		<div class="col-md-4">
	    		        			<div class="form-group">
	    		        			   <div class="input-group input-file" >
	    		        			   			<label for="">Profile Picture</label>
	    		        			       		<input type="file" placeholder='Choose a file...' name="pic" />	
	    		        			    </div>
	    		        			</div>
	    		        			@if ($errors->has('pic'))
	    		        			    <span class="invalid-feedback">
	    		        			        <strong>{{ $errors->first('pic') }}</strong>
	    		        			    </span>
	    		        			@endif
	    		        		</div>
	    		        	</div>
	    		        	<div class="row">
	    		        		<div class="col-md-6">
	    		        			<div class="form-group">
	    		        			    <input type="text" class="form-control" placeholder="Enter Proffesion" required="required" id="visitor_phone" name="profession">
	    		        			</div>
	    		        			@if ($errors->has('profession'))
	    		        			    <span class="invalid-feedback">
	    		        			        <strong>{{ $errors->first('profession') }}</strong>
	    		        			    </span>
	    		        			@endif
	    		        		</div>
	    		        		<div class="col-md-6">
	    		        			<div class="form-group">
	    		        			   <div class="input-group input-file" >
	    		        			   			<label for="">Upload Documents</label>
	    		        			       		<input type="file" placeholder='Choose a file...' name="files[]" multiple />	
	    		        			    </div>
	    		        			</div>

	    		        		</div>
	    		        	</div>
	    		            
	    		            <div class="form-group">
	    		                <textarea class="form-control" id="visitor_comment" name="about" cols="30" rows="10" placeholder="About You" required="required"></textarea>
	    		                @if ($errors->has('about'))
			        				    <span class="invalid-feedback">
			        				        <strong>{{ $errors->first('abou') }}</strong>
			        				    </span>
			        				@endif
	    		            </div>
	    		            <input type="submit" value="REGISTER" class="btn btn-success" id="submit-contact">
	    		        </form>
	    		    </div>
	    		</div>
	    	</div>
	    </div>
	</div>
@endsection