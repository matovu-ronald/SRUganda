<header>
    <div class="container">
        <div class="row">
            <div class="col-md-3 logo">
                <a href="{{ url('/') }}"><img src="{{ Config::get('settings.logo') ? asset(Config::get('settings.logo')) : asset('img/logo.png') }}" alt=""></a>
            </div>
            <!-- Nav Start -->
            <div class="col-md-9 nav-wrapper">
                <div class="nav">
                    <ul class="sf-menu" id="menu">
                        <li class="{{ Request::path() == '/' ? 'current-menu-item' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">About us</a>
                            <ul>
                                <li><a href="{{ url('who-we-are') }}">Who We Are</a></li>
                                <li><a href="{{ url('our-history') }}">Our History</a></li>
                                <li><a href="{{ url('team') }}">Our team</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::path() == 'membership' ? 'current-menu-item' : '' }}"><a href="{{ url('membership') }}">Registration</a>
                        </li>
                        <li class="{{ Request::path() == 'gallery' ? 'current-menu-item' : '' }}"><a href="{{ url('gallery') }}">Gallery</a></li>
                        <li class="{{ Request::path() == 'news' ? 'current-menu-item' : '' }}"><a href="{{ url('news') }}">News</a></li>
                        <li class="{{ Request::path() == 'events' ? 'current-menu-item' : '' }}"><a href="{{ url('events') }}">Events</a></li>
                        <li class="{{ Request::path() == 'contact-us' ? 'current-menu-item' : '' }}"><a href="{{ url('contact-us') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- Nav End-->
        </div>
    </div>
</header>