<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6TVVVYY6TY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-6TVVVYY6TY');
    </script>
    @include('site/includes.head')
    <meta name="keywords" content="Best spa in dubai, Biologique Recherche Dubai, GHD Dubai, Salon near me,
    Best Facial Dubai, Spa & salon Dubai, Best hair salon Dubai, best spa for ladies, ladies only spa, Best hair salon,
    Best beauty salon dubai, beautysalon, bestbeautysalon, dubaibeautysalon, bestbeautysalondubai, besttreatmentsdubai,
    privatemembersclub, femalespadubai, womenbeauty, bestbeautycaredubai, bestbeautycareuae, bestethnichaircaredubai,
    mydubai, luxurywomen">
</head>

<body id='body' data-url="{{ Request::path() }}">
<div id="app">

    @include('site/includes.header')
    @include('site/includes.mobileHeader', [
    'data' => [
    [
    'name'=> 'philosophy',
    'url' => '/philosophy'
    ],
    [
    'name'=> 'services',
    'url' => '/services'
    ],
    [
    'name'=> 'membership',
    'url' => '/memberships'
    ],
    [
    'name'=> 'gallery',
    'url' => '/gallery'
    ],
    [
    'name'=> 'Career',
    'url' => '/career'
    ],
    [
    'name'=> 'Team',
    'url' => '/team'
    ],
    [
    'name'=> 'contact',
    'url' => '/contact'
    ],
    ]
    ])

    @include('site/includes.fixedIcon')
    <div id="main">
        @yield('content')
    </div>
    @include('site/includes.footer')
</div>

<script src="{{ asset('/site/js/jquery.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="{{ asset('/site/js/anime.min.js') }}"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset('/site/js/main.js') }}"></script>

@include('site/includes.customScripts')

<div class="formSendPopup">
    <div class="formSendPopupLayer"></div>
    <div class="formSendPopupContent">
        <div class="close-popup-btn" style="background-image: url('/site/media/images/utils/closeDark.svg')"></div>
        <div id="dynamicContent">

        </div>
    </div>
</div>

<div id="loginPopup" class="loginSendPopup">
    <div class="loginSendPopupLayer"></div>
    <div class="loginSendPopupContent">
        <div class="close-popup-btn" style="background-image: url('/site/media/images/utils/closeDark.svg')"></div>
        <h1>Log In</h1>
        <br>
        <form id="loginForm" class="formBlock">
            <div class="inputWrapper">
                <input placeholder="." id="loginemail" spellCheck="false" autocomplete='off' type="email" name="email" required>
                <label class="initialLabel" for="loginemail">Email</label>
            </div>
            <div class="inputWrapper">
                <input placeholder="." id="password" spellCheck="false" autocomplete='off' type="password" name="password" required>
                <label class="initialLabel" for="password">Password</label>
            </div>
            <br>
            <button type="submit" class="linkItem">Submit</button>
        </form>
    </div>
</div>

</body>

</html>
