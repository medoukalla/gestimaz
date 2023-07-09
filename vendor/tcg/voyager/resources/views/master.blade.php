<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="rtl" direction="rtl" style="direction:rtl;"  >
<head>
    <title>@yield('page_title', setting('admin.title') . " - " . setting('admin.description'))</title>
 
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!-- fontawesome -->    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->


    @yield('css')
    @yield('head')
</head>


<body id="kt_app_body" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
    class="app-default">


    <?php
    if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
        $user_avatar = Auth::user()->avatar;
    } else {
        $user_avatar = Voyager::image(Auth::user()->avatar);
    }
    ?>

    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>
    <!--end::Theme mode setup on page load-->

    

       <!--begin::App-->
       <div class="d-flex flex-column flex-root app-root" id="kt_app_root" style="" >
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


            <!-- NAVBAR -->
            @include('voyager::dashboard.navbar')
            


            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">



                <!--begin::Wrapper container-->
                <div class="app-container  container-fluid d-flex flex-row-fluid ">


                    <!-- SIDEBAR -->
                    @include('voyager::dashboard.sidebar')



                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">

                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar  d-flex pb-3 pb-lg-5 ">

                            <!--begin::Toolbar container-->
                            <div class="d-flex flex-stack flex-row-fluid">
                                <!--begin::Toolbar container-->
                                <div class="d-flex flex-column flex-row-fluid">
                                    <!--begin::Toolbar wrapper-->

                                    <!--begin::Page title-->
                                    <div class="page-title d-flex align-items-center me-3">
                                        <!--begin::Title-->
                                        <h1
                                            class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-lg-2x gap-2">
                                            <span><span class="fw-light">Welcome back</span>,&nbsp;{{ Auth::user()->name }}hhhhh</span>

                                        </h1>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Page title-->



                                </div>
                                <!--end::Toolbar container-->

                                <!--begin::Actions-->
                                <div class="d-flex align-self-center flex-center flex-shrink-0">
                                    <a href="#" class="btn btn-sm btn-dark d-flex flex-center ms-3 px-4 py-3"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                        Profile
                                    </a>

                                    <a href="#" class="btn btn-sm btn-danger ms-3 px-4 py-3" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_new_target">
                                        Logout
                                    </a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content  flex-column-fluid ">

                            <!--begin::Row-->
                            <div class="row g-5 g-xl-10 mb-5 mb-xl-0">
                                <!--begin::Col-->
                                <div class="col-md-4 mb-xl-10">
                                    <!--begin::Card widget 28-->
                                    <div class="card card-flush ">
                                        <!--begin::Header-->
                                        <div class="card-header pt-7">
                                            <!--begin::Card title-->
                                            <div class="card-title flex-stack flex-row-fluid">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-45px me-5">
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-outline ki-instagram fs-2x text-gray-800"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Wrapper-->
                                                <div class="me-n2">
                                                    <!--begin::Badge-->
                                                    <span
                                                        class="badge badge-light-success align-self-center fs-base">
                                                        <i
                                                            class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                        2.2%
                                                    </span>
                                                    <!--end::Badge-->

                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Header-->
                                        </div>
                                        <!--end::Card title-->

                                        <!--begin::Card body-->
                                        <div class="card-body d-flex align-items-end">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder fs-2x text-dark">$65,209.00</span>
                                                <span class="fw-bold fs-7 text-gray-500">SAP UI Progress</span>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card widget 28-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-md-4 mb-xl-10">
                                    <!--begin::Card widget 28-->
                                    <div class="card card-flush ">
                                        <!--begin::Header-->
                                        <div class="card-header pt-7">
                                            <!--begin::Ca rd title-->
                                            <div class="card-title flex-stack flex-row-fluid">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-45px me-5">
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-outline ki-microsoft fs-2x text-gray-800"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Wrapper-->
                                                <div class="me-n2">
                                                    <!--begin::Badge-->
                                                    <span
                                                        class="badge badge-light-danger align-self-center fs-base">
                                                        <i
                                                            class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>
                                                        2.5% </span>
                                                    <!--end::Badge-->

                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Header-->
                                        </div>
                                        <!--end::Card title-->

                                        <!--begin::Card body-->
                                        <div class="card-body d-flex align-items-end">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder fs-2x text-dark">$6,526.00</span>
                                                <span class="fw-bold fs-7 text-gray-500">SAP UI Progress</span>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card widget 28-->
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-md-4 mb-xl-10">
                                    <!--begin::Card widget 28-->
                                    <div class="card card-flush ">
                                        <!--begin::Header-->
                                        <div class="card-header pt-7">
                                            <!--begin::Card title-->
                                            <div class="card-title flex-stack flex-row-fluid">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-45px me-5">
                                                    <span class="symbol-label bg-light-info">
                                                        <i class="ki-outline ki-apple fs-2x text-gray-800"></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Wrapper-->
                                                <div class="me-n2">
                                                    <!--begin::Badge-->
                                                    <span
                                                        class="badge badge-light-success align-self-center fs-base">
                                                        <i
                                                            class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                        2.7%
                                                    </span>
                                                    <!--end::Badge-->

                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Header-->
                                        </div>
                                        <!--end::Card title-->

                                        <!--begin::Card body-->
                                        <div class="card-body d-flex align-items-end">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column">
                                                <span class="fw-bolder fs-2x text-dark">$45,142.00</span>
                                                <span class="fw-bold fs-7 text-gray-500">SAP UI Progress</span>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card widget 28-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            
                            
                            <!-- PAGE CONTENT -->
                            <div id="vyager">
                                @yield('content')
                            </div>

                            
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->


                </div>
                <!--end:::Main-->


                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->



        <script>
            var hostUrl = "https://preview.keenthemes.com/metronic8/demo37/assets/";
        </script>

        <script src="{{ asset('js/plugins.bundle.js') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}"></script>

        <script src="https://preview.keenthemes.com/metronic8/demo37/assets/js/widgets.bundle.js"></script>
        <script src="https://preview.keenthemes.com/metronic8/demo37/assets/js/custom/widgets.js"></script>

    





<script type="text/javascript" src="{{ voyager_asset('js/app.js') }}"></script>

<script>
    @if(Session::has('alerts'))
        let alerts = {!! json_encode(Session::get('alerts')) !!};
        helpers.displayAlerts(alerts, toastr);
    @endif

    @if(Session::has('message'))

    // TODO: change Controllers to use AlertsMessages trait... then remove this
    var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
    var alertMessage = {!! json_encode(Session::get('message')) !!};
    var alerter = toastr[alertType];

    if (alerter) {
        alerter(alertMessage);
    } else {
        toastr.error("toastr alert-type " + alertType + " is unknown");
    }
    @endif
</script>
@include('voyager::media.manager')
@yield('javascript')
@stack('javascript')
@if(!empty(config('voyager.additional_js')))<!-- Additional Javascript -->
    @foreach(config('voyager.additional_js') as $js)<script type="text/javascript" src="{{ asset($js) }}"></script>@endforeach
@endif


<link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
</body>

</html>