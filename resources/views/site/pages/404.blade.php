@extends('.site/layouts.layout')

@section('custom_meta')
    <title>404 | Page Not Found</title>
    <meta name="description" content="404 | Page Not Found">
    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content={{Request::url()}}/>
    <meta name="twitter:title" content="404 | Page Not Found"/>
    <meta name="twitter:description"
          content="404 | Page Not Found"/>
    <meta name="twitter:image" content="/site/media/images/logo/headerLogo.png"/>
    <meta name="twitter:image:alt" content="CNB Dubai | Gallery page image"/>

    {{-- Open Graph data --}}
    <meta property="og:url" content={{Request::url()}}/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="404 | Page Not Found"/>
    <meta property="og:description"
          content="404 | Page Not Found"/>
    <meta property="og:image:url" content="/site/media/images/logo/headerLogo.png"/>
    <meta property="og:image:alt" content="CNB Dubai | Gallery page image"/>
@stop

@section('content')
    <div class="notFound-page">
        <div class="infoWrapper">
            <p>404</p>
            <div class="middleLine"></div>
            <p>Page Not Found</p>
        </div>
    </div>
@endsection
