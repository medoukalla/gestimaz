<!-- contact start -->
<section class="contact-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-12">
                <div class="contact-left">
                    <div class="contact-thumb-left">
                        <img src="{{ asset('app').'/'.setting('contact.big_image') }}"
                            alt="image non trouvée">
                        <div class="contact-shape"></div>
                    </div>
                    <div class="contact-thumb-right">
                        <img src="{{ asset('app').'/'.setting('contact.small_image') }}" style=" max-width: 300px; " alt="image non trouvée">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="contact-right">
                    <div class="border-title-2">
                        <h1>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">F.Devis</font>
                            </font>
                        </h1>
                    </div>
                    <div class="about-title mb-20">
                        <h5>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Devis gratuit</font>
                            </font>
                        </h5>
                        <h2>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{ setting('contact.title') }}</font>
                            </font><span>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">.</font>
                                </font>
                            </span>
                        </h2>
                    </div>
                    <form action="https://wasimmia.github.io/bildhub/index.html#">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="text-box">
                                    <span><i class="far fa-user"></i></span>
                                    <input type="text" placeholder="Entrez le nom complet">
                                </div>

                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="text-box">
                                    <span><i class="far fa-envelope"></i></span>
                                    <input type="email" placeholder="Votre e-mail">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="text-box">
                                    <span><i class="fas fa-arrow-right"></i></span>
                                    <input type="text" placeholder="Votre sujet">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="message-box">
                                    <span><i class="far fa-edit"></i></span>
                                    <textarea name="message" cols="30" rows="10"
                                        placeholder="Votre massage"></textarea>
                                    <button class="thm-btn" type="submit"><i class="far fa-paper-plane"></i>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Envoyer un massage</font>
                                        </font>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact end -->