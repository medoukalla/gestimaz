@extends('voyager::auth.master')

@section('content')
                    
                    
    <!--begin::Wrapper-->
    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">

        <!--begin::Form-->
        <form action="{{ route('voyager.login') }}" method="post" class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="{{ route('voyager.dashboard') }}"  >

            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-11">

                <img src="{{ asset('app').'/'.setting('site.logo') }}" style="max-width: 300px; margin-bottom: 50px;" alt="">

                <!--begin::Title-->
                <h1 class="text-dark fw-bolder mb-3">
                    Se connecter
                </h1>
                <!--end::Title-->

            </div>
            <!--begin::Heading-->

            <!--begin::Error message--->
            @if ( Session::has('error') )
                <div class="fv-row mb-8">
                    <div class="alert alert-danger">{{ Session::get('error') }}</div>
                </div>
            @endif

            <!--begin::Input group--->
            <div class="fv-row mb-8">
                <!--begin::Email-->
                <input type="text" placeholder="Adresse e-mail" name="email" autocomplete="off"
                    class="form-control bg-transparent" />
                <!--end::Email-->
            </div>

            <!--end::Input group--->
            <div class="fv-row mb-3">
                <!--begin::Password-->
                <input type="password" placeholder="Mot de passe" name="password" autocomplete="off"
                    class="form-control bg-transparent" />
                <!--end::Password-->
            </div>
            <!--end::Input group--->

            <!--begin::Wrapper-->
            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                <div></div>

                <!--begin::Link-->
                <a href="{{ route('voyager.reset') }}"
                    class="link-primary">
                    Mot de passe oublié ?
                </a>
                <!--end::Link-->
            </div>
            <!--end::Wrapper-->

            <!--begin::Submit button-->
            <div class="d-grid mb-10">
                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
                        Se connecter</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                        S'il vous plaît, attendez... <span
                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    <!--end::Indicator progress--> </button>
            </div>
            <!--end::Submit button-->

            <!--begin::Sign up-->
            <div class="text-gray-500 text-center fw-semibold fs-6">
                Pas encore membre?

                <a href="{{ route('voyager.register') }}"
                    class="link-primary">
                    S'inscrire maintenant
                </a>
            </div>
            <!--end::Sign up-->
        </form>
        <!--end::Form-->

    </div>
    <!--end::Wrapper-->


@endsection


@section('custom_js')
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('js/sign-in-general.js') }}"></script>
<!--end::Custom Javascript-->
@endsection