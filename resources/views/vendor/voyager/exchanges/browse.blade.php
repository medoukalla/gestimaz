@extends('voyager::master_clean')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('content')
<div class="page-content browse container-fluid">
    @include('voyager::alerts')

            
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">


        {{-- Offers List  --}}
        <div class="col-lg-12">
    
            <!--begin::List widget 23-->
            <div class="card card-flush " style="background-color: transparent !important;">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column" style=" padding: 0px !important; ">
                        <span class="card-label fw-bold text-gray-800">Des échanges</span>
                    </h3>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
    
                <!--begin::Body-->
                <div class="card-body card-scroll h-500px pt-5">
                    
                    
                    @livewire('exchanges', ['dataTypeContent' => $dataTypeContent])

    
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::List widget 23-->
        </div>
        {{-- End Offers List  --}}
    
    </div>



    <style>
        div#vyager {
            background-color: transparent !important;
        }
        .card-body.card-scroll.h-500px.pt-5 {
            height: 700px !important;
        }
    </style>

</div>


@stop

@section('css')
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
<link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@endif
@stop

@section('javascript')
<!-- DataTables -->
@if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
<script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
@endif
<script>
    $(document).ready(function () {
        @if (!$dataType -> server_side)
            var table = $('#dataTable').DataTable({!! json_encode(
                array_merge([
                    "order" => $orderColumn,
                        "language" => __('voyager::datatable'),
                            "columnDefs" => [
                                ['targets' => 'dt-not-orderable', 'searchable' => false, 'orderable' => false],
                            ],
                    ],
        config('voyager.dashboard.data_tables', []))
        , true) !!});
    @else
    $('#search-input select').select2({
        minimumResultsForSearch: Infinity
    });
    @endif

    @if ($isModelTranslatable)
        $('.side-body').multilingual();
    //Reinitialise the multilingual features when they change tab
    $('#dataTable').on('draw.dt', function () {
        $('.side-body').data('multilingual').init();
    })
    @endif
    $('.select_all').on('click', function (e) {
        $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
    });
        });



    $('input[name="row_id"]').on('change', function () {
        var ids = [];
        $('input[name="row_id"]').each(function () {
            if ($(this).is(':checked')) {
                ids.push($(this).val());
            }
        });
        $('.selected_ids').val(ids);
    });
</script>
@stop