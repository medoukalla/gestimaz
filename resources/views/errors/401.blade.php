@extends('errors::minimal')

@section('title', 'Non autorisé!')


<div class="d-flex flex-column flex-center flex-column-fluid">
    <!--begin::Content-->
    <div class="d-flex flex-column flex-center text-center p-10">
        <!--begin::Wrapper-->
        <div class="card card-flush w-lg-650px py-5">
            <div class="card-body py-15 py-lg-20">

                <!--begin::Title-->
                <h1 class="fw-bolder fs-2qx text-gray-900 mb-4">
                    Non autorisé!
                </h1>
                <!--end::Title-->

                <!--begin::Text-->
                <div class="fw-semibold fs-6 text-gray-500 mb-7">
                    Oops ! Accès refusé. Veuillez vous connecter ou fournir des identifiants d'authentification valides pour accéder à cette page.
                </div>
                <!--end::Text-->

                <!--begin::Illustration-->
                <div class="mb-11">
                    <img src="{{ asset('img/errors/401.jpg') }}"
                        class="mw-100 mh-300px theme-light-show" alt="" />
                    <img src="{{ asset('img/errors/401.jpg') }}"
                        class="mw-100 mh-300px theme-dark-show" alt="" />
                </div>
                <!--end::Illustration-->

                <!--begin::Link-->
                <div class="mb-0">
                    <a href="{{ route('frontend.index') }}" class="btn btn-sm btn-primary">
                        Retour à la page d'accueil
                    </a>
                </div>
                <!--end::Link-->

            </div>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Content-->
</div>
