@foreach ($items as $item)

    <!--begin::Col-->
    <div class="col-6">
        <!--begin::Link-->

        <a href="@if ( isset($item->route) ) {{ route($item->route) }} @elseif( isset($item->url) ) {{ $item->url }} @else #  @endif" class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200"
            data-kt-button="true">
            <!--begin::Icon-->
            <span class="mb-2">
                {!! $item->icon_class !!} </span>
            <!--end::Icon-->

            <!--begin::Label-->
            <span class="fs-7 fw-bold">{{ $item->title }}</span>
            <!--end::Label-->
        </a>
        <!--end::Link-->
    </div>
    <!--end::Col-->


@endforeach

