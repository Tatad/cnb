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
    <div class="profile-page">
        <a href="https://cnbdubai.simplybook.me/v2" target="_blank" rel="noreferrer noopener" class="linkItem simplyBookLink">Book an appointment</a>
        <form method="POST" action="{{url('/profile/users/'.$user['id'] ?? '')}}" class="formBlock" id="profileForm" autocomplete="off">
            @csrf
            @method('PUT')
            <div class="formSection">
                <div class="formSectionHeader">
                    <h3 class="blockTitle">General Info</h3>
                    <div class="linkItem switchBlocks">Edit</div>
                </div>

                <div class="informationBlock">
                    <div class="informationBlockItem">
                        <p class="key">Forename</p>
                        <p class="value">{{$user['name']}}</p>
                    </div>
                    <div class="informationBlockItem">
                        <p class="key">Surname</p>
                        <p class="value">{{ $user['surname'] }}</p>
                    </div>
                    <div class="informationBlockItem">
                        <p class="key">Date of birth</p>
                        <p class="value">{{date('d M Y', strtotime($user['birth_date']))}}</p>
                    </div>
                    <div class="informationBlockItem">
                        <p class="key">Martial status</p>
                        <p class="value">{{ $user['marital_status'] }}</p>
                    </div>
                    <div class="informationBlockItem">
                        <p class="key">Nationality</p>
                        <p class="value">{{ $user['nationality'] }}</p>
                    </div>
                </div>

                <div class="editableBlock">
                    <div class="inputWrapper">
                        <input placeholder="." id="surname" value="{{$user['surname'] ?? ''}}" spellCheck="false" type="text" name="surname" required>
                        <label class="initialLabel" for="surname">Surname</label>
                    </div>
                    <div class="inputWrapper">
                        <input placeholder="." id="name" value="{{$user['name'] ?? ''}}" spellCheck="false" type="text"
                               name="name" required>
                        <label class="initialLabel" for="name">Forenames</label>
                    </div>
                    <div class="inputWrapper">
                        <input placeholder="." onkeypress="return false;" value="{{$user['birth_date'] ?? ''}}" id="birth_date" spellCheck="false" type="text"
                               name="birth_date" required>
                        <label class="initialLabel" for="birth_date">Date of birth</label>
                    </div>
                    <div class="inputWrapper">
                        <input placeholder="." id="marital_status" value="{{$user['marital_status'] ?? ''}}" spellCheck="false" type="text" name="marital_status"
                               required>
                        <label class="initialLabel" for="marital_status">Marital status</label>
                    </div>
                    <div class="inputWrapper">
                        <input placeholder="." id="nationality" value="{{$user['nationality'] ?? ''}}" spellCheck="false" type="text" name="nationality"
                               required>
                        <label class="initialLabel" for="nationality">Nationality</label>
                    </div>
                    <button class="linkItem editBlocks">UPDATE</button>
                </div>
            </div>

            <div class="formSection">
                <div class="formSectionHeader">
                    <h3 class="blockTitle">Contact info</h3>
                    <div class="linkItem switchBlocks">Edit</div>
                </div>

                <div class="informationBlock">
                    <div class="informationBlockItem fullWidth">
                        <p class="key">Residence address</p>
                        <p class="value">{{$user['address']}}</p>
                    </div>
                    <div class="informationBlockItem">
                        <p class="key">Telephone number</p>
                        <p class="value">{{$user['tel_number']}}</p>
                    </div>
                    <div class="informationBlockItem">
                        <p class="key">Mobile</p>
                        <p class="value">{{$user['mobile']}}</p>
                    </div>
                    <div class="informationBlockItem fullWidth">
                        <p class="key">Email</p>
                        <p class="value">{{$user['email']}}</p>
                    </div>
                </div>

                <div class="editableBlock">
                    <div class="inputWrapper">
                        <input placeholder="." id="address" value="{{$user['address'] ?? ''}}" spellCheck="false" type="text" name="address"
                               required>
                        <label class="initialLabel" for="address">Residence address</label>
                    </div>
                    <div class="inputWrapper">
                        <input placeholder="." id="tel_number" value="{{$user['tel_number'] ?? ''}}" class="notRequired" spellCheck="false" type="text"
                               name="tel_number" required>
                        <label class="initialLabel" for="tel_number">Telephone number</label>
                    </div>
                    <div class="inputWrapper">
                        <input placeholder="." id="mobile" value="{{$user['mobile'] ?? ''}}" spellCheck="false"
                               type="text" name="mobile" required>
                        <label class="initialLabel" for="mobile">Mobile</label>
                    </div>
{{--                    <div class="inputWrapper">--}}
{{--                        <input placeholder="." id="email" spellCheck="false" autocomplete='off' type="email" value="{{$user['email'] ?? ''}}" name="email" required>--}}
{{--                        <label class="initialLabel" for="email">Email</label>--}}
{{--                    </div>--}}
                    <button class="linkItem editBlocks">UPDATE</button>
                </div>
            </div>

{{--            <div class="formSection">--}}
{{--                <div class="formSectionHeader">--}}
{{--                    <h3 class="blockTitle">Membership</h3>--}}
{{--                </div>--}}

{{--                <div class="informationBlock">--}}
{{--                    <div class="informationBlockItem fullWidth">--}}
{{--                        <p class="key">Membership type</p>--}}
{{--                        <p class="value" style="text-transform: capitalize">{{$user['membership'] ?? ''}}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </form>
    </div>
@endsection

@section('custom_script')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

    <script src="{{ asset('/site/js/profile.js') }}"></script>
@stop
