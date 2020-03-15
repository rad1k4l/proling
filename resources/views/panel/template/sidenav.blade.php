@php
    /**
    * @var $menu Routes
    */
    use App\Models\Routes;
@endphp
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

    @foreach($menus as $li => $menu)
          @php
              $child = $menu->childs();
          @endphp
        <li class="{{ $menu['name'] == request()->route()->getName()  ? "active" : "" }} bold" id="li-{{ $li }}">
            <a class="{{ $child !== false ? 'collapsible-header' : '' }} waves-effect waves-cyan {{ $menu['name'] == request()->route()->getName() ? "active" : "" }}" href="{{ $menu['name'] ? route($menu['name']) : '#' }}">
                <i class="material-icons">{{ $menu['icon'] }}</i>
                <span class="menu-title">{{ $menu['title'] }}</span>
            </a>
            @if($child !== false)
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                        @foreach($child as $k => $item)
                            <li class="{{ $item['name'] == request()->route()->getName()  ? "active" : "" }}">
                                <a class="{{ $item['name'] == request()->route()->getName()  ? "active" : "" }}" href="{{ route($item['name']) }}">
                                    <i class="material-icons">radio_button_{{ $item['name'] == request()->route()->getName()  ? "checked" : "unchecked" }}</i>
                                    <span>{{ $item['title'] }}</span>
                                </a>
                            </li>
                            @if($item['name'] == request()->route()->getName())
                                <script>
                                    var li = document.getElementById('li-{{ $li }}');
                                    li.setAttribute('class', 'active open bold');
                                </script>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif
        </li>
    @endforeach
  </ul>
</aside>
<!-- END: SideNav-->

@show


