<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible">
            <div class="nav-wrapper">
                <div class="brand-sidebar">
                    <h1 class="logo-wrapper">
                        <a class="brand-logo darken-1" href="{{('/admin')}}">
                            <span class="logo-text hide-on-med-and-down">
                                <img src="{{asset('/site/media/images/logo/headerLogo.png')}}" alt="CNB">
                            </span>
                        </a>
                    </h1>
                </div>
                <ul class="navbar-list right">
                    <li>
                        <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown" style="color: #333; font-weight: 500">
                            {{Auth::guard('admin')->user()->name}}
                        </a>
                    </li>
                </ul>
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="{{url('/admin/profile')}}"><i class="material-icons">person_outline</i> Profile</a></li>
                    <li>
                        <a class="grey-text text-darken-1" href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="material-icons">keyboard_tab</i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    <li><a class="grey-text text-darken-1" href="{{url('/admin/register')}}"><i class="material-icons">person_add</i>Add Admin</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

