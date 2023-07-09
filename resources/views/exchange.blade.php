<x-head title="{{ setting('titles.exchange') }}" />
<x-header />


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="{{ asset('css/echange-de-kamas.css') }}">



<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bc-tournaments">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">Exchnager Kamas</h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="{{ route('frontend.index') }}">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a href="tournaments.html">Exchanger</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->

<!-- Exchange system -->
<div class="container exchanger-kamas">
    <form action="{{ route('frontend.exchange.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6 ex-left-side">
                <h1 class="exchange-title">ECHANGE DE KAMAS</h1>
                <hr />
                <h1 class="mini-title">Serveur à payer *</h1>
                <select id="server_from" name="server_from" class="form-group">
                    @foreach (Arr::sort($maps) as $map)
                        @if (count($map->servers) > 0)
                            @foreach ($map->servers as $server)
                                <option data-min-quantity="{{ $server->min_quantity }}"
                                    data-max-quantity="{{ $server->max_quantity }}" data-name="{{ $server->name }}"
                                    data-price="{{ $server->price }}" data-price-buy="{{ $server->price_buy }}"
                                    value="{{ $server->id }}">{{ $map->name . ' - ' . $server->name }}</option>
                            @endforeach
                        @endif
                    @endforeach

                </select>
                <h1 class="mini-title">Quantité à payer(Million) *</h1>
                <input id="quantity" name="quantity" placeholder="10 Millions"
                    value="{{ $server->first()->min_quantity }}" type="number"
                    min="{{ $servers->first()->min_quantity }}" max="{{ $servers->first()->max_quantity }}"
                    class="form-control" aria-describedby="quantityHelpBlock">
                <span id="quantityHelpBlock" class="form-text text-muted">Server
                    '<div style=" display: contents; font-weight: 700" id="serverName">{{ $servers->first()->name }}
                    </div>' - MIN :
                    <div style=" display: contents; font-weight: 700" id="serverMinQuantity">
                        {{ $servers->first()->min_quantity }}</div> Millions - MAX :
                    <div style=" display: contents; font-weight: 700" id="serverMaxQuantity">
                        {{ $servers->first()->max_quantity }}</div> Millions
                </span>



                <h1 class="mini-title mt-3">Personnage à payer *</h1>
                <input type="text" class="form-control mb-2 " id="name_from" name="name_from" required />



                <h1 class="mini-title mt-3">
                    <span style="color: rgb(51, 51, 51)">Serveur à recevoir *</span>
                </h1>
                <select id="server_to" name="server_to" class="form-group ">
                    @foreach (Arr::sortDesc($maps) as $map)
                        @if (count($map->servers) > 0)
                            @foreach ($map->servers as $server)
                                <option data-min-quantity="{{ $server->min_quantity }}"
                                    data-max-quantity="{{ $server->max_quantity }}" data-name="{{ $server->name }}"
                                    data-price="{{ $server->price }}" data-price-buy="{{ $server->price_buy }}"
                                    value="{{ $server->id }}">{{ $map->name . ' - ' . $server->name }}</option>
                            @endforeach
                        @endif
                    @endforeach
                </select>

                <h1 class="mini-title mt-3">Quantité à recevoir(Million) *</h1>
                <input type="text" id="quantity_get" required disabled />
                <input type="hidden" name="quantity_get" id="hiddenQuantity" value="" required>



                <h1 class="mini-title mt-3">Personnage à recevoir *</h1>
                <input type="text" class="form-control mb-2" id="name_to" name="name_to" required />



                <button class="btn btn-primary ex-command-btn mt-3" type="submit">
                    Commandez maintenant
                </button>


    </form>

