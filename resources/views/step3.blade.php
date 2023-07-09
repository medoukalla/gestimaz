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
                        <a> STEP 3 </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a>Payment method</a>
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
                    Salut @auth <span>{{ Auth::user()->name }}</span> @endauth, veuillez sélectionner votre méthode de paiement, si
                    jamais vous
                    rencontrer des problèmes, contactez le support en ligne.
                </p>
            </div>
            <div class="pack-note">
                <div class="title">Buy Kamas Dofus Server Dodge - Best Price</div>
                <p>
                    Buy Kamas in server Dodge cheap, with the best price and fast
                    delivery in 3 minutes, get your bonus and unlock more fun with the
                    leader of selling kamas Dofus.
                </p>
            </div>

            <div class="pay-total-info">
                <!-- Server info -->
                <div class="pay-server-info">
                    <div class="server-info">{{ $pack_server->name }} {{ $pack->quantity }}m for
                        @auth {{ Auth::user()->name }} @endauth</div>
                    <div class="server-price" @if (setting('site.currency') != 'euro') style="display: none;" @endif>
                        {{ $pack_server->price_euro * $pack->quantity }} EUR</div>
                    <div class="server-price" @if (setting('site.currency') != 'usd') style="display: none;" @endif>
                        {{ $pack_server->price * $pack->quantity }} USD</div>
                    <div class="server-price" @if (setting('site.currency') != 'cad') style="display: none;" @endif>
                        {{ $pack_server->price_cad * $pack->quantity }} CAD</div>
                </div>
                @if ($pack->bonus > 0.0)
                    <!-- Bonus info -->
                    <div class="bonus">
                        <div class="bonus-info">Free Bonus</div>
                        <div class="bonus-price">{{ ($pack->quantity * 1000000 * $pack->bonus) / 100 }} ₭</div>
                    </div>
                    <!-- Fees info -->
                @endif


            </div>


            {{-- New payment design --}}
            <div class="select-payment m-auto">
                <h1>Choisissez le mode de paiement ci-dessous</h1>
                <div class="row">

                    @foreach ( $payment_methods as  $payment )
                        
                    
                        <div class="col-4">
                            <div class="card use_this_payment " data-form="{{ $payment->id }}" >
                                <div class="fees">{{ $payment->fees }} <span>%</span> </div>
                                <img src="{{ asset('img/icon/'.$payment->name.'.svg') }}" alt="{{ $payment->name }}">
                                <h3>Pay with {{ $payment->name }}</h3>
                                @if ( $payment->active != true )
                                    <div class="suspend">
                                        été suspendu pendant un certain temps
                                    </div>
                                @endif
                            </div>
                            @if ( $payment->active == true )
                                <form action="{{ route('frontend.step4') }}" method="post" id="form_{{ $payment->id }}">
                                    @csrf
                                    <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                </form>
                            @endif

                        </div>
                    
                    
                    @endforeach
                    
        </div>
    </div>
    <!-- Recent Winners Area End -->
</section>
<!-- Play Games Area End -->


<x-footer />
