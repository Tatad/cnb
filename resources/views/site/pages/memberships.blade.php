@extends('.site/layouts.layout')

@section('custom_meta')
    <title>CNB Dubai | Members only Beauty Destination </title>
    <meta name="description"
        content="Set against an exquisite aesthetic CNB offers complete exclusivity and intimacy through a curated members only beauty community. Join us.">
    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:url" content={{ Request::url() }} />
    <meta name="twitter:title" content="CNB Dubai | Members only Beauty Destination " />
    <meta name="twitter:description"
        content="Set against an exquisite aesthetic CNB offers complete exclusivity and intimacy through a curated members only beauty community. Join us." />
    <meta name="twitter:image" content="/site/media/images/metaImages/metaImage.jpeg" />
    <meta name="twitter:image:alt" content="CNB Dubai | Membership page image" />

    {{-- Open Graph data --}}
    <meta property="og:url" content={{ Request::url() }} />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="CNB Dubai | Members only Beauty Destination " />
    <meta property="og:description"
        content="Set against an exquisite aesthetic CNB offers complete exclusivity and intimacy through a curated members only beauty community. Join us." />
    <meta property="og:image:url" content="/site/media/images/metaImages/metaImage.jpeg" />
    <meta property="og:image:alt" content="CNB Dubai | Membership page image" />
@stop

@section('content')
    <div class="memberships-page">
        @include('site/includes/dynamicComponents.pageBanner',
        [
        'animationTitle' => 'membershipTitle',
        'title' => $data['membership_title'],
        'bannerInfoVisible' => true,
        'separateDesc' => true,
        'desc' => $data['membership_text'],
        'image' => $data['membership_banner_image']
        ])
        @include('site/includes/dynamicComponents.textWithImage',
        [
        'text'=> $data['membership_animated_title'].'<div class="membershipText">'.$data['membership_animated_text'].'</div>
        ',
        'backColor' => '#EFD0C5',
        'image'=>'/site/media/images/textBackground/fi.gif',
        ])
        @include('site/includes/home.contact', ['data' => $contactData])
    </div>
@endsection
