@php
$edit = $dataTypeContent->getKey();
$add = is_null($dataTypeContent->getKey());
$dataType = null;
@endphp

@extends('voyager::master_clean')

@section('page_title', __('voyager::generic.view'))

<style>
    div#vyager {
        background-color: transparent;
    }

    .card-header.align-items-center.py-5.gap-2.gap-md-5 {
        background-color: white;
        margin-bottom: 30px;
        border-radius: 29px;
    }
    .alert b {
    font-size: 13px !important;
    }
</style>

@section('content')


{{-- Card header --}}
<div class="card-header align-items-center py-5 gap-2 gap-md-5" data-select2-id="select2-data-112-zj9o">

    <div class="card-title">

        <h1 class="page-title" style=" margin-right: 20px; ">
            <i class="voyager-basket"></i> Affichage de la commande
        </h1>

    </div>



    @if ( Auth::user()->role_id == 2 )
    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

        <a href="{{ route('voyager.myorders') }}" class="btn btn-warning">
            <i class="fa-solid fa-arrow-left"></i> <span class="hidden-xs hidden-sm">Retour à la liste</span>
        </a>


        <a href="{{ route('frontend.order.details', $dataTypeContent) }}" target="_blanck" class="btn btn-info">
            <i class="fa-solid fa-flag-checkered"></i> <span class="hidden-xs hidden-sm">Terminez votre commande</span>
        </a>


    </div>
    @endif



</div>
{{-- End card header --}}


