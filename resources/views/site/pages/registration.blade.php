@extends('.site/layouts.layout')

@section('custom_meta')
    <title>CNB Dubai | Register</title>

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content={{Request::url()}}/>
    <meta name="twitter:title" content="CNB Dubai | Lavish Beauty Retreat"/>
    <meta name="twitter:description"
          content="Experience a space of lavish design. A timeless combination of luxury, intimacy and social aspiration. "/>
    <meta name="twitter:image" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta name="twitter:image:alt" content="CNB Dubai | Gallery page image"/>

    {{-- Open Graph data --}}
    <meta property="og:url" content={{Request::url()}}/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="CNB Dubai | Lavish Beauty Retreat"/>
    <meta property="og:description"
          content="Experience a space of lavish design. A timeless combination of luxury, intimacy and social aspiration. "/>
    <meta property="og:image:url" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta property="og:image:alt" content="CNB Dubai | Gallery page image"/>
@stop

@section('content')
    <div class="registration-page">
        <form method="POST" action="{{url('/register')}}" class="formBlock" id="registrationForm" autocomplete="off" itemscope>
            @csrf
            <div class="swiper-container" id="registrationSwiper">
                <div class="swiper-wrapper">
                    @if(isset($data))
                        @foreach($data as $index=>$item)
                            @include('site/includes/dynamicComponents.pageBanner',
                                       [
                                           'title' => $item['title'],
                                           'desc' => $item['desc'],
                                           'image' => $item['image'],
                                           'bannerInfoVisible' => isset($item['bannerInfoVisible']) ? $item['bannerInfoVisible'] : false,
                                           'swiperItem' => true,
                                           'nextBlockTitle' => $item['nextBlock'],
                                           'blockCount' => count($data),
                                           'showPrevButton' => $item['showPrevButton'],
                                           'blockKey' => $item['blockKey'],
                                           'user' => $user,
                                           'token' => $token,
                                           'call_back_id' => $call_back_id
                                       ])
                        @endforeach
                    @endif
                </div>
            </div>
        </form>
    </div>

    <div class="registrationPopup">
        <div class="registrationPopupCloseLayer"></div>
        <div class="registrationPopupWrapper">
            <div class="close-popup-btn" style="background-image: url('/site/media/images/utils/closeDark.svg')"></div>
            <div class="registrationPopupWrapperContent">
                <h1>Thank You</h1>
            </div>
        </div>
    </div>
@endsection

@section('custom_script')
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

        <script src="{{ asset('/site/js/register.js') }}"></script>
@stop

