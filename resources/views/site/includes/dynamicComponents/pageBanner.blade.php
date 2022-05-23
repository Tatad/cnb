<div class="pageBannerWrapper {{ isset($swiperItem) ? 'swiper-slide' : '' }}"
     data-hash="{{ isset($swiperItem) ? (isset($index) ? $index+1 : '') : '' }}">
    <div class="pageBanner">
        <div class="pageBannerLeft" itemscope>
            @if ($bannerInfoVisible)
                <h2 itemprop="page-title" class="pageTitle {{ $animationTitle ?? '' }}">{{ $title }}</h2>
                <p itemprop="page-subtitle" class="textForAnimation {{isset($separateDesc) ? 'mobileNone': ''}}">{!! $desc !!}</p>
                @if (isset($swiperItem))
                    <div class="nextStepButton linkItem">Apply</div>
                @endif
            @else
                <span class="currentStep">Step {{ $index+1 }}</span>
                <h3 class="blockTitle">{{ $title }}</h3>
                <div class="mobilePageBanner" style="background-image: url('{{ $image }}')"></div>
                <div class="formInputsWrapper">
                    @if ($blockKey === 'accountSetup')
                        <div class="inputWrapper">
                            <input itemprop="registration-email-input" placeholder="." id="email" spellCheck="false" autocomplete='off' type="email" value="{{$user['email'] ?? ''}}" name="email" required>
                            <label class="initialLabel" for="email">Email</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="registration-password-input" placeholder="." id="password" spellCheck="false" autocomplete='off' type="password" name="password" required>
                            <label class="initialLabel" for="password">Password</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="registration-confirm-password-input" placeholder="." id="confirm_password" spellCheck="false" autocomplete='off' type="password" name="confirm_password" required>
                            <label class="initialLabel" for="confirm_password">Confirm Password</label>
                        </div>
                    @elseif ($blockKey === 'generalInfo')
                        <div class="inputWrapper">
                            <input itemprop="registration-surname-input" placeholder="." id="surname" spellCheck="false" type="text" name="surname" required>
                            <label class="initialLabel" for="surname">Surname</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="registration-forenames-input" placeholder="." id="name" value="{{$user['name'] ?? ''}}" spellCheck="false" type="text" name="name" required>
                            <label class="initialLabel" for="name">Forenames</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="registration-date-of-birth-input" placeholder="." onkeypress="return false;" id="birth_date" spellCheck="false" type="text" name="birth_date" required>
                            <label class="initialLabel" for="birth_date">Date of birth</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="registration-marital-status-input" placeholder="." id="marital_status" spellCheck="false" type="text" name="marital_status" required>
                            <label class="initialLabel" for="marital_status">Marital status</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="registration-nationality-input" placeholder="." id="nationality" spellCheck="false" type="text" name="nationality" required>
                            <label class="initialLabel" for="nationality">Nationality</label>
                        </div>
                    @elseif($blockKey === 'contactInfo')
                        <div class="inputWrapper">
                            <input itemprop="registration-residence-address-input" placeholder="." id="address" spellCheck="false" type="text" name="address"
                                   required>
                            <label class="initialLabel" for="address">Residence address</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="registration-telephone-input" placeholder="."  id="tel_number" class="notRequired" spellCheck="false" type="text" name="tel_number" required>
                            <label class="initialLabel" for="tel_number">Telephone number</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="registration-mobile-input" placeholder="." id="mobile" value="{{$user['phone'] ?? ''}}" spellCheck="false" type="text" name="mobile" required>
                            <label class="initialLabel" for="mobile">Mobile</label>
                        </div>
{{--                        <h3 class="blockTitle">Memberships type</h3>--}}
{{--                        <div class="inputWrapper radioInput">--}}
{{--                            <input itemprop="registration-membership-input" type="radio" id="lounge" hidden name="membership" value="lounge">--}}
{{--                            <label class="initialLabel" for="lounge">Lounge 7728 AED (included 368 AED VAT)</label>--}}
{{--                        </div>--}}
{{--                        <div class="inputWrapper radioInput">--}}
{{--                            <input itemprop="registration-membership-input" type="radio" id="sanctuary" hidden name="membership" value="sanctuary">--}}
{{--                            <label class="initialLabel" for="sanctuary">Sanctuary 9660 AED (included 460 AED VAT)</label>--}}
{{--                        </div>--}}
{{--                        <div class="inputWrapper radioInput">--}}
{{--                            <input itemprop="registration-membership-input" type="radio" id="retreat" hidden name="membership" value="retreat">--}}
{{--                            <label class="initialLabel" for="retreat">Retreat 11592 AED (included 552 AED VAT)</label>--}}
{{--                        </div>--}}
{{--                        <div class="inputWrapper radioInput">--}}
{{--                            <input itemprop="registration-membership-input" type="radio" id="resident" hidden name="membership" value="resident">--}}
{{--                            <label class="initialLabel" for="resident">Resident 23184 AED (included 1104 AED VAT)</label>--}}
{{--                        </div>--}}
                        <div class="errorMessageForRadio"></div>
                        <input type="hidden" name="token" value="{{$token ?? ''}}">
                        <input type="hidden" name="call_back_id" value="{{$call_back_id ?? ''}}">
                    @elseif($blockKey === 'careerPage')
                        <div class="inputWrapper">
                            <input itemprop="career-firstname-input" placeholder="." id="firstName" spellCheck="false" type="text" name="first_name" required>
                            <label class="initialLabel" for="firstName">First Name</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="career-lastname-input" placeholder="." id="lastName" spellCheck="false" type="text" name="last_name" required>
                            <label class="initialLabel" for="lastName">Last Name</label>
                        </div>
                        <div class="inputWrapper">
                            <input itemprop="career-email-input" placeholder="." id="email" spellCheck="false" autocomplete='off' type="email" name="email" required>
                            <label class="initialLabel" for="email">Email address</label>
                        </div>
                        <div class="inputWrapper fileInput">
                            <input itemprop="career-cover-letter-input" id="coverLetter" accept="application/msword, application/pdf" hidden spellCheck="false" type="file" name="cover_letter" required>
                            <label for="coverLetter" class="fileLabel">Cover letter <span class="fileName"></span></label>
                        </div>
                        <div class="inputWrapper fileInput">
                            <input itemprop="career-cv-input" id="cv" accept="application/msword, application/pdf" hidden spellCheck="false" type="file" name="cv" required>
                            <label for="cv" class="fileLabel">CV <span class="fileName"></span></label>
                        </div>
                    @endif
                </div>

                <div class="buttonsWrapper">
                    @if ($nextBlockTitle)
                        <div class="nextStepButton linkItem">Next step <span class="lineCrate">-----</span>
                            {{ $nextBlockTitle }}</div>
                    @elseif($index === $blockCount-2)
                        <div class="nextStepButton linkItem">Go to the final step</div>
                    @elseif($index === $blockCount-1)
                        <button type="submit" class="linkItem">Submit</button>
                    @endif

                    @if ($showPrevButton)
                        <span class="prevStepButton">back to the step {{ $index }}</span>
                    @endif
                </div>
            @endif
        </div>
        <div class="pageBannerRight" style="background-image: url('{{ $image }}')"></div>
    </div>
    @if(isset($separateDesc))
        <div class="separateSection">
            <h2 class="pageTitle {{ $animationTitle ?? '' }}">{{ $title }}</h2>
            <p class="textForAnimation">{!! $desc !!}</p>
        </div>
    @endif
</div>
