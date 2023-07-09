@php
    $edit = $dataTypeContent->getKey();
    $add  = is_null($dataTypeContent->getKey());

@endphp

@extends('voyager::master')

@section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
<h1 class="page-title">
    <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{
    ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

    @can('edit', $dataTypeContent)
    <a href="{{ route('voyager.'.$dataType->slug.'.edit', $dataTypeContent->getKey()) }}" class="btn btn-info">
        <i class="glyphicon glyphicon-pencil"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.edit')
            }}</span>
    </a>
    @endcan
    @can('delete', $dataTypeContent)
    @if($isSoftDeleted)
    <a href="{{ route('voyager.'.$dataType->slug.'.restore', $dataTypeContent->getKey()) }}"
        title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore"
        data-id="{{ $dataTypeContent->getKey() }}" id="restore-{{ $dataTypeContent->getKey() }}">
        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.restore') }}</span>
    </a>
    @else
    <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete"
        data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
    </a>
    @endif
    @endcan
    @can('browse', $dataTypeContent)
    <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
        <i class="glyphicon glyphicon-list"></i> <span class="hidden-xs hidden-sm">{{
            __('voyager::generic.return_to_list') }}</span>
    </a>
    @endcan
</h1>
@include('voyager::multilingual.language-selector')
@stop

