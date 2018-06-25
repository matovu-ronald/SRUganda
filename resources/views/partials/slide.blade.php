<section class="main-slider">

    <div class="slide-carousel owl-item">
        @foreach ($slides as $slide)
            <div class="item" style="background-image:url({{ asset($slide->image) }});">
                <div class="overlay"></div>
                <div class="text">
                    <div class="this-item">
                        <h2 class="text-capitalize">{{ $slide->title }}</h2>
                    </div>
                    <div class="this-item">
                        <h3>{{ $slide->sub_title }}</h3>
                    </div>
                    <div class="this-item">
                        <p><a href="{{ url($slide->link) }}">See Details</a></p>
                    </div>
                </div>
            </div>    
        @endforeach                
    </div>
</section>