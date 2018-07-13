@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	<div class="container-fluid contact" id="register">
        <div class="container inner">
        	<div class="row">
        		<div class="col-sm-12 col-md-12 col-lg-12">
        		    <div class="msg">
        		        <h3>Check Membership</h3>
        		        <p>Enter your registration number and name to check your mebership:</p>
        		        <div id="message-contact"></div>
        		        <form action="{{ route('check') }}" enctype="multipart/form-data" method="post">
        		        	@csrf
        		        	<div class="row">
        		        		<div class="col-md-6">
    		        				<div class="form-group">
    		        				    <input type="number" class="form-control" placeholder="Registration ID" required="required" id="visitor_email" name="id">
    		        				</div>
    		        				@if ($errors->has('id'))
    		        				    <span class="invalid-feedback">
    		        				        <strong>{{ $errors->first('id') }}</strong>
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