<div class="page-content read container-fluid">


    <div class="row g-5 g-xl-8">
        <div class="col-xl-4">


            <!--begin::List Widget 1-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Informations utilisateur</span>
                    </h3>
                </div>
                <!--end::Header-->

                
                <!--begin::Body-->
                <div class="card-body pt-2">





                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->game_id }}</a>
                            <span class="text-muted d-block fw-bold">Identifiant de jeu</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->user->name }}</a>
                            <span class="text-muted d-block fw-bold">Nom</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->user->email }}</a>
                            <span class="text-muted d-block fw-bold">E-mail</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->facturation_name }}</a>
                            <span class="text-muted d-block fw-bold">Nom</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->facturation_phone }}</a>
                            <span class="text-muted d-block fw-bold">Téléphone</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->facturation_email }}</a>
                            <span class="text-muted d-block fw-bold">E-mail</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->facturation_discord }}</a>
                            <span class="text-muted d-block fw-bold">Discord</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->facturation_city }}</a>
                            <span class="text-muted d-block fw-bold">Ville</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->payment->name }}</a>
                            <span class="text-muted d-block fw-bold">Paiement</span>
                        </div>
                    </div>


                </div>
                <!--end::Body-->
                


            </div>
            <!--end::List Widget 1-->
        </div>

        <div class="col-xl-4">

            <!--begin::List Widget 2-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title fw-bold text-dark">Informations de commande</h3>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-2">


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->server->map->name }}</a>
                            <span class="text-muted d-block fw-bold">Version du jeu</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->server->name }}</a>
                            <span class="text-muted d-block fw-bold">Nom du serveur</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->server->price }} $/<small>M</small></a>
                            <span class="text-muted d-block fw-bold">Prix</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->quantity }} M</a>
                            <span class="text-muted d-block fw-bold">Quantité</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->bonus }} M</a>
                            <span class="text-muted d-block fw-bold">Bonus</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->quantity * 1000000 + $dataTypeContent->bonus }}</a>
                            <span class="text-muted d-block fw-bold">Quantité + Bonus</span>
                        </div>
                    </div>


                    <div class="d-flex align-items-center mb-7">
                        <div class="flex-grow-1">
                            <a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $dataTypeContent->quantity * $dataTypeContent->server->price }} $</a>
                            <span class="text-muted d-block fw-bold">Montant</span>
                        </div>
                    </div>




                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 2-->
        </div>

        <div class="col-xl-4">


            <!--begin::List Widget 3-->
            <div class="card card-xl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0">
                    <h3 class="card-title fw-bold text-dark">Statut de la commande</h3>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-2">

                    @if (count($errors) > 0)
                        <div class="alert steps alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- ORDER PAYED -->
                        <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                            <b style=" font-size: 18px; ">
                                <i class="fa-solid fa-1"></i> - Commande payée
                            </b>
                            <div class="action">
                                <a title="Done" style=" padding: 10px; border-radius: 20px !important; ">
                                    <i class="fas fa-check"></i>
                                </a>
                            </div>
                        </div>
                        <!-- end ORDER PAYED -->


                        <!-- Payment verified -->
                        @if ($dataTypeContent->payment_verified == false)
                        <!-- Button to confirm the payment -->
                        <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                            <b style=" font-size: 18px; ">
                                <i class="fa-solid fa-2"></i> - En attente de vérification du paiement
                            </b>
                            <div class="action">
                                <a href="javascript:;"
                                    style=" padding: 10px; border-radius: 20px !important; cursor: progress">
                                    <i class="fas fa-clock"></i>
                                </a>
                            </div>
                        </div>
                        @else
                        <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                            <b style=" font-size: 18px; ">
                                <i class="fa-solid fa-2"></i> - Paiement vérifié
                            </b>


                            <div class="action">
                                <a style=" padding: 10px; border-radius: 20px !important; ">
                                    <i class="fas fa-check"></i>
                                </a>
                            </div>

                        </div>
                        @endif
                        <!-- end Payment verified -->


                        <!-- Billing informations (facturer) -->
                        @if ($dataTypeContent->payment_verified == false)

                            <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; ">
                                    <i class="fa-solid fa-3"></i> - Données de facturation
                                </b>

                            </div>
                            @else
                            @if ($dataTypeContent->facturer == false)
                            <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; ">
                                    <i class="fa-solid fa-3"></i> - Attendre (Données de facturation)
                                </b>
                                <div class="action">
                                    <a style=" padding: 10px; border-radius: 20px !important; cursor: progress">
                                        <i class="fas fa-clock"></i>
                                    </a>
                                </div>
                        </div>
                        @else
                            <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; ">
                                    <i class="fa-solid fa-3"></i> - Données de facturation
                                </b>
                                <div class="action">
                                    <a style=" padding: 10px; border-radius: 20px !important; ">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </div>
                            </div>
                        @endif

                        @endif
                        <!-- end Billing informations (facturer) -->


                        <!-- delivery informations (Livraison) -->
                        @if ($dataTypeContent->facturer == false)
                            <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; ">
                                    <i class="fa-solid fa-4"></i> - Données de livraison
                                </b>
                            </div>
                        @else
                        @if ($dataTypeContent->liviser == false)
                            <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; ">
                                    <i class="fa-solid fa-4"></i> - Attendre (Données de livraison)
                                </b>
                                <div class="action">
                                    <a style=" padding: 10px; border-radius: 20px !important; cursor: progress">
                                        <i class="fas fa-clock"></i>
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; ">
                                    <i class="fa-solid fa-4"></i> - Données de livraison
                                </b>
                                <div class="action">
                                    <a style=" padding: 10px; border-radius: 20px !important; ">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </div>
                            </div>
                        @endif

                        @endif
                        <!-- end delivery informations (Livraison) -->


                        <!-- delivered  ( Admin sent the sokens or not yet ) -->
                        @if ($dataTypeContent->liviser == false)

                            <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; ">
                                    <i class="fa-solid fa-5"></i> - Expédition des jetons
                                </b>
                            </div>
                        @else
                        @if ($dataTypeContent->delivered == false)
                            <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; ">
                                    <i class="fa-solid fa-5"></i> - En attendant que les modérateurs expédient vos jetons
                                </b>
                                <div class="action">
                                    <a href="javascript;"
                                        style=" padding: 10px; border-radius: 20px !important; cursor: progress;">
                                        <i class="fas fa-clock"></i>
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; ">
                                    <i class="fa-solid fa-5"></i> - Jetons livrés
                                </b>
                                <div class="action">
                                    <a style=" padding: 10px; border-radius: 20px !important; ">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </div>
                            </div>
                        @endif

                        @endif
                        <!-- end delivered  ( Admin sent the sokens or not yet ) -->

                </div>
                <!--end::Body-->
            </div>
            <!--end:List Widget 3-->
        </div>
    </div>



</div>

{{-- Single delete modal --}}
<div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} ?
                </h4>
            </div>
            <div class="modal-footer">
                <form action="" id="delete_form" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger pull-right delete-confirm"
                        value="{{ __('voyager::generic.delete_confirm') }} ">
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{
                    __('voyager::generic.cancel') }}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@stop

<style>
    @media only screen and (min-width: 600px) {
        div.steps {
            position: relative;
            padding-right: 47px;
            padding-top: 15px;
        }

        div.steps div {
            position: absolute;
            right: 15px;
            top: 14px;
        }
    }

    @media only screen and (max-width: 600px) {
        div.steps {
            position: relative;
            padding-right: 47px;
        }

        div.steps div {
            position: absolute;
            right: 6px;
            top: 14px;
        }

        div.steps b {
            font-size: 14px !important;
            line-height: 18px;
            padding-top: 5px;
        }
    }
</style>

@section('javascript')

<script>
    var deleteFormAction;
    $('.delete').on('click', function (e) {
        var form = $('#delete_form')[0];

        if (!deleteFormAction) {
            // Save form action initial value
            deleteFormAction = form.action;
        }

        form.action = deleteFormAction.match(/\/[0-9]+$/) ?
            deleteFormAction.replace(/([0-9]+$)/, $(this).data('id')) :
            deleteFormAction + '/' + $(this).data('id');

        $('#delete_modal').modal('show');
    });
</script>
@stop