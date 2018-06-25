<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>

<li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>

<li class="treeview">
    <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      <li><a href="{{ backpack_url('article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
      <li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
      <li><a href="{{ backpack_url('tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
    </ul>
</li>

<li><a href="{{ backpack_url('slide') }}"><i class="fa fa-film"></i><span>Slideshow</span></a></li>

<li><a href="{{ backpack_url('gallery') }}"><i class="fa fa-image"></i><span>Gallery</span></a></li>

<li><a href="{{ backpack_url('events') }}"><i class="fa fa-calendar"></i><span>Events</span></a></li>

<li><a href="{{ backpack_url('team') }}"><i class="fa fa-users"></i><span>Team</span></a></li>

<li><a href="{{ backpack_url('members') }}"><i class="fa fa-user-plus"></i><span>Members</span></a></li>

<li><a href="{{ backpack_url('resources') }}"><i class="fa fa-download"></i><span>Resources</span></a></li>

<li><a href="{{ backpack_url('faq') }}"><i class="fa fa-question-circle"></i><span>FAQS</span></a></li>

<li><a href="{{ backpack_url('partner') }}"><i class="fa fa-handshake-o"></i><span>Partners</span></a></li>

<li><a href="{{ backpack_url('testimonial') }}"><i class="fa fa-users"></i><span>Testimonials</span></a></li>

<li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cogs"></i><span>Settings</span></a></li>