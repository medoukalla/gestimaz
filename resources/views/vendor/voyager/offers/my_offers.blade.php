@extends('voyager::master_clean')

@section('page_title', __('voyager::generic.viewing'))



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
            <i class="voyager-basket"></i> Mes offers &nbsp;
        </h1>

    </div>



    @if ( Auth::user()->role_id == 2 )
    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

        <!--begin::Add product-->
        <a href="{{ route('frontend.sell') }}" target="_blanck" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i> Passer une nouvelle offer
        </a>
        <!--end::Add product-->

    </div>
    @endif



</div>
{{-- End card header --}}


<div class="page-content browse container-fluid">
    @include('voyager::alerts')
    <div class="row">
        <div class="col-md-12">


            {{-- @livewire('user-offers') --}}


            <style>
                div#vyager {
                    background-color: transparent !important;
                }
            </style>

        </div>
    </div>
</div>



@stop