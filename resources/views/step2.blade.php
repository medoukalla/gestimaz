<x-head title="{{ setting('titles.buy') }}" />
<x-header />


<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area not-m-hero play">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">Achat</h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a> STEP 2 </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a>SELECT QUANTITY</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Play Games Area Start -->
<section class="featured-game packs">
    <!-- Servers card Area Start -->
    <div class="container">
        <div class="row">
            <div class="user-hint">
                <p>
                    Salut @auth <span>{{ Auth::user()->name }}</span> @endauth, veuillez vérifier votre pseudo sur le jeu s’il est bien
                    correct.
                </p>
            </div>
            <div class="pack-note">
                <div class="title">Buy Kamas Dofus Server Dodge - Best Price</div>
                <p>
                    Buy Kamas in server Dodge cheap, with the best price and fast
                    delivery in 3 minutes, get your bonus and unlock more fun with the
                    leader of selling kamas Dofus.
                </p>
            </div>
            <div class="perso-name">
                <div class="tip-off">
                    <div class="tip-msg">
                        Vérifiez votre pseudo ici : <span>Tip!</span>
                    </div>
                </div>
                <form action="{{ route('frontend.step3') }}" method="post"
                    class="d-flex flex-column align-items-center">
                    @csrf
                    <input type="text" name="game_id" @auth value="{{ Auth::user()->game_id }}" @endauth
                        placeholder="Your perso name in Dodge" required />
                    <a>
                        <button type="submit" class="mt-3">Passer au paiement</button>
                    </a>
                </form>


                <button style=" background-color: #81818126; color: black; font-size: 14px; margin-top:50px"
                    type="submit">
                    <a href="{{ route('frontend.clear.order') }}" title="Start new order" class="text-dark">
                        Start new order
                    </a>
                </button>


            </div>
        </div>
    </div>
    <!-- Recent Winners Area End -->
</section>
<!-- Play Games Area End -->



<x-footer />
