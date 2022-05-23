<div class="contactSection" id="membership">
    <div class="contactSectionWrapper">
        <div class="contactSectionWrapperInfo">
            <h2 class="mb-0 contactTitle1">{{$data['left_content_text_1']}} <br> <b>{{$data['left_content_text_2']}}</b></h2>
            <a href="tel:{{$data['phone']}}" class="hoverLink">{{$data['phone']}}</a>
            <div class="contactSectionWrapperInfoImage" style="background-image: url('{{$data['call_back_form_image']}}')"></div>
            <h2 class="mb-0 requestCallback">{{$data['form_title']}}</h2>
            <form class="formBlock" id="requestCallbackForm" itemscope>
                <div class="inputWrapper">
                    <input itemprop="name-input" placeholder="." id="nameInput" spellCheck="false" type="text" name="name" required>
                    <label class="initialLabel" for="nameInput">name</label>
                </div>

                <div class="inputWrapper">
                    <input itemprop="phone-input" placeholder="." id="phoneInput" spellCheck="false" name="phone" required>
                    <label class="initialLabel" for="phoneInput">phone</label>
                </div>

                <div class="inputWrapper">
                    <input itemprop="email" placeholder="." id="email" spellCheck="false" name="email" required>
                    <label class="initialLabel" for="email">e-mail</label>
                </div>

                <button itemprop="submit-input" class="linkItem">
                    Submit
                </button>
            </form>
        </div>
        <div class="contactSectionWrapperImage">
            <video id="contactVideo" muted autoplay loop playsinline>
                <source src="{{$data['call_back_form_video']}}" type="video/mp4">
                Sorry, your browser doesn't support embedded videos.
            </video>
        </div>
    </div>
</div>
