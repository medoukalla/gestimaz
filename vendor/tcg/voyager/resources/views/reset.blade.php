@extends('voyager::auth.master')

@section('content')
                    
                    
    <!--begin::Wrapper-->
    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">

        <form action="{{ route('voyager.reset') }}" method="post" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework text-center" novalidate="novalidate" id="kt_password_reset_form" >

            @csrf

            <img src="{{ asset('app').'/'.setting('site.logo') }}" style="max-width: 300px; margin-bottom: 50px;" alt="">

            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder mb-3">
                    Mot de passe oublié ?
                </h1>
                <!--end::Title-->
        
                <!--begin::Link-->
                <div class="text-gray-500 fw-semibold fs-6">
                    Entrez votre adresse e-mail pour réinitialiser votre mot de passe.
                </div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->
        
            <!--begin::Input group--->
            <div class="fv-row mb-8 fv-plugins-icon-container">
                <!--begin::Email-->
                <input type="email" placeholder="Email" name="email" class="form-control bg-transparent"> 
                <!--end::Email-->
                <div class="fv-plugins-message-container invalid-feedback"></div>
                @if ( Session('status') )
                    <div class="alert alert-success" role="alert">
                        {{ Session('status') }}
                    </div>
                @endif
                
            </div>
        
            <!--begin::Actions-->
            <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
                    
                    <!--begin::Indicator label-->
                    <span class="indicator-label">
                        Réinitialiser</span>
                    <!--end::Indicator label-->
                    
                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                        Veuillez patienter....    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    <!--end::Indicator progress-->        
                </button>
        
                <a href="{{ route('voyager.login') }}" class="btn btn-light">Cancel</a>
            </div>
            <!--end::Actions-->
        </form>

    </div>
    <!--end::Wrapper-->


@endsection


@section('custom_js')
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('js/reset-password.js') }}"></script>
<!--end::Custom Javascript-->
@endsection