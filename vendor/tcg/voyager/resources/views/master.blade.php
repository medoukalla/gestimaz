<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="rtl">
<head>
    <title>@yield('page_title', setting('admin.title') . " - " . setting('admin.description'))</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="assets-path" content="{{ route('voyager.voyager_assets') }}"/>
    
    
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!-- fontawesome -->    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css" integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Favicon -->
    <?php $admin_favicon = Voyager::setting('admin.icon_image', ''); ?>
    @if($admin_favicon == '')
        <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/png">
    @else
        <link rel="shortcut icon" href="{{ Voyager::image($admin_favicon) }}" type="image/png">
    @endif

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('css/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
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
                                                <span><span class="fw-light">Bienvenu @auth </span>{{ Auth::user()->name }}</span> @endauth

                                            </h1>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Page title-->



                                    </div>
                                    <!--end::Toolbar container-->

                                    <!--begin::Actions-->
                                    <div class="d-flex align-self-center flex-center flex-shrink-0">
                                        <a href="Javascript:;" class="btn btn-sm btn-danger ms-3 px-4 py-3" onclick="document.getElementById('signoutFrom').submit();">
                                            Se déconnecter
                                        </a>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            <!--end::Toolbar-->

                            <!--begin::Content-->
                            <div class="card mb-5 mb-xl-10">
                                <div class="card-body pt-9 pb-0">
                                    
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        
                                        <div class="me-7 mb-9">
                                            <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                                <img src="{{ asset('app').'/'.Auth::user()->avatar }}" alt="image">
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="flex-grow-1">
                                            
                                            <div class="d-flex justify-content-between align-items-sta/metronic8/demo37/assets/media/avatars/300-1.jpgrt flex-wrap mb-2">
                                                
                                                <div class="d-flex flex-column">
                                                    
                                                    <div class="d-flex align-items-center mb-2">
                                                        <a href="#" class="text-gray-900 text-hover-primary fs-3 fw-bold me-1"> {{ Auth::user()->name }}</a>
                                                        
                                                    </div>
                                                               
                                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                            {{ Auth::user()->role->display_name }}
                                                        </a>
                                                        
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                            {{ Auth::user()->email }}
                                                        </a>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                        
                                            
                                            <div class="d-flex flex-wrap flex-stack">
                                                
                                                <div class="d-flex flex-column flex-grow-1 pe-8">
                                                    
                                                    <div class="d-flex flex-wrap">
                                                        
                                                        <a href="{{ route('voyager.buildings.index') }}">
                                                            <div class="border border-gray-300 border-dashed bg-light-secondary rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted">
                                                                        {{ \App\Models\Admin::count_total_buildings() }}
                                                                </div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">عدد العمارات</div>
                                                            </div>
                                                        </a>
                                                        
                        
                                                        
                                                        <a href="{{ route('voyager.apartments.index') }}">
                                                            <div class="border border-gray-300 border-dashed bg-light-secondary rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted">
                                                                        {{ \App\Models\Admin::count_total_locals() }}
                                                                    </div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">عدد المحلات</div>
                                                                
                                                            </div>
                                                        </a>
                                                        
                        
                                                        
                                                        <a href="{{ route('voyager.users.index') }}">
                                                            <div class="border border-gray-300 border-dashed bg-light-secondary rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted" >
                                                                        {{ \App\Models\Admin::count_total_team_members() }}
                                                                    </div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">أعضاء الفريق</div>        
                                                            </div>
                                                        </a>
                        
                        
                                                        <a href="{{ route('voyager.projects.index') }}">
                                                           <div class="border border-gray-300 border-dashed bg-light-secondary rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted" >
                                                                        {{ \App\Models\Admin::count_total_projects() }}
                                                                    </div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">عدد المشاريع</div>
                                                            </div>
                                                        </a>                                                        


                                                        <a href="{{ route('voyager.payments.index') }}">
                                                            <div class="border border-gray-300 border-dashed bg-light-success rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted" >
                                                                        {{ \App\Models\Admin::count_amount_payment_month() }} درهم
                                                                    </div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 ">دفعات هذا الشهر</div>
                                                            </div>
                                                        </a>

                                                        <a href="{{ route('voyager.invoices.index') }}">
                                                            <div class="border border-gray-300 border-dashed bg-light-danger rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted" >
                                                                        {{ \App\Models\Admin::count_amount_invoices_month() }} درهم
                                                                    </div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 ">دفعات هذا الشهر</div>
                                                            </div>
                                                        </a>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                        
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                
                                </div>
                            </div>
                                
                                <!-- PAGE CONTENT -->
                                <div id="vyager" class="card card-flush ">
                                    <div class="card-body">

                                        @yield('page_header')
                                        @yield('content')
                                        
                                    </div>
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


    {{-- Assets  --}}
    <script src="{{ asset('js/plugins.bundle.js') }}"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('js/widgets.js') }}"></script>

    <script type="text/javascript" src="{{ voyager_asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">

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

    @if(!empty(config('voyager.additional_js')))
        <!-- Additional Javascript -->
        @foreach(config('voyager.additional_js') as $js)
            <script type="text/javascript" src="{{ asset($js) }}"></script>
        @endforeach
    @endif


</body>

</html>