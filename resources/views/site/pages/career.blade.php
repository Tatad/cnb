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
    <div class="career-page registration-page">
        <form class="careerFormBlock formBlock" id="careerFormBlock" method="POST" action="{{ url('/careers/create') }}"
            itemscope>
            @csrf
            @include('site/includes/dynamicComponents.pageBanner',
            [
            'title' => $data['form_title'],
            'desc' => "Desc",
            'image' => $data['career_banner_image'],
            'bannerInfoVisible' => false,
            'swiperItem' => true,
            'nextBlockTitle' => '',
            'blockCount' => 1,
            'showPrevButton' => false,
            'blockKey' => 'careerPage',
            'index' => 0
            ])
        </form>
    </div>
@endsection

@section('custom_script')
    <script src="{{ asset('/site/js/career.js') }}"></script>
@stop
