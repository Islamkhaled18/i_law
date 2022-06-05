<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ trans('auth.Login_to_dashboard') }}</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/admin/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/vendors-rtl.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css-rtl/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css-rtl/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css-rtl/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css-rtl/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css-rtl/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css-rtl/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css-rtl/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/css-rtl/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css-rtl/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css-rtl/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style-rtl.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<style>
    body {
        font-family: 'Cairo', sans-serif !important;

    }

</style>

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed"
    data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- Login basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="w-2 my-auto text-center"><img class="img-fluid"
                                        src="{{ asset('assets/admin/images/logo/1.png') }}" alt="avatar" width="90%">
                                    <a href="https://ilawdemo.technomasrsystems.com/" class="brand-logo">

                                        <h2 class="brand-text w-75 text-primary ms-1">
                                            {{ trans('auth.website_dashboard') }}
                                        </h2>
                                    </a>

                                </div>

                                <h4 class="card-title mb-1">{{ trans('auth.welcome_to_dashboard') }}</h4>
                                <p class="card-text mb-2">{{ trans('auth.please_login_to_begin_theadventure') }}</p>
                                @include('alerts.errors')
                                @include('alerts.success')

                                <form class="auth-login-form mt-2" action="{{ route('admin.post.login') }}"
                                    method="post" novalidate>
                                    @csrf

                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <label for="email" class="form-label">{{ trans('auth.email') }}</label>
                                        <input id="login" type="text"
                                            class="form-control
                                       @error('login') is-invalid @enderror"
                                            name="login" value="{{ old('login') }}" required>
                                        <div class="form-control-position">
                                            <i class="ft-user"></i>
                                        </div>

                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label" for="login-password" name="password"
                                                type="password">{{ trans('auth.password') }}</label>
                                            <a href="{{ route('forgot.password.form') }}">
                                                <small>{{ trans('auth.forgot_password_?') }}</small>
                                            </a>
                                        </div>

                                        <input id="password" type="password"
                                            class="form-control
                                       @error('password') is-invalid @enderror"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" name="password" value="{{ old('password') }}"
                                            required>
                                        <div class="form-control-position">
                                            <i class="la la-key"></i>
                                        </div>



                                    </fieldset>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-me"
                                                tabindex="3" />
                                            <label class="form-check-label" for="remember-me">
                                                {{ trans('auth.remember_me') }}</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="4"
                                        type="submit">{{ trans('auth.sign_in') }}</button>

                                </form>
                            </div>
                            <!-- /Login basic -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END: Content-->


        <!-- BEGIN: Vendor JS-->
        <script src="{{ asset('assets/admin/vendors/js/vendors.min.js') }}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{ asset('assets/admin/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="{{ asset('assets/admin/js/core/app-menu.js') }}"></script>
        <script src="{{ asset('assets/admin/js/core/app.js') }}"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="{{ asset('assets/admin/js/scripts/pages/auth-login.js') }}"></script>
        <!-- END: Page JS-->

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
</body>
<!-- END: Body-->

</html>
