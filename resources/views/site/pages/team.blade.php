@extends('.site/layouts.layout')

@section('custom_meta')
    <title>CNB Dubai | Beauty Haven | Spa & Salon</title>

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content={{Request::url()}}/>
    <meta name="twitter:title" content="CNB Dubai | Beauty Haven | Spa & Salon"/>
    <meta name="twitter:description"
          content="CNB House of Beauty. Experience the region’s most innovative and transformative beauty treatments covering every facet of your beauty needs."/>
    <meta name="twitter:image" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta name="twitter:image:alt" content="CNB Dubai | Services page image"/>

    {{-- Open Graph data --}}
    <meta property="og:url" content={{Request::url()}}/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="CNB Dubai | Beauty Haven | Spa & Salon"/>
    <meta property="og:description"
          content="CNB House of Beauty. Experience the region’s most innovative and transformative beauty treatments covering every facet of your beauty needs."/>
    <meta property="og:image:url" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta property="og:image:alt" content="CNB Dubai | Services page image"/>
@stop

@section('content')
    <div class="team-page">
        @include('site/includes/dynamicComponents.pageBanner',
                    [
                        'animationTitle' => 'teamPageTitle',
                        'bannerInfoVisible' => true,
                        'title' => 'Meet the team',
                        'desc' => "Our first-class facilities are complemented by a team <br>of specialist masters and therapists",
                        'separateDesc' => true,
                        'image' => '/site/media/images/banners/team.jpeg'
                    ])
        @include('site/includes/dynamicComponents.textWithImage',
        [
        'text'=>'<p>With a combined international experience of over 50 years our team have been handpicked</p><div class="animateTextFromTheBest">from the best in their field <br>and share a collective<br> passion for redefining the<br> beauty experience</div>',
        'backColor' => '#EFD0C5',
        'image'=>'/site/media/images/textBackground/fi.gif',
        ])

        @include('site/includes/team.teamMembersList', ['data' => $team])

        @include('site/includes/dynamicComponents.textWithImage',
        [
        'text'=>'<div class="animateTextCommitment">Our commitment to our<br> team is one of trust and<br> mutual respect. We allow<br> their skills to shine.</div><p>This approach ensures each member receives a transformative<br> experience characterized by intuition and discretion</p>',
        'textColor' => '#E1A38F',
        'backColor' => '#EFD0C5',
        ])
    </div>
@endsection
