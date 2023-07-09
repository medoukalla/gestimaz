<x-head title="{{ setting('titles.buy') }}" />
<x-header />


<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area play">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">Achat</h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a> STEP 1 </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a>SELECT QUANTITY</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Play Games Area Start -->
<section class="featured-game packs">
    <!-- Servers card Area Start -->
    <div class="container">
        <div class="row">
            <div class="user-hint">
                <p>
                    Salut @auth <span>{{ Auth::user()->name }}</span> @endauth Veuillez déterminer la somme de kamas voulu.
                </p>
            </div>
            <div class="pack-note">
                <div class="title">Acheter kamas sur le serveur <span>{{ $server->name }}</span> avec le meilleur prix
                    !</div>
                <p>
                    Achetez des kamas sur le serveur <span>{{ $server->name }}</span> au meilleur prix et avec une
                    livraison rapide de 3 min
                    maximum. Bénéficiez d’un bonus intéressant et amusez-vous !
                </p>
            </div>
            <div class="section-packs">
                <div class="row">
                    @foreach ($server->packs->where('active', true) as $pack)
                        <!-- Quantity pack -->
                        <div class="pack-box">
                            <div class="col-lg-3">
                                <a class="buy_this_pack" action="{{ route('frontend.step2') }}"
                                    data-pack="{{ $pack->id }}">
                                    <form action="{{ route('frontend.step2') }}" method="post"
                                        id="form_{{ $pack->id }}">
                                        @csrf
                                        <input type="hidden" name="map_id" value="{{ $server->map->id }}">
                                        <input type="hidden" name="server_id" value="{{ $server->id }}">
                                        <input type="hidden" name="pack_id" value="{{ $pack->id }}">
                                    </form>
                                    <div class="q-pack" style=" cursor: pointer; ">
                                        <div class="quantity">{{ $pack->quantity }}m ₭</div>
                                        @if ($pack->bonus > 0.0)
                                            <div class="p-bonus">
                                                +{{ ($pack->quantity * 1000000 * $pack->bonus) / 100 }} ₭</div>
                                        @else
                                            <div class="p-bonus">No bonus ₭</div>
                                        @endif

                                        <div class="price"
                                            @if (setting('site.currency') != 'euro') style="display: none;" @endif>
                                            {{ $server->price_euro }} EUR</div>
                                        <div class="price"
                                            @if (setting('site.currency') != 'usd') style="display: none;" @endif>
                                            {{ $server->price }} USD</div>
                                        <div class="price"
                                            @if (setting('site.currency') != 'cad') style="display: none;" @endif>
                                            {{ $server->price_cad }} CAD</div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Quantity pack -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Winners Area End -->
</section>
<!-- Play Games Area End -->



<x-footer />
