<!-- team start -->
<section class="team-area pt-120 pb-90 gray-bg">
    <div class="container">
        <div class="row">

            @foreach ($members as $member)
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-team text-center mb-30">
                        <div class="team-thumb">
                            <img src="{{ asset('app').'/'.$member->avatar }}" alt="image non trouvée">
                        </div>
                        <div class="team-content text-center">
                            <h3>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{ $member->name }}</font>
                                </font>
                            </h3>
                            <h5>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{ $member->job }}</font>
                                </font>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</section>
<!-- team end -->