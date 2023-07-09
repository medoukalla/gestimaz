<x-head title="{{ setting('titles.buy') }}" />
<x-header />



<!-- Play Games Area Start -->
<section class="featured-game packs">
    <!-- Servers card Area Start -->
    <div class="container">
        <div class="row">
            <div class="user-hint">
                <p>
                    Hi @auth <span>{{ Auth::user()->name }}</span> @endauth, please fill in your sum of contact
                    information. to make it easy when our team needs to contact you
                    when you make your order, go from here.
                </p>lo
            </div>
        </div>
    </div>
    <!-- Recent Winners Area End -->
</section>


<section class="kamas-tracking">
    <div class="container">
        <div class="payment_notif">
            <img src="assets/images/fluent_person-question-mark-16-filled.svg" alt="notif" />

            <p>
                Bonjour @auth <span>{{ Auth::user()->name }}</span> @endauth, vous avez sélectionné <b>{{ $payment->name }}</b> comme
                méthode de paiement. Veuillez suivre les instructions ci-dessous pour finaliser votre paiement.
            </p>
        </div>
        <!-- progress steps -->

        <div class="col-md-12 col-lg-12 px-0">
            <div id="tracking-pre"></div>
            <div id="tracking">


                @if (Str::lower($payment->name) == 'paypal')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span class="text-danger"> IMPORTANT : Avant de procéder au paiement, veuillez
                                    prendre note que PayPal
                                    applique des frais lors de l'envoi d'argent à un membre de votre famille ou à un
                                    ami. Nous n'acceptons que ce mode de paiement via PayPal. Assurez-vous donc de
                                    sélectionner l'option 'envoyer de l'argent à un proche ou à un ami' lors de votre
                                    paiement.
                                </span>
                                <span>Si vous n'avez pas de compte PayPal, vous pouvez en créer un <a
                                        href="https://www.paypal.com"><i>compte</i></a></span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>

                                    Veuillez effectuer un paiement de <i
                                        @if (setting('site.currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (setting('site.currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (setting('site.currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i> (<i>des frais de PayPal seront affichés lors du paiement</i>) à
                                    l'adresse
                                    e-mail suivante : <a href="https://www.paypal.com"><i>cliquez ici</i></a>.
                                    N'oubliez pas d'ajouter
                                    votre numéro de commande
                                    <i>{{ $order->id }}</i> en commentaire lors du paiement/span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>Une fois le paiement réalisé, veuillez cliquer sur le bouton ci-dessous. Un
                                    membre de notre équipe vérifiera votre paiement et traitera votre commande. Nous
                                    vous remercions pour votre collaboration.</span>
                            </div>
                        </div>


                        <!-- Ifinish payment button -->
                        <div class="tracking-item finish-payment">
                            <a href="{{ route('frontend.confirm.payment', $order) }}">
                                <button>I finish payment</button>
                            </a>
                        </div>


                    </div>

                    <!-- STRIPE -->
                @elseif (Str::lower($payment->name) == 'stripe')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Merci de préparer votre carte bancaire afin de procéder au paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci de procéder au règlement à partir de</span>
                            </div>
                            <!-- Ifinish payment button -->
                            <div class="tracking-item finish-payment">
                                <form action="{{ route('stripe.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                    <button type="submit" class="btn" target="_blank">Checkout</button>
                                </form>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>Une fois le paiement effectué, veuillez suivre les instructions pour une
                                    livraison rapide. Merci.</span>
                            </div>
                        </div>

                        <!-- Ifinish payment button -->
                        <div class="tracking-item finish-payment">
                            <form action="{{ route('stripe.checkout') }}" method="POST">
                                @csrf
                                <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <button type="submit" class="btn">Checkout</button>
                            </form>
                        </div>


                    </div>

                    <!-- BِANCONTACT -->
                @elseif (Str::lower($payment->name) == 'bancontact')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Merci de préparer votre carte bancaire afin de procéder au paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci de procéder au règlement à partir de</span>
                            </div>
                            <!-- Ifinish payment button -->
                            <div class="checkout-btn">
                                <form action="{{ route('stripe.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                    <button type="submit" class="btn" target="_blank">Checkout</button>
                                </form>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>
                                    <i @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i>
                                    Une fois le paiement effectué, veuillez suivre les instructions pour une livraison
                                    rapide. Merci.</span>
                            </div>
                        </div>




                    </div>


                    <!-- IDEAL -->
                @elseif (Str::lower($payment->name) == 'ideal')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Merci de préparer votre carte bancaire afin de procéder au paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci de procéder au règlement à partir de</span>
                            </div>
                            <!-- Ifinish payment button -->
                            <div class="checkout-btn">
                                <form action="{{ route('stripe.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                    <button type="submit" class="btn" target="_blank">Checkout</button>
                                </form>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>
                                    <i @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i>
                                    Une fois le paiement effectué, veuillez suivre les instructions pour une livraison
                                    rapide. Merci.</span>
                            </div>
                        </div>




                    </div>


                    <!-- GIROPAY -->
                @elseif (Str::lower($payment->name) == 'giropay')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Merci de préparer votre carte bancaire afin de procéder au paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci de procéder au règlement à partir de</span>
                            </div>
                            <!-- Ifinish payment button -->
                            <div class="checkout-btn">
                                <form action="{{ route('stripe.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                    <button type="submit" class="btn" target="_blank">Checkout</button>
                                </form>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>
                                    <i @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i>
                                    Une fois le paiement effectué, veuillez suivre les instructions pour une livraison
                                    rapide. Merci.</span>
                            </div>
                        </div>




                    </div>

                    <!-- Bitcoin -->
                @elseif (Str::lower($payment->name) == 'bitcoin')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Si vous possédez un compte Binance ou si vous avez des <i>BITCOINS</i> dans
                                    votre
                                    portefeuille et souhaitez effectuer le paiement en utilisant la crypto-monnaie,
                                    veuillez suivre ces étapes. Tout d'abord, accédez à ce site en <a
                                        href="#"><i>cliquant ici</i></a> pour
                                    consulter le taux de change de votre commande. Entrez le montant de votre commande
                                    (<i>en EURO à BTC</i>).</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci d'envoyer la somme de <i
                                        @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i> (<i>frais inclus</i>) en <i>BITCOIN</i>. Il vous suffit
                                    de saisir notre adresse de retrait, <a href="#"><i>clique ici</i></a>, et de
                                    nous envoyer le montant selon
                                    le taux de conversion que vous avez consulté sur le <a
                                        href="#"><i>site</i></a>.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span> Une fois le paiement réalisé, veuillez cliquer sur le bouton ci-dessous. Un
                                    membre de notre équipe vérifiera votre paiement et traitera votre commande. Nous
                                    vous remercions pour votre collaboration.</span>
                            </div>
                        </div>

                        <!-- Ifinish payment button -->
                        <div class="tracking-item finish-payment">
                            <a href="{{ route('frontend.confirm.payment', $order) }}">
                                <button>J'ai effectué le paiement</button>
                            </a>
                        </div>


                    </div>


                    <!-- Usdt -->
                @elseif (Str::lower($payment->name) == 'usdt')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Si vous possédez un compte Binance ou si vous avez des <i>USDT</i> dans
                                    votre
                                    portefeuille et souhaitez effectuer le paiement en utilisant la crypto-monnaie,
                                    veuillez suivre ces étapes. Tout d'abord, accédez à ce site en <a
                                        href="#"><i>cliquant ici</i></a> pour
                                    consulter le taux de change de votre commande. Entrez le montant de votre commande
                                    (<i>en EURO à USDT</i>).</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci d'envoyer la somme de <i
                                        @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i> (<i>frais inclus</i>) en <i>USDT</i>. Il vous suffit de
                                    saisir notre adresse de retrait, <a href="#"><i>clique ici</i></a>, et de
                                    nous envoyer le montant selon le
                                    taux de conversion que vous avez consulté sur le <a
                                        href="#"><i>site</i></a>.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>Une fois le paiement réalisé, veuillez cliquer sur le bouton ci-dessous. Un
                                    membre de notre équipe vérifiera votre paiement et traitera votre commande. Nous
                                    vous remercions pour votre collaboration.</span>
                            </div>
                        </div>
                        <!-- Ifinish payment button -->
                        <div class="tracking-item finish-payment">
                            <a href="{{ route('frontend.confirm.payment', $order) }}">
                                <button>J'ai effectué le paiement</button>
                            </a>
                        </div>
                    </div>
                @elseif (Str::lower($payment->name) == 'revolut')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Afin de réaliser ce paiement de façon rapide et économique, nous opterons
                                    pour l'utilisation de <i>REVOLUT</i>. Si vous possédez déjà un compte, vous avez la
                                    possibilité de vous connecter. Dans le cas contraire, vous pouvez créer un compte en
                                    seulement une minute en <a href="#"><i>cliquant ici</i></a>.</span>
                            </div>
                        </div>
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci de procéder au paiement d'un montant de <i
                                        @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i> (<i>frais inclus</i>) à
                                    partir de cette page et de choisir votre mode de paiement parmi <i>Revolut Pay,
                                        Carte,
                                        Apple Pay ou Google Pay</i>. N'oubliez pas d'ajouter votre numéro de commande
                                    <i>{{ $order->id }}</i> en
                                    commentaire."</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>Une fois le paiement réalisé, veuillez cliquer sur le bouton ci-dessous. Un
                                    membre de notre équipe vérifiera votre paiement et traitera votre commande. Nous
                                    vous remercions pour votre collaboration.</span>
                            </div>
                        </div>
                        <!-- Ifinish payment button -->
                        <div class="tracking-item finish-payment">
                            <a href="{{ route('frontend.confirm.payment', $order) }}">
                                <button>J'ai effectué le paiement</button>
                            </a>
                        </div>
                    </div>


                    <!-- Lydia -->
                @elseif (Str::lower($payment->name) == 'lydia')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Afin de réaliser ce paiement de façon rapide et économique, nous opterons
                                    pour l'utilisation de <i>LYDIA</i>. Si vous possédez déjà un compte, vous avez la
                                    possibilité de vous connecter. Dans le cas contraire, vous pouvez créer un compte en
                                    seulement une minute en <a href="https://www.lydia-app.com"><i>cliquant
                                            ici</i></a>.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci de bien vouloir envoyer la somme de
                                    <i @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i> ( <i>frais inclus</i> ) à cette
                                    adresse e-mail « <a href="#"><i>cliquez ici</i></a> » afin de consulter le
                                    courrier. N'oubliez pas
                                    d'ajouter votre numéro de commande <i>{{ $order->id }}</i> dans le commentaire
                                    lors du
                                    paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>
                                    Une fois le paiement réalisé, veuillez cliquer sur le bouton ci-dessous. Un membre
                                    de notre équipe vérifiera votre paiement et traitera votre commande. Nous vous
                                    remercions pour votre collaboration.
                                </span>
                            </div>
                        </div>

                        <!-- Ifinish payment button -->
                        <div class="tracking-item finish-payment">
                            <form action="{{ route('stripe.checkout') }}" method="POST">
                                @csrf
                                <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <button type="submit" class="btn">Je effectué le paiement</button>
                            </form>
                        </div>
                    </div>

                    <!-- Wise -->
                @elseif (Str::lower($payment->name) == 'wise')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Afin de réaliser ce paiement de façon rapide et économique, nous opterons
                                    pour l'utilisation de <i>WISE</i>. Si vous possédez déjà un compte, vous avez la
                                    possibilité de vous connecter. Dans le cas contraire, vous pouvez créer un compte en
                                    seulement une minute en cliquant ici.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci d'envoyer la somme de <i
                                        @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i> à ( <i>IBAN, Nom de la banque...</i> ) en <a
                                        href="https://wise.com/"><i>cliquant ici</i></a> pour
                                    consulter les coordonnées bancaires. N'oubliez pas d'inclure votre numéro
                                    de commande <i>{{ $order->id }}</i> dans le commentaire lors du paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>step 3Une fois le paiement réalisé, veuillez cliquer sur le bouton
                                    ci-dessous.
                                    Un membre de notre équipe vérifiera votre paiement et traitera votre commande. Nous
                                    vous remercions pour votre collaboration.</span>
                            </div>
                        </div>


                        <!-- Ifinish payment button -->
                        <div class="tracking-item finish-payment">
                            <form action="{{ route('stripe.checkout') }}" method="POST">
                                @csrf
                                <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                <input type="hidden" name="order_id" value="{{ $order->id }}">
                                <button type="submit" class="btn">J'ai effectué le paiement</button>
                            </form>
                        </div>
                    </div>


                    <!-- Visa -->
                @elseif (Str::lower($payment->name) == 'visa')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Merci de préparer votre carte bancaire afin de procéder au paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci de procéder au règlement à partir de</span>
                            </div>
                            <!-- Ifinish payment button -->
                            <div class="checkout-btn">
                                <form action="{{ route('stripe.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                    <button type="submit" class="btn" target="_blank">Checkout</button>
                                </form>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>
                                    <i @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i>
                                    Une fois le paiement effectué, veuillez suivre les instructions pour une livraison
                                    rapide. Merci.</span>
                            </div>
                        </div>




                    </div>


                    <!-- Mastercard -->
                @elseif (Str::lower($payment->name) == 'mastercard')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Merci de préparer votre carte bancaire afin de procéder au paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci de procéder au règlement à partir de</span>
                            </div>
                            <!-- Ifinish payment button -->
                            <div class="checkout-btn">
                                <form action="{{ route('stripe.checkout') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="payment_id" value="{{ $payment->id }}">
                                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                                    <button type="submit" class="btn" target="_blank">Checkout</button>
                                </form>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>
                                    <i @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i>
                                    Une fois le paiement effectué, veuillez suivre les instructions pour une livraison
                                    rapide. Merci.</span>
                            </div>
                        </div>




                    </div>


                    <!-- Skrill -->
                @elseif (Str::lower($payment->name) == 'skrill')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>Afin de réaliser ce paiement de façon rapide et économique, nous opterons
                                    pour l'utilisation de <i>Skrill</i>. Si vous possédez déjà un compte, vous avez la
                                    possibilité de vous connecter. Dans le cas contraire, vous pouvez créer un compte en
                                    seulement une minute en <a href="https://www.skrill.com/"><i>cliquant
                                            ici</i></a>.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci de bien vouloir envoyer la somme de <i
                                        @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i> ( <i>frais inclus</i> ) à cette
                                    adresse e-mail « <a href=""><i>cliquez ici</i></a> » afin de consulter le
                                    courrier. N'oubliez pas
                                    d'ajouter votre numéro de commande <i>{{ $order->id }}</i> dans le commentaire
                                    lors du
                                    paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>
                                    Une fois le paiement réalisé, veuillez cliquer sur le bouton ci-dessous. Un membre
                                    de notre équipe vérifiera votre paiement et traitera votre commande. Nous vous
                                    remercions pour votre collaboration.</span>
                            </div>
                        </div>


                        <!-- Ifinish payment button -->
                        <div class="tracking-item finish-payment">
                            <a href="{{ route('frontend.confirm.payment', $order) }}">
                                <button>J'ai effectué le paiement</button>
                            </a>
                        </div>
                    </div>


                    <!-- CIH -->
                @elseif (Str::lower($payment->name) == 'cih')
                    <div class="tracking-list">
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 1<span>est une institution financière du Maroc. Pour effectuer le paiement,
                                    veuillez suivre les instructions ci-dessous.
                                </span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 2<span>Merci d'envoyer la somme de <i
                                        @if (Session::get('currency') != 'euro') style="display: none;" @endif>{{ $server->price_euro * $pack->quantity }}
                                        EUR</i>
                                    <i @if (Session::get('currency') != 'usd') style="display: none;" @endif>{{ $server->price * $pack->quantity }}
                                        USD</i>
                                    <i @if (Session::get('currency') != 'cad') style="display: none;" @endif>{{ $server->price_cad * $pack->quantity }}
                                        CAD</i>
                                    <i @if (Session::get('currency') != 'mad') style="display: none;" @endif>{{ $server->price_mad * $pack->quantity }}
                                        DH</i> en MAD à (<i>IBAN, Nom de la banque...</i>) en
                                    <a href="#"><i>cliquant ici</i></a> pour consulter les coordonnées bancaires.
                                    N'oubliez pas d'inclure votre
                                    numéro de commande <i>{{ $order->id }}</i> dans le commentaire lors du
                                    paiement.</span>
                            </div>
                        </div>
                        <!-- Step item -->
                        <div class="tracking-item">
                            <div class="tracking-icon status-current blinker">
                                <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" data-prefix="fas"
                                    data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                    </path>
                                </svg>
                            </div>
                            <div class="tracking-date">
                                <img src="https://raw.githubusercontent.com/shajo/portfolio/a02c5579c3ebe185bb1fc085909c582bf5fad802/delivery.svg"
                                    class="img-responsive" alt="order-placed" />
                            </div>
                            <div class="tracking-content">
                                step 3<span>
                                    Une fois le paiement réalisé, veuillez cliquer sur le bouton ci-dessous. Un membre
                                    de notre équipe vérifiera votre paiement et traitera votre commande. Nous vous
                                    remercions pour votre collaboration.</span>
                            </div>
                        </div>
                        <!-- Ifinish payment button -->
                        <div class="tracking-item finish-payment">
                            <a href="{{ route('frontend.confirm.payment', $order) }}">
                                <button>J'ai effectué le paiement</button>
                            </a>
                        </div>


                    </div>
                @endif




            </div>
        </div>
        <!-- Payment info -->
        <div class="pay-total-info my-5">
            <div class="order-status-infos d-flex full-width">
                <div class="order-number-info">Numéro d'ordre : #KX{{ $order->id }}</div>
                <div class="confirmed-order-info">
                    @if ($order->confirmed == false)
                        Confirmation : En attente de confirmation
                    @else
                        Confirmation : Paiement confirmé
                    @endif
                </div>
            </div>
            <!-- Server info -->
            <div class="pay-server-info full-width">
                <div class="server-info">{{ $order->server->name }} {{ $order->pack->quantity }}m for
                    @auth {{ Auth::user()->name }} @endauth</div>
                <div class="server-price" @if (setting('site.currency') != 'euro') style="display: none;" @endif>
                    {{ $order->server->price_euro * $order->pack->quantity }} EUR</div>
                <div class="server-price" @if (setting('site.currency') != 'usd') style="display: none;" @endif>
                    {{ $order->server->price * $order->pack->quantity }} USD</div>
                <div class="server-price" @if (setting('site.currency') != 'cad') style="display: none;" @endif>
                    {{ $order->server->price_cad * $order->pack->quantity }} CAD</div>
            </div>

            <!-- Bonus info -->
            @if ($pack->bonus > 0.0)
                <!-- Bonus info -->
                <div class="bonus full-width">
                    <div class="bonus-info">Free Bonus</div>
                    <div class="bonus-price">{{ ($pack->quantity * 1000000 * $pack->bonus) / 100 }} ₭</div>
                </div>
                <!-- Fees info -->
            @endif

        </div>
        <!-- Questions Start -->
        <section class="featured-game step-5-qst">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-heading">
                            <p class="text mb-0">
                                Parcourt la question la plus posée, pour vous aider
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="game-slider">
                            @foreach ($faqs as $faq)
                                <div class="item">
                                    <div class="single-game">
                                        <div class="qst">
                                            {{ $faq->question }}
                                        </div>
                                        <p>
                                            {{ $faq->answer }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Questions End -->
    </div>
</section>
<!-- Play Games Area End -->




<x-footer />
