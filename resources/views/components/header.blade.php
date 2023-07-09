<!-- Header Area Start  -->
<header class="header">
    <!-- Top Header Area Start -->
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="left-content">
                            <ul class="left-list">
                                <li>
                                    <p>
                                        <a href="">
                                            <i class="fas fa-headset"></i> Support
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:contact@ankamas.com"
                                            class="__cf_email__">Contact@ankamas.com</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="right-content">
                            <ul class="right-list">
                                <li>
                                    <div class="cart-icon tm-dropdown">
                                        <!-- <i class="fas fa-cart-arrow-down"></i> -->
                                        <img src="{{ asset('assets/images/dollar-change.svg') }}" alt="dollar-change"
                                            class="dollar-changer">
                                        <span class="cart-count d-none">3</span>
                                        <div class="tm-dropdown-menu">
                                            <ul class="currency-list">
                                                <li>
                                                    <a href="{{ route('change_currency', 'euro') }}">
                                                        <img src="{{ asset('assets/images/euro.svg') }}" alt="Euro">
                                                        <span>Euro</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('change_currency', 'usd') }}">
                                                        <img src="{{ asset('assets/images/Dollar.svg') }}"
                                                            alt="Dollar">
                                                        <span>Usa dollar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('change_currency', 'cad') }}">
                                                        <img src="{{ asset('assets/images/Canadian_dollar.svg') }}"
                                                            alt="cad">
                                                        <span>Canadian dollar</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('change_currency', 'mad') }}">
                                                        <img src="{{ asset('assets/images/mad.svg') }}" alt="mad">
                                                        <span>Moroccan Dirham</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>

                                    {{-- If user logged in include the notifications --}}
                                    @auth
                                        @livewire('frontend-notifications')
                                    @endauth

                                    @guest
                                        <div class="notofication tm-dropdown" title="Veuillez vous connecter d'abord.">
                                            <i class="fas fa-bell"></i>
                                        </div>
                                    @endguest

                                </li>
                                <li>
                                    @guest
                                        <a href="{{ route('voyager.login') }}  " class="sign-in">
                                            <i class="fas fa-user"></i> Sign In
                                        </a>
                                    @endguest

                                    @auth
                                        <a href="{{ route('voyager.profile') }}" class="sign-in">
                                            <i class="fas fa-user"></i> Profile
                                        </a>
                                    @endauth
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Header Area End -->
    <!--Main-Menu Area Start-->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('frontend.index') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                            aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse fixed-height" id="main_menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link active" href="{{ route('frontend.index') }}" role="button">
                                        Accueil
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.servers') }}">Achat
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.sell') }}">Vente
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.exchange') }}">Echange
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.procedure') }}">procedure
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.contact') }}">Contact
                                        <div class="mr-hover-effect"></div>
                                    </a>
                                </li>
                            </ul>

                            @guest
                                <a href="{{ route('voyager.register') }}" class="mybtn1">
                                    Nous rejoindre
                                </a>
                            @endguest

                            @auth
                                <a href="{{ route('voyager.dashboard') }}" class="mybtn1">
                                    Tableau de bord
                                </a>
                            @endauth
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--Main-Menu Area Start-->
</header>
<!-- Header Area End  -->
