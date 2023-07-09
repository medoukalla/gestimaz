<div>
    <div class="row">
        @foreach ($servers as $server)
            <div class="col-lg-4">
                <a href="{{ route('frontend.step1', $server) }}">
                    <div class="single-winer" style="background-image: url('{{ asset('app').'/'.$server->image }}') !important" >
                        <div class="top-area">
                            <div class="left">
                                <h4 class="name">{{ $server->name }}</h4>
                            </div>
                            <div class="right">
                                <p class="id">Disponible</p>
                            </div>
                        </div>
                        @if ($currency == 'mad')
                            <div class="bottom-area">
                                <div class="left">{{ $server->price_mad }} DH </div>
                                <div class="right">
                                    <img src="{{ asset('assets/images/icons/mad.svg') }}" alt="euro" />
                                </div>
                            </div>
                        @elseif ($currency == 'usd')
                            <div class="bottom-area">
                                <div class="left">{{ $server->price }} $ </div>
                                <div class="right">
                                    <img src="{{ asset('assets/images/icons/usd.svg') }}" alt="usd" />
                                </div>
                            </div>
                        @elseif ($currency == 'cad')
                            <div class="bottom-area">
                                <div class="left">{{ $server->price_euro }} C$ </div>
                                <div class="right">
                                    <img src="{{ asset('assets/images/icons/cad.svg') }}" alt="usd" />
                                </div>
                            </div>
                        @else
                            <div class="bottom-area">
                                <div class="left">{{ $server->price_euro }} € </div>
                                <div class="right">
                                    <img src="{{ asset('assets/images/icons/Euro.svg') }}" alt="euro" />
                                </div>
                            </div>
                        @endif

                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-lg-12 view-all-btn text-xl-center mt-5">
            <a class="mybtn2" href="{{ route('frontend.servers') }}">Consulter tous les serveurs</a>
        </div>
    </div>
</div>
