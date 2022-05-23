@extends('.site/layouts.layout')

@section('custom_meta')
    <title>CNB Dubai | House of Beauty | Spa & Salon</title>
    <meta name="description" content="A universe of beauty where selfcare and luxury are harnessed to create the ultimate beauty experience.">
    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content={{Request::url()}}/>
    <meta name="twitter:title" content="CNB Dubai | House of Beauty | Spa & Salon"/>
    <meta name="twitter:description"
          content="A universe of beauty where selfcare and luxury are harnessed to create the ultimate beauty experience."/>
    <meta name="twitter:image" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta name="twitter:image:alt" content="CNB Dubai | Philosophy page image"/>

    {{-- Open Graph data --}}
    <meta property="og:url" content={{Request::url()}}/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="CNB Dubai | House of Beauty | Spa & Salon"/>
    <meta property="og:description"
          content="A universe of beauty where selfcare and luxury are harnessed to create the ultimate beauty experience."/>
    <meta property="og:image:url" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta property="og:image:alt" content="CNB Dubai | Philosophy page image"/>
@stop

@section('content')
    <div class="philosophy-page">
        @include('site/includes/dynamicComponents.pageBanner',
        [
        'animationTitle' => 'philosophyPageTitle',
        'title' => $data['philosophy_title'],
        'separateDesc' => true,
        'bannerInfoVisible' => true,
        'desc' => $data['philosophy_text'],
        'image' => $data['philosophy_banner_image']
        ])
        @include('site/includes/dynamicComponents.textWithImage',
        [
        'text'=>'<div class="animateTextDesigned">'.$data['philosophy_animated_text_title'].'</div>'.$data['philosophy_animated_text'],
        'backColor' => '#EFD0C5',
        'image'=>'/site/media/images/textBackground/fi.gif',
        ])
        @include('site/includes/philosophy/infoWithImage',
        [
        'data' => $data['info_with_image_text'],
        'image'=> $data['info_with_image']
        ])
        @include('site/includes/dynamicComponents.textWithImage',
        [
        'animationClass' => 'animateTextInimitable',
        'text'=>$data['text_without_image'],
        'textColor' => '#E1A38F',
        'backColor' => '#EFD0C5',
        ])
    </div>
@endsection
