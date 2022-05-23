<footer id="footer">
    <div class="footerWrapper">
        <div class="leftBlock">
            <h2>{{$contact['social_media_title']}}</h2>
            <div class="iconsWrapper">
                @foreach($contact['social_medias'] as $item)
                    <a class="{{$item['type']}}Icon" target="_blank" rel="noopener noreferrer" style="background-image: url('/site/media/images/icon/{{$item['type']}}.svg')"
                       href="{{$item['url']}}"></a>
                @endforeach
            </div>
            <div class="subLinks">
                <a class="hoverLink" href="/termsConditions">Terms & Conditions</a>
                <a class="hoverLink" href="/privacyPolicy">Privacy policy</a>
            </div>
            <p>CNB <?= date("Y") ?> All rights reserved</p>
            <p>Developed with love by <a class="hoverLink" href="https://codics.am/" target="_blank" rel="noopener noreferrer">Codics</a></p>
            <p>Creative Direction by <a class="hoverLink" href="https://www.estudiovn.com/" target="_blank" rel="noopener noreferrer">STUDIOVN</a></p>
        </div>
        <div class="rightBlock">
            <h2>{{$contact['contacts_info_title']}}</h2>
            <div class="contactInfo">
                <a class="hoverLink" href="tel:{{$contact['contacts_info_phone']}}">{{$contact['contacts_info_phone']}}</a>
                <a class="hoverLink" target="_blank" rel="noopener noreferrer" href="{{$contact['map_url']}}">{{$contact['contacts_info_address']}}</a>
            </div>
            <div class="subLinks">
                <a class="hoverLink" href="/termsConditions">Terms & Conditions</a>
                <a class="hoverLink" href="/privacyPolicy">Privacy policy</a>
            </div>
        </div>
    </div>
</footer>
