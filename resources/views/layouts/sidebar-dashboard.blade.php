<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}"><i
                data-feather="home"></i><span class="menu-title text-truncate"
                data-i18n="Dashboards">{{ trans('sideBar.dashboard') }}</span><span
                class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
    </li>
    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">{{ trans('sideBar.pages') }}</span><i
            data-feather="more-horizontal"></i>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-user-plus"></i></i><span
                class="menu-title text-truncate" data-i18n="Invoice">{{ trans('sideBar.admins') }}</span></a>
        <ul class="menu-content">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admins.admins') }}"><i
                        data-feather="mail"></i><span class="menu-title text-truncate"
                        data-i18n="Email">{{ trans('sideBar.admins') }}</span></a>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.roles') }}"><i
                        data-feather="mail"></i><span class="menu-title text-truncate"
                        data-i18n="Email">{{ trans('sideBar.roles') }}</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.permissions')}}"><i data-feather="mail"></i><span
                        class="menu-title text-truncate"
                        data-i18n="Email">{{ trans('sideBar.permissions') }}</span></a>
            </li>
    </li>
</ul>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-map-pin"></i></i><span
            class="menu-title text-truncate" data-i18n="Invoice">{{ trans('sideBar.geo_locales') }}</span></a>
    <ul class="menu-content">
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.countries') }}"><i
                    data-feather="check-square"></i><span class="menu-title text-truncate"
                    data-i18n="Todo">{{ trans('sideBar.countries') }}</span></a>
        </li>
    </ul>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.writers') }}"><i
            class="fa-solid fa-pen-clip"></i><span class="menu-title text-truncate"
            data-i18n="Email">{{ trans('sideBar.writers') }}</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-map-pin"></i></i><span
            class="menu-title text-truncate" data-i18n="Invoice">{{ trans('sideBar.books') }}</span></a>
    <ul class="menu-content">
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.sections') }}"><i
                    class="fa-solid fa-book-section"></i><span class="menu-title text-truncate"
                    data-i18n="Email">{{ trans('sideBar.sections') }}</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.books') }}"><i
                    class="fa-solid fa-books"></i><span class="menu-title text-truncate"
                    data-i18n="Email">{{ trans('sideBar.books') }}</span></a>
        </li>

    </ul>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-users"></i></i><span
            class="menu-title text-truncate" data-i18n="Invoice">{{ trans('sideBar.users') }} &
            {{ trans('sideBar.vendors') }}</span></a>
    <ul class="menu-content">
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.users') }}"><i
                    class="fa-solid fa-user-group"></i></i><span class="menu-title text-truncate"
                    data-i18n="Email">{{ trans('sideBar.users') }}</span></a>
        </li>
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.vendors') }}"><i
                    class="fa-solid fa-users-viewfinder"></i><span class="menu-title text-truncate"
                    data-i18n="Email">{{ trans('sideBar.vendors') }}</span></a>
        </li>


    </ul>
</li>

<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.pages') }}"><i
            class="fa-solid fa-page"></i><span class="menu-title text-truncate"
            data-i18n="Email">{{ trans('sideBar.pages') }}</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.FAQs') }}"><i
            class="fa-solid fa-circle-question"></i><span class="menu-title text-truncate"
            data-i18n="Email">{{ trans('sideBar.faqs') }}</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.currencies') }}"><i
            class="fa-solid fa-wallet"></i></i><span class="menu-title text-truncate"
            data-i18n="Chat">{{ trans('sideBar.currencies') }}</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('settings.index') }}"><i
            class="fa-solid fa-gear"></i></i><span class="menu-title text-truncate"
            data-i18n="Chat">{{ trans('sideBar.settings') }}</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('ContactUs.index') }}"><i
            class="fa-solid fa-message"></i></i><span class="menu-title text-truncate"
            data-i18n="Chat">{{ trans('sideBar.user_messages') }}</span></a>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.patners') }}"><i
            class="fa-solid fa-handshake"></i></i><span class="menu-title text-truncate"
            data-i18n="Chat">{{ trans('sideBar.partners') }}</span></a>
</li>


</ul>
