<!-- header start -->
<header>
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="left">
                        <li><span><i class="far fa-clock"></i></span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">9h30 - 18h30 du lundi au dimanche</font>
                            </font>
                        </li>
                        <li><span><i class="fas fa-phone-alt"></i></span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">06.61.21.55.60</font>
                            </font>
                        </li>
                        <li><span><i class="fas fa-map-marker-alt"></i></span>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">262 Boulevard Mohamed V, Casablanca</font>
                            </font>
                        </li>
                    </ul>
                    <ul class="right">
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>

                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="logo logo-2">
                        <a href="{{ route('frontend.index') }}">
                            <img style=" max-height: 120px; margin-top: 20px; margin-bottom: 20px; "
                                src="{{ asset('img/logo.png') }}" alt="logo_not_found">
                        </a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10">
                    <div class="header-button d-none d-lg-block f-right">
                        <a class="thm-btn" href="{{ route('frontend.contact') }}">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Contactez-nous</font>
                            </font>
                        </a>
                    </div>
                    <div class="main-menu f-right">
                        <nav id="mobile-menu" style="display: block;">
                            <ul>

                                <li>
                                    <a href="/">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Accueil</font>
                                        </font>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('frontend.services') }}">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Nos services</font>
                                        </font>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('frontend.projects') }}">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">nos projets</font>
                                        </font>
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ route('frontend.faq') }}">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">FAQ</font>
                                        </font>
                                    </a>
                                </li>


                                <li>
                                    <a href="{{ route('frontend.team') }}">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Notre équipe</font>
                                        </font>
                                    </a>
                                </li>


                            </ul>
                        </nav>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->