@section('content')
<div class="page-content read container-fluid">

    <div class="row">
        <div class="col-md-8">
            
            <div class="row">

                <div class="col-md-6">
                    <div class="panel panel-bordered">
                        <div class="card-header" style="padding-left:15px;">
                            <h3><i class="fas fa-user" style="padding-right:10px; color: #74b9ff"></i>User info</h3>
                        </div>
                        <div class="panel-body">
                            <h4><b>Game ID : </b>{{ $dataTypeContent->game_id }}</h4><hr>
                            <h4><b>Name : </b>{{ $dataTypeContent->user->name }}</h4><hr>
                            <h4><b>Email : </b>{{ $dataTypeContent->user->email }}</h4>
                        </div>
                    </div>

                    
                    <div class="panel panel-bordered">
                        <div class="card-header" style="padding-left:15px;">
                            <h3><i class="fas fa-receipt" style="padding-right:10px; color: #e17055"></i>Facturation</h3>
                        </div>
                        <div class="panel-body">
                            <h4><b>Name : </b>{{ $dataTypeContent->facturation_name }}</h4><hr>
                            <h4><b>Phone : </b>{{ $dataTypeContent->facturation_phone }}</h4><hr>
                            <h4><b>Email : </b>{{ $dataTypeContent->facturation_email }}</h4><hr>
                            <h4><b>Discord : </b>{{ $dataTypeContent->facturation_discord }}</h4><hr>
                            <h4><b>City : </b>{{ $dataTypeContent->facturation_city }}</h4><hr>
                            <h4><b>Payment : </b>{{ $dataTypeContent->payment->name }}</h4>
                        </div>
                    </div>

                </div>
                

                <div class="col-md-6">
                    <div class="panel panel-bordered">
                        <div class="card-header" style="padding-left:15px;">
                            <h3><i class="fas fa-server" style="padding-right:10px; color: #6c5ce7"></i>Order info</h3>
                        </div>
                        <div class="panel-body">
                            
                            <h4><b>Map name : </b>{{ $dataTypeContent->server->map->name }}</h4><hr>
                            <h4><b>Server name : </b>{{ $dataTypeContent->server->name }}</h4><hr>
                            <h4><b>Price : </b>{{ $dataTypeContent->server->price }} $/<small>M</small></h4><hr>
                            <h4><b>Quantity : </b>{{ $dataTypeContent->quantity }} M</h4><hr>
                            <h4><b>Bonus : </b>{{ $dataTypeContent->bonus }}</h4>
                            <hr>
                            
                            <h4><b>Quantity + Bonus : </b>{{ $dataTypeContent->quantity * 1000000 + $dataTypeContent->bonus }}</h4><hr>
                            <h4><b>Amount : </b>{{ $dataTypeContent->quantity * $dataTypeContent->server->price  }} $</h4>

                        </div>
                    </div>
                </div>


            </div>

        </div>

        <!-- ORDER STATUS -->
        <div class="col-md-4">
            <div class="panel panel-bordered">
                <!-- form start -->
                <form role="form"
                        class="form-edit-add"
                        action="{{ $edit ? route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) : route('voyager.'.$dataType->slug.'.store') }}"
                        method="POST" enctype="multipart/form-data">
                    <!-- PUT Method if we are editing -->
                    @if($edit)
                        {{ method_field("PUT") }}
                    @endif

                    <!-- CSRF TOKEN -->
                    {{ csrf_field() }}


                    <div class="card-header" style="padding-left:15px;">
                            
                        <h3><i class="fa-solid fa-list-check fa-shake" style="color: #1dd1a1; padding-right:10px;"></i>Order status</h3>
                    </div>

                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert steps alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Adding / Editing -->
                        @php
                            $dataTypeRows = $dataType->{($edit ? 'editRows' : 'addRows' )};
                        @endphp

                    

                            <!-- ORDER PAYED -->
                            <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                <b style=" font-size: 18px; " >
                                    <i class="fa-solid fa-1"></i> - Order payed
                                </b>
                                <div class="action">
                                    <a title="Done" style=" padding: 10px; border-radius: 20px !important; ">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- end ORDER PAYED -->


                            
                            <!-- Payment verified -->
                            @if ( $dataTypeContent->payment_verified == false )

                                <!-- Button to confirm the payment -->
                                <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                    <b style=" font-size: 18px; " >
                                        <i class="fa-solid fa-2"></i> - Waiting to verify the payment
                                    </b>
                                    <div class="action">
                                        <a href="{{ route('voyager.orders.confirm.payment', $dataTypeContent) }}" title="Click to verify the payment" style=" padding: 10px; border-radius: 20px !important; ">
                                            <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                </div>

                            @else

                                <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                    <b style=" font-size: 18px; " >
                                        <i class="fa-solid fa-2"></i> - Payment verified
                                    </b>

                                    @if ( $dataTypeContent->facturer == true )

                                        <div class="action">
                                            <a title="Done" style=" padding: 10px; border-radius: 20px !important; ">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </div>

                                    @else

                                        <div class="action">
                                            <a href="{{ route('voyager.orders.confirm.payment.undo', $dataTypeContent) }}" title="Undo this step" style="padding: 10px;border-radius: 20px !important;color: #222222;">
                                                <i class="fa-solid fa-arrow-rotate-left"></i>
                                            </a>
                                        </div>

                                    @endif

                                </div>

                            @endif
                            <!-- end Payment verified -->





                            
                            <!-- Billing informations (facturer) -->
                            @if ( $dataTypeContent->payment_verified == false )

                                <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                    <b style=" font-size: 18px; " >
                                        <i class="fa-solid fa-3"></i> - Données de facturation
                                    </b>
                                </div>

                            @else 

                                @if ( $dataTypeContent->facturer == false )

                                    <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                        <b style=" font-size: 18px; " >
                                            <i class="fa-solid fa-3"></i> - Waiting for (Données de facturation)
                                        </b>
                                        <div class="action">
                                            <a title="Waiting for client response" style=" padding: 10px; border-radius: 20px !important; ">
                                                <i class="fas fa-clock"></i>
                                            </a>
                                        </div>
                                    </div>

                                @else

                                    <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                        <b style=" font-size: 18px; " >
                                            <i class="fa-solid fa-3"></i> - Données de facturation
                                        </b>
                                        <div class="action">
                                            <a title="Done" style=" padding: 10px; border-radius: 20px !important; ">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </div>
                                    </div>
                                    
                                @endif

                            @endif  
                            <!-- end Billing informations (facturer) --> 




                            <!-- delivery informations (Livraison) -->
                            @if ( $dataTypeContent->facturer == false )

                                <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                    <b style=" font-size: 18px; " >
                                        <i class="fa-solid fa-4"></i> - Données de livraison
                                    </b>
                                </div>
                            @else

                                @if ( $dataTypeContent->liviser == false )
                                
                                    <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                        <b style=" font-size: 18px; " >
                                            <i class="fa-solid fa-4"></i> - Waiting for (Données de livraison)
                                        </b>
                                        <div class="action">
                                            <a title="Waiting for client response" style=" padding: 10px; border-radius: 20px !important; ">
                                                <i class="fas fa-clock"></i>
                                            </a>
                                        </div>
                                    </div>

                                @else

                                    <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                        <b style=" font-size: 18px; " >
                                            <i class="fa-solid fa-4"></i> - Données de livraison
                                        </b>
                                        <div class="action">
                                            <a title="Done" style=" padding: 10px; border-radius: 20px !important; ">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </div>
                                    </div>

                                @endif
                                
                            @endif
                            <!-- end delivery informations (Livraison) --> 




                            
                            <!-- delivered  ( Admin sent the sokens or not yet ) -->
                            @if ( $dataTypeContent->liviser == false) 

                                <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                    <b style=" font-size: 18px; " >
                                        <i class="fa-solid fa-5"></i> - Shipping the tokens
                                    </b>
                                </div>     

                            @else

                                @if ( $dataTypeContent->delivered == false )

                                    <div class="alert steps alert-danger" style=" height: 70px; line-height: 40px; ">
                                        <b style=" font-size: 18px; " >
                                            <i class="fa-solid fa-5"></i> - Waiting for moderators to ship tokens
                                        </b>
                                        <div class="action">
                                            <a href="{{ route('voyager.orders.confirm.shipping', $dataTypeContent) }}" title="Click to confirm the shipping" style=" padding: 10px; border-radius: 20px !important; ">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </div>
                                    </div>

                                @else

                                        <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                            <b style=" font-size: 18px; " >
                                                <i class="fa-solid fa-5"></i> - Tokens delivered
                                            </b>
                                            <div class="action">
                                                <a title="Done" style=" padding: 10px; border-radius: 20px !important; ">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </div>
                                        </div>

                                @endif

                            @endif
                            <!-- end delivered  ( Admin sent the sokens or not yet ) -->


                                
                                

                    </div><!-- panel-body -->
                </form>

                <div style="display:none">
                    <input type="hidden" id="upload_url" value="{{ route('voyager.upload') }}">
                    <input type="hidden" id="upload_type_slug" value="{{ $dataType->slug }}">
                </div>
            </div>
        </div>
        
    </div>


    <div class="row">
        
        

        

    </div>
</div>

{{-- Single delete modal --}}
<div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{
                    strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
            </div>
            <div class="modal-footer">
                <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger pull-right delete-confirm"
                        value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
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