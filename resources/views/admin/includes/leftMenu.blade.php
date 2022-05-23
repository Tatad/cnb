<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{url('/admin')}}">
                <span class="logo-text hide-on-med-and-down">CNB</span>
            </a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li><a class="{{ (request()->segment(2) === 'banners') ? 'active' : '' }}" href="{{ url('/admin/banners') }}"><i class="material-icons">web</i><span data-i18n="Banner">Home Page</span></a></li>
        <li><a class="{{ (request()->segment(2) === 'philosophies') ? 'active' : '' }}" href="{{ url('/admin/philosophies') }}"><i class="material-icons">web</i><span data-i18n="Philosophies">Philosophy</span></a></li>
        <li><a class="{{ (request()->segment(2) === 'services') ? 'active' : '' }}" href="{{ url('/admin/services') }}"><i class="material-icons">web</i><span data-i18n="Services">Service</span></a></li>
        <li><a class="{{ (request()->segment(2) === 'memberships') ? 'active' : '' }}" href="{{ url('/admin/memberships') }}"><i class="material-icons">web</i><span data-i18n="Memberships">Membership</span></a></li>
        <li><a class="{{ (request()->segment(2) === 'careers') ? 'active' : '' }}" href="{{ url('/admin/careers')}}"><i class="material-icons">web</i><span data-i18n="Careers">Career</span></a></li>
        <li><a class="{{ (request()->segment(2) === 'galleries') ? 'active' : '' }}" href="{{ url('/admin/galleries')}}"><i class="material-icons">web</i><span data-i18n="Galleries">Gallery</span></a></li>
        <li><a class="{{ (request()->segment(2) === 'contacts') ? 'active' : '' }}" href="{{ url('/admin/contacts')}}"><i class="material-icons">web</i><span data-i18n="Contacts">Contacts</span></a></li>
        <li><a class="{{ (request()->segment(2) === 'team') ? 'active' : '' }}" href="{{ url('/admin/team')}}"><i class="material-icons">web</i><span data-i18n="Team">Team</span></a></li>
        <li><a class="{{ (request()->segment(2) === 'call_back') ? 'active' : '' }} {{ (request()->segment(1) === '') ? 'active' : '' }}"  href="{{ url('/admin/call_back') }}"><i class="material-icons">contact_phone</i><span data-i18n="CallBack">Call Back Requests</span></a></li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<!-- END: SideNav-->
