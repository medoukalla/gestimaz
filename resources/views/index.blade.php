<x-head title="{{ setting('site.title') }}" />

<x-header />

<!-- Hero Area Start -->
<div class="hero-area">
    <!-- <img src="assets/images/background.png" alt="hero-background" /> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex align-self-center">
                <div class="left-content">
                    <div class="content">
                        <h5 class="subtitle">Kamas à un prix battant toute concurrence !</h5>
                        <h1 class="title">ACHAT -<span> VENTE</span> -
                            <span>ECHANGE</span>
                        </h1>
                        <p class="text">
                            Meilleur prix, 100% sécurisé, Livraison instantanée
                        </p>
                        <div class="links">
                            <a href="{{ route('frontend.servers') }}" class="mybtn1 link1 getstart-btn">Commandez
                                maintenant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<!-- Featured Game Area Start -->
<section class="featured-game">
    <!-- Features Area Start -->
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-box">
                        <div class="feature-box-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <a href="#">
                                        <div class="single-feature">
                                            <div class="icon one">
                                                <img src="{{ asset('assets/images/classice_servers.png') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <a href="#">
                                        <div class="single-feature">
                                            <div class="icon two">
                                                <img src="{{ asset('assets/images/retro_servers.png') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <a href="#">
                                        <div class="single-feature">
                                            <div class="icon three">
                                                <img src="{{ asset('assets/images/touche_servers.png') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-heading server-card">
                    <h5 class="subtitle">Meilleurs prix d’achat</h5>
                    <h2 class="title">Servers</h2>
                    <p class="text">
                        Les prix d’achat des kamas sont différents selon le serveur, dans ce tableau vous trouverez les
                        serveurs dont les prix sont moins chers.
                    </p>
                </div>
            </div>
        </div>

        @livewire('get-servers', [
            'currency' => Session::get('currency'),
        ])


    </div>
    <!-- Recent Winners Area End -->
</section>
<!-- Server Cards Area	End -->

<!-- Start Comment ça march -->
<section class="get-start">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 d-flex align-self-center">
                <div class="left-area">
                    <div class="section-heading">
                        <h2 class="title">Comment ça marche ?</h2>
                        <h5 class="subtitle">
                            Obtenez votre commande rapidement, en toute sécurité et sans complexité.
                        </h5>
                        <p class="text">
                        <ul>
                            <li>Créez votre compte</li>
                            <p>En moins de 2 minutes, créez votre compte facilement pour passer votre commande</p>
                            <li>Passez votre commande</li>
                            <p>suivez votre commande et savoir toute instruction nécessaire afin de vous livrer vos
                                kamas</p>
                            <li>Obtenez votre kamas</li>
                            <p>Notre agent va vous rencontrer en jeu pour vous livrer la commande.</p>
                            <li>Succès !</li>
                            <p>
                                On vous remercie de laisser votre avis sur nos services pour nous encourager.
                                ENJOOY !
                            </p>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="right-image">
                    <img src="assets/images/comment-ca-march.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Comment ça march -->

<!-- Latest Activities Area Start -->
<section class="activities">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-heading">
                    <h5 class="subtitle">Meilleurs prix de vente</h5>
                    <h2 class="title">VENDRE DES KAMAS</h2>
                    <p class="text">
                        Les prix de vente des kamas sont différents selon le serveur, dans ce tableau vous trouverez les
                        serveurs dont les prix sont les plus chers.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">

            @livewire('get-sell-servers', [
                'currency' => Session::get('currency'),
            ])

        </div>
    </div>
    <!-- Fun fact Area Start -->
    <!-- <div class="funfact">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="single-fun">
                <img src="assets/images/funfact/icon1.png" alt="" />
                <div class="count-area">
                  <div class="count">93K</div>
                </div>
                <p>Players</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="single-fun">
                <img src="assets/images/funfact/icon2.png" alt="" />
                <div class="count-area">
                  <div class="count">99+</div>
                </div>
                <p>Games</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="single-fun">
                <img src="assets/images/funfact/icon3.png" alt="" />
                <div class="count-area">
                  <div class="count">70+</div>
                </div>
                <p>Winners</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    <!-- Fun fact Area End -->
</section>
<!-- Latest Activities Area End -->

<!-- On donne le bonheur avant Kamas Start -->
<section class="get-start">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="right-image">
                    <img src="assets/images/jennydofus.png" alt="jennydofus" />
                </div>
            </div>
            <div class="col-lg-7 d-flex align-self-center">
                <div class="left-area">
                    <div class="section-heading">
                        <h2 class="title">On donne le bonheur
                            avant Kamas</h2>
                        <h5 class="subtitle">
                            Notre amical support, nos offres folles, nos
                            cadeaux et notre programme de classement
                        </h5>
                        <p class="text">
                        <ul>
                            <li>Amical support</li>
                            <p>En 2 min créez votre compte pour enregistrer
                                vos commandes et monter en grade</p>
                            <li>Offres folles & classement</li>
                            <p>Pour suivre votre commande et obtenir les
                                informations de livraison</p>
                            <li>Livraison rapide</li>
                            <p>Notre agent vous rencontrera en jeu et passera
                                votre commande</p>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- On donne le bonheur avant Kamas End -->

<!-- Method payments Start -->
<section class="featured-game kamatrix_qst">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-heading">
                    <h5 class="subtitle">
                        Payez comme vous voulez
                    </h5>
                    <h2 class="title">
                        Méthodes de paiement
                    </h2>
                    <p class="text">
                        On vous offre divers méthodes de paiement selon le choix qui vous convient le plus.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="game-slider">
                    <div class="pay-img">
                        <img src="/assets/images/payment/1.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/2.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/3.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/4.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/5.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/6.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/cih.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/crypto.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/paypal.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/revolute.png" alt="">
                    </div>
                    <div class="pay-img">
                        <img src="/assets/images/payment/skrill.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Method payments End -->

<!-- Start Envie d'être partenaire ? -->
<section class="get-start">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 d-flex align-self-center">
                <div class="left-area">
                    <div class="section-heading">
                        <h2 class="title">Envie d'être partenaire ?</h2>
                        <h5 class="subtitle">
                            Rejoignez nos + 1000 partenaires dans le monde et commencez à gagner de l'argent
                        </h5>
                        <ul class="partenaire-section">
                            <li>Votre lien personnalisé avec votre nom</li>
                            <li>Page conçue pour vous</li>
                            <li>Gagnez sans limites</li>
                            <li>Paiement à partir de 1 EUR</li>
                            <li>Bannières prêtes à être utilisées sur votre site Web</li>
                            <li>Soyez payé à chaque commande</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="right-image">
                    <img src="assets/images/gunDofus.png" alt="gunDofus" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Envie d'être partenaire ? -->

<!-- Questions Start -->
<section class="featured-game kamatrix_qst">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="section-heading">
                    <h5 class="subtitle">
                        TRY TO CHECK OUT OUR
                    </h5>
                    <h2 class="title">
                        questions
                    </h2>
                    <p class="text">
                        Ici vous trouverez les questions les plus répétées par nos clients, ainsi que les réponses pour
                        enlever toute ambiguitée et mieux comprendre notre démarche .
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="game-slider">

                    @foreach ($faqs as $faq)
                        <div class="item">
                            <div class="single-game questions-height">
                                <div class="qst mb-5">{{ $faq->question }}</div>
                                <p>{{ $faq->answer }}.</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Questions End -->

<x-footer />
