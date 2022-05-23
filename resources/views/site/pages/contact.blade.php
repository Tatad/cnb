@extends('.site/layouts.layout')

@section('custom_meta')
    <title>CNB Dubai | House of Beauty | Join us</title>
    <meta name="description" content="Contact us for a unique opportunity to join our female community of Dubai’s most selected clientele.">
    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content={{Request::url()}}/>
    <meta name="twitter:title" content="CNB Dubai | House of Beauty | Join us"/>
    <meta name="twitter:description"
          content="Contact us for a unique opportunity to join our female community of Dubai’s most selected clientele."/>
    <meta name="twitter:image" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta name="twitter:image:alt" content="CNB Dubai | Contact page image"/>

    {{-- Open Graph data --}}
    <meta property="og:url" content={{Request::url()}}/>
    <meta property="og:type" content="Website"/>
    <meta property="og:title" content="CNB Dubai | House of Beauty | Join us"/>
    <meta property="og:description"
          content="Contact us for a unique opportunity to join our female community of Dubai’s most selected clientele."/>
    <meta property="og:image:url" content="/site/media/images/metaImages/metaImage.jpeg"/>
    <meta property="og:image:alt" content="CNB Dubai | Contact page image"/>
@stop

@section('content')
    <div class="contact-page">
        <div class="contact-page-banner" style="background-image: url('{{$data['contact_banner_image']}}')">
            <span itemscope class="contact-bannerText">
                <span itemprop="page-title" class="contactBannerTitle">{{ $data['title'] }}</span>
                <p itemprop="page-link" class="linkItem scrollBottom100vh textForAnimation">{{ $data['send_request_title'] }}</p>
            </span>
        </div>
        <div class="contact-content-wrapper">
            <div class="contact-page-content">
                <div class="left-content">
                    <h2>{{ $data['left_content_text_1'] }}</h2>
                    <h2><b>{{ $data['left_content_text_2'] }}</b></h2>
                    <a href="tel:{{ $data['phone'] }}" class="hoverLink">{{ $data['phone'] }}</a>
                </div>
                <a target="_blank" rel="noopener noreferrer" href="{{$data['map_url']}}">
                    <div class="contact-image-mobile" style="background-image: url({{ $data['map_image'] }})"></div>
                </a>

                <div class="right-content">
                    <h2 class="requestCallback">{{ $data['form_title'] }}</h2>
                    <form class="formBlock" id="requestCallbackForm" itemscope>
                        <div class="inputWrapper">
                            <input itemprop="name-input" placeholder="." id="nameInput" spellCheck="false" type="text" name="name" required>
                            <label for="nameInput" class="initialLabel">name</label>
                        </div>

                        <div class="inputWrapper">
                            <input itemprop="phone-input" placeholder="." id="phoneInput" spellCheck="false" name="phone" required>
                            <label for="phoneInput" class="initialLabel">phone</label>
                        </div>

                        <div class="inputWrapper">
                            <input itemprop="emailphone-input" placeholder="." id="email" spellCheck="false" name="email" required>
                            <label for="email" class="initialLabel">e-mail</label>
                        </div>
                        <button itemprop="submit-input" class="linkItem">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
            <a target="_blank" rel="noopener noreferrer" href="{{$data['map_url']}}">
                <div class="contact-image" style="background-image: url({{ $data['map_image'] }})"></div>
            </a>
        </div>
    </div>
@endsection
