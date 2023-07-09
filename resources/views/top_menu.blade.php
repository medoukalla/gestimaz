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

    <!--begin:Menu link-->
    <span class="menu-link">
        <a href="@if ( isset($item->route) ) {{ route($item->route) }} @elseif( isset($item->url) ) {{ $item->url }} @else #  @endif" 
            target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes ?? '' !!}
            >
            <span class="menu-title">
                {{ $item->title }}
            </span>
        </a>
    </span>
    <!--end:Menu link-->


    @if(!$item->children->isEmpty())
        @include('top_menu', ['items' => $item->children])
    @endif


@endforeach

