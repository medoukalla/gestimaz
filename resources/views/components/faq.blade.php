<!-- faq start -->
<section class="faq-area pt-120 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="faq-left mb-40">
                    <div class="faq-wrapper">
                        <div class="accordion" id="accordionExampleTwo">
                            
                            @foreach ( $questions as $question )
                                <div class="card">
                                    <div class="card-header" id="heading{{ $question->id }}">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn-link collapsed" data-toggle="collapse" data-target="#collapse{{ $question->id }}" aria-expanded="true" aria-controls="collapse{{ $question->id }}">
                                                {{ $question->question }}
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapse{{ $question->id }}" class="collapse" aria-labelledby="heading{{ $question->id }}" data-parent="#accordionExampleTwo" style="">
                                        <div class="card-body">
                                            {{ $question->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="faq-right mb-40">
                    <div class="faq-img">
                        <img src="{{ asset('app').'/'.setting('faq.image') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq end -->