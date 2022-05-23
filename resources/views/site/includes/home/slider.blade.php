<div class="sliderSection">

    <div class="galleryPopup" id="homeGalleryPopup">
        <img class="close-popup-btn" src='site/media/images/utils/close.svg' alt="close icon"/>
        <div class="galleryPopup-overlay"></div>

        <div class="swiper-container">
            <div class="swiper-wrapper" itemscope>
                    @foreach($data as $image)
                        <div itemprop="slider-item-popup" class="swiper-slide galleryPopupImage" style="background-image: url('{{ $image }}')"></div>
                    @endforeach
{{--                    <div itemprop="slider-item-popup" class="swiper-slide galleryPopupImage" style="background-image: url('site/media/images/homeSwiper/slider2.jpg')"></div>--}}
{{--                    <div itemprop="slider-item-popup" class="swiper-slide galleryPopupImage" style="background-image: url('site/media/images/homeSwiper/slider3.png')"></div>--}}
{{--                    <div itemprop="slider-item-popup" class="swiper-slide galleryPopupImage" style="background-image: url('site/media/images/homeSwiper/slider4.png')"></div>--}}
            </div>

            <div class="homeGalleryPrev swiper-button-prev"></div>
            <div class="homeGalleryNext swiper-button-next"></div>
        </div>
    </div>

    <div class="sliderSectionTitle">
        <h2>Gallery</h2>
    </div>
    <div class="swiper-container" id="homeSwiper">
        {{--        <div class="swiper-wrapper">--}}
        {{--            <div class="swiper-slide">--}}
        {{--                <div class="sliderItem brownLayer"--}}
        {{--                     style="background-image: url('site/media/images/homeSwiper/sliderItem1.png')"></div>--}}
        {{--            </div>--}}
        {{--            <div class="swiper-slide">--}}
        {{--                <div class="sliderItem brownLayer"--}}
        {{--                     style="background-image: url('site/media/images/homeSwiper/sliderItem2.png')"></div>--}}
        {{--            </div>--}}
        {{--            <div class="swiper-slide">--}}
        {{--                <div class="sliderItem brownLayer"--}}
        {{--                     style="background-image: url('site/media/images/homeSwiper/sliderItem3.png')"></div>--}}
        {{--            </div>--}}
        {{--            <div class="swiper-slide">--}}
        {{--                <div class="sliderItem brownLayer"--}}
        {{--                     style="background-image: url('site/media/images/homeSwiper/sliderItem4.png')"></div>--}}
        {{--            </div>--}}
        {{--            <div class="swiper-slide">--}}
        {{--                <div class="sliderItem brownLayer"--}}
        {{--                     style="background-image: url('site/media/images/homeSwiper/sliderItem4.png')"></div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="swiper-wrapper" itemscope>
            @foreach($data as $index => $image)
                <div itemprop="slider-item" class="swiper-slide brownLayer" data-id="{{$index}}">
                    <img class="sliderItem" src="{{ $image }}" alt="slider item {{$image}}">
                </div>
            @endforeach

{{--            <div itemprop="slider-item" class="swiper-slide brownLayer" data-id="1">--}}
{{--                <img class="sliderItem" src="site/media/images/homeSwiper/slider2.jpg" alt="slider item 2">--}}
{{--            </div>--}}
{{--            <div itemprop="slider-item" class="swiper-slide brownLayer" data-id="2">--}}
{{--                <img class="sliderItem" src="site/media/images/homeSwiper/slider3.png" alt="slider item 3">--}}
{{--            </div>--}}
{{--            <div itemprop="slider-item" class="swiper-slide brownLayer" data-id="3">--}}
{{--                <img class="sliderItem" src="site/media/images/homeSwiper/slider4.png" alt="slider item 4">--}}
{{--            </div>--}}
        </div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <a href="/gallery" class="linkItem">Explore our gallery</a>
</div>
