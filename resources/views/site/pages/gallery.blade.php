@extends('.site/layouts.layout')

@section('custom_meta')
    <title>CNB Dubai | Lavish Beauty Retreat</title>
    <meta name="description"
        content="Experience a space of lavish design. A timeless combination of luxury, intimacy and social aspiration. ">
    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content={{ Request::url() }} />
    <meta name="twitter:title" content="CNB Dubai | Lavish Beauty Retreat" />
    <meta name="twitter:description"
        content="Experience a space of lavish design. A timeless combination of luxury, intimacy and social aspiration. " />
    <meta name="twitter:image" content="/site/media/images/metaImages/metaImage.jpeg" />
    <meta name="twitter:image:alt" content="CNB Dubai | Gallery page image" />

    {{-- Open Graph data --}}
    <meta property="og:url" content={{ Request::url() }} />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="CNB Dubai | Lavish Beauty Retreat" />
    <meta property="og:description"
        content="Experience a space of lavish design. A timeless combination of luxury, intimacy and social aspiration. " />
    <meta property="og:image:url" content="/site/media/images/metaImages/metaImage.jpeg" />
    <meta property="og:image:alt" content="CNB Dubai | Gallery page image" />
@stop

@section('content')
    <div class="gallery-page">
        <div id="galleryPopup" class="galleryPopup">
            <img class="close-popup-btn" src='site/media/images/utils/close.svg' />
            <div class="galleryPopup-overlay">

            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <div class="galleryWrapper">
            <div class="galleryWrapperHead">
                <h2 class="galleryWrapperHeadTitle">Gallery</h2>
                <ul id="filterWrapper" class="filterWrapper">
                </ul>
            </div>

            <div class="galleryWrapperBody" itemscope>
                <img class="loaderImage" src="site/media/images/icon/loader.svg" alt="">
            </div>

        </div>
    </div>
@endsection

@section('custom_script')
    <script src="{{ asset('/site/js/gallery.js') }}"></script>
@stop
