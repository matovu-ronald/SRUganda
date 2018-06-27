@extends('layouts.app')
@section('content')
    <!-- Slider Start -->
    @include('partials.slide', ['slides' => $slides])
    <!-- Slider End -->

    <!-- Our Choice Section Ends-->

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
                <div class="col-md-3 col-sm-6">
                    <div class="box-col">
                        <div class="overlay"></div>
                        <div class="icon">
                            <p><i class="fa fa-bolt"></i></p>
                        </div>
                        <div class="text">
                            <h3>Imporoved Techniques</h3>
                            <p>
                               To Support the use of improved diagnostic and therapeutic techniques in medical imaging, radiation thereapy and associated sciences amongst hospitals in Uganda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box-col">
                        <div class="overlay"></div>
                        <div class="icon">
                            <p><i class="fa fa-clock-o"></i></p>
                        </div>
                        <div class="text">
                            <h3>Advice & Support</h3>
                            <p>
                                To advise, support or act for any member(s) of the company or association having problems related to the profession.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box-col">
                        <div class="overlay"></div>
                        <div class="icon">
                            <p><i class="fa fa-users"></i></p>
                        </div>
                        <div class="text">
                            <h3>Educate & Support</h3>
                            <p>
                                To educate and advocate for establishment of standards for practice in the medical imaging and therapy in Uganda.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box-col">
                        <div class="overlay"></div>
                        <div class="icon">
                            <p><i class="fa fa-bookmark"></i></p>
                        </div>
                        <div class="text">
                            <h3>Research & Experience</h3>
                            <p>
                                To organize and share results of research and experience in medical imaging, radiation therapy and radiation protection with practioners in Uganda and Worldwide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  

    <!---Auto Script Section Starts-->
    <div class="container-fluid auto-script" style="background-image: url({{ Config::get('settings.counter_bg') ? asset(Config::get('settings.counter_bg')) : asset('img/slide2.jpg') }});">
        <div class="row">
        <div class="overley"></div>
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="media">
                                <div class="media-left">
                                   <i class="fa fa-heartbeat"></i>
                                 </div>
                                 <div class="media-body">
                                   <h4 class="media-heading"><span class="counter">{{ Config::get('settings.expert_doctors') ? Config::get('settings.expert_doctors') : 20 }}</span></h4>
                                   <h5>Expert Doctors</h5>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="media">
                                <div class="media-left">
                                   <i class="fa fa-users"></i>
                                 </div>
                                 <div class="media-body">
                                   <h4 class="media-heading"><span class="counter">{{ $members }}</span></h4>
                                   <h5>Members</h5>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="media">
                                <div class="media-left">
                                   <i class="fa fa-stethoscope"></i>
                                 </div>
                                 <div class="media-body">
                                   <h4 class="media-heading"><span class="counter">{{ $partners }}</span></h4>
                                   <h5>Partners</h5>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="media">
                                <div class="media-left">
                                   <i class="fa fa-plus-square"></i>
                                 </div>
                                 <div class="media-body">
                                   <h4 class="media-heading"><span class="counter">{{ Config::get('settings.experience') ? Config::get('settings.experience') : 5 }}</span></h4>
                                   <h5>Years in Existence</h5>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---Auto Script Section Ends-->

    <!---Emergency Section Start-->
    <div class="emergency"> 
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-col">
                        <h2>Membership</h2>
                        <div class="border"></div>
                        <p class="down">How and why become a member</p>
                    </div>
                </div>
            </div>
            <div class="row inner">
                <div class="col-md-4">
                    <div class="left-part">
                        <div class="part">                          
                            <div class="icon">
                                <p><i class="fa fa-user-md"></i></p>
                            </div>
                            <div class="text">
                                <h2>Completed a Radiography course?</h2>
                                <p>Have completed a Radiography course at an accredited and recognized college internationally.</p>
                            </div>
                        </div>
                        <div class="part">                          
                            <div class="icon">
                                <p><i class="fa fa-wheelchair"></i></p>
                            </div>
                            <div class="text">
                                <h2>Studying Radiography?</h2>
                                <p>Be a continuing student, studying Radiography.</p>
                            </div>
                        </div>
                        <div class="part">
                            <div class="icon">
                                <p><i class="fa fa-calendar"></i></p>
                            </div>
                            <div class="text">
                                <h2>Interested in Radiography?</h2>
                                <p>Be a corporate or an individual interested in the activities of Radiographers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="img">
                        <img src="img/emergency.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-part">
                        <div class="part">
                            <div class="icon">
                                <p><i class="fa fa-pencil"></i></p>
                            </div>
                            <div class="text">
                                <h2>Register with Documents</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiu tempor incididunt ute labore etrt dolore.</p>
                            </div>                          
                        </div>
                        <div class="part">  
                            <div class="icon">
                                <p><i class="fa fa-globe"></i></p>
                            </div>                          
                            <div class="text">
                                <h2>You can also apply online</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiu tempor incididunt ute labore etrt dolore.</p>
                            </div>                          
                        </div>
                        <div class="part">                              
                            <div class="icon">
                                <p><i class="fa fa-clock-o"></i></p>
                            </div>
                            <div class="text">
                                <h2>Verified and Become a member</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur a elit, sed do eiu tempor incididunt ute labore etrt dolore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <!---Emergency Section Ends-->

    <!---Blog Section Start-->
    <div class="blog bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-col">
                        <h2>LATEST NEWS</h2>
                        <div class="border"></div>
                        <p class="down">See all our latest blog post items from below</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($featured as $featured)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{ asset($featured->image) }}" alt="">
                            <div class="caption">
                                <a href="{{ route('article.show', $featured->slug) }}"><h4>{{ $featured->title }}</h4></a>
                                <div class="comment">
                                    <ul>
                                        <li>
                                            <i class="fa fa-calendar"></i ><span>{{ $featured->date->toFormattedDateString() }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-user"></i ><span>Admin</span>
                                        </li>
                                    </ul>
                                </div>
                                 <p class="all">{!! str_limit($featured->content, $limit = 100, $end = '...') !!}</p>
                                 <p class="submit"><a href="{{ route('article.show', $featured->slug) }}" class="btn btn-primary">Read More</a></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-sm-12 col-md-12">
                        <h2>There are no featured articles yet.</h2>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!---Blog Section End-->
@endsection