<!-- Footer Area Start -->
<footer class="footer" id="footer">
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-box">
                        <form action="{{ route('frontend.newsletter') }}" method="post" id="newsletter_subscribe">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="heading-area">
                                        <h5 class="sub-title">Inscrivez-vous à ANKAMAS</h5>
                                        <h4 class="title">Pour apprendre nos offres exclusives.</h4>

                                        <div class="alert alert-success"
                                            style="display: none; max-width: 600px; margin: 20px auto;">Vous vous êtes
                                            abonné(e) à notre newsletter avec succès.</div>
                                        <div class="alert alert-danger"
                                            style="display: none; max-width: 600px; margin: 20px auto;">Vous n'êtes pas
                                            abonné ! Veuillez réessayer après 1 minute.</div>


                                    </div>
                                </div>
                                <div class="col-lg-3 col-4 d-flex align-self-center">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/mailbox.png') }}" alt="" />
                                    </div>
                                </div>


                                <div class="col-lg-6 col-8 d-flex align-self-center">
                                    <div class="form-area">
                                        <input name="email" type="email" placeholder="Votre adresse e-mail"
                                            required />
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex align-self-center">
                                    <div class="button-area">
                                        <button class="mybtn1" type="submit">
                                            Subscribe
                                            <span><i class="fas fa-paper-plane"></i></span>
                                        </button>
                                    </div>
                                </div>




                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="secure-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="google-secure float-right d-flex align-items-center">
                        <img src="{{ asset('assets/images/sslsecure.svg') }}" alt="google-secure">
                        <div class="ml-2">
                            <h4>google</h4>
                            <h6>SafeBrowsing</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="google-secure d-flex align-items-center">
                        <img src="{{ asset('assets/images/safeBrowsing.svg') }}" alt="google-secure">
                        <div class="ml-2">
                            <h4>secure</h4>
                            <h6>SSL incryption</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="footer-widget info-link-widget">
                    <p>Qui nous sommes? GoKamas vous propose les meilleurs prix pour acheter et vendre vos kamas en
                        toute
                        sécurité, notre équipe sympathique toujours prête à vous aider et à vous rendre heureux.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-widget info-link-widget">
                    <h4 class="title">help center</h4>
                    <ul class="link-list">
                        <li>
                            <a href="{{ route('frontend.index') }}">
                                <i class="fas fa-angle-double-right"></i>Accueil
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.servers') }}"> <i class="fas fa-angle-double-right"></i>Achat
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.sell') }}">
                                <i class="fas fa-angle-double-right"></i>Vente
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.exchange') }}">
                                <i class="fas fa-angle-double-right"></i>Echange
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-widget info-link-widget">
                    <h4 class="title">Legal Info</h4>
                    <ul class="link-list">
                        <li>
                            <a href="{{ route('frontend.cgv') }}">
                                <i class="fas fa-angle-double-right"></i>Condition de vente
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.cgu') }}">
                                <i class="fas fa-angle-double-right"></i>Condition d’achat
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.contact') }}">
                                <i class="fas fa-angle-double-right"></i>Contact
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.procedure') }}">
                                <i class="fas fa-angle-double-right"></i>Procedure
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="left-area">
                        <p>
                            Droits d'auteur © 2023. Tous droits réservés par <a href="#">Kamatrix</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="copright-area-links">
                        <li>
                            <a href="{{ route('frontend.cgv') }}">Conditions d'utilisation</a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.cgu') }}">Politique de confidentialité</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<!-- Back to Top Start -->
<div class="bottomtotop">
    <i class="fas fa-chevron-right"></i>
</div>
<!-- Back to Top End -->


<!-- jquery -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<!-- popper -->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- plugin js-->
<script src="{{ asset('assets/js/plugin.js') }}"></script>

<!-- MpusemoverParallax JS-->
<script src="{{ asset('assets/js/TweenMax.js') }}"></script>
<script src="{{ asset('assets/js/mousemoveparallax.js') }}"></script>
<!-- main -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    $(document).ready(function() {

        // if user clickek server pack to buy it
        $('a.buy_this_pack').click(function(e) {
            var pack_id = $(this).data('pack');
            $("form#form_" + pack_id).submit();
        })


        // if user clicked payment method
        $('div.use_this_payment').click(function(c) {
            var form_id = $(this).data('form');
            $('form#form_' + form_id).submit();
        });


        // if user submit the form to subscribe in newsletter
        $("form#newsletter_subscribe").submit(function(e) {

            $.post($("#newsletter_subscribe").attr('action'), $("#newsletter_subscribe").serialize(),
                function(data) {
                    if (data == true) {
                        $("#newsletter_subscribe .alert-danger").fadeOut(50);
                        $("#newsletter_subscribe .alert-success").fadeIn(500);
                        $("#newsletter_subscribe input").val('');
                    } else {
                        $("#newsletter_subscribe .alert-success").fadeOut(50);
                        $("#newsletter_subscribe .alert-danger").fadeIn(500);

                    }
                });

            e.preventDefault();

        });

    });
</script>

@livewireScripts

</body>

</html>
