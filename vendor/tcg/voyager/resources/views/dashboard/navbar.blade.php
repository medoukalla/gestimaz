<!--begin::Header-->
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
                    <i class="ki-outline ki-abstract-14 fs-2"></i> </button>
                <!--end::Logo wrapper-->

                <!--begin::Logo image-->
                <a href="{{ route('voyager.dashboard') }}">
                    <img alt="Logo" src="{{ asset('gestimmaz').'/'.setting('site.logo') }}"
                        class="h-30px h-lg-40px theme-light-show">
                </a>
                <!--end::Logo image-->
            </div>
            <!--end::Logo wrapper-->

            <!--begin::Menu wrapper-->
            <div id="kt_app_header_menu_wrapper" class="d-flex align-items-center w-100">
                <!--begin::Header menu-->
                <div class="app-header-menu app-header-mobile-drawer align-items-start align-items-lg-center w-100"
                    data-kt-drawer="true" data-kt-drawer-name="app-header-menu"
                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                    data-kt-drawer-width="250px" data-kt-drawer-direction="end"
                    data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
                    <!--begin::Menu-->
                    <div class=" menu  menu-rounded   menu-column  menu-lg-row  menu-active-bg menu-state-primary menu-title-gray-700  menu-arrow-gray-400   menu-bullet-gray-400 my-5  my-lg-0  align-items-stretch  fw-semibold  px-2  px-lg-0  "
                        id="#kt_header_menu" data-kt-menu="true">

                        
                        <!--begin:Menu item-->
                        <div class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                            <!--begin:Menu link-->

                            <span class="menu-link">
                                <a href="#">
                                        <span class="menu-title">
                                        لوحة التحكم
                                    </span>
                                    </a>
                            </span>
                            <!--end:Menu link-->
                            
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


                <!--begin::Notifications-->
                <div class="app-navbar-item ms-1 ms-lg-5">
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
                                Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
                            </h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Tab content-->
                        <div class="tab-content">

                            <!--begin::Tab panel-->
                            <div class="tab-pane fade show active" id="kt_topbar_notifications_3" role="tabpanel">
                                <!--begin::Items-->
                                <div class="scroll-y mh-325px my-5 px-8">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-success me-4">200
                                                OK</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New
                                                order</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">Just now</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-danger me-4">500
                                                ERR</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New
                                                customer</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">2 hrs</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-success me-4">200
                                                OK</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment
                                                process</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">5 hrs</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-warning me-4">300
                                                WRN</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search
                                                query</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">2 days</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-success me-4">200
                                                OK</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
                                                connection</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">1 week</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-success me-4">200
                                                OK</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database
                                                restore</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">Mar 5</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-warning me-4">300
                                                WRN</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System
                                                update</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">May 15</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-warning me-4">300
                                                WRN</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server
                                                OS update</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">Apr 3</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-warning me-4">300
                                                WRN</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API
                                                rollback</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">Jun 30</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-danger me-4">500
                                                ERR</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund
                                                process</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">Jul 10</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-danger me-4">500
                                                ERR</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                                process</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">Sep 10</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Code-->
                                            <span class="w-70px badge badge-light-danger me-4">500
                                                ERR</span>
                                            <!--end::Code-->

                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail
                                                tasks</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Section-->

                                        <!--begin::Label-->
                                        <span class="badge badge-light fs-8">Dec 10</span>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->

                                </div>
                                <!--end::Items-->

                                <!--begin::View more-->
                                <div class="py-3 text-center border-top">
                                    <a href="https://preview.keenthemes.com/metronic8/demo37/../demo37/pages/user-profile/activity.html"
                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                        View All
                                        <i class="ki-outline ki-arrow-right fs-5"></i> </a>
                                </div>
                                <!--end::View more-->
                            </div>
                            <!--end::Tab panel-->

                        </div>
                        <!--end::Tab content-->
                    </div>
                    <!--end::Menu--> <!--end::Menu wrapper-->
                </div>
                <!--end::Notifications-->

                

                <!--begin::User menu-->
                <div class="app-navbar-item ms-3 ms-lg-5" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <img class="symbol symbol-circle symbol-35px symbol-md-40px"
                            src="https://preview.keenthemes.com/metronic8/demo37/assets/media/avatars/300-13.jpg"
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
                                        src="https://preview.keenthemes.com/metronic8/demo37/assets/media/avatars/300-13.jpg">
                                </div>
                                <!--end::Avatar-->

                                <!--begin::Username-->
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
                                        {{ Auth::user()->name }}
                                    </div>

                                    <a class="fw-semibold text-muted text-hover-primary fs-7">
                                        {{ Auth::user()->email }}
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
                                حسابي
                            </a>
                        </div>
                        <!--end::Menu item-->


                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->


                        <!--begin::Menu item-->
                        <div class="menu-item px-5 my-1">
                            <a href="https://preview.keenthemes.com/metronic8/demo37/../demo37/account/settings.html"
                                class="menu-link px-5">
                                Account Settings
                            </a>
                        </div>
                        <!--end::Menu item-->

                        <!--begin::Menu item-->
                        <div class="menu-item px-5">
                            <a href="https://preview.keenthemes.com/metronic8/demo37/../demo37/authentication/layouts/corporate/sign-in.html"
                                class="menu-link px-5">
                                Sign Out
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
<!--end::Header-->