<!--begin::Header-->
@livewireStyles
<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate-="true"
    data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: '200px', lg: '300px'}"
    style="animation-duration: 0.3s;">

    <!--begin::Header container-->
    <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">
        <!--begin::Header wrapper-->
        <div class="app-header-wrapper d-flex flex-grow-1 align-items-stretch justify-content-between"
            id="kt_app_header_wrapper">

            <!--begin::Logo wrapper-->
            <div
                class="app-header-logo d-flex flex-shrink-0 align-items-center justify-content-between justify-content-lg-center">
                <!--begin::Logo wrapper-->
                <button class="btn btn-icon btn-color-gray-600 btn-active-color-primary ms-n3 me-2 d-flex d-lg-none"
                    id="kt_app_sidebar_toggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <!--end::Logo wrapper-->

                <!--begin::Logo image-->
                <a href="{{ route('frontend.index') }}">
                    <img alt="Logo" src="{{ asset('app').'/'.setting('site.logo') }}"
                        class="h-30px h-lg-40px theme-light-show">
                </a>
                <!--end::Logo image-->
            </div>
            <!--end::Logo wrapper-->

            <!--begin::Menu wrapper-->
            <div id="kt_app_header_menu_wrapper" class="d-flex align-items-center w-100">
                <!--begin::Header menu-->
                <div class="app-header-menu app-header-mobile-drawer align-items-start align-items-lg-center w-100" >
                    <!--begin::Menu-->
                    <div class=" menu  menu-rounded   menu-column  menu-lg-row  menu-active-bg menu-state-primary menu-title-gray-700  menu-arrow-gray-400   menu-bullet-gray-400 my-5  my-lg-0  align-items-stretch  fw-semibold  px-2  px-lg-0  "
                        id="#kt_header_menu" data-kt-menu="true">

                        
                        <!--begin:Menu item-->
                        <div class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                            
                            {{ menu('top_menu', 'top_menu') }}
                            
                        </div>
                        <!--end:Menu item-->

                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Header menu-->
            </div>
            <!--end::Menu wrapper-->

            <!--begin::Navbar-->
            <div class="app-navbar flex-shrink-0">

                
                <div class="app-navbar-item ms-1 ms-lg-5" >
                    <!--begin::Menu- wrapper-->
                        <div class="btn btn-icon btn-custom btn-active-color-primary btn-color-gray-700 w-35px h-35px w-md-40px h-md-40px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom">
                        <i class="fa-solid fa-bell fa-shake text-danger" style="font-size: 24px;"></i>
                    </div>

                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true"
                        id="kt_menu_notifications">
                        <!--begin::Heading-->
                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                            style="background-image:url('https://preview.keenthemes.com/metronic8/demo37/assets/media/misc/menu-header-bg.jpg')">
                            <!--begin::Title-->
                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                les notifications
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Tab content-->
                        <div class="tab-content">

                            {{-- @livewire('notifications') --}}

                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Menu--> <!--end::Menu wrapper-->
                </div>

                

                <!--begin::User menu-->
                <div class="app-navbar-item ms-3 ms-lg-5" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <img class="symbol symbol-circle symbol-35px symbol-md-40px"
                            src="{{ $user_avatar }}"
                            alt="user">
                    </div>

                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true" >
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo"
                                        src="{{ $user_avatar }}">
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        @auth {{ Auth::user()->name }} @endauth
                                    </div>

                                    <a class="fw-semibold text-muted text-hover-primary fs-7">
                                        @auth {{ Auth::user()->email }} @endauth
                                    </a>
                                </div>
                                <!--end::Username-->
                            </div>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="{{ route('voyager.profile') }}"
                                class="menu-link px-5">
                                Mon compte
                            </a>
                        </div>
                        <!--end::Menu item-->


                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->


                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="{{ url('dashboard/users/'.Auth::user()->id.'/edit') }}"
                                class="menu-link px-5">
                                Paramètres du compte
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <form id="signoutFrom" action="{{ route('voyager.logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                            <a href="Javascript:;" class="menu-link px-5" onclick="document.getElementById('signoutFrom').submit();">
                                Se déconnecter
                            </a>
                        </div>
                        <!--end::Menu item-->

                    </div>
                    <!--end::User account menu-->

                    <!--end::Menu wrapper-->
                </div>
                <!--end::User menu-->

                <!--begin::Header menu toggle-->
                <div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
                    <div class="btn btn-icon btn-custom btn-active-color-primary btn-color-gray-700 w-35px h-35px w-md-40px h-md-40px"
                        id="kt_app_header_menu_toggle">
                        <i class="ki-outline ki-text-align-left fs-1"></i>
                    </div>
                </div>
                <!--end::Header menu toggle-->

            </div>
            <!--end::Navbar-->
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
@livewireScripts
<!--end::Header-->