<div class="heading-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12  item">
                <div class="social">
                    <ul>
                        <li><a href="{{ Config::get('settings.facebook') ? Config::get('settings.facebook') : '#' }}" target="blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ Config::get('settings.twitter') ? Config::get('settings.twitter') : '#' }}" target="blank"><i  class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ Config::get('settings.linkedIn') ? Config::get('settings.linkedIn') : '#' }}" target="blank"><i  class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 item ">
                <div class="pull-right call-part">
                    <div class="icon">
                        <p><i class="fa fa-phone"></i></p>
                    </div>
                    <div class="text">
                        <h3>Call Us: {{ Config::get('settings.phone_two') ? Config::get('settings.phone_one') : '0758281017' }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>