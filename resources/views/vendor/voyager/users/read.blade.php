@extends('voyager::master_clean')
{{-- @extends('voyager::masterOld') --}}

@php
    $user = $dataTypeContent;
@endphp

@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))


<style>
    div#vyager {
        background-color: transparent !important;
    }
</style>


@section('content')


    {{-- Top section  --}}
    <div class="card mb-5 mb-xl-10">
        <div class="card-body pt-9 pb-0">
            
            <div class="d-flex flex-wrap flex-sm-nowrap">
                
                <div class="me-7 mb-9">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        <img src="{{ asset('app').'/'.$user->avatar }}" alt="image">
                        
                    </div>
                </div>
                

                
                <div class="flex-grow-1">
                    
                    <div class="d-flex justify-content-between align-items-sta/metronic8/demo37/assets/media/avatars/300-1.jpgrt flex-wrap mb-2">
                        
                        <div class="d-flex flex-column">
                            
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-3 fw-bold me-1"> {{ $user->name }}</a>
                                
                            </div>
                            

                                                    
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                    {{ $user->role->display_name }}
                                </a>
                                
                                <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                    {{ $user->email }}
                                </a>
                            </div>
                            
                        </div>
                        

                        <div class="d-flex my-4">

                            <a href="{{ route('voyager.users.index') }}" class="btn btn-info" style="margin-right: 10px;">
                                <i class="fa-solid fa-rotate-left fs-4 me-2"></i> Retour à la liste
                            </a>


                            {{-- Delete user with all his data  --}}
                            <a href="{{ route('voyager.'.$dataType->slug.'.edit', $user->getKey()) }}" class="btn btn-danger disabled">
                                <i class="fa-solid fa-eraser fs-4 me-2"></i> Supprimer
                            </a>
                            
                            
                        </div>
                        
                        
                    </div>
                    

                    
                    <div class="d-flex flex-wrap flex-stack">
                        
                        <div class="d-flex flex-column flex-grow-1 pe-8">
                            
                            <div class="d-flex flex-wrap">
                                
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="$" data-kt-initialized="1">
                                            ${{ \App\Models\User::user_total_orders( $user->id ) }}
                                        </div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-400">Acheter</div>
                                    
                                </div>
                                

                                
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1">
                                            ${{ \App\Models\User::user_total_offers( $user->id ) }}
                                        </div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-400">Vendu</div>
                                    
                                </div>
                                

                                
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    
                                    <div class="d-flex align-items-center">
                                        <div class="fs-2 fw-bold counted" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%" data-kt-initialized="1">
                                            {{ \App\Models\User::user_total_exchanges( $user->id ) }}
                                        </div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-gray-400">Des échanges</div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        

                        
                        
                        
                    </div>
                    <!--end::Stats-->
                </div>
                <!--end::Info-->
            </div>
            

            
            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold d-none">
                                <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="/metronic8/demo37/../demo37/account/overview.html">
                            Overview                    </a>
                    </li>
                    <!--end::Nav item-->
                                <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo37/../demo37/account/settings.html">
                            Settings                    </a>
                    </li>
                    <!--end::Nav item-->
                                <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo37/../demo37/account/security.html">
                            Security                    </a>
                    </li>
                    <!--end::Nav item-->
                                <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo37/../demo37/account/activity.html">
                            Activity                    </a>
                    </li>
                    <!--end::Nav item-->
                                <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo37/../demo37/account/billing.html">
                            Billing                    </a>
                    </li>
                    <!--end::Nav item-->
                                <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo37/../demo37/account/statements.html">
                            Statements                    </a>
                    </li>
                    <!--end::Nav item-->
                                <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo37/../demo37/account/referrals.html">
                            Referrals                    </a>
                    </li>
                    <!--end::Nav item-->
                                <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo37/../demo37/account/api-keys.html">
                            API Keys                    </a>
                    </li>
                    <!--end::Nav item-->
                                <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="/metronic8/demo37/../demo37/account/logs.html">
                            Logs                    </a>
                    </li>
                    <!--end::Nav item-->
                        </ul>
            
        </div>
    </div>
    {{-- End Top section  --}}


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
                    <span class="fw-bold fs-6 text-gray-800">{{ \App\Models\User::count_total_orders( $user->id ) }}</span>
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
                    <span class="fw-bold fs-6 text-gray-800">{{ \App\Models\User::count_total_offers( $user->id ) }}</span>
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
                    <span class="fw-bold fs-6 text-gray-800">{{ \App\Models\User::count_total_exchanges( $user->id ) }}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

        </div>
        <!--end::Card body-->
    </div>
    {{-- End profile details  --}}


    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    @if ($isModelTranslatable)
        <script>
            $(document).ready(function () {
                $('.side-body').multilingual();
            });
        </script>
    @endif
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
