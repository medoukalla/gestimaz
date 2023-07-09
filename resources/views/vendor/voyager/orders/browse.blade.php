@extends('voyager::master_clean')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))



@section('content')


    <div class="page-content browse container-fluid ">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">


                    {{-- Card header  --}}
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5" data-select2-id="select2-data-112-zj9o">

                        <div class="card-title">

                            <h1 class="page-title" style=" margin-right: 20px; ">
                                {{ $dataType->getTranslatedAttribute('display_name_plural') }}
                            </h1>
                            
                        </div>
                
                        

                        @if ( Auth::user()->role_id == 2 )
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5" data-select2-id="select2-data-111-yu96">
                                <!--begin::Add product-->
                                <a href="/metronic8/demo37/../demo37/apps/ecommerce/catalog/add-product.html" class="btn btn-primary">
                                    <i class="fa-solid fa-plus"></i> Passer une nouvelle commande
                                </a>
                                <!--end::Add product-->
                            </div>
                        @endif
                        
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="fa-solid fa-magnifying-glass fs-3 position-absolute ms-4"></i> <input type="text"
                                data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12"
                                placeholder="Référence">
                        </div>
                        <!--end::Search-->

                
                    </div>
                    {{-- End card header  --}}


                    {{-- Card body  --}}
                    <div class="panel-body card-body pt-0">
                        <div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        


                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_sales_table">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                            
                                            <th class="min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1"
                                                colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 100px;">RÉF DE COMMANDE
                                            </th>
                                            <th class="min-w-175px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table" rowspan="1"
                                                colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 192.438px;">
                                                Client</th>
                                            <th class="text-end min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                                rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 100px;">
                                                Total</th>
                                            <th class="text-end min-w-70px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                                rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending"
                                                style="width: 72.5469px;">Statut</th>
                                            
                                            <th class="text-end min-w-100px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                                rowspan="1" colspan="1" aria-label="Date Added: activate to sort column ascending"
                                                style="width: 100px;">Date de réception</th>
                                            
                                            <th class="text-center min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions"
                                                style="width: 101.875px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                            
                                        @foreach ($dataTypeContent->where('payed', true) as $order)

                                
                                            <tr class="odd">
                                                <td data-kt-ecommerce-order-filter="order_id">
                                                    <a href="{{ route('voyager.orders.show', $order) }}">
                                                        <span class="badge badge-secondary">{{ 'KX'.$order->id }}</span>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <!--begin:: Avatar -->
                                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                            <a href="{{ route('voyager.users.show', $order->user->id ) }}" target="_blanck" >
                                                                <div class="symbol-label">
                                                                    <img src="{{ asset('app').'/'.$order->user->avatar }}" alt="Francis Mitcham"
                                                                        class="w-100">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--end::Avatar-->
                                
                                                        <div class="ms-5">
                                                            <a href="{{ route('voyager.users.show', $order->user->id ) }}" target="_blanck"
                                                                class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $order->user->name }}
                                                            </a>
                                                        </div>

                                                    </div>
                                                </td>
                                                
                                                <td class="text-end pe-0">
                                                        <span class="fw-bold">${{ $order->total }}</span>
                                                </td>

                                                <td class="text-end pe-0" data-order="Completed">
                                                        {!! $order->get_status_admin( $order ) !!}
                                                </td>
                                                
                                                <td class="text-end" data-order="2023-06-09">
                                                        <span class="fw-bold">{{ $order->created_at->format('d/m/Y') }}</span>
                                                </td>

                                                <td class="text-center">
                                                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        Actions
                                                        <i class="fa-solid fa-angle-down fs-5 ms-1"></i> </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                                        data-kt-menu="true">

                                                        <div class="menu-item px-3">
                                                            <a href="{{ route('voyager.orders.show', $order) }}" target="_blanck"  class="menu-link px-3">
                                                                Voir
                                                            </a>
                                                        </div>

                                                        <div class="menu-item px-3">
                                                            <a href="{{ route('voyager.users.show', $order->user) }}" target="_blanck"  class="menu-link px-3">
                                                                Voir le profil
                                                            </a>
                                                        </div>

                                                        @if ( $order->payment_verified == false )
                                                            <div class="menu-item px-3">
                                                                <a href="{{ route('voyager.order.cancel', $order) }}"  target="_blanck" class="menu-link px-3"  title="Annuler"
                                                                onclick="return confirm('Voulez-vous vraiment annuler cette commande?')">
                                                                    Annuler
                                                                </a>
                                                            </div>
                                                        @endif

                                                        
                                                            
                                                    </div>
                                                    <!--end::Menu-->
                                                </td>
                                            </tr>
                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>



                        @if ($isServerSide)

                            {{ $dataTypeContent->links('vendor.pagination.bootstrap-4') }}      
    
                        @endif
                    </div>
                    {{-- End card body  --}}

                </div>
            </div>
        </div>
    </div>


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