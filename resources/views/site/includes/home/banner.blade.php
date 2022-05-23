<div class="banner home-banner">
    <video id="homeVideo" muted loop playsinline>
        <source src="{{$bannerVideo}}" type="video/mp4">
        Sorry, your browser doesn't support embedded videos.
    </video>

    <div class="home-banner-wrapper">
        <span class="home-banner-titleLogo" style="background-image: url('{{$bannerTitleLogo}}')"></span>
        <div itemscope>
            <h1 itemprop="page-title" class="page-header home-banner-title letter-animation-bannerTitle">{{ $bannerTitle }}</h1>
        </div>
    </div>
{{--    <div class="scrollBottom"></div>--}}
</div>
