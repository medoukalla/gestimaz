<div>

    <!-- Play Games Area Start -->
    <section class="featured-game">
        <!-- Features Area Start -->
        <div class="features achat_maps">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-box">
                            <div class="feature-box-inner">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-feature" wire:click="get_classique" style="cursor: pointer">
                                            <div class="icon one">
                                                <img src="assets/images/classice_servers.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-feature" wire:click="get_retro" style="cursor: pointer">
                                            <div class="icon two">
                                                <img src="assets/images/retro_servers.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-feature" wire:click="get_touch" style="cursor: pointer">
                                            <div class="icon three">
                                                <img src="assets/images/touche_servers.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Server cards Area End -->
        <!-- Servers card Area Start -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-heading server-card">
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">



                @foreach ($servers as $server)
                    <div class="col-lg-4 mb-4">
                        <a href="{{ route('frontend.step1', $server) }}">
                            <div class="single-winer">
                                <div class="top-area">

                                    <div class="left">
                                        <h4 class="name">{{ $server->name }}</h4>
                                    </div>
                                    <div class="right">
                                        <p class="id">Disponible</p>
                                    </div>

                                </div>

                                @if ($currency == 'mad')
                                    <div class="bottom-area price_mad">
                                        <div class="left">{{ $server->price_mad }} DH</div>
                                        <div class="right">
                                            <img src="{{ asset('assets/images/icons/mad.svg') }}" alt="MAD" />
                                        </div>
                                    </div>
                                @elseif ($currency == 'usd')
                                    <div class="bottom-area price_mad">
                                        <div class="left">{{ $server->price }} $</div>
                                        <div class="right">
                                            <img src="{{ asset('assets/images/icons/usd.svg') }}" alt="USD" />
                                        </div>
                                    </div>
                                @elseif ($currency == 'cad')
                                    <div class="bottom-area price_mad">
                                        <div class="left">{{ $server->price_cad }} C$</div>
                                        <div class="right">
                                            <img src="{{ asset('assets/images/icons/cad.svg') }}" alt="CAD" />
                                        </div>
                                    </div>
                                @else
                                    <div class="bottom-area price_mad">
                                        <div class="left">{{ $server->price_euro }} €</div>
                                        <div class="right">
                                            <img src="{{ asset('assets/images/icons/cad.svg') }}" alt="CAD" />
                                        </div>
                                    </div>
                                @endif




                            </div>
                        </a>
                    </div>
                @endforeach


                @if (isset($otherServers) and $otherServers != null)
                    @foreach ($otherServers as $server)
                        <div class="col-lg-4 mb-4">
                            <a href="{{ route('frontend.step1', $server) }}">
                                <div class="single-winer">
                                    <div class="top-area">

                                        <div class="left">
                                            <h4 class="name">{{ $server->name }}</h4>
                                        </div>
                                        <div class="right">
                                            <p class="id">Disponible</p>
                                        </div>

                                    </div>

                                    @if ($currency == 'mad')
                                        <div class="bottom-area price_mad">
                                            <div class="left">{{ $server->price_mad }} DH</div>
                                            <div class="right">
                                                <img src="{{ asset('assets/images/icons/mad.svg') }}" alt="MAD" />
                                            </div>
                                        </div>
                                    @elseif ($currency == 'usd')
                                        <div class="bottom-area price_mad">
                                            <div class="left">{{ $server->price }} $</div>
                                            <div class="right">
                                                <img src="{{ asset('assets/images/icons/usd.svg') }}" alt="USD" />
                                            </div>
                                        </div>
                                    @elseif ($currency == 'cad')
                                        <div class="bottom-area price_mad">
                                            <div class="left">{{ $server->price_cad }} C$</div>
                                            <div class="right">
                                                <img src="{{ asset('assets/images/icons/cad.svg') }}" alt="CAD" />
                                            </div>
                                        </div>
                                    @else
                                        <div class="bottom-area price_mad">
                                            <div class="left">{{ $server->price_euro }} €</div>
                                            <div class="right">
                                                <img src="{{ asset('assets/images/icons/cad.svg') }}" alt="CAD" />
                                            </div>
                                        </div>
                                    @endif




                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif


            </div>


        </div>
        <!-- Recent Winners Area End -->
    </section>
    <!-- Play Games Area End -->

</div>
