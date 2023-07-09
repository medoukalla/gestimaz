@extends('voyager::auth.master')

@section('content')
                    
                    
    <!--begin::Wrapper-->
    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">

        <form action="{{ route('password.reset.store') }}" method="post" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework text-center" novalidate="novalidate" id="kt_new_password_form">
            @csrf

            <img src="{{ asset('app').'/'.setting('site.logo') }}" style="max-width: 300px; margin-bottom: 50px;" alt="">


            <!--begin::Heading-->
            <div class="text-center mb-10">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder mb-3">
                    Configurer un nouveau mot de passe
                </h1>
                <!--end::Title-->
        
                <!--begin::Link-->
                <div class="text-gray-500 fw-semibold fs-6">
                    Avez-vous déjà réinitialisé le mot de passe ?
        
                    <a href="{{ route('voyager.login') }}" class="link-primary fw-bold">
                        Connexion
                    </a>
                </div>
                <!--end::Link-->
            </div>
            <!--begin::Heading-->

            @if ( Session::has('error') )
                <div class="alert alert-danger" role="alert">
                    {{ session::get('error') }}
                </div>
            @endif
        
            <!--begin::Input group-->
            <div class="fv-row mb-8 fv-plugins-icon-container" data-kt-password-meter="true">

                <!--begin::Input group--->
                <div class="fv-row mb-8">
                    <!--begin::Email-->
                    <input type="text" placeholder="Adresse e-mail" name="email" value="{{ $email }}" autocomplete="off"
                        class="form-control bg-transparent" disabled />
                    <!--end::Email-->
                </div>

                
                <!--begin::Wrapper-->
                <div class="mb-1">
                    <!--begin::Input wrapper-->
                    <div class="position-relative mb-3">    
                        <input class="form-control bg-transparent" type="password" placeholder="Mot de passe" name="password" autocomplete="off">
        
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                            <i class="ki-outline ki-eye-slash fs-2"></i>
                            <i class="ki-outline ki-eye fs-2 d-none"></i>                
                        </span>
                    </div>
                    <!--end::Input wrapper-->
        
                </div>
                <!--end::Wrapper-->
        
            <div class="fv-plugins-message-container invalid-feedback"></div></div>
            <!--end::Input group--->
           
            <!--end::Input group--->
            <div class="fv-row mb-8 fv-plugins-icon-container">    
                <!--begin::Repeat Password-->
                <input type="password" placeholder="Répéter le mot de passe" name="confirm-password" autocomplete="off" class="form-control bg-transparent">
                <!--end::Repeat Password-->
            <div class="fv-plugins-message-container invalid-feedback"></div></div>
            <input type="hidden" name="email" value="{{ $email }}">
            <input type="hidden" name="token" value="{{ $tok }}">
            <!--end::Input group--->
        

        
            <!--begin::Action-->
            <div class="d-grid mb-10">
                <button type="button" id="kt_new_password_submit" class="btn btn-primary">
                    
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
            </div>
            <!--end::Action-->
        </form>

    </div>
    <!--end::Wrapper-->


@endsection


@section('custom_js')
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('js/new-password.js') }}"></script>
<script src="{{ asset('js/scripts.bundle.js') }}"></script>
<!--end::Custom Javascript-->
@endsection