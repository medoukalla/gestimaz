@extends('voyager::master')

@section('page_title', __('voyager::generic.viewing').' '.$dataType->getTranslatedAttribute('display_name_plural'))

@section('content')
    @include('voyager::alerts')

    <div class="d-flex flex-column flex-column-fluid" data-select2-id="select2-data-116-xe1k">
    
    
        <div id="kt_app_content" class="app-content  flex-column-fluid " data-select2-id="select2-data-kt_app_content">
    
    
            <div class="d-flex flex-wrap flex-stack pb-7" data-select2-id="select2-data-115-jvm2">
                <!--begin::Title-->
                <div class="d-flex flex-wrap align-items-center my-1">
                    <h3 class="fw-bold me-5 my-1" style="margin-left: 25px;">Utilisateurs</h3>
    
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1 d-none">
                        <i class="fa-solid fa-magnifying-glass fs-3 position-absolute ms-3"></i>
                        <input type="text" id="kt_filter_search"
                            class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search">
                    </div>
                    <!--end::Search-->
                </div>
    
    
    
                <div class="d-flex flex-wrap my-1" data-select2-id="select2-data-114-mzz8">
    
                    <ul class="nav nav-pills me-6 mb-2 mb-sm-0" role="tablist">
                        <li class="nav-item m-0" role="presentation">
                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                                data-bs-toggle="tab" href="#kt_project_users_card_pane" aria-selected="false" role="tab"
                                tabindex="-1">
                                <i class="fa-solid fa-border-none fs-2"></i> </a>
                        </li>
    
                        <li class="nav-item m-0" role="presentation">
                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary "
                                data-bs-toggle="tab" href="#kt_project_users_table_pane" aria-selected="true" role="tab">
                                <i class="fa-solid fa-list-ol fs-2"></i> </a>
                        </li>
                    </ul>
    
                    <!--end::Actions-->
                </div>
                <!--end::Controls-->
            </div>
    
            <div class="tab-content">
    
                <div id="kt_project_users_card_pane" class="tab-pane fade active show" role="tabpanel">
    
                    <div class="row g-6 g-xl-9">
    
    
                        @foreach($dataTypeContent->where( 'role_id', 2 ) as $user)
    
                            <div class="col-md-4 col-xxl-4">

                                <!--begin::Card-->
                                <div class="card ">
                                    <!--begin::Card body-->
                                    <a href="{{ route('voyager.users.show', $user) }}">
                                        <div class="card-body d-flex flex-center flex-column pt-12 p-2">
                                            
                                            <div class="symbol symbol-65px symbol-circle mb-5">
                                                <img src="{{ asset('app').'/'.$user->avatar }}" alt="image">
                                            </div>
                                            
                                            <a href="{{ route('voyager.users.show', $user) }}" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">
                                                {{ $user->name }}
                                            </a>
                                            
                                            <div class="fw-semibold text-gray-400 mb-6">{{ $user->email }}</div>
                                            
                                            <div class="d-flex flex-center flex-wrap">
                                            
                                                <a href="">
                                                    <div class="border border-white rounded min-w-80px py-3 px-4 mx-2 mb-3 bg-primary">
                                                        <div class="fs-6 fw-bold text-white text-center">
                                                            <i class="fas fa-phone"></i>
                                                        </div>
                                                        <div class="fw-semibold text-white text-center">Appel</div>
                                                    </div>
                                                </a>

                                                <a href="">
                                                    <div class="border border-white rounded min-w-80px py-3 px-4 mx-2 mb-3 bg-success">
                                                        <div class="fs-6 fw-bold text-white text-center">$
                                                            
                                                        </div>
                                                        <div class="fw-semibold text-white text-center">Whatsapp</div>
                                                    </div>
                                                </a>

                                            </div>
                                            
                                        </div>
                                    </a>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                                
                            </div>

                        @endforeach

                        {{ $dataTypeContent->links('vendor.pagination.bootstrap-5') }}
                        
                    </div>
                </div>
                <!--end::Tab pane-->
    
                <!--begin::Tab pane-->
                <div id="kt_project_users_table_pane" class="tab-pane fade " role="tabpanel">
                    <!--begin::Card-->
                    <div class="card card-flush ">
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <div id="kt_project_users_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="table-responsive">
                                        <table id="kt_project_users_table"
                                            class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable no-footer">
                                            <thead class="fs-7 text-gray-400 text-uppercase">
                                                <tr>
                                                    <th class="min-w-250px sorting" tabindex="0"
                                                        aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                                        aria-label="Manager: activate to sort column ascending"
                                                        style="width: 0px;">Utilisateur</th>
                                                    <th class="min-w-150px sorting" tabindex="0"
                                                        aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                                        aria-label="Date: activate to sort column ascending"
                                                        style="width: 0px;">Date inscription</th>
                                                    <th class="min-w-90px sorting" tabindex="0"
                                                        aria-controls="kt_project_users_table" rowspan="1" colspan="1"
                                                        aria-label="Amount: activate to sort column ascending"
                                                        style="width: 0px;">Appel</th>
                                        
                                                </tr>
                                            </thead>
                                            <tbody class="fs-6">
    
    
                                                @foreach( $dataTypeContent as $user )
                                                    <tr class="odd">
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="{{ asset('app').'/'.$user->avatar }}">
                                                                    </div>
                                                                    <!--end::Avatar-->
        
                                                                </div>
                                                                <!--end::Wrapper-->
        
                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <a href="" class="mb-1 text-gray-800 text-hover-primary">
                                                                        {{ $user->name }}    
                                                                    </a>
                                                                    <div class="fw-semibold fs-6 text-gray-400">
                                                                        {{ $user->email }}
                                                                    </div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td data-order="2023-12-20T00:00:00+01:00">{{ $user->created_at->format('D-m-Y') }}</td>
                                                        <td>
                                                            <a href="tel:+555" class="btn btn-success">
                                                                <i class="fas fa-phone"></i>
                                                            </a>
                                                        </td>
        
                                                    </tr>
                                                @endforeach


                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Tab pane-->
            </div>
    
    
    
    
    
    
    
        </div>
    
    </div>


<style>
    div#vyager {
        background-color: transparent !important;
    }
    #vyager .fade {
        opacity: 1 !important;
    }
</style>
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