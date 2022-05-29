<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>لوحة تحكم الموقع</title>
    <link rel="apple-touch-icon" href="{{asset("assets/admin/images/ico/apple-icon-120.png")}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/admin/images/ico/favicon.ico")}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/vendors/css/vendors-rtl.min.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/vendors/css/charts/apexcharts.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/vendors/css/extensions/toastr.min.css")}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/bootstrap.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/bootstrap-extended.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/colors.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/components.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/themes/dark-layout.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/themes/bordered-layout.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/themes/semi-dark-layout.css")}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/pages/dashboard-ecommerce.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/plugins/charts/chart-apex.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/plugins/extensions/ext-component-toastr.css")}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css-rtl/custom-rtl.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("assets/admin/css/style-rtl.css")}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css-rtl/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/all.min.css') }}">

    @stack('css')

    <!-- END: Custom CSS-->
    @livewireStyles
    

</head>

<style>
    body{
        font-family: 'Cairo', sans-serif;
        {
</style>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
               
                <ul class="nav navbar-nav">
                    <div class="bookmark-input search-input">
                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                        <ul class="search-list search-list-bookmark"></ul>
                    </div>
                
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
               
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="{{asset("assets/admin/images/portrait/small/avatar-s-15.jpg")}}" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Congratulation Sam 🎉</span>winner!</p><small class="notification-text"> Won the monthly best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img src="{{asset("assets/admin/images/portrait/small/avatar-s-3.jpg")}}" alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">New message</span>&nbsp;received</p><small class="notification-text"> You have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Revised Order 👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc. order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox" checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server down</span>&nbsp;registered</p><small class="notification-text"> USA Server is down due to high CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="check"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales report</span>&nbsp;generated</p><small class="notification-text"> Last month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage</p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{auth()->user()->name}}</span><span class="user-status">{{auth()->user()->name}}</span></div><span class="avatar"><img class="round" src="{{url('storage/admins/photos/'. auth()->user()->image)}}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('admin.logout')}}">
                            <i class="me-50" data-feather="power"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{asset("assets/admin/images/icons/xls.png")}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{asset("assets/admin/images/icons/jpg.png")}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{asset("assets/admin/images/icons/pdf.png")}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="{{asset("assets/admin/images/icons/doc.png")}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="{{asset("assets/admin/images/portrait/small/avatar-s-8.jpg")}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="{{asset("assets/admin/images/portrait/small/avatar-s-1.jpg")}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="{{asset("assets/admin/images/portrait/small/avatar-s-14.jpg")}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="{{asset("assets/admin/images/portrait/small/avatar-s-6.jpg")}}" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="../../../html/rtl/vertical-collapsed-menu-template/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            @include('layouts.sidebar-dashboard')
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">




                @yield('content')






            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset("assets/admin/vendors/js/vendors.min.js")}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset("assets/admin/vendors/js/charts/apexcharts.min.js")}}"></script>
    <script src="{{asset("assets/admin/vendors/js/extensions/toastr.min.js")}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset("assets/admin/js/core/app-menu.js")}}"></script>
    <script src="{{asset("assets/admin/js/core/app.js")}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset("assets/admin/js/scripts/pages/dashboard-ecommerce.js")}}"></script>
    <!-- END: Page JS-->
    <script src="{{ asset('jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <script src="{{ asset('sweetalert2/sweetalert2.min.js') }}"></script>
    @livewireScripts
    <script>
        window.addEventListener('OpenAddAdminModal', function(){
            $('.addAdmin').find('span').html('');
            $('.addAdmin').find('form')[0].reset();
            $('.addAdmin').modal('show');
        });

        window.addEventListener('CloseAddAdminModal', function(){
            $('.addAdmin').find('span').html('');
            $('.addAdmin').find('form')[0].reset();
            $('.addAdmin').modal('hide');
            alert('New Admin Has been Saved Successfully');
        });

        window.addEventListener('OpenEditAdminModal', function(event){
            $('.editAdmin').find('span').html('');
            $('.editAdmin').modal('show');
        });
        window.addEventListener('CloseEditAdminModal', function(event){
            $('.editAdmin').find('span').html('');
            $('.editAdmin').find('form')[0].reset();
            $('.editAdmin').modal('hide');
        });
        window.addEventListener('SwalConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('delete',event.detail.id);
                }
            })
        });
        window.addEventListener('deleted', function(event){
            alert('This Admin has been deleted');
        });

        //-------------------Currency ---------------------//

        window.addEventListener('OpenAddCurrencyModal', function(){
            $('.addCurrency').find('span').html('');
            $('.addCurrency').find('form')[0].reset();
            $('.addCurrency').modal('show');
        });
        window.addEventListener('CloseAddCurrencyModal', function(){
            $('.addCurrency').find('span').html('');
            $('.addCurrency').find('form')[0].reset();
            $('.addCurrency').modal('hide');
            alert('New Currency Has been Saved Successfully');
        });
        window.addEventListener('OpenEditCurrencyModal', function(event){
            $('.editCurrency').find('span').html('');
            $('.editCurrency').modal('show');
        });
        window.addEventListener('CloseEditCurrencyModal', function(event){
            $('.editCurrency').find('span').html('');
            $('.editCurrency').find('form')[0].reset();
            $('.editCurrency').modal('hide');
        });
        window.addEventListener('SwalCurrencyConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('destroy',event.detail.id);
                }
            })
        });
        window.addEventListener('destroyed', function(event){
            alert('This Currency has been deleted');
        });

        //---------------Country------------------------------//

        window.addEventListener('OpenAddCountryModal', function(){
                $('.addCountry').find('span').html('');
                $('.addCountry').find('form')[0].reset();
                $('.addCountry').modal('show');
           });
        window.addEventListener('CloseAddCountryModal', function(){
            $('.addCountry').find('span').html('');
            $('.addCountry').find('form')[0].reset();
            $('.addCountry').modal('hide');
            alert('New Country Has been Saved Successfully');
            });
        window.addEventListener('OpenEditCountryModal', function(event){
            $('.editCountry').find('span').html('');
            $('.editCountry').modal('show');
        });
        window.addEventListener('CloseEditCountryModal', function(event){
            $('.editCountry').find('span').html('');
            $('.editCountry').find('form')[0].reset();
            $('.editCountry').modal('hide');
        });

        window.addEventListener('SwalCountryConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('damage',event.detail.id);
                }
            })
        });

        window.addEventListener('damaged', function(event){
            alert('This Country has been deleted');
        });

        // ----------------------- Governorates---------------------//
        window.addEventListener('OpenAddGovernoratesModal', function(){
                $('.addGovernorate').find('span').html('');
                $('.addGovernorate').find('form')[0].reset();
                $('.addGovernorate').modal('show');
           });
        window.addEventListener('CloseAddGovernoratesModal', function(){
            $('.addGovernorate').find('span').html('');
            $('.addGovernorate').find('form')[0].reset();
            $('.addGovernorate').modal('hide');
            alert('New Governorates Has been Saved Successfully');
            });
        window.addEventListener('OpenEditGovernorateModal', function(event){
            $('.editGovernorate').find('span').html('');
            $('.editGovernorate').modal('show');
        });
        window.addEventListener('CloseeditGovernorateModal', function(event){
            $('.editGovernorate').find('span').html('');
            $('.editGovernorate').find('form')[0].reset();
            $('.editGovernorate').modal('hide');
        });
        window.addEventListener('SwalGovernorateConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('enhaa',event.detail.id);
                }
            })
        });
        window.addEventListener('enhaad', function(event){
            alert('This Governorates has been deleted');
        });
         // ----------------------- Cities---------------------//
        window.addEventListener('OpenAddCitiesModal', function(){
                $('.addCity').find('span').html('');
                $('.addCity').find('form')[0].reset();
                $('.addCity').modal('show');
           });
        window.addEventListener('CloseAddCitiesModal', function(){
            $('.addCity').find('span').html('');
            $('.addCity').find('form')[0].reset();
            $('.addCity').modal('hide');
            alert('New Cities Has been Saved Successfully');
            });
        window.addEventListener('OpenEditCityModal', function(event){
            $('.editCity').find('span').html('');
            $('.editCity').modal('show');
        });
        window.addEventListener('CloseeditCityModal', function(event){
            $('.editCity').find('span').html('');
            $('.editCity').find('form')[0].reset();
            $('.editCity').modal('hide');
        });
        window.addEventListener('SwalCityConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('hazf',event.detail.id);
                }
            })
        });
        window.addEventListener('hazfd', function(event){
            alert('This Citys has been deleted');
        });
