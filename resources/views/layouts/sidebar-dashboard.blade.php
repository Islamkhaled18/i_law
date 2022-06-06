<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class=" nav-item">
        <a class="d-flex align-items-center" href="{{ route('admin.dashboard') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <span class="menu-title text-truncate"
                data-i18n="Dashboards">{{ trans('sideBar.dashboard') }}</span><span
                class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
    </li>
    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">{{ trans('sideBar.pages') }}</span><i
            data-feather="more-horizontal"></i>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
        <span
                class="menu-title text-truncate" data-i18n="Invoice">{{ trans('sideBar.admins') }}</span></a>
        <ul class="menu-content">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admins.admins') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                        <span class="menu-title text-truncate"
                        data-i18n="Email">{{ trans('sideBar.admins') }}</span></a>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.roles') }}"><i
                        data-feather="mail"></i><span class="menu-title text-truncate"
                        data-i18n="Email">{{ trans('sideBar.roles') }}</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.permissions') }}"><i
                        data-feather="mail"></i><span class="menu-title text-truncate"
                        data-i18n="Email">{{ trans('sideBar.permissions') }}</span></a>
            </li>
    </li>
</ul>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="#">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
    <span
            class="menu-title text-truncate" data-i18n="Invoice">{{ trans('sideBar.geo_locales') }}</span></a>
    <ul class="menu-content">
        <li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.countries') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
            <span class="menu-title text-truncate"
                    data-i18n="Todo">{{ trans('sideBar.countries') }}</span></a>
        </li>
    </ul>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.writers') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
            <span class="menu-title text-truncate"
            data-i18n="Email">{{ trans('sideBar.writers') }}</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg><span
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
<li class=" nav-item"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><span
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

<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.pages') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
    <span class="menu-title text-truncate"
            data-i18n="Email">{{ trans('sideBar.pages') }}</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.FAQs') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
    <span class="menu-title text-truncate"
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

<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.shipping') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
    <span class="menu-title text-truncate"
            data-i18n="Chat">{{ trans('sideBar.shipping') }}</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.orders') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg><span class="menu-title text-truncate"
            data-i18n="Chat">{{ trans('admin.orders') }}</span></a>
</li>
<li class=" nav-item"><a class="d-flex align-items-center" href="{{ route('admin.reports') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg><span class="menu-title text-truncate"
            data-i18n="Chat">{{ trans('sideBar.reports') }}</span></a>
</li>


</ul>
