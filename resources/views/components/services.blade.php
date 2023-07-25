<!-- services start -->
<section class="services-area gray-bg pt-120 pb-90">
    <div class="container">
        <div class="section-title text-center">
            <div class="border-title">
                <h1>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Prestations de service</font>
                    </font>
                </h1>
            </div>
            <h5>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Nos services</font>
                </font>
            </h5>
            <h2>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">nous sommes experts en</font>
                </font>
            </h2>
        </div>
        <div class="row">
            @foreach ( $services as $service )
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="services-box text-center mb-30">
                        <div class="services-box-thumb mb-25">
                            <img src="{{ asset('app').'/'.$service->image }}" alt="image non trouvée">
                        </div>
                        <div class="services-box-text">
                            <h2>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{ $service->name }}</font>
                                </font>
                            </h2>
                            <p>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{ $service->description }}</font>
                                </font>
                            </p>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- services end -->