</div>
<div class="col-md-6 ex-right-side">
    <h1 class="aider-title">Text for help</h1>
    <img class="ex-img" src="{{ asset('img/exchanger-animation-image.gif') }}" width="190" height="190" />

    <p class="ps-note">
        Nous vous enverrons des messages privés en jeu avec le code
        d'échange que vous aviez fourni, afin de confirmer que le
        destinataire qui échange avec vous fait partie de notre staff.
    </p>

    <p class="attention">
        Attention: Ne dites à personne d'autre votre Code. Si quelqu'un vous
        donne un Code incorrecte, bloquez le!!
    </p>

    <form action="{{ route('voyager.quick.contact') }}" method="post" id="quick_contact">
        @csrf
        <div class="ex-prob-report">
            <h1>Avez-vous le moindre problème ? Contactez-nous!</h1>
            <textarea name="message" placeholder="Message" required></textarea>

            <div class="alert alert-success" style="display: none;">Message envoyé avec succès.</div>
            <div class="alert alert-danger" style="display: none;">Message non envoyé ! Veuillez réessayer.</div>

            <button class="btn btn-primary" type="submit">Submit</button>
        </div>

    </form>

</div>
</div>
</div>





<script>
    $(document).ready(function() {

        // function to submit the values and get result
        function calculate() {

            var server_from_price = $("select#server_from").find("option:selected");
            var server_to_price = $("select#server_to").find("option:selected");
            var quantity = $("input#quantity").val();

            // If change from lower price to higher price
            if (server_from_price.data('price') < server_to_price.data('price')) {

                var res = (1 / server_from_price.data('price-buy')) * server_to_price.data('price');

                var sell = quantity / res;

                $("input#quantity_get").val(sell.toFixed(3) + '.000 M');

                $("input#hiddenQuantity").val(sell.toFixed(3));

            } else if (server_from_price.data('price') > server_to_price.data('price')) {

                var res = server_from_price.data('price-buy') / server_to_price.data('price');

                var sell = quantity * res;

                $("input#quantity_get").val(sell.toFixed(3) + '.000 M');
                $("input#hiddenQuantity").val(sell.toFixed(3));

            } else if (server_from_price.data('price') == server_to_price.data('price')) {

                var res = (1 / server_from_price.data('price-buy')) * server_to_price.data('price');

                var sell = quantity / res;

                $("input#quantity_get").val(sell.toFixed(3) + '.000 M');

                $("input#hiddenQuantity").val(sell.toFixed(3));


            }

        }
        calculate();

        setInterval(function() {
            calculate();
        }, 2000);

        // server_from
        var server_from = $("select#server_from");
        // server_to
        var server_to = $("select#server_to");
        // quantity
        var quantity = $("input#quantity");

        // if user change server_from # Send request and get min quantity for the new server
        server_from.change(function() {
            // min quantity
            var server_from_min_quantity = $(this).find("option:selected").data('min-quantity');
            var server_from_max_quantity = $(this).find("option:selected").data('max-quantity');
            var server_from_name = $(this).find("option:selected").data('name');
            $("div#serverName").text(server_from_name);
            $("div#serverMinQuantity").text(server_from_min_quantity);
            $("div#serverMaxQuantity").text(server_from_max_quantity);

            // change the quantity input ( min, max, val )
            quantity.attr('min', $(this).find("option:selected").data('min-quantity'));
            quantity.attr('max', $(this).find("option:selected").data('max-quantity'));
            quantity.val($(this).find("option:selected").data('min-quantity'));


            calculate();
        });


        // if quantity changed
        quantity.on('input', function() {

            calculate();

        });


        server_to.change(function() {
            // min quantity
            calculate();
        });



        // if user submit the quick contact form
        $("form#quick_contact").submit(function(e) {


            $.post($("#quick_contact").attr('action'), $("#quick_contact").serialize(), function(data) {
                if (data == true) {
                    $("#quick_contact .alert-danger").fadeOut(50);
                    $("#quick_contact .alert-success").fadeIn(500);
                    $("#quick_contact textarea").val('');
                } else {
                    $("#quick_contact .alert-success").fadeOut(50);
                    $("#quick_contact .alert-danger").fadeIn(500);

                }
            });

            e.preventDefault();

        });



    });
</script>

<x-footer />
