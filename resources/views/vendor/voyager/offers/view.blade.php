@php
    $edit = $dataTypeContent->getKey();
    $add  = is_null($dataTypeContent->getKey());
    $dataType = null;
@endphp

@extends('voyager::master')

@section('page_title', __('voyager::generic.view'))



@section('content')

<h1 class="page-title">
    <i class="voyager-basket"></i> Viewing Order &nbsp;
       
        <a href="{{ route('voyager.myorders') }}" class="btn btn-warning">
            <i class="glyphicon glyphicon-list"></i> <span class="hidden-xs hidden-sm">Return to List</span>
        </a>


        <a href="{{ route('frontend.order.details', $dataTypeContent ) }}" target="_blanck" class="btn btn-info">
            <i class="glyphicon glyphicon-new-window"></i> <span class="hidden-xs hidden-sm">Finish your order</span>
        </a>
    </h1>

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
                        action=""
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
                                    <div class="action" >
                                        <a href="javascript:;" style=" padding: 10px; border-radius: 20px !important; cursor: progress">
                                            <i class="fas fa-clock"></i>
                                        </a>
                                    </div>
                                </div>

                            @else

                                <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                    <b style=" font-size: 18px; " >
                                        <i class="fa-solid fa-2"></i> - Payment verified
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
                                        <div class="action" >
                                            <a style=" padding: 10px; border-radius: 20px !important; cursor: progress">
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
                                            <a style=" padding: 10px; border-radius: 20px !important; ">
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
                                            <a style=" padding: 10px; border-radius: 20px !important; cursor: progress">
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
                                            <a style=" padding: 10px; border-radius: 20px !important; ">
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
                                            <i class="fa-solid fa-5"></i> - Waiting for moderators to ship your tokens
                                        </b>
                                        <div class="action">
                                            <a href="javascript;" style=" padding: 10px; border-radius: 20px !important; cursor: progress;">
                                                <i class="fas fa-clock"></i>
                                            </a>
                                        </div>
                                    </div>

                                @else


                                        <div class="alert steps alert-success" style=" height: 70px; line-height: 40px; ">
                                            <b style=" font-size: 18px; " >
                                                <i class="fa-solid fa-5"></i> - Tokens delivered
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



                                
                                

                    </div><!-- panel-body -->
                </form>


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
                <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} ?</h4>
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

        form.action = deleteFormAction.match(/\/[0-9]+$/)
            ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
            : deleteFormAction + '/' + $(this).data('id');

        $('#delete_modal').modal('show');
    });

</script>
@stop