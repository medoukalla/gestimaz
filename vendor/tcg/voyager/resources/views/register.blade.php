@extends('voyager::auth.master')

@section('content')
                    
                    
<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">

    <!--begin::Form-->
    <form action="{{ route('voyager.postregister') }}" class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_sign_up_form"
        data-kt-redirect-url="{{ route('voyager.dashboard') }}" data-check_route="{{ route('check.email.exists') }}" method="post">
        @csrf
        
        <!--begin::Heading-->
        <div class="text-center mb-11">

            <img src="{{ asset('app').'/'.setting('site.logo') }}" style="max-width: 300px; margin-bottom: 50px;" alt="">

            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">
                S'inscrire
            </h1>
            <!--end::Title-->

        </div>
        <!--begin::Heading-->

        <!--begin::Input group--->
        <div class="fv-row mb-8 fv-plugins-icon-container">
            <!--begin::last-name-->
            <input type="text" placeholder="Dofus ID" name="game-id" autocomplete="off" class="form-control bg-transparent">
            <!--end::last-name-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>

        <!--begin::Input group--->
        <div class="fv-row mb-8 fv-plugins-icon-container">
            <!--begin::first-name-->
            <input type="text" placeholder="Prénom" name="first-name" autocomplete="off" class="form-control bg-transparent">
            <!--end::first-name-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>

        <!--begin::Input group--->
        <div class="fv-row mb-8 fv-plugins-icon-container">
            <!--begin::last-name-->
            <input type="text" placeholder="Nom de famille" name="last-name" autocomplete="off" class="form-control bg-transparent">
            <!--end::last-name-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>


        <!--begin::Input group--->
        <div class="fv-row mb-8 fv-plugins-icon-container">
            <!--begin::Email-->
            <input type="text" placeholder="Adresse e-mail" name="email" autocomplete="off" class="form-control bg-transparent email_input">
            <!--end::Email-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>

        <!--begin::Input group-->
        <div class="fv-row mb-8 fv-plugins-icon-container" data-kt-password-meter="true">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Input wrapper-->
                <div class="position-relative mb-3">
                    <input class="form-control bg-transparent" type="password" placeholder="Mot de passe" name="password"
                        autocomplete="off">

                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                        data-kt-password-meter-control="visibility">
                        <i class="ki-outline ki-eye-slash fs-2"></i> <i class="ki-outline ki-eye fs-2 d-none"></i>
                    </span>
                </div>
                <!--end::Input wrapper-->

                <!--begin::Meter-->
                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                </div>
                <!--end::Meter-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Hint-->
            <div class="text-muted">
                Utilisez 8 caractères ou plus avec un mélange de lettres, de chiffres et de symboles.
            </div>
            <!--end::Hint-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group--->

        <!--end::Input group--->
        <div class="fv-row mb-8 fv-plugins-icon-container">
            <!--begin::Repeat Password-->
            <input type="password" placeholder="Répéter le mot de passe" name="confirm-password" autocomplete="off"
                class="form-control bg-transparent">
            <!--end::Repeat Password-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group--->

        <!--begin::Accept-->
        <div class="fv-row mb-8 fv-plugins-icon-container">
            <label class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="toc" value="1">
                <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                    J'accepte les 
                    <a href="#" class="ms-1 link-primary">termes</a>
                    et 
                    <a href="#" class="ms-1 link-primary">conditions </a>
                </span>
            </label>
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Accept-->

        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">

                <!--begin::Indicator label-->
                <span class="indicator-label">
                    S'inscrire</span>
                <!--end::Indicator label-->

                <!--begin::Indicator progress-->
                <span class="indicator-progress">
                    S'il vous plaît, attendez... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
                <!--end::Indicator progress--> </button>
        </div>
        <!--end::Submit button-->

        <!--begin::Sign up-->
        <div class="text-gray-500 text-center fw-semibold fs-6">
            Vous avez déjà un compte?

            <a href="{{ route('voyager.login') }}">
                Connexion
            </a>
        </div>
        <!--end::Sign up-->
    </form>
    <!--end::Form-->

</div>


@endsection


@section('custom_js')
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('js/sign-up-general.js') }}"></script>
<!--end::Custom Javascript-->
@endsection