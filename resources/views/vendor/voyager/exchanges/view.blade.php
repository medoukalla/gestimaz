@php
    $edit = $dataTypeContent->getKey();
    $add  = is_null($dataTypeContent->getKey());
    $dataType = null;
@endphp

@extends('voyager::master_clean')

@section('page_title', __('voyager::generic.view'))



@section('content')

<h1 class="page-title">
    <i class="voyager-basket"></i> Viewing Order &nbsp;
       
        <a href="{{ route('voyager.myexchanges') }}" class="btn btn-warning">
            <i class="glyphicon glyphicon-list"></i> <span class="hidden-xs hidden-sm">Retour à la liste</span>
        </a>

    </h1>

<div class="page-content read container-fluid">

    <div class="row">
        <div class="col-md-8">
            
            <div class="row">

                <p>User exchange will show here</p>

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