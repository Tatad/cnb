@extends('.site/layouts.layout')

@section('custom_meta')
    <title>CNB Dubai | Beauty Haven | Spa & Salon</title>
    <meta name="description" content="CNB House of Beauty. Experience the region’s most innovative and transformative beauty treatments covering every facet of your beauty needs.">
    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content={{Request::url()}}/>
    <meta name="twitter:title" content="CNB Dubai | Beauty Haven | Spa & Salon"/>
    <meta name="twitter:description" content="CNB House of Beauty. Experience the region’s most innovative and transformative beauty treatments covering every facet of your beauty needs."/>
    <meta name="twitter:image" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta name="twitter:image:alt" content="CNB Dubai | Services page image"/>

    {{-- Open Graph data --}}
    <meta property="og:url" content={{Request::url()}}/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="CNB Dubai | Beauty Haven | Spa & Salon"/>
    <meta property="og:description" content="CNB House of Beauty. Experience the region’s most innovative and transformative beauty treatments covering every facet of your beauty needs."/>
    <meta property="og:image:url" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta property="og:image:alt" content="CNB Dubai | Services page image"/>
@stop

@section('content')
    <div class="services-page">
        @include('site/includes/dynamicComponents.pageBanner',
                    [
                        'animationTitle' => 'servicesPageTitle',
                        'bannerInfoVisible' => true,
                        'title' => $data['service_banner_title'],
                        'desc' => $data['service_banner_text'],
                        'separateDesc' => true,
                        'image' => $data['service_banner_image']
                    ])
        @include('site/includes/dynamicComponents.textWithImage',
                    [
                        'text'=> $data['service_animated_text_title'].'<div>'.$data['service_animated_text'].'</div>',
                        'backColor' => '#EFD0C5',
                        'image'=>'/site/media/images/textBackground/fi.gif',
                    ])
        @include('site/includes/services.infoBlock',
                [
                    'data' => $data['info_with_image'],
                ])
{{--        @include('site/includes/home.contact')--}}
    </div>

    <script>
        var countOfSections = {{ count($data['info_with_image']) }}
    </script>
@endsection

