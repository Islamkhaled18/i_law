<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class=" nav-item"><a class="d-flex align-items-center" href=""{{route('admin.dashboard')}}""><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span><span class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
    </li>
    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">&amp; Pages</span><i data-feather="more-horizontal"></i>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-user-plus"></i></i><span class="menu-title text-truncate" data-i18n="Invoice">Admins</span></a>
        <ul class="menu-content">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admins.admins')}}"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Admin users</span></a>
                <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.roles')}}"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">roles</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">permissions</span></a>
                </li>
            </li>
        </ul>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-map-pin"></i></i><span class="menu-title text-truncate" data-i18n="Invoice">Geo Locales</span></a>
        <ul class="menu-content">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.countries')}}"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">countries</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.governorates')}}"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Governorates</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.cities')}}"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Kanban">cities</span></a>
            </li>

        </ul>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.writers')}}"><i class="fa-solid fa-pen-clip"></i><span class="menu-title text-truncate" data-i18n="Email">writers</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-map-pin"></i></i><span class="menu-title text-truncate" data-i18n="Invoice">Books</span></a>
        <ul class="menu-content">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.sections')}}"><i class="fa-solid fa-book-section"></i><span class="menu-title text-truncate" data-i18n="Email">Sections</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.books')}}"><i class="fa-solid fa-books"></i><span class="menu-title text-truncate" data-i18n="Email">Books</span></a>
            </li>

        </ul>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-users"></i></i><span class="menu-title text-truncate" data-i18n="Invoice">Users & Vendors</span></a>
        <ul class="menu-content">
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.users')}}"><i class="fa-solid fa-user-group"></i></i><span class="menu-title text-truncate" data-i18n="Email">users</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.vendors')}}"><i class="fa-solid fa-users-viewfinder"></i><span class="menu-title text-truncate" data-i18n="Email">vendors</span></a>
            </li>
            

        </ul>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.pages')}}"><i class="fa-solid fa-table-layout"></i><span class="menu-title text-truncate" data-i18n="Email">pages</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.FAQs')}}"><i class="fa-solid fa-circle-question"></i><span class="menu-title text-truncate" data-i18n="Email">FAQs</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('admin.currencies')}}"><i class="fa-solid fa-wallet"></i></i><span class="menu-title text-truncate" data-i18n="Chat">Currencies</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('settings.index')}}"><i class="fa-solid fa-wallet"></i></i><span class="menu-title text-truncate" data-i18n="Chat">Settings</span></a>
    </li>
    <li class=" nav-item"><a class="d-flex align-items-center" href="{{route('ContactUs.index')}}"><i class="fa-solid fa-wallet"></i></i><span class="menu-title text-truncate" data-i18n="Chat">Users Messages</span></a>
    </li>
    
    
</ul>