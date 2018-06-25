<section class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4 footer-col">
                <h3>Important Links</h3>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="{{ url('/') }}">Home Page</a></li>
                            <li><a href="{{ url('about-us') }}">About Us Page</a></li>
                            <li><a href="{{ url('membership') }}">Membership Page</a></li>
                            <li><a href="{{ url('gallery') }}">Gallery Page</a></li>
                            <li><a href="{{ url('contact-us') }}">Contact Page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 footer-col">
                <h3>Other Links</h3>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li><a href="{{ url('membership') }}">Registration</a></li>
                            <li><a href="{{ url('frequently-asked-questions') }}">FAQ</a></li>
                            <li><a href="{{ url('resource') }}">Resources</a></li>
                            <li><a href="{{ url('partners') }}">Partners</a></li>
                            <li><a href="{{ url('news') }}">News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 footer-col">
                <h3>Contact Us</h3>
                <div class="contact-item">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                    <div class="text">{{ Config::get('settings.address') ? Config::get('settings.address') : 'Address' }}</div>
                </div>
                <div class="contact-item">
                    <div class="icon"><i class="fa fa-phone"></i></div>
                    <div class="text">{{ Config::get('settings.phone_one') ? Config::get('settings.phone_one') : '0758281012' }}</div>
                </div>
                <div class="contact-item">
                    <div class="icon"><i class="fa fa-fax"></i></div>
                    <div class="text">{{ Config::get('settings.phone_two') ? Config::get('settings.phone_one') : '0758281017' }}</div>
                </div>
                <div class="contact-item">
                    <div class="icon"><i class="fa fa-envelope-o"></i></div>
                    <div class="text">{{ Config::get('settings.email_one') ? Config::get('settings.email_one') : 'email@email.com' }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Main End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                Copyright &copy; 2018, Society of radiography Uganda. All Rights Reserved.
            </div>
            <div class="col-md-6 footer-menu">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->
<a href="#" class="scrollup">
    <i class="fa fa-angle-up"></i>
</a>