<div class="mobile-header">
    <div class="mobile-header-top">
        <a href="/home" class="mobile-header-logo">
            <img src="/site/media/images/logo/headerLogo.png" alt="">
        </a>
        <div class="header-menu-burger" id="menuBurger">
            <div class="menu-burger">
                <div class="menu-burger-item top"></div>
                <div class="menu-burger-item middle"></div>
                <div class="menu-burger-item bottom"></div>
            </div>
        </div>
    </div>

</div>

<div class="mobile-nav-links" id="mobileMenu">
    <ul>
        @foreach ($data as $item)
            <li>
                <a class="mobileLink" data-hash="{{ $item['name'] }}" href="{{ $item['url'] }}">{{ $item['name'] }}</a>
            </li>
        @endforeach
    </ul>

    <div>
        <a href="/" class="mobile-become-member">
            <div class="mobile-become-member-img">
                <img src="{{ asset('site/media/images/bannerLogo.svg') }}" alt="" />
            </div>
            <p class="mobile-become-member-text">
                Become a member
            </p>
        </a>
    </div>
</div>
