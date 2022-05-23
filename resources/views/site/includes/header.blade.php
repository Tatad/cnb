<header>
    <div class="header-nav">
        <a href="/home" class="header-logo">
            <img src="/site/media/images/logo/headerLogo.png" alt="CNB-header-logo">
        </a>
        <ul class="header-menu" itemscope>
            <li itemprop="navigation" class="header-menu-link">
                <a href="/philosophy" class="hoverLink {{ Request::path() === 'philosophy' ? 'active' : ''}}">
                    Philosophy
                </a>
            </li>

            <li itemprop="navigation" class="header-menu-link">
                <a href="/services" class="hoverLink {{ Request::path() === 'services' ? 'active' : ''}}">
                    Services
                </a>
            </li>

            <li itemprop="navigation" class="header-menu-link">
                <a href="/memberships" class="hoverLink {{ Request::path() === 'memberships' ? 'active' : ''}}">
                    Membership
                </a>
            </li>

            <li itemprop="navigation" class="header-menu-link">
                <a href="/gallery" class="hoverLink {{ Request::path() === 'gallery' ? 'active' : ''}}">
                    Gallery
                </a>
            </li>
            <li itemprop="navigation" class="header-menu-link">
                <a href="/career" class="hoverLink {{ Request::path() === 'career' ? 'active' : ''}}">
                    Career
                </a>
            </li>
            <li itemprop="navigation" class="header-menu-link">
                <a href="/team" class="hoverLink {{ Request::path() === 'team' ? 'active' : ''}}">
                    Team
                </a>
            </li>
            <li itemprop="navigation" class="header-menu-link">
                <a href="/contact" class="hoverLink {{ Request::path() === 'contact' ? 'active' : ''}}">
                    Contact
                </a>
            </li>
        </ul>
        <div class="userInfo">
            @if(Auth::check())
                <div class="userInfoIcon"></div>
                <p class="userInfoName">{{auth()->user()->name}}</p>
                <div class="userInfoDropdown">
                    <a href="/profile/{{auth()->user()->id}}"
                       class="{{ Request::segment(1) === 'profile' ? 'active' : ''}}">Profile</a>
                    <a href="/logout">Logout</a>
                </div>
            @else
                <div id="openLoginPopup" style="display:flex; align-items: center">
                    <div class="userInfoIcon"></div>
                    <p class="userInfoName">Login</p>
                </div>
            @endif

        </div>


        {{-- <div class="header-menu-burger" id="menuBurger"> --}}
        {{-- <div class="menu-burger"> --}}
        {{-- <span class="menu-burger-item top"></span> --}}
        {{-- <span class="menu-burger-item middle"></span> --}}
        {{-- <span class="menu-burger-item bottom"></span> --}}
        {{-- </div> --}}
        {{-- </div> --}}
    </div>
</header>
