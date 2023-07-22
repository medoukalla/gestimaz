@extends('voyager::master')
{{-- @extends('voyager::masterOld') --}}

@php
    $user = Auth::user();
@endphp

@section('page_title', 'profil')


<style>
    div#vyager {
        background-color: transparent !important;
    }
</style>


@section('content')



    {{-- Profile details  --}}
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Détails de l'utilisateur</h3>
            </div>
            <!--end::Card title-->

        </div>
        <!--begin::Card header-->

        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Nom et prénom</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ $user->name }}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Rôle</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-semibold text-gray-800 fs-6">{{ $user->role->display_name }}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">
                    Email du contact
                </label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bold fs-6 text-gray-800 me-2">{{ $user->email }}</span>
                    <span class="badge badge-success">Vérifié</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Identifiant du jeu Dofus</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800 me-2">{{ $user->game_id }}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">
                    Inscrit à
                </label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ $user->created_at->format('d/m/Y - H:i') }} - ( {{ $user->created_at->diffForHumans() }} )</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Nombre de commandes</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    {{-- <span class="fw-bold fs-6 text-gray-800">{{ \App\Models\User::count_total_orders( $user->id ) }}</span> --}}
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Nombre d'offres</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    {{-- <span class="fw-bold fs-6 text-gray-800">{{ \App\Models\User::count_total_offers( $user->id ) }}</span> --}}
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Nombre d'échanges</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    {{-- <span class="fw-bold fs-6 text-gray-800">{{ \App\Models\User::count_total_exchanges( $user->id ) }}</span> --}}
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

        </div>
        <!--end::Card body-->
    </div>
    {{-- End profile details  --}}


@stop

@section('javascript')
    
    <script>
        var deleteFormAction;
        $('.delete').on('click', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });

    </script>
@stop