// ----------------------- Writers---------------------//
        window.addEventListener('OpenAddWritersModal', function(){
                $('.addWriter').find('span').html('');
                $('.addWriter').find('form')[0].reset();
                $('.addWriter').modal('show');
           });
        window.addEventListener('CloseAddWriterModal', function(){
            $('.addWriter').find('span').html('');
            $('.addWriter').find('form')[0].reset();
            $('.addWriter').modal('hide');
            alert('New Writers Has been Saved Successfully');
            });
        window.addEventListener('OpenEditWriterModal', function(event){
            $('.editWriter').find('span').html('');
            $('.editWriter').modal('show');
        });
        window.addEventListener('CloseEditWriterModal', function(event){
            $('.editWriter').find('span').html('');
            $('.editWriter').find('form')[0].reset();
            $('.editWriter').modal('hide');
        });
        window.addEventListener('SwalWriterConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('sss',event.detail.id);
                }
            })
        });
        window.addEventListener('sssd', function(event){
            alert('This Writer has been deleted');
        });
        // ------------------------ sections -----------------------//
        window.addEventListener('OpenAddSectionsModal', function(){
                $('.addSection').find('span').html('');
                $('.addSection').find('form')[0].reset();
                $('.addSection').modal('show');
           });
        window.addEventListener('CloseAddSectionModal', function(){
            $('.addSection').find('span').html('');
            $('.addSection').find('form')[0].reset();
            $('.addSection').modal('hide');
            alert('New Sections Has been Saved Successfully');
        });
        window.addEventListener('OpenEditSectionModal', function(event){
            $('.editSection').find('span').html('');
            $('.editSection').modal('show');
        });
        window.addEventListener('CloseEditSectionModal', function(event){
            $('.editSection').find('span').html('');
            $('.editSection').find('form')[0].reset();
            $('.editSection').modal('hide');
        });
        window.addEventListener('SwalSectionConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('ccc',event.detail.id);
                }
            })
        });
        window.addEventListener('cccd', function(event){
            alert('This Section has been deleted');
        });
        
        // ------------------------ vendors -----------------------//
        window.addEventListener('OpenAddVendorsModal', function(){
            $('.addVendor').find('span').html('');
            $('.addVendor').find('form')[0].reset();
            $('.addVendor').modal('show');
        });
        window.addEventListener('CloseAddVendorModal', function(){
            $('.addVendor').find('span').html('');
            $('.addVendor').find('form')[0].reset();
            $('.addVendor').modal('hide');
            alert('New Vendors Has been Saved Successfully');
        });
        window.addEventListener('OpenEditVendorModal', function(event){
            $('.editVendor').find('span').html('');
            $('.editVendor').modal('show');
        });
        window.addEventListener('CloseEditVendorModal', function(event){
            $('.editVendor').find('span').html('');
            $('.editVendor').find('form')[0].reset();
            $('.editVendor').modal('hide');
        });  
        window.addEventListener('SwalVendorConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('zzz',event.detail.id);
                }
            })
        });
        window.addEventListener('zzzd', function(event){
            alert('This Vendor has been deleted');
        });

        // ------------------- books -----------------------------------//
        window.addEventListener('OpenAddBooksModal', function(){
            $('.addBook').find('span').html('');
            $('.addBook').find('form')[0].reset();
            $('.addBook').modal('show');
        });
        window.addEventListener('CloseAddBooksModal', function(){
            $('.addBook').find('span').html('');
            $('.addBook').find('form')[0].reset();
            $('.addBook').modal('hide');
            alert('New Books Has been Saved Successfully');
        });
        window.addEventListener('OpenEditBookModal', function(event){
            $('.editBook').find('span').html('');
            $('.editBook').modal('show');
        });
        window.addEventListener('CloseEditBookModal', function(event){
            $('.editBook').find('span').html('');
            $('.editBook').find('form')[0].reset();
            $('.editBook').modal('hide');
        });
        window.addEventListener('SwalBookConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('sss',event.detail.id);
                }
            })
        });
        window.addEventListener('sssd', function(event){
            alert('This Book has been deleted');
        });

          // ------------------------ users -----------------------//
          window.addEventListener('OpenAddUsersModal', function(){
            $('.addUser').find('span').html('');
            $('.addUser').find('form')[0].reset();
            $('.addUser').modal('show');
        });
        window.addEventListener('CloseAddUserModal', function(){
            $('.addUser').find('span').html('');
            $('.addUser').find('form')[0].reset();
            $('.addUser').modal('hide');
            alert('New Users Has been Saved Successfully');
        });
        window.addEventListener('OpenEditUserModal', function(event){
            $('.editUser').find('span').html('');
            $('.editUser').modal('show');
        });
        window.addEventListener('CloseEditUserModal', function(event){
            $('.editUser').find('span').html('');
            $('.editUser').find('form')[0].reset();
            $('.editUser').modal('hide');
        });  
        window.addEventListener('SwalUserConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('uuu',event.detail.id);
                }
            })
        });
        window.addEventListener('uuud', function(event){
            alert('This User has been deleted');
        });

           // ------------------------ Pages -----------------------//
           window.addEventListener('OpenAddPagesModal', function(){
            $('.addPage').find('span').html('');
            $('.addPage').find('form')[0].reset();
            $('.addPage').modal('show');
        });
        window.addEventListener('CloseAddPageModal', function(){
            $('.addPage').find('span').html('');
            $('.addPage').find('form')[0].reset();
            $('.addPage').modal('hide');
            alert('New Pages Has been Saved Successfully');
        });
        window.addEventListener('OpenEditPageModal', function(event){
            $('.editPage').find('span').html('');
            $('.editPage').modal('show');
        });
        window.addEventListener('CloseEditPageModal', function(event){
            $('.editPage').find('span').html('');
            $('.editPage').find('form')[0].reset();
            $('.editPage').modal('hide');
        });  
        window.addEventListener('SwalPageConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('ppp',event.detail.id);
                }
            })
        });
        window.addEventListener('pppd', function(event){
            alert('This Page has been deleted');
        });

             // ------------------------ FAQs -----------------------//
        window.addEventListener('OpenAddFAQModal', function(){
            $('.addFAQ').find('span').html('');
            $('.addFAQ').find('form')[0].reset();
            $('.addFAQ').modal('show');
        });
        window.addEventListener('CloseAddFAQModal', function(){
            $('.addFAQ').find('span').html('');
            $('.addFAQ').find('form')[0].reset();
            $('.addFAQ').modal('hide');
            alert('New FAQs Has been Saved Successfully');
        });
        window.addEventListener('OpenEditFAQModal', function(event){
            $('.editFAQ').find('span').html('');
            $('.editFAQ').modal('show');
        });
        window.addEventListener('CloseEditFAQModal', function(event){
            $('.editFAQ').find('span').html('');
            $('.editFAQ').find('form')[0].reset();
            $('.editFAQ').modal('hide');
        });  
        window.addEventListener('SwalFAQConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('fff',event.detail.id);
                }
            })
        });
        window.addEventListener('fffd', function(event){
            alert('This FAQ has been deleted');
        });
        
        
            // ------------------------ roles -----------------------//
        window.addEventListener('OpenAddRolesModal', function(){
            $('.addRole').find('span').html('');
            $('.addRole').find('form')[0].reset();
            $('.addRole').modal('show');
        });
        window.addEventListener('CloseAddRoleModal', function(){
            $('.addRole').find('span').html('');
            $('.addRole').find('form')[0].reset();
            $('.addRole').modal('hide');
            alert('New Sections Has been Saved Successfully');
        });
        window.addEventListener('OpenEditRoleModal', function(event){
            $('.editRole').find('span').html('');
            $('.editRole').modal('show');
        });
        window.addEventListener('CloseEditRoleModal', function(event){
            $('.editRole').find('span').html('');
            $('.editRole').find('form')[0].reset();
            $('.editRole').modal('hide');
        });
        window.addEventListener('SwalRoleConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('rrr',event.detail.id);
                }
            })
        });
        window.addEventListener('rrrd', function(event){
            alert('This Role has been deleted');
        });
        
        
            // ------------------------ Permissions -----------------------//
            window.addEventListener('OpenAddPermissionsModal', function(){
            $('.addPermission').find('span').html('');
            $('.addPermission').find('form')[0].reset();
            $('.addPermission').modal('show');
        });
        window.addEventListener('CloseAddPermissionModal', function(){
            $('.addPermission').find('span').html('');
            $('.addPermission').find('form')[0].reset();
            $('.addPermission').modal('hide');
            alert('New Permissions Has been Saved Successfully');
        });
        window.addEventListener('OpenEditPermissionModal', function(event){
            $('.editPermission').find('span').html('');
            $('.editPermission').modal('show');
        });
        window.addEventListener('CloseEditPermissionModal', function(event){
            $('.editPermission').find('span').html('');
            $('.editPermission').find('form')[0].reset();
            $('.editPermission').modal('hide');
        });
        window.addEventListener('SwalpermissionConfirm', function(event){
            swal.fire({
                title:event.detail.title,
                imageWidth:48,
                imageHeight:48,
                html:event.detail.html,
                showCloseButton:true,
                showCancelButton:true,
                cancelButtonText:'Cancel',
                confirmButtonText:'Yes, Delete',
                cancelButtonColor:'#d33',
                confirmButtonColor:'#3085d6',
                width:300,
                allowOutsideClick:false
            }).then(function(result){
                if(result.value){
                    window.livewire.emit('vvv',event.detail.id);
                }
            })
        });
        window.addEventListener('vvvd', function(event){
            alert('This Permission has been deleted');
        });
        

        




    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    
    
</body>
<!-- END: Body-->

</html>
