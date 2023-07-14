@foreach ($items as $item)

    @php
        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
            $caret = '<span class="caret"></span>';

            if(url($item->link()) == url()->current()){
                $listItemClass = 'dropdown active';
            }else{
                $listItemClass = 'dropdown';
            }
        }
    @endphp

    <!--begin::Col-->
    <div class="col-6">
        <!--begin::Link-->

        <a href="@if ( Route::has( $item->route ) ) {{ route($item->route) }} @elseif( isset($item->url) ) {{ $item->url }} @else #  @endif" 
            class="btn btn-icon btn-outline btn-bg-light btn-active-light-primary btn-flex flex-column flex-center w-100px h-100px border-gray-200"
            data-kt-button="true" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes ?? '' !!} >
            <!--begin::Icon-->
            <span class="mb-2">
                {!! $item->icon_class !!}
            </span>
            <!--end::Icon-->

            <!--begin::Label-->
            <span class="fs-7 fw-bold">{{ $item->title }}</span>
            <!--end::Label-->
        </a>
        <!--end::Link-->
    </div>
    <!--end::Col-->


    @if(!$item->children->isEmpty())
        @include('new', ['items' => $item->children])
        
    @endif


@endforeach

