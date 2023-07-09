<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="{{ __('voyager::generic.is_rtl') == 'true' ? 'rtl' : 'ltr' }}">
<head>
    <title>@yield('page_title', setting('admin.title') . " - " . setting('admin.description'))</title>
 
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="https://preview.keenthemes.com/metronic8/demo37/assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link
        href="https://preview.keenthemes.com/metronic8/demo37/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="https://preview.keenthemes.com/metronic8/demo37/assets/plugins/custom/datatables/datatables.bundle.css"
        rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="https://preview.keenthemes.com/metronic8/demo37/assets/plugins/global/plugins.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="https://preview.keenthemes.com/metronic8/demo37/assets/css/style.bundle.rtl.css" rel="stylesheet"
        type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Begin::Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');</script>
    <!--End::Google Tag Manager -->

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
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
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->


       <!--begin::App-->
       <div class="d-flex flex-column flex-root app-root" id="kt_app_root" style="" dir="ltr">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


            @include('voyager::dashboard.navbar')
            


            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">



                <!--begin::Wrapper container-->
                <div class="app-container  container-xxl d-flex flex-row-fluid ">


                    
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
                                                <span><span class="fw-light">Welcome back</span>,&nbsp;Adam</span>

                                                <!--begin::Description-->
                                                <span class="page-desc text-gray-600 fs-base fw-semibold">
                                                    You are logged in as a Cloud Owner </span>
                                                <!--end::Description-->
                                            </h1>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Page title-->



                                    </div>
                                    <!--end::Toolbar container-->

                                    <!--begin::Actions-->
                                    <div class="d-flex align-self-center flex-center flex-shrink-0">
                                        <a href="#" class="btn btn-sm btn-success d-flex flex-center ms-3 px-4 py-3"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                            <i class="ki-outline ki-plus-square fs-2"></i>
                                            <span>Invite</span>
                                        </a>

                                        <a href="#" class="btn btn-sm btn-dark ms-3 px-4 py-3" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_target">
                                            Create <span class="d-none d-sm-inline">Target</span>
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
                                                <!--begin::Card title-->
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

                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-6">

                                        <!--begin::List widget 23-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Lading Teams</span>
                                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social
                                                        visitors</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">

                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-5">
                                                <!--begin::Items-->
                                                <div class="">

                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="https://preview.keenthemes.com/metronic8/demo37/assets/media/svg/brand-logos/atica.svg"
                                                                class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo
                                                                    Ltd.</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    2.6%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="https://preview.keenthemes.com/metronic8/demo37/assets/media/svg/brand-logos/telegram-2.svg"
                                                                class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Binford
                                                                    Ltd.</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                    Media</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-danger fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>
                                                                    0.4%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="https://preview.keenthemes.com/metronic8/demo37/assets/media/svg/brand-logos/balloon.svg"
                                                                class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Barone
                                                                    LLC.</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    0.2%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="https://preview.keenthemes.com/metronic8/demo37/assets/media/svg/brand-logos/kickstarter.svg"
                                                                class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo
                                                                    Ltd.</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video
                                                                    Channel</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    4.1%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="https://preview.keenthemes.com/metronic8/demo37/assets/media/svg/brand-logos/vimeo.svg"
                                                                class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco
                                                                    Enterprises</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                    Network</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    8.3%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Flag-->
                                                            <img src="https://preview.keenthemes.com/metronic8/demo37/assets/media/svg/brand-logos/plurk.svg"
                                                                class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                            <!--end::Flag-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Big
                                                                    Kahuna Burger</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                    Network</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                                    1.9%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->


                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end: Card Body-->
                                        </div>
                                        <!--end::List widget 23-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xl-6">

                                        <!--begin::Chart Widget 33-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5 mb-6">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Currency-->
                                                        <span
                                                            class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
                                                        <!--end::Currency-->

                                                        <!--begin::Value-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                                                        <!--end::Value-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i
                                                                class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                                                            9.2%
                                                        </span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Statistics-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-400">Etherium rate</span>
                                                    <!--end::Description-->
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i
                                                            class="ki-outline ki-dots-square fs-1 text-gray-300 me-n1"></i>
                                                    </button>


                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                                Quick Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Ticket
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Customer
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Admin Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Staff Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Member Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Contact
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                    Generate Reports
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->

                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body py-0 px-0">
                                                <!--begin::Nav-->
                                                <ul class="nav d-flex justify-content-between mb-3 mx-9" role="tablist">
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3" role="presentation">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active"
                                                            data-bs-toggle="tab" id="kt_charts_widget_33_tab_1"
                                                            href="#kt_charts_widget_33_tab_content_1"
                                                            aria-selected="true" role="tab">

                                                            1d
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3" role="presentation">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px "
                                                            data-bs-toggle="tab" id="kt_charts_widget_33_tab_2"
                                                            href="#kt_charts_widget_33_tab_content_2"
                                                            aria-selected="false" tabindex="-1" role="tab">

                                                            5d
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3" role="presentation">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px "
                                                            data-bs-toggle="tab" id="kt_charts_widget_33_tab_3"
                                                            href="#kt_charts_widget_33_tab_content_3"
                                                            aria-selected="false" tabindex="-1" role="tab">

                                                            1m
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3" role="presentation">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px "
                                                            data-bs-toggle="tab" id="kt_charts_widget_33_tab_4"
                                                            href="#kt_charts_widget_33_tab_content_4"
                                                            aria-selected="false" tabindex="-1" role="tab">

                                                            6m
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <li class="nav-item mb-3" role="presentation">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px "
                                                            data-bs-toggle="tab" id="kt_charts_widget_33_tab_5"
                                                            href="#kt_charts_widget_33_tab_content_5"
                                                            aria-selected="false" tabindex="-1" role="tab">

                                                            1y
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::Item-->

                                                </ul>
                                                <!--end::Nav-->

                                                <!--begin::Tab Content-->
                                                <div class="tab-content mt-n6">


                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade active show"
                                                        id="kt_charts_widget_33_tab_content_1" role="tabpanel"
                                                        aria-labelledby="#kt_charts_widget_33_tab_1">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_1" data-kt-chart-color="info"
                                                            class="min-h-auto h-200px ps-3 pe-6"
                                                            style="min-height: 215px;">
                                                            <div id="apexchartsomyhyarb"
                                                                class="apexcharts-canvas apexchartsomyhyarb apexcharts-theme-light"
                                                                style="width: 419.75px; height: 200px;"><svg
                                                                    id="SvgjsSvg1436" width="419.75" height="200"
                                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:svgjs="http://svgjs.dev"
                                                                    class="apexcharts-svg apexcharts-zoomable"
                                                                    xmlns:data="ApexChartsNS"
                                                                    transform="translate(0, 0)"
                                                                    style="background: transparent;">
                                                                    <g id="SvgjsG1438"
                                                                        class="apexcharts-inner apexcharts-graphical"
                                                                        transform="translate(22, 30)">
                                                                        <defs id="SvgjsDefs1437">
                                                                            <clipPath id="gridRectMaskomyhyarb">
                                                                                <rect id="SvgjsRect1441" width="394.75"
                                                                                    height="158" x="-3.5" y="-1.5"
                                                                                    rx="0" ry="0" opacity="1"
                                                                                    stroke-width="0" stroke="none"
                                                                                    stroke-dasharray="0" fill="#fff">
                                                                                </rect>
                                                                            </clipPath>
                                                                            <clipPath id="forecastMaskomyhyarb">
                                                                            </clipPath>
                                                                            <clipPath id="nonForecastMaskomyhyarb">
                                                                            </clipPath>
                                                                            <clipPath id="gridRectMarkerMaskomyhyarb">
                                                                                <rect id="SvgjsRect1442" width="391.75"
                                                                                    height="159" x="-2" y="-2" rx="0"
                                                                                    ry="0" opacity="1" stroke-width="0"
                                                                                    stroke="none" stroke-dasharray="0"
                                                                                    fill="#fff"></rect>
                                                                            </clipPath>
                                                                            <linearGradient id="SvgjsLinearGradient1447"
                                                                                x1="0" y1="0" x2="0" y2="1">
                                                                                <stop id="SvgjsStop1448"
                                                                                    stop-opacity="0.4"
                                                                                    stop-color="rgba(114,57,234,0.4)"
                                                                                    offset="0.15"></stop>
                                                                                <stop id="SvgjsStop1449"
                                                                                    stop-opacity="0.2"
                                                                                    stop-color="rgba(255,255,255,0.2)"
                                                                                    offset="1.2"></stop>
                                                                                <stop id="SvgjsStop1450"
                                                                                    stop-opacity="0.2"
                                                                                    stop-color="rgba(255,255,255,0.2)"
                                                                                    offset="1"></stop>
                                                                            </linearGradient>
                                                                        </defs>
                                                                        <g id="SvgjsG1453" class="apexcharts-xaxis"
                                                                            transform="translate(20, 0)">
                                                                            <g id="SvgjsG1454"
                                                                                class="apexcharts-xaxis-texts-g"
                                                                                transform="translate(0, -4)"></g>
                                                                        </g>
                                                                        <g id="SvgjsG1472" class="apexcharts-grid">
                                                                            <g id="SvgjsG1473"
                                                                                class="apexcharts-gridlines-horizontal">
                                                                                <line id="SvgjsLine1475" x1="0" y1="0"
                                                                                    x2="387.75" y2="0" stroke="#e1e3ea"
                                                                                    stroke-dasharray="3"
                                                                                    stroke-linecap="butt"
                                                                                    class="apexcharts-gridline"></line>
                                                                                <line id="SvgjsLine1476" x1="0"
                                                                                    y1="38.75" x2="387.75" y2="38.75"
                                                                                    stroke="#e1e3ea"
                                                                                    stroke-dasharray="3"
                                                                                    stroke-linecap="butt"
                                                                                    class="apexcharts-gridline"></line>
                                                                                <line id="SvgjsLine1477" x1="0"
                                                                                    y1="77.5" x2="387.75" y2="77.5"
                                                                                    stroke="#e1e3ea"
                                                                                    stroke-dasharray="3"
                                                                                    stroke-linecap="butt"
                                                                                    class="apexcharts-gridline"></line>
                                                                                <line id="SvgjsLine1478" x1="0"
                                                                                    y1="116.25" x2="387.75" y2="116.25"
                                                                                    stroke="#e1e3ea"
                                                                                    stroke-dasharray="3"
                                                                                    stroke-linecap="butt"
                                                                                    class="apexcharts-gridline"></line>
                                                                                <line id="SvgjsLine1479" x1="0" y1="155"
                                                                                    x2="387.75" y2="155"
                                                                                    stroke="#e1e3ea"
                                                                                    stroke-dasharray="3"
                                                                                    stroke-linecap="butt"
                                                                                    class="apexcharts-gridline"></line>
                                                                            </g>
                                                                            <g id="SvgjsG1474"
                                                                                class="apexcharts-gridlines-vertical">
                                                                            </g>
                                                                            <line id="SvgjsLine1481" x1="0" y1="155"
                                                                                x2="387.75" y2="155"
                                                                                stroke="transparent"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"></line>
                                                                            <line id="SvgjsLine1480" x1="0" y1="1"
                                                                                x2="0" y2="155" stroke="transparent"
                                                                                stroke-dasharray="0"
                                                                                stroke-linecap="butt"></line>
                                                                        </g>
                                                                        <g id="SvgjsG1443"
                                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                                            <g id="SvgjsG1444" class="apexcharts-series"
                                                                                seriesName="Etheriumx"
                                                                                data:longestSeries="true" rel="1"
                                                                                data:realIndex="0">
                                                                                <path id="SvgjsPath1451"
                                                                                    d="M 0 155L 0 98.16666666666666C 9.69375 98.16666666666666 18.002678571428575 41.33333333333334 27.696428571428573 41.33333333333334C 37.39017857142857 41.33333333333334 45.699107142857144 41.33333333333334 55.392857142857146 41.33333333333334C 65.08660714285715 41.33333333333334 73.39553571428573 82.66666666666666 83.08928571428572 82.66666666666666C 92.78303571428572 82.66666666666666 101.0919642857143 82.66666666666666 110.78571428571429 82.66666666666666C 120.47946428571429 82.66666666666666 128.78839285714287 113.66666666666666 138.48214285714286 113.66666666666666C 148.17589285714286 113.66666666666666 156.48482142857145 113.66666666666666 166.17857142857144 113.66666666666666C 175.87232142857144 113.66666666666666 184.18125 82.66666666666666 193.875 82.66666666666666C 203.56875 82.66666666666666 211.8776785714286 82.66666666666666 221.57142857142858 82.66666666666666C 231.26517857142858 82.66666666666666 239.57410714285717 41.33333333333334 249.26785714285717 41.33333333333334C 258.96160714285713 41.33333333333334 267.27053571428576 41.33333333333334 276.9642857142857 41.33333333333334C 286.6580357142857 41.33333333333334 294.9669642857143 51.66666666666666 304.6607142857143 51.66666666666666C 314.3544642857143 51.66666666666666 322.66339285714287 51.66666666666666 332.3571428571429 51.66666666666666C 342.0508928571429 51.66666666666666 350.3598214285714 38.75 360.05357142857144 38.75C 369.74732142857147 38.75 378.05625 38.75 387.75 38.75C 387.75 38.75 387.75 38.75 387.75 155M 387.75 38.75z"
                                                                                    fill="url(#SvgjsLinearGradient1447)"
                                                                                    fill-opacity="1" stroke-opacity="1"
                                                                                    stroke-linecap="butt"
                                                                                    stroke-width="0"
                                                                                    stroke-dasharray="0"
                                                                                    class="apexcharts-area" index="0"
                                                                                    clip-path="url(#gridRectMaskomyhyarb)"
                                                                                    pathTo="M 0 155L 0 98.16666666666666C 9.69375 98.16666666666666 18.002678571428575 41.33333333333334 27.696428571428573 41.33333333333334C 37.39017857142857 41.33333333333334 45.699107142857144 41.33333333333334 55.392857142857146 41.33333333333334C 65.08660714285715 41.33333333333334 73.39553571428573 82.66666666666666 83.08928571428572 82.66666666666666C 92.78303571428572 82.66666666666666 101.0919642857143 82.66666666666666 110.78571428571429 82.66666666666666C 120.47946428571429 82.66666666666666 128.78839285714287 113.66666666666666 138.48214285714286 113.66666666666666C 148.17589285714286 113.66666666666666 156.48482142857145 113.66666666666666 166.17857142857144 113.66666666666666C 175.87232142857144 113.66666666666666 184.18125 82.66666666666666 193.875 82.66666666666666C 203.56875 82.66666666666666 211.8776785714286 82.66666666666666 221.57142857142858 82.66666666666666C 231.26517857142858 82.66666666666666 239.57410714285717 41.33333333333334 249.26785714285717 41.33333333333334C 258.96160714285713 41.33333333333334 267.27053571428576 41.33333333333334 276.9642857142857 41.33333333333334C 286.6580357142857 41.33333333333334 294.9669642857143 51.66666666666666 304.6607142857143 51.66666666666666C 314.3544642857143 51.66666666666666 322.66339285714287 51.66666666666666 332.3571428571429 51.66666666666666C 342.0508928571429 51.66666666666666 350.3598214285714 38.75 360.05357142857144 38.75C 369.74732142857147 38.75 378.05625 38.75 387.75 38.75C 387.75 38.75 387.75 38.75 387.75 155M 387.75 38.75z"
                                                                                    pathFrom="M -1 206.66666666666666L -1 206.66666666666666L 27.696428571428573 206.66666666666666L 55.392857142857146 206.66666666666666L 83.08928571428572 206.66666666666666L 110.78571428571429 206.66666666666666L 138.48214285714286 206.66666666666666L 166.17857142857144 206.66666666666666L 193.875 206.66666666666666L 221.57142857142858 206.66666666666666L 249.26785714285717 206.66666666666666L 276.9642857142857 206.66666666666666L 304.6607142857143 206.66666666666666L 332.3571428571429 206.66666666666666L 360.05357142857144 206.66666666666666L 387.75 206.66666666666666">
                                                                                </path>
                                                                                <path id="SvgjsPath1452"
                                                                                    d="M 0 98.16666666666666C 9.69375 98.16666666666666 18.002678571428575 41.33333333333334 27.696428571428573 41.33333333333334C 37.39017857142857 41.33333333333334 45.699107142857144 41.33333333333334 55.392857142857146 41.33333333333334C 65.08660714285715 41.33333333333334 73.39553571428573 82.66666666666666 83.08928571428572 82.66666666666666C 92.78303571428572 82.66666666666666 101.0919642857143 82.66666666666666 110.78571428571429 82.66666666666666C 120.47946428571429 82.66666666666666 128.78839285714287 113.66666666666666 138.48214285714286 113.66666666666666C 148.17589285714286 113.66666666666666 156.48482142857145 113.66666666666666 166.17857142857144 113.66666666666666C 175.87232142857144 113.66666666666666 184.18125 82.66666666666666 193.875 82.66666666666666C 203.56875 82.66666666666666 211.8776785714286 82.66666666666666 221.57142857142858 82.66666666666666C 231.26517857142858 82.66666666666666 239.57410714285717 41.33333333333334 249.26785714285717 41.33333333333334C 258.96160714285713 41.33333333333334 267.27053571428576 41.33333333333334 276.9642857142857 41.33333333333334C 286.6580357142857 41.33333333333334 294.9669642857143 51.66666666666666 304.6607142857143 51.66666666666666C 314.3544642857143 51.66666666666666 322.66339285714287 51.66666666666666 332.3571428571429 51.66666666666666C 342.0508928571429 51.66666666666666 350.3598214285714 38.75 360.05357142857144 38.75C 369.74732142857147 38.75 378.05625 38.75 387.75 38.75"
                                                                                    fill="none" fill-opacity="1"
                                                                                    stroke="#7239ea" stroke-opacity="1"
                                                                                    stroke-linecap="butt"
                                                                                    stroke-width="3"
                                                                                    stroke-dasharray="0"
                                                                                    class="apexcharts-area" index="0"
                                                                                    clip-path="url(#gridRectMaskomyhyarb)"
                                                                                    pathTo="M 0 98.16666666666666C 9.69375 98.16666666666666 18.002678571428575 41.33333333333334 27.696428571428573 41.33333333333334C 37.39017857142857 41.33333333333334 45.699107142857144 41.33333333333334 55.392857142857146 41.33333333333334C 65.08660714285715 41.33333333333334 73.39553571428573 82.66666666666666 83.08928571428572 82.66666666666666C 92.78303571428572 82.66666666666666 101.0919642857143 82.66666666666666 110.78571428571429 82.66666666666666C 120.47946428571429 82.66666666666666 128.78839285714287 113.66666666666666 138.48214285714286 113.66666666666666C 148.17589285714286 113.66666666666666 156.48482142857145 113.66666666666666 166.17857142857144 113.66666666666666C 175.87232142857144 113.66666666666666 184.18125 82.66666666666666 193.875 82.66666666666666C 203.56875 82.66666666666666 211.8776785714286 82.66666666666666 221.57142857142858 82.66666666666666C 231.26517857142858 82.66666666666666 239.57410714285717 41.33333333333334 249.26785714285717 41.33333333333334C 258.96160714285713 41.33333333333334 267.27053571428576 41.33333333333334 276.9642857142857 41.33333333333334C 286.6580357142857 41.33333333333334 294.9669642857143 51.66666666666666 304.6607142857143 51.66666666666666C 314.3544642857143 51.66666666666666 322.66339285714287 51.66666666666666 332.3571428571429 51.66666666666666C 342.0508928571429 51.66666666666666 350.3598214285714 38.75 360.05357142857144 38.75C 369.74732142857147 38.75 378.05625 38.75 387.75 38.75"
                                                                                    pathFrom="M -1 206.66666666666666L -1 206.66666666666666L 27.696428571428573 206.66666666666666L 55.392857142857146 206.66666666666666L 83.08928571428572 206.66666666666666L 110.78571428571429 206.66666666666666L 138.48214285714286 206.66666666666666L 166.17857142857144 206.66666666666666L 193.875 206.66666666666666L 221.57142857142858 206.66666666666666L 249.26785714285717 206.66666666666666L 276.9642857142857 206.66666666666666L 304.6607142857143 206.66666666666666L 332.3571428571429 206.66666666666666L 360.05357142857144 206.66666666666666L 387.75 206.66666666666666"
                                                                                    fill-rule="evenodd"></path>
                                                                                <g id="SvgjsG1445"
                                                                                    class="apexcharts-series-markers-wrap"
                                                                                    data:realIndex="0">
                                                                                    <g
                                                                                        class="apexcharts-series-markers">
                                                                                        <circle id="SvgjsCircle1489"
                                                                                            r="0" cx="0" cy="0"
                                                                                            class="apexcharts-marker wrr0lr58eg no-pointer-events"
                                                                                            stroke="#7239ea"
                                                                                            fill="#7239ea"
                                                                                            fill-opacity="1"
                                                                                            stroke-width="3"
                                                                                            stroke-opacity="0.9"
                                                                                            default-marker-size="0">
                                                                                        </circle>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                            <g id="SvgjsG1446"
                                                                                class="apexcharts-datalabels"
                                                                                data:realIndex="0"></g>
                                                                        </g>
                                                                        <line id="SvgjsLine1483" x1="0" y1="0" x2="0"
                                                                            y2="155" stroke="#7239ea"
                                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                                            class="apexcharts-xcrosshairs" x="0" y="0"
                                                                            width="1" height="155" fill="#b1b9c4"
                                                                            filter="none" fill-opacity="0.9"
                                                                            stroke-width="1"></line>
                                                                        <line id="SvgjsLine1484" x1="0" y1="0"
                                                                            x2="387.75" y2="0" stroke="#b6b6b6"
                                                                            stroke-dasharray="0" stroke-width="1"
                                                                            stroke-linecap="butt"
                                                                            class="apexcharts-ycrosshairs"></line>
                                                                        <line id="SvgjsLine1485" x1="0" y1="0"
                                                                            x2="387.75" y2="0" stroke-dasharray="0"
                                                                            stroke-width="0" stroke-linecap="butt"
                                                                            class="apexcharts-ycrosshairs-hidden">
                                                                        </line>
                                                                        <g id="SvgjsG1486"
                                                                            class="apexcharts-yaxis-annotations"></g>
                                                                        <g id="SvgjsG1487"
                                                                            class="apexcharts-xaxis-annotations"></g>
                                                                        <g id="SvgjsG1488"
                                                                            class="apexcharts-point-annotations"></g>
                                                                        <rect id="SvgjsRect1490" width="0" height="0"
                                                                            x="0" y="0" rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fefefe"
                                                                            class="apexcharts-zoom-rect"></rect>
                                                                        <rect id="SvgjsRect1491" width="0" height="0"
                                                                            x="0" y="0" rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fefefe"
                                                                            class="apexcharts-selection-rect"></rect>
                                                                    </g>
                                                                    <g id="SvgjsG1470" class="apexcharts-yaxis" rel="0"
                                                                        transform="translate(-8, 0)">
                                                                        <g id="SvgjsG1471"
                                                                            class="apexcharts-yaxis-texts-g"></g>
                                                                    </g>
                                                                    <rect id="SvgjsRect1482" width="0" height="0" x="0"
                                                                        y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                        stroke="none" stroke-dasharray="0"
                                                                        fill="#fefefe"></rect>
                                                                    <g id="SvgjsG1439" class="apexcharts-annotations">
                                                                    </g>
                                                                </svg>
                                                                <div class="apexcharts-legend"
                                                                    style="max-height: 100px;"></div>
                                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                                    <div class="apexcharts-tooltip-title"
                                                                        style="font-family: inherit; font-size: 12px;">
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-series-group"
                                                                        style="order: 1;"><span
                                                                            class="apexcharts-tooltip-marker"
                                                                            style="background-color: rgb(114, 57, 234);"></span>
                                                                        <div class="apexcharts-tooltip-text"
                                                                            style="font-family: inherit; font-size: 12px;">
                                                                            <div class="apexcharts-tooltip-y-group">
                                                                                <span
                                                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                                                    class="apexcharts-tooltip-text-y-value"></span>
                                                                            </div>
                                                                            <div class="apexcharts-tooltip-goals-group">
                                                                                <span
                                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                                            </div>
                                                                            <div class="apexcharts-tooltip-z-group">
                                                                                <span
                                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                                    <div class="apexcharts-xaxistooltip-text"
                                                                        style="font-family: inherit; font-size: 12px;">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr>
                                                                        <th class="min-w-100px"></th>
                                                                        <th class="min-w-100px text-end pe-0"></th>
                                                                        <th class="text-end min-w-50px"></th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">2:30
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-danger">-139.34</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">3:10
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-success">+576.24</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">3:55
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-success">+124.03</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->


                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_charts_widget_33_tab_content_2"
                                                        role="tabpanel" aria-labelledby="#kt_charts_widget_33_tab_2">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_2" data-kt-chart-color="info"
                                                            class="min-h-auto h-200px ps-3 pe-6"></div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr>
                                                                        <th class="min-w-100px"></th>
                                                                        <th class="min-w-100px text-end pe-0"></th>
                                                                        <th class="text-end min-w-50px"></th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">2:30
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-success">+231.01</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">2:30
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-primary">+233.07</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">2:30
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,145.55</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-danger">+134.06</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->


                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_charts_widget_33_tab_content_3"
                                                        role="tabpanel" aria-labelledby="#kt_charts_widget_33_tab_3">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_3" data-kt-chart-color="info"
                                                            class="min-h-auto h-200px ps-3 pe-6"></div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr>
                                                                        <th class="min-w-100px"></th>
                                                                        <th class="min-w-100px text-end pe-0"></th>
                                                                        <th class="text-end min-w-50px"></th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">12:40
                                                                                AM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,346.25</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-warning">+134.57</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">11:30
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$1,565.26</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-danger">+155.03</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">4:25
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-success">+124.03</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->


                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_charts_widget_33_tab_content_4"
                                                        role="tabpanel" aria-labelledby="#kt_charts_widget_33_tab_4">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_4" data-kt-chart-color="info"
                                                            class="min-h-auto h-200px ps-3 pe-6"></div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr>
                                                                        <th class="min-w-100px"></th>
                                                                        <th class="min-w-100px text-end pe-0"></th>
                                                                        <th class="text-end min-w-50px"></th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">3:20
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-danger">+234.03</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">10:30
                                                                                AM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$1,474.04</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-info">-134.03</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">1:30
                                                                                AM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-primary">+124.03</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->


                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade " id="kt_charts_widget_33_tab_content_5"
                                                        role="tabpanel" aria-labelledby="#kt_charts_widget_33_tab_5">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_33_chart_5" data-kt-chart-color="info"
                                                            class="min-h-auto h-200px ps-3 pe-6"></div>
                                                        <!--end::Chart-->

                                                        <!--begin::Table container-->
                                                        <div class="table-responsive mx-9 mt-n6">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr>
                                                                        <th class="min-w-100px"></th>
                                                                        <th class="min-w-100px text-end pe-0"></th>
                                                                        <th class="text-end min-w-50px"></th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->

                                                                <!--begin::Table body-->
                                                                <tbody>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">3:30
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$1,756.25</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-primary">+144.04</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">2:30
                                                                                PM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-danger">+124.03</span>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">12:30
                                                                                AM</a>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,034.65</span>
                                                                        </td>

                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-success">+184.05</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                        <!--end::Table container-->
                                                    </div>
                                                    <!--end::Tap pane-->

                                                </div>
                                                <!--end::Tab Content-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Chart Widget 33-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row g-lg-5 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-md-6 col-xl-6 mb-5 mb-xl-10">
                                        <!--begin::Card widget 12-->
                                        <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                <!--begin::Statistics-->
                                                <div class="mb-4 px-9">
                                                    <!--begin::Info-->
                                                    <div class="d-flex align-items-center mb-2">


                                                        <!--begin::Value-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">47,769,700</span>
                                                        <!--end::Value-->

                                                        <!--begin::Label-->
                                                        <span
                                                            class="d-flex align-items-end text-gray-400 fs-6 fw-semibold">
                                                            Tons </span>

                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Info-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-400">Total Online
                                                        Sales</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->

                                                <!--begin::Chart-->
                                                <div id="kt_card_widget_12_chart" class="min-h-auto"
                                                    style="height: 125px; min-height: 140px;">
                                                    <div id="apexcharts8vdtst12j"
                                                        class="apexcharts-canvas apexcharts8vdtst12j apexcharts-theme-light"
                                                        style="width: 449px; height: 125px;"><svg id="SvgjsSvg1336"
                                                            width="449" height="125" xmlns="http://www.w3.org/2000/svg"
                                                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev"
                                                            class="apexcharts-svg apexcharts-zoomable"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent;">
                                                            <g id="SvgjsG1338"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(-10, 30)">
                                                                <defs id="SvgjsDefs1337">
                                                                    <clipPath id="gridRectMask8vdtst12j">
                                                                        <rect id="SvgjsRect1341" width="484"
                                                                            height="102" x="-3" y="-1" rx="0" ry="0"
                                                                            opacity="1" stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="forecastMask8vdtst12j"></clipPath>
                                                                    <clipPath id="nonForecastMask8vdtst12j"></clipPath>
                                                                    <clipPath id="gridRectMarkerMask8vdtst12j">
                                                                        <rect id="SvgjsRect1342" width="482"
                                                                            height="104" x="-2" y="-2" rx="0" ry="0"
                                                                            opacity="1" stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="SvgjsG1349" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG1350" class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, -4)"></g>
                                                                </g>
                                                                <g id="SvgjsG1366" class="apexcharts-grid">
                                                                    <g id="SvgjsG1367"
                                                                        class="apexcharts-gridlines-horizontal">
                                                                        <line id="SvgjsLine1369" x1="0" y1="0" x2="478"
                                                                            y2="0" stroke="#e1e3ea" stroke-dasharray="4"
                                                                            stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1370" x1="0" y1="25" x2="478"
                                                                            y2="25" stroke="#e1e3ea"
                                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1371" x1="0" y1="50" x2="478"
                                                                            y2="50" stroke="#e1e3ea"
                                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1372" x1="0" y1="75" x2="478"
                                                                            y2="75" stroke="#e1e3ea"
                                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1373" x1="0" y1="100"
                                                                            x2="478" y2="100" stroke="#e1e3ea"
                                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <g id="SvgjsG1368"
                                                                        class="apexcharts-gridlines-vertical"></g>
                                                                    <line id="SvgjsLine1375" x1="0" y1="100" x2="478"
                                                                        y2="100" stroke="transparent"
                                                                        stroke-dasharray="0" stroke-linecap="butt">
                                                                    </line>
                                                                    <line id="SvgjsLine1374" x1="0" y1="1" x2="0"
                                                                        y2="100" stroke="transparent"
                                                                        stroke-dasharray="0" stroke-linecap="butt">
                                                                    </line>
                                                                </g>
                                                                <g id="SvgjsG1343"
                                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                                    <g id="SvgjsG1344" class="apexcharts-series"
                                                                        seriesName="Sales" data:longestSeries="true"
                                                                        rel="1" data:realIndex="0">
                                                                        <path id="SvgjsPath1347"
                                                                            d="M 0 100L 0 62.5C 13.941666666666666 62.5 25.89166666666667 7.5 39.833333333333336 7.5C 53.775000000000006 7.5 65.72500000000001 80 79.66666666666667 80C 93.60833333333333 80 105.55833333333334 2.5 119.5 2.5C 133.44166666666666 2.5 145.39166666666668 45 159.33333333333334 45C 173.275 45 185.225 10 199.16666666666666 10C 213.10833333333332 10 225.05833333333334 42.5 239 42.5C 252.94166666666666 42.5 264.89166666666665 37.5 278.8333333333333 37.5C 292.775 37.5 304.725 2.5 318.6666666666667 2.5C 332.60833333333335 2.5 344.55833333333334 37.5 358.5 37.5C 372.44166666666666 37.5 384.39166666666665 7.5 398.3333333333333 7.5C 412.275 7.5 424.225 30 438.1666666666667 30C 452.10833333333335 30 464.05833333333334 7.5 478 7.5C 478 7.5 478 7.5 478 100M 478 7.5z"
                                                                            fill="rgba(117,204,104,0)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="0" stroke-dasharray="0"
                                                                            class="apexcharts-area" index="0"
                                                                            clip-path="url(#gridRectMask8vdtst12j)"
                                                                            pathTo="M 0 100L 0 62.5C 13.941666666666666 62.5 25.89166666666667 7.5 39.833333333333336 7.5C 53.775000000000006 7.5 65.72500000000001 80 79.66666666666667 80C 93.60833333333333 80 105.55833333333334 2.5 119.5 2.5C 133.44166666666666 2.5 145.39166666666668 45 159.33333333333334 45C 173.275 45 185.225 10 199.16666666666666 10C 213.10833333333332 10 225.05833333333334 42.5 239 42.5C 252.94166666666666 42.5 264.89166666666665 37.5 278.8333333333333 37.5C 292.775 37.5 304.725 2.5 318.6666666666667 2.5C 332.60833333333335 2.5 344.55833333333334 37.5 358.5 37.5C 372.44166666666666 37.5 384.39166666666665 7.5 398.3333333333333 7.5C 412.275 7.5 424.225 30 438.1666666666667 30C 452.10833333333335 30 464.05833333333334 7.5 478 7.5C 478 7.5 478 7.5 478 100M 478 7.5z"
                                                                            pathFrom="M -1 150L -1 150L 39.833333333333336 150L 79.66666666666667 150L 119.5 150L 159.33333333333334 150L 199.16666666666666 150L 239 150L 278.8333333333333 150L 318.6666666666667 150L 358.5 150L 398.3333333333333 150L 438.1666666666667 150L 478 150">
                                                                        </path>
                                                                        <path id="SvgjsPath1348"
                                                                            d="M 0 62.5C 13.941666666666666 62.5 25.89166666666667 7.5 39.833333333333336 7.5C 53.775000000000006 7.5 65.72500000000001 80 79.66666666666667 80C 93.60833333333333 80 105.55833333333334 2.5 119.5 2.5C 133.44166666666666 2.5 145.39166666666668 45 159.33333333333334 45C 173.275 45 185.225 10 199.16666666666666 10C 213.10833333333332 10 225.05833333333334 42.5 239 42.5C 252.94166666666666 42.5 264.89166666666665 37.5 278.8333333333333 37.5C 292.775 37.5 304.725 2.5 318.6666666666667 2.5C 332.60833333333335 2.5 344.55833333333334 37.5 358.5 37.5C 372.44166666666666 37.5 384.39166666666665 7.5 398.3333333333333 7.5C 412.275 7.5 424.225 30 438.1666666666667 30C 452.10833333333335 30 464.05833333333334 7.5 478 7.5"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="#3f4254" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0" class="apexcharts-area"
                                                                            index="0"
                                                                            clip-path="url(#gridRectMask8vdtst12j)"
                                                                            pathTo="M 0 62.5C 13.941666666666666 62.5 25.89166666666667 7.5 39.833333333333336 7.5C 53.775000000000006 7.5 65.72500000000001 80 79.66666666666667 80C 93.60833333333333 80 105.55833333333334 2.5 119.5 2.5C 133.44166666666666 2.5 145.39166666666668 45 159.33333333333334 45C 173.275 45 185.225 10 199.16666666666666 10C 213.10833333333332 10 225.05833333333334 42.5 239 42.5C 252.94166666666666 42.5 264.89166666666665 37.5 278.8333333333333 37.5C 292.775 37.5 304.725 2.5 318.6666666666667 2.5C 332.60833333333335 2.5 344.55833333333334 37.5 358.5 37.5C 372.44166666666666 37.5 384.39166666666665 7.5 398.3333333333333 7.5C 412.275 7.5 424.225 30 438.1666666666667 30C 452.10833333333335 30 464.05833333333334 7.5 478 7.5"
                                                                            pathFrom="M -1 150L -1 150L 39.833333333333336 150L 79.66666666666667 150L 119.5 150L 159.33333333333334 150L 199.16666666666666 150L 239 150L 278.8333333333333 150L 318.6666666666667 150L 358.5 150L 398.3333333333333 150L 438.1666666666667 150L 478 150"
                                                                            fill-rule="evenodd"></path>
                                                                        <g id="SvgjsG1345"
                                                                            class="apexcharts-series-markers-wrap"
                                                                            data:realIndex="0">
                                                                            <g class="apexcharts-series-markers">
                                                                                <circle id="SvgjsCircle1383" r="0"
                                                                                    cx="0" cy="0"
                                                                                    class="apexcharts-marker wiy0d54y8 no-pointer-events"
                                                                                    stroke="#3f4254" fill="#75cc68"
                                                                                    fill-opacity="1" stroke-width="2"
                                                                                    stroke-opacity="0.9"
                                                                                    default-marker-size="0"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG1346" class="apexcharts-datalabels"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <line id="SvgjsLine1377" x1="0" y1="0" x2="0" y2="100"
                                                                    stroke="#3f4254" stroke-dasharray="3"
                                                                    stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                                                    x="0" y="0" width="1" height="100" fill="#b1b9c4"
                                                                    filter="none" fill-opacity="0.9" stroke-width="1">
                                                                </line>
                                                                <line id="SvgjsLine1378" x1="0" y1="0" x2="478" y2="0"
                                                                    stroke="#b6b6b6" stroke-dasharray="0"
                                                                    stroke-width="1" stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs"></line>
                                                                <line id="SvgjsLine1379" x1="0" y1="0" x2="478" y2="0"
                                                                    stroke-dasharray="0" stroke-width="0"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG1380" class="apexcharts-yaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG1381" class="apexcharts-xaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG1382" class="apexcharts-point-annotations">
                                                                </g>
                                                                <rect id="SvgjsRect1384" width="0" height="0" x="0"
                                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                                    class="apexcharts-zoom-rect"></rect>
                                                                <rect id="SvgjsRect1385" width="0" height="0" x="0"
                                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                                    class="apexcharts-selection-rect"></rect>
                                                            </g>
                                                            <g id="SvgjsG1364" class="apexcharts-yaxis" rel="0"
                                                                transform="translate(-8, 0)">
                                                                <g id="SvgjsG1365" class="apexcharts-yaxis-texts-g"></g>
                                                            </g>
                                                            <rect id="SvgjsRect1376" width="0" height="0" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fefefe"></rect>
                                                            <g id="SvgjsG1339" class="apexcharts-annotations"></g>
                                                        </svg>
                                                        <div class="apexcharts-legend" style="max-height: 62.5px;">
                                                        </div>
                                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                                            <div class="apexcharts-tooltip-title"
                                                                style="font-family: inherit; font-size: 12px;"></div>
                                                            <div class="apexcharts-tooltip-series-group"
                                                                style="order: 1;"><span
                                                                    class="apexcharts-tooltip-marker"
                                                                    style="background-color: rgb(117, 204, 104);"></span>
                                                                <div class="apexcharts-tooltip-text"
                                                                    style="font-family: inherit; font-size: 12px;">
                                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                                            class="apexcharts-tooltip-text-y-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                                            class="apexcharts-tooltip-text-goals-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                            <div class="apexcharts-xaxistooltip-text"
                                                                style="font-family: inherit; font-size: 12px;"></div>
                                                        </div>
                                                        <div
                                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                            <div class="apexcharts-yaxistooltip-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 12-->


                                        <!--begin::Card widget 10-->
                                        <div class="card card-flush h-md-50 mb-lg-10">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                                                    <!--end::Amount-->

                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Expected Earnings
                                                        This Month</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Card body-->
                                            <div class="card-body d-flex align-items-end pt-0">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center flex-wrap">
                                                    <!--begin::Chart-->
                                                    <div class="d-flex me-7 me-xxl-10">
                                                        <div id="kt_card_widget_10_chart" class="min-h-auto"
                                                            style="height: 78px; width: 78px" data-kt-size="78"
                                                            data-kt-line="11">
                                                            <span></span><canvas height="78" width="78"></canvas>
                                                        </div>
                                                    </div>
                                                    <!--end::Chart-->

                                                    <!--begin::Labels-->
                                                    <div class="d-flex flex-column content-justify-center flex-grow-1">
                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center">
                                                            <!--begin::Bullet-->
                                                            <div class="bullet w-8px h-6px rounded-2 bg-success me-3">
                                                            </div>
                                                            <!--end::Bullet-->

                                                            <!--begin::Label-->
                                                            <div class="fs-6 fw-semibold text-gray-400 flex-shrink-0">
                                                                Used Truck freight</div>
                                                            <!--end::Label-->

                                                            <!--begin::Separator-->
                                                            <div
                                                                class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                            </div>
                                                            <!--end::Separator-->

                                                            <!--begin::Stats-->
                                                            <div class="ms-auto fw-bolder text-gray-700 text-end">45%
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center my-1">
                                                            <!--begin::Bullet-->
                                                            <div class="bullet w-8px h-6px rounded-2 bg-primary me-3">
                                                            </div>
                                                            <!--end::Bullet-->

                                                            <!--begin::Label-->
                                                            <div class="fs-6 fw-semibold text-gray-400 flex-shrink-0">
                                                                Used Ship freight</div>
                                                            <!--end::Label-->

                                                            <!--begin::Separator-->
                                                            <div
                                                                class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                            </div>
                                                            <!--end::Separator-->

                                                            <!--begin::Stats-->
                                                            <div class="ms-auto fw-bolder text-gray-700 text-end">21%
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Label-->

                                                        <!--begin::Label-->
                                                        <div class="d-flex fs-6 fw-semibold align-items-center">
                                                            <!--begin::Bullet-->
                                                            <div class="bullet w-8px h-6px rounded-2 me-3"
                                                                style="background-color: #E4E6EF"></div>
                                                            <!--end::Bullet-->

                                                            <!--begin::Label-->
                                                            <div class="fs-6 fw-semibold text-gray-400 flex-shrink-0">
                                                                Used Plane freight</div>
                                                            <!--end::Label-->

                                                            <!--begin::Separator-->
                                                            <div
                                                                class="separator separator-dashed min-w-10px flex-grow-1 mx-2">
                                                            </div>
                                                            <!--end::Separator-->

                                                            <!--begin::Stats-->
                                                            <div class="ms-auto fw-bolder text-gray-700 text-end">34%
                                                            </div>
                                                            <!--end::Stats-->
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Labels-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 10-->
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-md-6 col-xl-6 mb-md-5 mb-xl-10">

                                        <!--begin::Card widget 13-->
                                        <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                            <!--begin::Card body-->
                                            <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                <!--begin::Statistics-->
                                                <div class="mb-4 px-9">
                                                    <!--begin::Statistics-->
                                                    <div class="d-flex align-items-center mb-2">


                                                        <!--begin::Value-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">259,786</span>
                                                        <!--end::Value-->

                                                        <!--begin::Label-->

                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Statistics-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-400">Total Shipments</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->

                                                <!--begin::Chart-->
                                                <div id="kt_card_widget_13_chart" class="min-h-auto"
                                                    style="height: 125px; min-height: 140px;">
                                                    <div id="apexchartszds5fmei"
                                                        class="apexcharts-canvas apexchartszds5fmei apexcharts-theme-light"
                                                        style="width: 449px; height: 125px;"><svg id="SvgjsSvg1386"
                                                            width="449" height="125" xmlns="http://www.w3.org/2000/svg"
                                                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.dev"
                                                            class="apexcharts-svg apexcharts-zoomable"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent;">
                                                            <g id="SvgjsG1388"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(-10, 30)">
                                                                <defs id="SvgjsDefs1387">
                                                                    <clipPath id="gridRectMaskzds5fmei">
                                                                        <rect id="SvgjsRect1391" width="484"
                                                                            height="102" x="-3" y="-1" rx="0" ry="0"
                                                                            opacity="1" stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="forecastMaskzds5fmei"></clipPath>
                                                                    <clipPath id="nonForecastMaskzds5fmei"></clipPath>
                                                                    <clipPath id="gridRectMarkerMaskzds5fmei">
                                                                        <rect id="SvgjsRect1392" width="482"
                                                                            height="104" x="-2" y="-2" rx="0" ry="0"
                                                                            opacity="1" stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <g id="SvgjsG1399" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG1400" class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, -4)"></g>
                                                                </g>
                                                                <g id="SvgjsG1416" class="apexcharts-grid">
                                                                    <g id="SvgjsG1417"
                                                                        class="apexcharts-gridlines-horizontal">
                                                                        <line id="SvgjsLine1419" x1="0" y1="0" x2="478"
                                                                            y2="0" stroke="#e1e3ea" stroke-dasharray="4"
                                                                            stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1420" x1="0" y1="25" x2="478"
                                                                            y2="25" stroke="#e1e3ea"
                                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1421" x1="0" y1="50" x2="478"
                                                                            y2="50" stroke="#e1e3ea"
                                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1422" x1="0" y1="75" x2="478"
                                                                            y2="75" stroke="#e1e3ea"
                                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine1423" x1="0" y1="100"
                                                                            x2="478" y2="100" stroke="#e1e3ea"
                                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <g id="SvgjsG1418"
                                                                        class="apexcharts-gridlines-vertical"></g>
                                                                    <line id="SvgjsLine1425" x1="0" y1="100" x2="478"
                                                                        y2="100" stroke="transparent"
                                                                        stroke-dasharray="0" stroke-linecap="butt">
                                                                    </line>
                                                                    <line id="SvgjsLine1424" x1="0" y1="1" x2="0"
                                                                        y2="100" stroke="transparent"
                                                                        stroke-dasharray="0" stroke-linecap="butt">
                                                                    </line>
                                                                </g>
                                                                <g id="SvgjsG1393"
                                                                    class="apexcharts-area-series apexcharts-plot-series">
                                                                    <g id="SvgjsG1394" class="apexcharts-series"
                                                                        seriesName="Shipments" data:longestSeries="true"
                                                                        rel="1" data:realIndex="0">
                                                                        <path id="SvgjsPath1397"
                                                                            d="M 0 100L 0 87.5C 13.941666666666666 87.5 25.89166666666667 12.5 39.833333333333336 12.5C 53.775000000000006 12.5 65.72500000000001 75 79.66666666666667 75C 93.60833333333333 75 105.55833333333334 50 119.5 50C 133.44166666666666 50 145.39166666666668 75 159.33333333333334 75C 173.275 75 185.225 25 199.16666666666666 25C 213.10833333333332 25 225.05833333333334 62.5 239 62.5C 252.94166666666666 62.5 264.89166666666665 75 278.8333333333333 75C 292.775 75 304.725 62.5 318.6666666666667 62.5C 332.60833333333335 62.5 344.55833333333334 25 358.5 25C 372.44166666666666 25 384.39166666666665 37.5 398.3333333333333 37.5C 412.275 37.5 424.225 12.5 438.1666666666667 12.5C 452.10833333333335 12.5 464.05833333333334 62.5 478 62.5C 478 62.5 478 62.5 478 100M 478 62.5z"
                                                                            fill="rgba(117,204,104,0)" fill-opacity="1"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="0" stroke-dasharray="0"
                                                                            class="apexcharts-area" index="0"
                                                                            clip-path="url(#gridRectMaskzds5fmei)"
                                                                            pathTo="M 0 100L 0 87.5C 13.941666666666666 87.5 25.89166666666667 12.5 39.833333333333336 12.5C 53.775000000000006 12.5 65.72500000000001 75 79.66666666666667 75C 93.60833333333333 75 105.55833333333334 50 119.5 50C 133.44166666666666 50 145.39166666666668 75 159.33333333333334 75C 173.275 75 185.225 25 199.16666666666666 25C 213.10833333333332 25 225.05833333333334 62.5 239 62.5C 252.94166666666666 62.5 264.89166666666665 75 278.8333333333333 75C 292.775 75 304.725 62.5 318.6666666666667 62.5C 332.60833333333335 62.5 344.55833333333334 25 358.5 25C 372.44166666666666 25 384.39166666666665 37.5 398.3333333333333 37.5C 412.275 37.5 424.225 12.5 438.1666666666667 12.5C 452.10833333333335 12.5 464.05833333333334 62.5 478 62.5C 478 62.5 478 62.5 478 100M 478 62.5z"
                                                                            pathFrom="M -1 125L -1 125L 39.833333333333336 125L 79.66666666666667 125L 119.5 125L 159.33333333333334 125L 199.16666666666666 125L 239 125L 278.8333333333333 125L 318.6666666666667 125L 358.5 125L 398.3333333333333 125L 438.1666666666667 125L 478 125">
                                                                        </path>
                                                                        <path id="SvgjsPath1398"
                                                                            d="M 0 87.5C 13.941666666666666 87.5 25.89166666666667 12.5 39.833333333333336 12.5C 53.775000000000006 12.5 65.72500000000001 75 79.66666666666667 75C 93.60833333333333 75 105.55833333333334 50 119.5 50C 133.44166666666666 50 145.39166666666668 75 159.33333333333334 75C 173.275 75 185.225 25 199.16666666666666 25C 213.10833333333332 25 225.05833333333334 62.5 239 62.5C 252.94166666666666 62.5 264.89166666666665 75 278.8333333333333 75C 292.775 75 304.725 62.5 318.6666666666667 62.5C 332.60833333333335 62.5 344.55833333333334 25 358.5 25C 372.44166666666666 25 384.39166666666665 37.5 398.3333333333333 37.5C 412.275 37.5 424.225 12.5 438.1666666666667 12.5C 452.10833333333335 12.5 464.05833333333334 62.5 478 62.5"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="#3f4254" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0" class="apexcharts-area"
                                                                            index="0"
                                                                            clip-path="url(#gridRectMaskzds5fmei)"
                                                                            pathTo="M 0 87.5C 13.941666666666666 87.5 25.89166666666667 12.5 39.833333333333336 12.5C 53.775000000000006 12.5 65.72500000000001 75 79.66666666666667 75C 93.60833333333333 75 105.55833333333334 50 119.5 50C 133.44166666666666 50 145.39166666666668 75 159.33333333333334 75C 173.275 75 185.225 25 199.16666666666666 25C 213.10833333333332 25 225.05833333333334 62.5 239 62.5C 252.94166666666666 62.5 264.89166666666665 75 278.8333333333333 75C 292.775 75 304.725 62.5 318.6666666666667 62.5C 332.60833333333335 62.5 344.55833333333334 25 358.5 25C 372.44166666666666 25 384.39166666666665 37.5 398.3333333333333 37.5C 412.275 37.5 424.225 12.5 438.1666666666667 12.5C 452.10833333333335 12.5 464.05833333333334 62.5 478 62.5"
                                                                            pathFrom="M -1 125L -1 125L 39.833333333333336 125L 79.66666666666667 125L 119.5 125L 159.33333333333334 125L 199.16666666666666 125L 239 125L 278.8333333333333 125L 318.6666666666667 125L 358.5 125L 398.3333333333333 125L 438.1666666666667 125L 478 125"
                                                                            fill-rule="evenodd"></path>
                                                                        <g id="SvgjsG1395"
                                                                            class="apexcharts-series-markers-wrap"
                                                                            data:realIndex="0">
                                                                            <g class="apexcharts-series-markers">
                                                                                <circle id="SvgjsCircle1433" r="0"
                                                                                    cx="0" cy="0"
                                                                                    class="apexcharts-marker wxkz7ts5fi no-pointer-events"
                                                                                    stroke="#3f4254" fill="#75cc68"
                                                                                    fill-opacity="1" stroke-width="2"
                                                                                    stroke-opacity="0.9"
                                                                                    default-marker-size="0"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG1396" class="apexcharts-datalabels"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <line id="SvgjsLine1427" x1="0" y1="0" x2="0" y2="100"
                                                                    stroke="#3f4254" stroke-dasharray="3"
                                                                    stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                                                    x="0" y="0" width="1" height="100" fill="#b1b9c4"
                                                                    filter="none" fill-opacity="0.9" stroke-width="1">
                                                                </line>
                                                                <line id="SvgjsLine1428" x1="0" y1="0" x2="478" y2="0"
                                                                    stroke="#b6b6b6" stroke-dasharray="0"
                                                                    stroke-width="1" stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs"></line>
                                                                <line id="SvgjsLine1429" x1="0" y1="0" x2="478" y2="0"
                                                                    stroke-dasharray="0" stroke-width="0"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG1430" class="apexcharts-yaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG1431" class="apexcharts-xaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG1432" class="apexcharts-point-annotations">
                                                                </g>
                                                                <rect id="SvgjsRect1434" width="0" height="0" x="0"
                                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                                    class="apexcharts-zoom-rect"></rect>
                                                                <rect id="SvgjsRect1435" width="0" height="0" x="0"
                                                                    y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                                    class="apexcharts-selection-rect"></rect>
                                                            </g>
                                                            <g id="SvgjsG1414" class="apexcharts-yaxis" rel="0"
                                                                transform="translate(-8, 0)">
                                                                <g id="SvgjsG1415" class="apexcharts-yaxis-texts-g"></g>
                                                            </g>
                                                            <rect id="SvgjsRect1426" width="0" height="0" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fefefe"></rect>
                                                            <g id="SvgjsG1389" class="apexcharts-annotations"></g>
                                                        </svg>
                                                        <div class="apexcharts-legend" style="max-height: 62.5px;">
                                                        </div>
                                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                                            <div class="apexcharts-tooltip-title"
                                                                style="font-family: inherit; font-size: 12px;"></div>
                                                            <div class="apexcharts-tooltip-series-group"
                                                                style="order: 1;"><span
                                                                    class="apexcharts-tooltip-marker"
                                                                    style="background-color: rgb(117, 204, 104);"></span>
                                                                <div class="apexcharts-tooltip-text"
                                                                    style="font-family: inherit; font-size: 12px;">
                                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                                            class="apexcharts-tooltip-text-y-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                                            class="apexcharts-tooltip-text-goals-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                            <div class="apexcharts-xaxistooltip-text"
                                                                style="font-family: inherit; font-size: 12px;"></div>
                                                        </div>
                                                        <div
                                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                            <div class="apexcharts-yaxistooltip-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 13-->




                                        <!--begin::Card widget 7-->
                                        <div class="card card-flush h-md-50 mb-lg-10">
                                            <!--begin::Header-->
                                            <div class="card-header pt-5">
                                                <!--begin::Title-->
                                                <div class="card-title d-flex flex-column">
                                                    <!--begin::Amount-->
                                                    <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">604</span>
                                                    <!--end::Amount-->

                                                    <!--begin::Subtitle-->
                                                    <span class="text-gray-400 pt-1 fw-semibold fs-6">New Customers This
                                                        Month</span>
                                                    <!--end::Subtitle-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Card body-->
                                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                                <!--begin::Title-->
                                                <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s
                                                    Heroes</span>
                                                <!--end::Title-->

                                                <!--begin::Users group-->
                                                <div class="symbol-group symbol-hover flex-nowrap">
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Alan Warden"
                                                        data-kt-initialized="1">
                                                        <span
                                                            class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" aria-label="Michael Eberon"
                                                        data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                                                        <img alt="Pic"
                                                            src="https://preview.keenthemes.com/metronic8/demo37/assets/media/avatars/300-11.jpg">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Susan Redwood"
                                                        data-kt-initialized="1">
                                                        <span
                                                            class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" aria-label="Melody Macy"
                                                        data-bs-original-title="Melody Macy" data-kt-initialized="1">
                                                        <img alt="Pic"
                                                            src="https://preview.keenthemes.com/metronic8/demo37/assets/media/avatars/300-2.jpg">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Perry Matthew"
                                                        data-kt-initialized="1">
                                                        <span
                                                            class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" aria-label="Barry Walter"
                                                        data-bs-original-title="Barry Walter" data-kt-initialized="1">
                                                        <img alt="Pic"
                                                            src="https://preview.keenthemes.com/metronic8/demo37/assets/media/avatars/300-12.jpg">
                                                    </div>
                                                    <a href="#" class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                        <span
                                                            class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
                                                    </a>
                                                </div>
                                                <!--end::Users group-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card widget 7-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Content wrapper-->


                        <!--begin::Footer-->
                        <div id="kt_app_footer"
                            class="app-footer  d-flex flex-column flex-md-row align-items-center flex-center flex-md-stack py-2 py-lg-4 ">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023©</span>
                                <a href="https://keenthemes.com" target="_blank"
                                    class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com" target="_blank"
                                        class="menu-link px-2">About</a></li>

                                <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank"
                                        class="menu-link px-2">Support</a></li>

                                <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank"
                                        class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->


                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>

    
@include('voyager::partials.app-footer')
