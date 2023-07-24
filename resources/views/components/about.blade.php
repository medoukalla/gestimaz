<!-- about start -->
<section class="about-area pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-tab">
                    
                    
                    <div class="tab-content" id="nav-tabContent">
                    
                        <div class="tab-pane fade show active" id="nav-02" role="tabpanel"
                            aria-labelledby="nav-02-tab">
                            <div class="about-wrapper pt-120">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="about-left pos-rel">
                                            <div class="border-title-2">
                                                <h1>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">À propos</font>
                                                    </font>
                                                </h1>
                                            </div>
                                            <div class="about-title mb-20">
                                                <h5>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">À propos de nous !</font>
                                                    </font>
                                                </h5>
                                                <h2>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            {{ setting('propos-de-nous.title') }}
                                                        </font>
                                                    </font><span>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">.</font>
                                                        </font>
                                                    </span>
                                                </h2>
                                            </div>

                                            {!! setting('propos-de-nous.content') !!}

                                            <div class="about-btn pt-20">
                                                <a href="service-details.html" class="thm-btn">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">{{ setting('propos-de-nous.button') }}</font>
                                                    </font>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="about-right pos-rel">
                                            <div class="about-right-content">
                                                <h1>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">15 </font>
                                                    </font><span>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">+</font>
                                                        </font>
                                                    </span>
                                                </h1>
                                                <h5>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Années</font>
                                                    </font>
                                                </h5>
                                                <h3>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">d'expérience
                                                        </font>
                                                    </font>
                                                </h3>
                                            </div>
                                            <div class="about-right-thumb">
                                                <img src="{{ asset('app').'/'.setting('propos-de-nous.image') }}" alt="image non trouvée">
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
    </div>
</section>
<!-- about end -->