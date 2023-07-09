@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('content')
<div class="page-content browse container-fluid">
    @include('voyager::alerts')
    <div class="row">
        <div class="col-md-12">


            @livewire('admin-offers')


            <style>
                div#vyager {
                    background-color: transparent !important;
                }
            </style>

        </div>
    </div>
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