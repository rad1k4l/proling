@section('sidenav')
<!-- BEGIN: SideNav-->
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper">
      <a class="brand-logo darken-1" href="main">
        <span class="logo-text hide-on-med-and-down">Proling</span>
      </a>
      <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a>
    </h1>
  </div>

  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

    @foreach($menus as $menu)
        <li class="{{ $menu['name'] == request()->route()->getName()  ? "active" : "" }}">
        <a class="waves-effect waves-cyan {{ $menu['name'] == request()->route()->getName() ? "active" : "" }}" href="{{ route($menu['name']) }}">
            <i class="material-icons">{{ $menu['icon'] }}</i>
            <span class="menu-title" data-i18n="">{{ $menu['title'] }}</span>
        </a>
        </li>
    @endforeach
  </ul>
</aside>
<!-- END: SideNav-->

@show


