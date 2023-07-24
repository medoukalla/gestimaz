@php
    $members = \App\Models\User::get_4_team_members();
@endphp
<!-- team start -->
<section class="team-area pt-120 pb-90 gray-bg">
    <div class="section-title text-center">
        <div class="border-title">
            <h1>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Équipe</font>
                </font>
            </h1>
        </div>
        <h5>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Notre équipe</font>
            </font>
        </h5>
        <h2>
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Notre équipe d'experts</font>
            </font>
        </h2>
    </div>
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