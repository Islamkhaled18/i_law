<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

    <li class=" nav-item">
        <a class="d-flex align-items-center" href="{{route('vendor.dashboard')}}">
            <i data-feather="home"></i>
            <span class="menu-title text-truncate" data-i18n="dashboard">{{ trans('sideBar.dashboard') }}</span>
        </a>
    </li>
    <li class=" nav-item">
        <a class="d-flex align-items-center" href="{{route('vendor.books')}}">
            <i data-feather="book-open"></i>
            <span class="menu-title text-truncate" data-i18n="books">{{ trans('sideBar.books') }}</span>
        </a>
    </li>
  
</ul>