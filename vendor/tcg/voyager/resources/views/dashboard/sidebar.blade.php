<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
    data-kt-drawer-overlay="true" data-kt-drawer-width="275px" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_app_sidebar_toggle">

    <!--begin::Sidebar nav-->
    <div class="app-sidebar-wrapper py-8 py-lg-10" id="kt_app_sidebar_wrapper">
        <!--begin::Nav wrapper-->
        <div id="kt_app_sidebar_nav_wrapper" class="d-flex flex-column px-8 px-lg-10 hover-scroll-y"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto"
            data-kt-scroll-dependencies="{default: false, lg: '#kt_app_header'}"
            data-kt-scroll-wrappers="#kt_app_sidebar, #kt_app_sidebar_wrapper"
            data-kt-scroll-offset="{default: '10px', lg: '40px'}" style="max-height: 467px;">


            <!--begin::Links-->
            <div class="mb-0">
                <!--begin::Title-->
                <h3 class="text-gray-800 fw-bold mb-8">Pages</h3>
                <!--end::Title-->

                <!--begin::Row-->
                <div class="row g-5" data-kt-buttons="true"
                    data-kt-buttons-target="[data-kt-button]" data-kt-initialized="1">


                    {{-- If client logged in  --}}
                    @if( Auth::user()->role_id == 2 )

                        {{ menu('client', 'new') }}

                    {{-- If logged in user is admin  --}}
                    @elseif( Auth::user()->role_id == 1 )
                        
                        {{ menu('admin', 'new') }}

                    {{-- If logged in user is eveloper  --}}
                    @elseif( Auth::user()->role_id == 3 )

                        {{ menu('developer', 'new') }}

                    @endif


                </div>
                <!--end::Row-->
            </div>
            <!--end::Links-->




        </div>
        <!--end::Nav wrapper-->
    </div>
    <!--end::Sidebar nav-->
</div>
<!--end::Sidebar-->
