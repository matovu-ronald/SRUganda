@extends('layouts.app')
@section('title', $page->title)
@section('pageTitle', $page->title)
@section('content')
	<div class="container-fluid contact">
	            <div class="container inner">
	                <div class="row">
	                   
	                    <div class="col-sm-12 col-md-7 col-lg-8">
	                        <div class="msg">
	                            <h3>Contact Form</h3>
	                            <p>Please contact us through the following form:</p>
	                            <div id="message-contact"></div>
	                            <form action="{{ url('send') }}" method="post" >
	                            	@csrf
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Enter Full Name" required="required" id="visitor_name" name="name">
	                                </div>
	                                <div class="form-group">
	                                    <input type="email" class="form-control" placeholder="Enter Email Address" required="required" id="visitor_email" name="email">
	                                </div>
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Enter Phone Number" required="required" id="visitor_phone" name="phone">
	                                </div>
	                                <div class="form-group">
	                                    <textarea class="form-control" id="visitor_comment" name="message" cols="30" rows="10" placeholder="Enter Message"  required="required"></textarea>
	                                </div>
	                                <input type="submit" value="SEND MESSAGE" class="btn btn-success" id="submit-contact">
	                            </form>
	                        </div>
	                    </div>
	                    <div class="col-sm-12 col-md-5 col-lg-4">
	                        <div class="last">
	                            <h3>Contact Address</h3>
	                            <p>Please contact us through the following Address:</p>
	                            <div class="last-part cmt">
	                                <div class="icon">
	                                    <p><i class="fa fa-map-marker"></i></p>
	                                </div>
	                                <div class="text">
	                                    <p>{{ Config::get('settings.box_numer') ? Config::get(settings.box_numer) : 'P.O.Box...' }},</p>
	                                    <p>{{ Config::get('settings.address') ? Config::get('settings.address') : 'New York, NY 11111-2222, US' }}</p>
	                                </div>
	                            </div>
	                            <div class="last-part">
	                                <div class="icon">
	                                    <p><i class="fa fa-envelope-o"></i></p>
	                                </div>
	                                <div class="text">
	                                    <p>{{ Config::get('settings.email_one') ? Config::get('settings.email_one') : 'first@gmail.com' }}</p>
	                                    <p>{{ Config::get('settings.email_two') ? Config::get('settings.email_two') : 'two@gmail.com' }}</p>
	                                </div>
	                            </div>
	                            <div class="last-part">
	                                <div class="icon">
	                                    <p><i class="fa fa-phone"></i></p>
	                                </div>
	                                <div class="text">
	                                	<p>{{ Config::get('settings.phone_one') ? Config::get('settings.phone_one') : '+111 222 4444' }}</p>
	                                	<p>{{ Config::get('settings.phone_two') ? Config::get('settings.phone_wo') : '+111 222 4444' }}</p>
	                                </div>
	                            </div>
	                            <div class="last-part">
	                                <div class="icon">
	                                    <p><i class="fa fa-fax"></i></p>
	                                </div>
	                                <div class="text">
	                                    <p>{{ Config::get('settings.fax') ? Config::get('settings.fax') : '+111 222 4444' }}</p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    
	                </div>

	    </div>
	</div>


	<div class="map-responsive">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.747304605996!2d32.59105311437384!3d0.3418526997506031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbbae2e73eadf%3A0x9c74582b75af1028!2s63-45+Kanjokya+St%2C+Kampala!5e0!3m2!1sen!2sug!4v1529918141791" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

@endsection