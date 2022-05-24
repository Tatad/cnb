@extends('.site/layouts.layout')

@section('custom_meta')
    <title>CNB Dubai | Members only Beauty Haven | Spa & Salon</title>
    <meta name="description" content="CNB House of Beauty. A members only beauty destination set over 4000 square feet of pure opulence. Offering a truly immersive and indulgent beauty experience.">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content={{Request::url()}}/>
    <meta name="twitter:title" content="CNB Dubai | Members only Beauty Haven | Spa & Salon"/>
    <meta name="twitter:description"
          content="CNB House of Beauty. A members only beauty destination set over 4000 square feet of pure opulence. Offering a truly immersive and indulgent beauty experience. "/>
    <meta name="twitter:image" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta name="twitter:image:alt" content="CNB Dubai | Home page image"/>

    {{-- Open Graph data --}}
    <meta property="og:url" content={{Request::url()}}/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="CNB Dubai | Members only Beauty Haven | Spa & Salon"/>
    <meta property="og:description"
          content="CNB House of Beauty. A members only beauty destination set over 4000 square feet of pure opulence. Offering a truly immersive and indulgent beauty experience. "/>
    <meta property="og:image:url" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta property="og:image:alt" content="CNB Dubai | Home page image"/>
@stop

@section('content')
    <audio id="backgroundMusic" loop src="site/media/audio/backgroundMusic.mp3"></audio>
    <div class="introWrapper">
        <div class="customText">
                <div class="line"></div>
                SKIP
            </div>
        <h2 class="title">Welcome to</h2>
        <div class="introLogo">
            <div class="introLogoDark"></div>
            <div class="introLogoLight"></div>
        </div>
        <div class="actionText" id="actionText">
            <div class="firstText">TAKE A DEEP BREATH</div>
            <div class="secondText">
                <div class="line"></div>
                BEGIN YOUR EXPERIENCE
            </div>
        </div>
    </div>
    <div class="home-page">
        @include('site/includes/home.banner',
                    [
                        'bannerVideo' => $data['banner_video'],
                        'bannerTitleLogo' => $data['banner_title_logo'],
                        'bannerTitle' => $data['banner_title']
                    ]
                    )
        {{-- @include('site/includes/dynamicComponents.explorePhilosophy', --}}
        {{-- [ --}}
        {{-- 'list' => [ --}}
        {{-- 'An extraordinary space where beauty rituals meet <br>world-class expertise.', --}}
        {{-- 'A social haven steeped in the <br>traditions of sisterhood and self-care.', --}}
        {{-- 'A pampering retreat, dedicated to the <br>rejuvenation of the mind, body and soul.', --}}
        {{-- 'An indulgent beauty experience designed <br>for those who seek more.' --}}
        {{-- ], --}}
        {{-- 'images' => [ --}}
        {{-- 'site/media/images/homeExplorePhilosophy/1.png', --}}
        {{-- 'site/media/images/homeExplorePhilosophy/2.png', --}}
        {{-- 'site/media/images/homeExplorePhilosophy/3.png', --}}
        {{-- 'site/media/images/homeExplorePhilosophy/4.png' --}}
        {{-- ], --}}
        {{-- 'link' => '#' --}}
        {{-- ] --}}
        {{-- ) --}}
        @include('site/includes/dynamicComponents.explorePhilosophy',
        [
        'list' => $data['philosophy_text'],
        'mobileList' => $data['philosophy_text'],
        'images' => [$data['philosophy_image']],
        'link' => '/philosophy',
        'linkText' => $data['philosophy_link_title']
        ]
        )
        @include('site/includes/dynamicComponents.textWithImage',
        [
        'animationClass' => 'animateTextTruly',
        'text'=> '<div>'.$data['our_team_top_text'].'</div>',
        'image'=>'/site/media/images/textBackground/fi.gif',
        'leftNoticeText' => 'our team',
        ])
        @include('site/includes/home.meetOurTeam', [
    'image' => $data['our_team_background_image'],
    'title' => $data['our_team_title'],
    'text' => $data['our_team_bottom_text'],
    ])
        @include('site/includes/dynamicComponents.textWithImage',
        [
        'text'=> $data['gallery_small_text'].'<div class="animateTextGallery">'.$data['gallery_big_text'].'</div>',
        'textColor' =>'#E1A38F',
        'backColor' => '#6F3638',
        'leftNoticeText' => 'gallery',
        ])
        @include('site/includes/home.slider', ['data' => $data['galleries']])
        @include('site/includes/home.contact', ['data' => $contactData])
    </div>
@endsection
