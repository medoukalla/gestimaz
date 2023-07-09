<x-head title="{{ setting('titles.servers') }}" />
<x-header />



<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area play">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">Achat</h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a href="play.html">Achat</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->




@livewire('get-all-servers', [
    'currency' => Session::get('currency'),
]);


<x-footer />
